<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
{
    $books = Book::all();
    return view('books.index', compact('books'));
}

public function create()
{
    return view('books.create');
}

public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'author' => 'required',
        'release' => 'required',
        'gender' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
    ]);
    $imageName = time().'.'.$request->image->extension();
    $request->image->move(public_path('images'), $imageName);
    $book = new Book();
    $book->title = $request->title;
    $book->author = $request->author;
    $book->release = $request->release;
    $book->gender = $request->gender;
    $book->image = 'images/'.$imageName;
    $book->save();
    return redirect('books')->with('success', 'Book created successfully.');
}

public function edit($id)
{
    $book = Book::findOrFail($id);
    return view('books.edit', compact('book'));
}

public function update(Request $request, $id)
{
    $book = Book::findOrFail($id);
    $book->update($request->all());
    return redirect('books')->with('success', 'Book updated successfully.');
}

public function destroy($id)
{
    $book = Book::findOrFail($id);
    $book->delete();
    return redirect('books')->with('success', 'Book deleted successfully.');
}

}
