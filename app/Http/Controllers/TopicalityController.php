<?php

namespace App\Http\Controllers;

use App\Http\Requests\Topicality\StoreTopicalityRequest;
use App\Http\Requests\Topicality\UpdateTopicalityRequest;
use App\Models\Topicality;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class TopicalityController extends Controller
{
    public function index()
    {
        return Inertia::render('Topicality/Index', [
            'topicalities' => Topicality::with('user')->get()
        ]);
    }

    public function create()
    {
        return Inertia::render('Topicality/Create');
    }

    public function store(StoreTopicalityRequest $request)
    {
        Topicality::create([
            'content' => $request->input('content'),
            'user_id' => Auth::user()->id
        ]);

        return redirect()->route('topicalities.index')->with('success', 'Actualité créée.');
    }

    public function edit(Topicality $topicality)
    {
        return Inertia::render('Topicality/Edit', [
            'topicality' => $topicality
        ]);
    }

    public function update(UpdateTopicalityRequest $request, Topicality $topicality)
    {
        $topicality->update([
            'content' => $request->input('content')
        ]);

        return redirect()->route('topicalities.index')->with('success', 'Actualité modifiée.');
    }

    public function destroy(Topicality $topicality)
    {
        $topicality->delete();

        return redirect()->route('topicalities.index')->with('success', 'Actualité supprimée.');
    }
}
