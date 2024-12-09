<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Barang;
use App\Models\Satuan;

class BarangController extends Controller
{

    public function index()
    {
        $pageTitle = 'Daftar Barang';
        // ELOQUENT
        $barangs = Barang::all();
        return view('barang.index', [
            'pageTitle' => $pageTitle,
            'barangs' => $barangs
        ]);
    }
    public function create()
    {
        $pageTitle = 'Input Barang';
        // ELOQUENT
        $satuans = Satuan::all();
        return view('barang.create', compact('pageTitle', 'satuans'));
    }
    public function store(Request $request)
    {
        $messages = [
            'required' => 'Attribute harus diisi.',
            'numeric' => 'Isi attribute dengan angka',
        ];
        $validator = Validator::make($request->all(), [
            'code' => 'required',
            'name' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
        ], $messages);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        // ELOQUENT
        $barang = new Barang;
        $barang->code = $request->code;
        $barang->name = $request->name;
        $barang->harga = $request->harga;
        $barang->deskripsi = $request->deskripsi;
        $barang->satuan_id = $request->satuan;
        $barang->save();
        return redirect()->route('barangs.index');
    }
    public function show(string $id)
    {
        $pageTitle = 'Detail Barang';

        // ELOQUENT
        $barang = Barang::find($id);
        return view('barang.show', compact('pageTitle', 'barang'));
    }
    public function edit(string $id)
    {

        $pageTitle = 'Edit Barang';
        // ELOQUENT
        $satuans = Satuan::all();
        $barang = Barang::find($id);
        return view('barang.edit', compact(
            'pageTitle',
            'satuans',
            'barang'
        ));
    }
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => 'Attribute harus diisi.',
            'code' => 'Isi attribute dengan format yang benar',
            'numeric' => 'Isi attribute dengan angka'
        ];
        $validator = Validator::make($request->all(), [
            'code' => 'required',
            'name' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
        ], $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // ELOQUENT
        $barang = Barang::find($id);
        $barang->code = $request->code;
        $barang->name = $request->name;
        $barang->harga = $request->harga;
        $barang->deskripsi = $request->deskripsi;
        $barang->satuan_id = $request->satuan;
        $barang->save();
        return redirect()->route('barangs.index');

    }
    public function destroy(string $id)
    {
        // ELOQUENT
        Barang::find($id)->delete();
        return redirect()->route('barangs.index');
    }
}
