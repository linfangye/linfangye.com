<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cost;

class CostsController extends Controller
{
    public function index()
    {
        $costs = Cost::all();

        return view('costs.index', compact('costs'));
    }

    public function show(Cost $cost)
    {
        return view('costs.show', compact('cost'));
    }
}
