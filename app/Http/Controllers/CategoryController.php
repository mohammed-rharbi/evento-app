<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\event;
use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $categories = category::all();

        return view('admin.categories', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

    //     $existingCategory = Category::where('name', $validatedData['name'])->first();
    // if ($existingCategory) {
    //     return redirect()->back()->with('error', 'Category with the same name already exists!');
    // }

        $category = new category();
        $category->name = $validatedData['name'];

        $category->save();

        return redirect()->route('category.index')->with('success', 'Category created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $category = category::findOrFail($id);
        return view('admin.edite_category', compact('category'));
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = category::findOrFail($id);
        $category->update($validatedData);
    
        return redirect()->route('category.index')->with('success', 'Event updated successfully!');

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = category::findOrFail($id);
        $category->delete();

        return redirect()->route('category.index')->with('success' ,'category has ben deleted successfully');
    }
}
