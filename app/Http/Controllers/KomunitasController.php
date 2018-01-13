<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Komunitas;

use App\Transaction;

use Auth;

class KomunitasController extends Controller
{
    public function details($komunitas_id){
    	$komunitas = Komunitas::find($komunitas_id);
    	return view('communityDetails',compact('komunitas'));
    }

    public function joinMember(){
    	return view('joinMember');
    }

    public function transaction($komunitas_id){
    	$trans = new Transaction();
    	$trans->user_id = Auth::user()->id;
    	$trans->komunitas_id = $komunitas_id;
    	$trans->tanggal = date("Y-m-d");
    	$trans->status = 0;
        $trans->save();
        return redirect('/statusUser');
    }
}

