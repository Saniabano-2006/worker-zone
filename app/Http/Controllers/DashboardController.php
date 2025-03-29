<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class DashboardController extends Controller
{
    public function services(Request $request)
    {
        $user = $request->user();
        $role = $user->roles()->first();

        $links = [];

        if ($role->name == 'admin') {
            $links[] = ['name' => 'Add Services','icon'=>'fe fe-plus', 'url' => route('add.services')];
            $links[] = ['name' => 'Update Services','icon'=>'fe fe-edit', 'url' => route('update.services')];
            $links[] = ['name' => 'View Services','icon'=>'fe fe-eye', 'url' => route('view.services')];
            $links[] = ['name' => 'Delete Services','icon'=>'fe fe-trash', 'url' => route('delete.services')];

           
        } elseif ($role->name == 'worker') {
            $links[] = ['name' => 'View Services','icon'=>'fe fe-home', 'url' => route('view.services')];
        } elseif ($role->name == 'client') {
            $links[] = ['name' => 'View Services','icon'=>'fe fe-home', 'url' => route('view.services')];
        }

        return view('layouts.DashboardLayout', compact('links'));
    }

    }

















