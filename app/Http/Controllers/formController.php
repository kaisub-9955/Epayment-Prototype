<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\pesan;
use GuzzleHttp\Client;


class formController extends Controller
{
    public function guzl()
    {
        $client = new Client([
            'base_uri'=> 'http://localhost:8000',
            'timeout' => 2.0,
        ]);
        
        $response = $client -> request('GET','/');
        
        $body = $response -> getBody()->getContents();
        
        print_r($body); 
    }
    public function index()
    {
        return view('index');
    }

    public function input()
    {
        return view('input');
        $input = new pesanan;
        $input->nama = $request->nama;
        $input->makan = $request->makan;
        $input->total = $request->total;
        $input->save();
        
    }
    public function proses(Request $request)
    {
        $messages = [
            'required' => ':attribute Wajib Diisi!',
            'min' => ':attribute harus diisi minimal :min karakter !',
            'max' => ':attribute harus diisi maksimal :max karakter !',
        ];
        $this->validate($request,[
            'nama' => 'required|min:5|max:20',
            'nim' => 'required|numeric',
            'makan' =>'min:4',
            'total' => 'required|numeric'
        ],$messages);

         return view('proses',['data' => $request]);
    }
}
