<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->perPage == null ? 10 : $request->perPage;
    }

    public function store(Request $request)
    {
        //
    }
}
