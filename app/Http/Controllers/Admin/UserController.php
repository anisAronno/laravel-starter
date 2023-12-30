<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegistrationRequest;
use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:user.view')->only('index');
        $this->middleware('can:user.create')->only('create', 'store');
        $this->middleware('can:user.edit')->only('edit', 'update');
        $this->middleware('can:user.delete')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $users = User::with('roles')->orderBy('id', 'desc')
        ->when(! empty($request->search), function ($query) use ($request)
        {
            return $query->where('name', 'LIKE', '%'.$request->search.'%')
            ->orWhere('email', 'LIKE', '%'.$request->search.'%')
            ->orWhere('phone', 'LIKE', '%'.$request->search.'%');
        })
        ->paginate(10)
        ->withQueryString();

        return view('dashboard.user.index', [
            'users' => UserResource::collection($users),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegistrationRequest $request)
    {
        $user = User::create($request->only(
            'name',
            'email',
            'password',
            'phone',
            'status',
            'gender'
        ));

        if ($user) {
            event(new Registered($user));

            toast()->success('Wow', 'User Created Successfully!');

            return redirect()->route('admin.user.index');
        } else {
            toast()->error('Oops', 'Something went wrong!');

            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('dashboard.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('dashboard.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProfileUpdateRequest $request, string $id)
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        if ($request->user()->save()) {
            toast()->success('Wow', 'User Updated Successfully!');

            return redirect()->route('admin.user.index');
        }

        toast()->error('Oops', 'Something went wrong!');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        if ($user->delete()) {
            toast()->success('Wow', 'User Deleted Successfully!');

            return redirect()->back();
        } else {
            toast()->error('Oops', 'Something went wrong!');

            return redirect()->back();
        }
    }
}
