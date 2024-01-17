<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NotificationController extends Controller
{
    public function index() : View
    {
       $notifications = auth()
            ->user()
            ->notifications;
        return view('dashboard.notification/index', compact('notifications'));
    }

    public function markNotification(Request $request)
    {
        auth()
            ->user()
            ->unreadNotifications
            ->when($request->input('id'), function ($query) use ($request)
            {
                return $query->where('id', $request->input('id'));
            })
            ->markAsRead();

        return back();
    }
}
