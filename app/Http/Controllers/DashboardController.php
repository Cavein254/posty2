<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->Middleware(['auth']);
    }
    public function index()
    {
        return view('dashboard');
    }
}
