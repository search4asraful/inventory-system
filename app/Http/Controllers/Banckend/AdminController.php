<?php

namespace App\Http\Controllers\Banckend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminLoginFormShow()
    {
        return view('auth.login');
    }
}
