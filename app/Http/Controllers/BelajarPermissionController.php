<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BelajarPermissionController extends Controller
{
    // public function index(...$permissions)
    // {
    //     $messages = [
    //         'view-users' => 'Kamu bisa melihat indonesia',
    //         'edit-users' => 'Kamu bisa merubah indonesia',
    //         'assign-roles' => 'Kamu bisa membangun Indonesia',
    //         'manage-permission' => 'Kamu bisa memimpin Indonesia',
    //     ];

    //     $message = '';
    //     foreach ($permissions as $permission) {
    //         $message .= $messages[$permission] ?? 'Tidak ada izin';
    //         $message .= ' ';
    //     }

    //     return view('about', compact('message'));
    // }

    public function index(...$permissions)
    {
        $messages = [
            'view-users' => 'Kamu bisa melihat indonesia',
            'edit-users' => 'Kamu bisa merubah indonesia',
            'assign-roles' => 'Kamu bisa membangun Indonesia',
            'manage-permissions' => 'Kamu bisa memimpin Indonesia',
        ];

        $message = '';
        foreach ($permissions as $permission) {
            if (Auth::user()->hasPermissionTo($permission)) {
                $message .= $messages[$permission] ?? 'Tidak ada izin';
                $message .= ' ';
            }
        }

        return view('about', compact('message'));
    }
}
