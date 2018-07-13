<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class FormController extends Controller
{
    public function form()
    {
    	return view('form');
    }

    public function viewTest()
    {
    	return view('test');
    }

    public function submitForm(Request $request)
    {
		$book = new Book;      
        $book->book_name = $request->input('book_name');
        $book->book_isbn = $request->input('book_isbn');
        $book->book_author = $request->input('book_author');
        $book->save();    	
        return back();
    }
}
