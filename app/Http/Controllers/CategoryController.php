<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\StoreCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use App\Models\Category;
use Inertia\Inertia;

class CategoryController extends Controller
{
    public function index()
    {
        return Inertia::render('Category/Index', [
            'categories' => Category::all()
        ]);
    }

    public function create()
    {
        return Inertia::render('Category/Create');
    }

    public function store(StoreCategoryRequest $request)
    {
        Category::create([
            'name' => ucfirst($request->name)
        ]);

        return redirect()->route('categories.index')->with('success', 'Catégorie créée.');
    }

    public function edit(Category $category)
    {
        return Inertia::render('Category/Edit', [
            'category' => $category
        ]);
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->update([
            'name' => ucfirst($request->name)
        ]);

        return redirect()->route('categories.index')->with('success', 'Catégorie modifiée.');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Catégorie supprimée.');
    }
}
