<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class GroceryListController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('index', compact('items'));
    }

    public function create()
    {
        return view('addItem');
    }

    public function store(Request $request)
    {
        $request->validate([
            'itemname' => 'required|max:200',
            'category' => 'required|max:100',
            'quantity' => 'required|integer',
        ]);

        Item::create($request->all());

        return redirect()->route('index')->with('success', 'Grocery item added successfully');
    }
}
