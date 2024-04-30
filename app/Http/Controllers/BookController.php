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

    public function create()
    {
        $newBooksArray = [
            [
                'title' => 'Dump Title',
                'author' => 'John Dump',
                'size' => 100,
                'is_in_stock' => false,
            ],
            [
                'title' => 'Dump Title 2',
                'author' => 'John Dump',
                'size' => 20,
                'is_in_stock' => true,
            ]
        ];

        Book::insert($newBooksArray);

        dd('created');
    }

    public function update()
    {
        $book = Book::find(2);

        $book->update([
            'title' => 'Dump Title Update',
            'author' => 'John Dump',
            'size' => 101,
        ]);

        dd('updated');
    }

    public function delete()
    {
        $book = Book::find(2);
        $book->delete();

        dd('deleted');
    }


    public function restore()
    {
        $book = Book::withTrashed() -> find(2);
        $book->restore();

        dd('restored');
    }
}
