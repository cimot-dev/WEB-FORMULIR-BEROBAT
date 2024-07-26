<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $users = DB::table('pasien')->get();
     
        return view ('dashboard', ['pasien' => $users]);
    }
}
