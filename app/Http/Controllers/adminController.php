<?php

namespace App\Http\Controllers;

use App\Models\tbbeli;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class adminController extends Controller
{
    public function index()
    {
        $data = tbbeli::all();
        //$data = DB::$table('tbbeli')->get();
        return view('template/admin', compact('data'));
    }

    public function tambah()
    {
        return view('template/tambah');
    }
    public function insertdata(Request $req)
    {
        //dd($req->all());
        tbbeli::create($req->all());
        return redirect()->route('belibarang')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function edit($id)
    {
        $data = tbbeli::find($id);
        //dd($data);
        return view('template/edit', compact('data'));
    }
    public function updatedata(Request $request, $id)
    {
        $data = tbbeli::findOrFail($id);
        $data->update($request->all());
        return redirect()->route('belibarang')->with('success', 'Data Berhasil Di Edit');
    }
}
