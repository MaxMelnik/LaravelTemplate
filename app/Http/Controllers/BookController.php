<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $book = Book::find(1);
        dump($book->title);
        dump($book->author);
        dump($book->size);
        dump($book->is_in_stock);
    }
}
