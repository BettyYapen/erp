<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manufacture;
use App\Models\Inventory;
use Illuminate\Support\Facades\Log;
use PDF;

class ManufactureController extends Controller
{
    //
    public function index()
    {
        $produksi = Manufacture::all();
        // $produksi = Manufacture::with('Manufacture')->simplePaginate(5); 
        return view('manufacture.manufacture', compact('produksi'));
    }
    
    public function create()
    {
        $inventory = Inventory::all();
        return view('manufacture.manufacture-entry', compact('inventory'));
    }

    //insert data ke database
    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_produk' => 'required|min:2',
            // 'id_bahan' => 'required',
            'nama_produk' => 'required',
            'jumlah' => 'required',
            'harga_jual' => 'required',
            'biaya_produksi' => 'required',
            'gambar'=> 'required|',
        ]);
      // Membuat id custom dengan helper
         // Membuat Nama File Dari Tanggal Uppload
         $fileName = time().'.'.$request->file('gambar')->extension();  

         // Upload kedalam folder public/uploads
         $request->file('gambar')->move(public_path('uploads'), $fileName);

        Manufacture::create([
            'kode_produk' => $request->kode_produk,
            // 'id_bahan' => $request->id_bahan,
            'nama_produk' => $request->nama_produk,
            'jumlah' => $request->jumlah,
            'harga_jual' => $request->harga_jual,
            'biaya_produksi' => $request->biaya_produksi,
            'gambar' => $fileName,
        ]);

        return redirect('/manufacture')->with('status', 'Produk berhasil ditambahkan!');
    }
    //edit  database
    public function edit($id_produk)
    {
        $produksi = Manufacture::find($id_produk);
        $inventory = Inventory::all();
        return view('manufacture.manufacture-edit', compact('produksi', 'inventory'));
    }

    public function update(Request $request, $id_produk)
    {
        $this->validate($request, [
            'kode_produk' => 'required',
            // 'id_bahan' => 'required',
            'nama_produk' => 'required',
            'jumlah' => 'required',
            'harga_jual' => 'required',
            'biaya_produksi' => 'required',
            // 'gambar' => 'file|image|mimes:jpeg,png,jpg:max:2048'
            'gambar' => 'required'
        ]);

        // if (!$request->has('image')) {
        //     return response()->json(['message' => 'Missing file'], 422);
        // }

        $fileName = time().'.'.$request->file('gambar')->extension();  

         // Upload kedalam folder public/uploads
         $request->file('gambar')->move(public_path('uploads'), $fileName);

        $produksi = Manufacture::find($id_produk);

        $produksi->update([
            'kode_produk' => $request->kode_produk,
            // 'id_bahan' => $request->id_bahan,
            'nama_produk' => $request->nama_produk,
            'jumlah' => $request->jumlah,
            'harga_jual' => $request->harga_jual,
            'biaya_produksi' => $request->biaya_produksi,
            'gambar' => $fileName,

            
        ]);

        // dd($produksi);
     
        return redirect('/manufacture')->with('status', 'Produk berhasil di edit!');
    }
    //delete sementara
    public function trash()
    {
        $produksi = Manufacture::onlyTrashed()->get();
        return view('manufacture.manufacture-trash', compact('produksi'));
    }
    public function restore($id_produk = null)
    {
        if ($id_produk != null) {
            $id_produk = Manufacture::onlyTrashed()
                ->where('id_produk', $id_produk)
                ->restore();
        } else {
            $id_produk = Manufacture::onlyTrashed()->restore();
        }
        return redirect('/manufacture/trash')->with('status', 'Produk berhasil di restore!');
    }
    //delete  database

    public function delete($id_produk)
    {
        $produksi = Manufacture::find($id_produk);
        return view('manufacture.manufacture-delete', compact('produksi'));
    }

    public function destroy($id_produk)
    {
        $produksi = Manufacture::find($id_produk);
        $produksi->delete();
        return redirect('/manufacture')->with('status', 'Produk berhasil di hapus!');
    }
    //delete all
    public function deleteall($id_produk = null)
    {
        if ($id_produk != null) {
            $id_produk = Manufacture::onlyTrashed()
                ->where('id_produk', $id_produk)
                ->forceDelete();
        } else {
            $id_produk = Manufacture::onlyTrashed()->forceDelete();
        }
        return redirect('/manufacture/trash')->with('status', 'Produk berhasil di hapus permanen!');
    }
  //cetak
  public function cetak()
  {
      $produksi = Manufacture::all();
      // return view ('dosen.cetak-pdf',compact('dosen'));
      $pdf = PDF::loadview('manufacture.cetak', ['produksi' => $produksi]);
      return $pdf->stream('Produk.pdf');
  }
}
