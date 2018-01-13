<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Transaction;

use App\Komunitas;

use App\Kategori;

use Validator;

use Auth;

class adminController extends Controller
{
    public function home(){

        if(Auth::check()->role_id!=1){
            return redirect('/login');
        }
        
    	$transaction = Transaction::all();
    	$index = 1;
    	return view('Admin.adminhome', compact('transaction', 'index'));
    }

    public function accepted($transaction_id){
    	$transaction = Transaction::find($transaction_id);
    	$transaction->update([
    		'status' => 1
    	]);

    	$member = $transaction->komunitas->member;
    	$slot = $transaction->komunitas->slot;
    	$transaction->komunitas->update(['member' => $member + 1, 'slot' => $slot - 1]);
    	return redirect()->back();
    }

    public function rejected($transaction_id){
    	$transaction = Transaction::find($transaction_id);
    	$transaction->update([
    		'status' => 2
    	]);

    	return redirect()->back();
    }

    public function inputPage()
    {        
        $category = Kategori::all();
        return view('Admin.inputCommunity', compact('category'));
    }

    public function inputCommunity(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'image_path' => 'required|mimes:jpeg,jpg,png',
            'komunitas_name' => 'required',
            'kategori_list' => 'required',
            'description' => 'required',
            'location' => 'required',
            'member' => 'required|numeric|min:1',
            'slot' => 'required|numeric|min:1'
        ]);

        if($validator->fails()){
            return redirect('/inputPage')->withErrors($validator)->withInput($req->all());
        }

        $data = new Komunitas();
        $data->komunitas_name = $req->input('komunitas_name');
        $data->kategori_id = $req->input('kategori_list');
        $data->description = $req->input('description');
        $data->location = $req->input('location');
        $data->member = $req->input('member');
        $data->slot = $req->input('slot');

        $image = $req->file('image_path');
        $image_name = $image->getClientOriginalName();
        $image->move('image', $image_name);

        $data->image_path = '/image/'.$image_name;
        
        $data->save();
        return redirect('/admin/home');    
    }

    public function inputCategories(){
            return view('Admin.inputCategories');
    }

    public function inputKategorinya(Request $req)
    {
        $data = new Kategori();
        $data->kategori_name = $req->input('kategori_name');
        $data->save();
        return redirect('/admin/home');
    }
}
