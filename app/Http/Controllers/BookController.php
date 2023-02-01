<?php

namespace App\Http\Controller;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BookController extends Controller
{
    public function index()
    {
        $books = book::all();
        return view('books.index', compact('books'));
    }
    public function show($id)
    {
        $book = Book::findOrfail($id);
        return view('books.show', compact('book'));
    }
}