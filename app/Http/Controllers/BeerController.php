<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\beer;

class BeerController extends Controller
{
    public function create() {
        return view('/beers/create');
    }

    public function store(Request $request) {
        Beer::create($request->validate([
            'name' => ['required', 'min:3', 'max:20'],
            'brewery' => ['required', 'min:5', 'max:25'],
            'ABV' => ['required'],
            'image_url' => []
        ]));


        return redirect(route('beers.store'));
    }

    public function show(Beer $beer)
    {
        return view('/show', ['beer' => $beer]);
    }

    public function index()
    {
        $beers = Beer::latest()->get();

        return view('/beers/index', ['beers' => $beers]);
    }

    public function edit(Beer $beer) {
        return view('/beers/edit', ['beer' => $beer]);
    }

    public function update(Beer $beer, Request $request) {
        $beer->update($request->validate([
            'name' => ['required', 'min:3', 'max:20'],
            'brewery' => ['required', 'min:5', 'max:25'],
            'ABV' => ['required'],
            'image_url' => []
        ]));

        return redirect(route('beers.index', $beer));
    }

    public function destroy(Beer $beer) {
        $beer->delete();

        return redirect(route('beers.index', $beer));
    }
}
