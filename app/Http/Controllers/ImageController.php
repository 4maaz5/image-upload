<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table;
use Illuminate\Support\Facades\Schema;

class ImageController extends Controller
{
    public function display()
    {
        $student = Table::all();
        return view('welcome', ['student' => $student]);
    }

    public function index(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'number' => 'required',
            'image' => 'required'
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('images', $imageName, 'public');
            $imagePath = 'storage/images/' . $imageName;
        }
        $table=new Table();
        $table->name=$request->input('name');
        $table->number=$request->input('number');
        $table->image_path=$imagePath ?? null;
        $table->save();
        return redirect()->back()->with('success', 'Item added successfully.');
    }
    public function destroy(string $id)
    {
        $student = Table::destroy($id);
        return view('welcome');
    }
    public function show($id)
    {
        $find = Table::find($id);
        return view('view', ['find' => $find]);
    }
}
