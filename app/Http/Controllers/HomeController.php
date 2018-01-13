<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Kategori;
use Auth;
use App\Transaction;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $category = Kategori::all();
        return view('home', compact('category'));
    }

    public function profile(){
        if((Auth::user()->role->name == 'Admin')){
            $transaction = Transaction::all();
            $index = 1;
            return view('Admin.adminhome', compact('transaction', 'index'));

        }
        else{
            $category = Kategori::all();
            return view('home', compact('category'));
        }
    }

    public function status()
    {
        $transaction = Auth::user()->transactions;
        $index = 1;
        return view('statusUser', compact('transaction', 'index'));
    }
}
