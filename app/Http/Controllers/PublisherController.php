<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;


class PublisherController extends Controller
{
    public function index()
    {
        $publishers = Publisher::all();
        // dd($publishers);
        return view('pages.publishers.index')
            ->with('publishers', $publishers);
    }

    public function create()
    {
        return view('pages.publishers.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $publisher = new Publisher();
        $publisher->title = $request->title;
        $publisher->address = $request->address;
        $publisher->save();
        return redirect()->route('publishers.index');
    }

    public function show(Publisher $publisher)
    {
        return view('pages.publishers.show')
            ->with('publisher', $publisher);
    }

    public function edit(Publisher $publisher)
    {
        return view('pages.publishers.edit')
            ->with('publisher', $publisher);
    }

    public function update(Publisher $publisher, Request $request)
    {
        $publisher->title = $request->title;
        $publisher->address = $request->address;
        $publisher->save();
        return redirect()->route('publishers.index');
    }

    public function destroy(Publisher $publisher)
    {
        $publisher->delete();
        return redirect()->route('publishers.index');
    }
}
