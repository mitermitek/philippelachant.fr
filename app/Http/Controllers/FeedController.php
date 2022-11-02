<?php

namespace App\Http\Controllers;

use App\Models\Topicality;
use Inertia\Inertia;

class FeedController extends Controller
{
    public function index()
    {
        return Inertia::render('Feed', [
            'posts' => Topicality::with('user')->orderByDesc('created_at')->get()
        ]);
    }
}
