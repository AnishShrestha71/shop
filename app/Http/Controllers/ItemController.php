<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function show()
    {
        return view('item.add');
    }
    public function insert(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'quantity' => 'required',
            'price' => 'required | integer'
        ]);
        $insert = Item::create([
            'name' => $request->name,
            'quantity' => $request->quantity,
            'price' => $request->price
        ]);

        if ($insert) {
            return redirect()->route('home')->with('success', 'Item has been added ');
        } else {

            return redirect()->route('home')->with('error', 'Something went wrong while adding item ');
        }
    }
    public function edit(Item $item)
    {
        return view('item.edit-item', [
            'item' => $item
        ]);
    }

    public function update(Item $item, Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'quantity' => 'required',
            'price' => 'required | integer'
        ]);
        $item->update([
            'name' => $request->name,
            'quantity' => $request->quantity,
            'price' => $request->price
        ]);
        return redirect()->route('home');
    }
    public function delete(Item $item)
    {
        $item->delete();
        return redirect()->route('home');

    }
}
