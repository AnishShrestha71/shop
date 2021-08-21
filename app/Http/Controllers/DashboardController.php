<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // $items = Item::all();
        return view('home', []);
    }
    public function autocomplete(Request $request)
    {
        $data = Item::where('name', 'LIKE', '%' . $request->terms . '%')
            ->select('name')
            ->distinct()
            ->get();

        return response()->json($data);
    }
}
