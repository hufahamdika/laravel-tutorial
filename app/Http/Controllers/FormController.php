<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class FormController extends Controller
{
    public function input()
    {
        return view('input');
    }
 
    public function proses(Request $request)
    {
        $this->validate($request,[
           'nama' => 'required|min:5|max:100',
           'pekerjaan' => 'required',
           'usia' => 'required|numeric'
        ]);
 		
        return view('proses',['data' => $request]);

        $messagesError = [
            'required' => ':attribute ini wajib diisi!!',
            'min' => ':attribute harus diisi minimal :min karakter!!!',
            'max' => ':attribute harus diisi maksimal :max karakter!!!',
        ];
        
        $this->validate($request,[
            'nama' => 'required|min:5|max:100',
            'pekerjaan' => 'required',
            'usia' => 'required|numeric'
        ],$messagesError);
    }
}


