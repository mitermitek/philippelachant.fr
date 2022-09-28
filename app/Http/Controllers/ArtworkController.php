<?php

namespace App\Http\Controllers;

use App\Http\Requests\Artwork\StoreArtworkRequest;
use App\Http\Requests\Artwork\UpdateArtworkRequest;
use App\Models\Artwork;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Inertia\Inertia;

class ArtworkController extends Controller
{
    public function index()
    {
        return Inertia::render('Artwork/Index', [
            'artworks' => Artwork::with('category')->get()
        ]);
    }

    public function create()
    {
        return Inertia::render('Artwork/Create', [
            'categories' => Category::all()
        ]);
    }

    public function store(StoreArtworkRequest $request)
    {
        $image = $request->file('image');
        $imageName = Str::slug(strtolower($request->name));
        $imageExtension = $image->getClientOriginalExtension();
        $path = $request->file('image')->storeAs('images/oeuvres', $imageName . '.' . $imageExtension, [
            'disk' => 'public'
        ]);

        Artwork::create([
            'name' => ucfirst($request->name),
            'image_path' => $path,
            'category_id' => $request->category
        ]);

        return redirect()->route('artworks.index')->with('success', 'Oeuvre créée.');
    }

    public function edit(Artwork $artwork)
    {
        return Inertia::render('Artwork/Edit', [
            'categories' => Category::all(),
            'artwork' => $artwork
        ]);
    }

    public function update(UpdateArtworkRequest $request, Artwork $artwork)
    {
        $artwork->update([
            'name' => ucfirst($request->name),
            'category_id' => $request->category
        ]);

        $image = $request->file('image');

        if ($image) {
            Storage::disk('public')->delete($request->old_image);

            $imageName = Str::slug(strtolower($request->name));
            $imageExtension = $image->getClientOriginalExtension();
            $path = $request->file('image')->storeAs('images/oeuvres', $imageName . '.' . $imageExtension, [
                'disk' => 'public'
            ]);

            $artwork->update(['image_path' => $path]);
        }

        return redirect()->route('artworks.index')->with('success', 'Oeuvre modifiée.');
    }

    public function destroy(Artwork $artwork)
    {
        Storage::disk('public')->delete($artwork->image_path);
        $artwork->delete();

        return redirect()->route('artworks.index')->with('success', 'Oeuvre supprimée.');
    }
}
