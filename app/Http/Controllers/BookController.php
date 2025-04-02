<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book; // Assuming you have a Book model



class BookController extends Controller
{
    public function index()
    {
        // Fetch all books from the database
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'isbn' => 'required|string|unique:books,isbn|max:13',
        ]);

        // Create a new book record in the database
        Book::create($request->all());

        return redirect()->route('books.index')->with('success', 'Book added successfully!');
    }
    public function show($id)
    {
        // Fetch a single book by its ID
        $book = Book::findOrFail($id);
        return view('books.show', compact('book'));
    }
}
