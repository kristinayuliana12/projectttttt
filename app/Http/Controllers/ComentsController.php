<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\coment;

class ComentsController extends Controller
{
    public function index(){
        $komentars = coment::all();
        return view('profil', ['komentarses' => $komentars]);
    }

    public function kontak(){
        return view('contact');
    }

    public function prosesForm(Request $request){        
        $coments = new coment();
        $coments->nama = $request['email'];
        $coments->coment = $request['message'];
        $coments->save();

        $komentars = coment::all();
        return view('profil', ['komentarses' => $komentars]);
    }
}
