<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Books;


class BooksController extends Controller
{
    public function index(){
        $data=Books::all();
        return view('index', compact('data'));
    }

    public function back(){
        return redirect ('/');
    }

    public function create(){
        return view('create');
    }

    public function insert(Request $request){
        $data=new Books();
           $data->kd_buku=$request->get('kd_buku');
           $data->judul=$request->get('judul');
           $data->author=$request->get('author');
           $data->penerbit=$request->get('penerbit');
           $data->sipnosis=$request->get('sipnosis');
           $data->save();
        return redirect ('/');
    }

    public function delete($kd_buku){
        $data=Books::find($kd_buku);
           $data->delete();
           return back();
    }

    public function edit($kd_buku){
        $data=Books::find($kd_buku);
        $data->save();
        return view('edit',compact('data'));
    }

    public function update(Request $request, $kd_buku){     
        $data = Books::findOrFail($kd_buku);
           $data->judul=$request->get('judul');
           $data->author=$request->get('author');
           $data->penerbit=$request->get('penerbit');
           $data->sipnosis=$request->get('sipnosis');
           $data->save();
        return redirect ('/')->with('alert-success','Data berhasil Diubah.');
    }

    public function read($kd_buku){
        $data=Books::find($kd_buku);
        return view('read',compact('data'));
       }
}

