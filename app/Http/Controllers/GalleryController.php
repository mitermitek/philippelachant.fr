<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use Inertia\Inertia;

class GalleryController extends Controller
{
    public function index()
    {
        return Inertia::render('Gallery', [
            'artworks' => Artwork::with('category')->get()
        ]);
    }
}
