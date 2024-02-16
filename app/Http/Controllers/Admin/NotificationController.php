<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NotificationController extends Controller
{
    public function index(Request $request): View
    {
        $notifications = $request
            ->user()
            ->notifications()
            ->orderBy('id', 'desc')
            ->when(! empty($request->search), function ($query) use ($request)
            {
                return $query->where('data', 'LIKE', '%'.$request->search.'%');
            })
            ->paginate(10)
            ->withQueryString();

        return view('dashboard.notification/index', compact('notifications'));
    }

    public function show($id): View
    {
        $notification = auth()
            ->user()
            ->notifications->where('id', $id)
            ->first();

        $notification->markAsRead();

        return view('dashboard.notification/show', compact('notification'));
    }

    public function markNotification(Request $request)
    {
        auth()
            ->user()
            ->unreadNotifications->when($request->input('id'), function ($query) use ($request)
            {
                return $query->where('id', $request->input('id'));
            })
            ->markAsRead();

        return back();
    }
}
