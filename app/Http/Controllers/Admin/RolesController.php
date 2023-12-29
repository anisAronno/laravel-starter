<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Role\RoleStoreRequest;
use App\Http\Requests\Role\RoleUpdateRequest;
use App\Http\Resources\RoleResource;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesController extends Controller
{
    /**
     * Constructor to check middleware permissions.
     */
    public function __construct()
    {
        $this->middleware('can:role.view')->only('index');
        $this->middleware('can:role.create')->only('create', 'store');
        $this->middleware('can:role.edit')->only('edit', 'update');
        $this->middleware('can:role.delete')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $roles = Role::with('permissions')->orderBy('id', 'desc')->when(! empty($request->search), function ($query) use ($request)
        {
            return $query->where('name', 'LIKE', '%'.$request->search.'%');
        })->paginate(5)->withQueryString();

        return view('dashboard.roles.index', [
            'roles' => RoleResource::collection($roles),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $all_permissions   = Permission::all();
        $permission_groups = User::getpermissionGroups();

        return view('dashboard.roles.create', compact('all_permissions', 'permission_groups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(RoleStoreRequest $request)
    {
        $role        = Role::create(['name' => $request->name]);
        $permissions = $request->input('permissions');

        if (! empty($permissions)) {
            $role->syncPermissions($permissions);
        }

        toast()->success('Best wishes', 'Role has been created successfully.');

        return redirect()->route('admin.roles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show(Role $role)
    {
        $role->load('permissions');
        $transformedPermissions = $this->transformPermissions($role->permissions);

        $result = [
            'id'          => $role->id,
            'name'        => $role->name,
            'permissions' => $transformedPermissions,
        ];
        $resultAsObject = json_decode(json_encode($result));

        return view('dashboard.roles.view', ['role' => $resultAsObject]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit(Role $role)
    {
        $all_permissions   = Permission::all();
        $permission_groups = User::getpermissionGroups();

        return view('dashboard.roles.edit', compact('role', 'all_permissions', 'permission_groups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(RoleUpdateRequest $request, Role $role)
    {
        if ($role->id == 1) {
            toast()->warning('Unauthorize', 'Role is not editable.');

            return back();
        }

        $permissions = $request->input('permissions');

        if (! empty($permissions)) {
            $role->name = $request->name;
            $role->save();
            $role->syncPermissions($permissions);
        }

        toast()->success('Best wishes', 'Role has been updated successfully.');

        return redirect()->route('admin.roles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Role $role)
    {
        if (in_array($role->id, [1, 2])) {
            toast()->warning('Unauthorize', 'Role is not deletable.');

            return back();
        }

        if ($role->delete()) {
            toast()->success('Best wishes', 'Role has been deleted successfully.');

            return back();
        } else {
            toast()->error('Unauthorize', 'Delete Failed.');

            return back();
        }
    }

    /**
     * Transform permission.
     *
     * @param [type] $permissions
     */
    private function transformPermissions(Collection $permissions): array
    {
        $transformedData = [];

        foreach ($permissions as $permission) {
            $groupName      = $permission->group_name;
            $permissionName = $permission->name;

            if (! isset($transformedData[$groupName])) {
                $transformedData[$groupName] = [
                    'group_name'        => $groupName,
                    'havingPermissions' => [],
                ];
            }

            $transformedData[$groupName]['havingPermissions'][] = ['name' => $permissionName];
        }

        $transformedData = array_values($transformedData);

        return $transformedData;
    }
}
