<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class BaseManagerController extends Controller
{
    public function __construct()
    {
        // View::share('app', 'admin');
    }
}
