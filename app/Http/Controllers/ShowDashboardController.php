<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ShowDashboardController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('Dashboard', [
           'title' => 'Dashboard',
        ]);
    }
}
