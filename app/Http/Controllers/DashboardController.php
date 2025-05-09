<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function index(){
    return view('dashboard.index');
  }
  
}
