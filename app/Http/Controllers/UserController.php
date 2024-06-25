<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class UserController extends Controller
{
    public function checkUserType(Request $request)
{
    $type = $request->input('type');

    if ($type === 'donatur') {
        if (Auth::check() && Auth::user()->donatur) {
            return redirect('/Home-Donatur');
        } else {
            return redirect('/Donatur');
        }
    } elseif ($type === 'penerima') {
        if (Auth::check() && Auth::user()->penerima) {
            return redirect('/Home-Penerima');
        } else {
            return redirect('/Penerima');
        }
    } else {
        // Handle error case or redirect to home page
        return redirect('/');
    }
}

}
