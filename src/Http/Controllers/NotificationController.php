<?php

namespace LeandroGrando\NotificationCenter\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use LeandroGrando\NotificationCenter\Models\Notification;

class NotificationController extends Controller
{
    public function count() {
        return Auth::user()->database_notifications()->where('read', 1)->count();
    }

    public function readAll() {
        Auth::user()->database_notifications()->update(['read' => 0]);
    }

    public function markAsRead($notification) {
        Auth::user()->database_notifications()->where('id', $notification)->update(['read' => 0]);
    }

    public function index() {
        return Auth::user()->database_notifications()->orderBy('id', 'desc')->get();
    }

    public function store(Request $req) {
        Notification::create($req->all());
        return redirect()->back();
    }
}
