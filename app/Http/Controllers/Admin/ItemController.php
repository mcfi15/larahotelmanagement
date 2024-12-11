<?php

namespace App\Http\Controllers\Admin;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ItemFormRequest;

class ItemController extends Controller
{
    public function index(){
        $items = Item::latest()->paginate(10);
        return view('admin.item.index', compact('items'));    
    }

    public function create(){
        return view('admin.item.create');    
    }

    public function store(ItemFormRequest $request){
        $validatedData = $request->validated();
        $item = new Item;

        $item->name = $validatedData['name'];
        $item->price = $validatedData['price'];
        $item->details = $validatedData['details'];
        $item->status = $validatedData['status'];
        
        $item->save();

        return redirect('admin/items')->with('message', 'Item added successfully');
    }

    public function edit(Item $item){
        return view('admin.item.edit', compact('item'));
    }

    public function update(ItemFormRequest $request, int $item_id){
        $validatedData = $request->validated();

        $item = Item::findOrFail($item_id);

        $item->name = $validatedData['name'];
        $item->price = $validatedData['price'];
        $item->details = $validatedData['details'];
        $item->status = $validatedData['status'];

        $item->update();

        return redirect('admin/items')->with('message', 'Item updated successfully');

    }

    public function destroy(int $item_id){
        $item = Item::findOrFail($item_id);
        
        $item->delete();
        return redirect('admin/items')->with('message', 'Item deleted successfully'); 
    }

}
