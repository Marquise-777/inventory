<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemsRequest;
use App\Models\Category;
use App\Models\items;
use Illuminate\Http\Request;
use  RealRashid\SweetAlert\Facades\Alert;

class ItemsController extends Controller
{

    public function index()
    {
        $iPro = items::orderBy('id', 'asc')->get();
        return view('items', compact('iPro'));
    }


    public function create()
    {
        $category = Category::get();
        return view('add', compact('category'));
    }


    public function store(ItemsRequest $request)
    {

        $data = new items();
        $data->title = $request->title;
        $data->desc = $request->desc;
        $data->unit = $request->unit;
        $data->category_id = $request->category_id;
        $data->price = $request->price;

        $data->save();
        Alert::success('Product Added Successfully');
        return redirect('/items')->with('success', 'Added Successfully');
    }


    public function show($id)
    {
        $data = items::findOrFail($id);
        $category = Category::get();
        return view('edit', compact('data', 'category'));
    }


    public function display($id)
    {
        dd('This is display product');
    }


    public function update(ItemsRequest $request, $id)
    {
        $data = items::findOrfail($id);

        $data->title = $request->title;
        $data->desc = $request->desc;
        $data->unit = $request->unit;
        $data->category_id = $request->category_id;
        $data->price = $request->price;

        $data->save();
        Alert::success('Product Updated Successfully');

        return redirect('/items')->with('success', 'Updated Successfully');
    }

    public function destroy($id)
    {
        items::destroy($id);
        Alert::success('Product Deleted Successfully');

        return redirect('/items')->with('success', 'Deleted Successfully');
    }
}
