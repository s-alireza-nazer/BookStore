<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;


class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        // dd($authors);
        return view('pages.authors.index')
            ->with('authors', $authors);
    }

    public function create()
    {
        return view('pages.authors.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $author = new Author();
        $author->name = $request->name;
        $author->family = $request->family;
        $author->save();
        return redirect()->route('authors.index');
    }

    public function show(Author $author)
    {
        return view('pages.authors.show')
            ->with('author', $author);
    }

    public function edit(Author $author)
    {
        return view('pages.authors.edit')
            ->with('author', $author);
    }

    public function update(Author $author, Request $request)
    {
        $author->name = $request->name;
        $author->family = $request->family;
        $author->save();
        return redirect()->route('authors.index');
    }

    public function destroy(Author $author)
    {
        $author->delete();
        return redirect()->route('authors.index');
    }
}