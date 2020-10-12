<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function index()
    {
        $items = Item::all();
        return view('item/index', ['items' => $items]);
    }
}
