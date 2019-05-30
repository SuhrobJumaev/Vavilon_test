<?php

namespace App\Http\Controllers\Admin;

use App\Author;
use App\Book;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //Index page
    public function dashboard(){
        return view('admin.dashboard',[
            'count_books' => Book::count(),
            'count_users' => User::count(),
            'authors' => Author::LastAuthors(5),
            'books' => Book::LastBooks(5),

        ]);
    }
}
