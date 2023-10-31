<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use PDF;

class InventoryController extends Controller
{
    //
    public function index()
    {
        $inventory = Inventory::all();
        return view('inventory.inventory', compact('inventory'));
    }
    public function create()
    {
        return view('inventory.inventory-entry');
    }

    //insert data ke database
    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_bahan' => 'required|min:2',
            'nama_bahan' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
            'perusahaan' => 'required'
          
        ]);
       

         Inventory::create([
            'kode_bahan' => $request->kode_bahan,
            'nama_bahan' => $request->nama_bahan,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'perusahaan' => $request->perusahaan
            
        ]);

        return redirect('/inventory')->with('status', 'Bahan Baku berhasil ditambahkan!');
    }
    //edit  database
    public function edit($id_bahan)
    {
        $inventory = Inventory::find($id_bahan);
        return view('inventory.inventory-edit', compact('inventory'));
    }

    public function update(Request $request, $id_bahan)
    {
        $this->validate($request, [
            'kode_bahan' => 'required|min:2',
            'nama_bahan' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
            'perusahaan' => 'required'
          
        ]);

        $inventory = Inventory::find($id_bahan);

        $inventory->update([
            'kode_bahan' => $request->kode_bahan,
            'nama_bahan' => $request->nama_bahan,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'perusahaan' => $request->perusahaan
           
        ]);

        return redirect('/inventory')->with('status', 'Bahan Baku  berhasil di edit!');
    }
    //delete sementara
    public function trash()
    {
        $inventory = Inventory::onlyTrashed ()->get();
        return view('inventory.inventory-trash', compact('inventory'));
    }
    public function restore($id_bahan = null)
    {
        if($id_bahan != null) {
            $id_bahan = Inventory::onlyTrashed ()
            ->where('id_bahan', $id_bahan)
            ->restore();
        } else {
            $id_bahan = Inventory::onlyTrashed ()->restore();
        }
        return redirect('/inventory/trash')->with('status', 'Bahan Baku  berhasil di restore!');
    }
    //delete  database

    public function delete($id_bahan)
    {
        $inventory = Inventory::find($id_bahan);
        return view('inventory.inventory-delete', compact('inventory'));
    }

    public function destroy($id_bahan)
    {
        $inventory = Inventory::find($id_bahan);
        $inventory->delete();
        return redirect('/inventory')->with('status', 'Bahan Baku  berhasil di hapus!');
    }
    //delete all
    public function deleteall($id_bahan = null)
    {
        if($id_bahan != null) {
            $id_bahan = Inventory::onlyTrashed ()
            ->where('id_bahan', $id_bahan)
            ->forceDelete();
        } else {
            $id_bahan = Inventory::onlyTrashed ()->forceDelete();
        }
        return redirect('/inventory/trash')->with('status', 'Bahan Baku  berhasil di hapus permanen!');
    }
    //cetak
    public function cetak()
    {
        $inventory = Inventory::all();
        // return view ('dosen.cetak-pdf',compact('dosen'));
        $pdf = PDF::loadview('inventory.cetak', ['inventory' => $inventory])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('Bahanbaku.pdf');
    }
}
