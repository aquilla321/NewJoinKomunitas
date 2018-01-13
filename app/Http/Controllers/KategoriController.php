<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Kategori;
use App\Komunitas;

class KategoriController extends Controller
{
    public function index()
    {
        $category = Kategori::all();
        return view('welcome');
    }

	public function homeBeneran()
    {
        $category = Kategori::all();
        return view('home', compact('category'));
    }

	public function searchKomunitas(Request $request)
    {
        $komunitas = Kategori::find($request->kategori_list)->komunitas;
        return view('communityList', compact('komunitas'));
    }
            
}
