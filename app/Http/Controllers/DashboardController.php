<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    // function invoke
    public function __invoke()
    {
        $data = [
            'title'   => 'Dashboard',
        ];
        return view('dashboard', $data);
    }
}
