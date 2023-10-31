<?php

namespace App\Http\Controllers;

use App\Models\BomListModel;
use App\Models\BomModel;
use App\Models\Manufacture;
use App\Models\Inventory;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class BomController extends Controller
{
    public function material()
    {
        $bom = BomModel::join('tb_manufacture', 'tb_bom.kode_produk', '=', 'tb_manufacture.kode_produk')
            ->get(['tb_bom.*', 'tb_manufacture.nama_produk']);

        return view('bom.bom', ['boms' => $bom]);
    }
    public function hapus($id)
    {
        $bom = BomModel::find($id);
        $bom->delete();

        return redirect()->back();
    }
    public function cetak()
    {
        // dd("okay");
        $bom = BomModel::join('tb_manufacture', 'tb_bom.kode_produk', '=', 'tb_manufacture.kode_produk')
            ->get(['tb_bom.*', 'tb_manufacture.nama_produk']);
           
        // dd($bom);
        // return view('bom.cetak', ['bom' => $bom]);
            $pdf = Pdf::loadView('bom.cetak');
            return $pdf->download('invoice.pdf');
    }
    public function materialInput()
    {
        $produk = Manufacture::where('status', 1)->get();
        return view('bom.bom-list', ['products' => $produk]);
    }
    public function materialInputItems($kode_bom)
    {
        $bom = BomModel::join('tb_manufacture', 'tb_bom.kode_produk', '=', 'tb_manufacture.kode_produk')
            ->where('tb_bom.kode_bom', $kode_bom)
            ->first(['tb_bom.*', 'tb_manufacture.nama_produk', 'tb_manufacture.harga_jual']);
        $bomList = BomListModel::join('tb_inventory', 'tb_bom_list.kode_produk', '=', 'tb_inventory.id_bahan')
            ->where('tb_bom_list.kode_bom', $kode_bom)
            ->get(['tb_bom_list.*', 'tb_inventory.nama_bahan', 'tb_inventory.harga']);
        $produk = Inventory::all();
        return view('bom.bom-item', ['bom' => $bom, 'materials' => $produk, 'list' => $bomList]);
    }
    public function cetak_item($kode_bom)
    {
        $bom = BomModel::join('tb_manufacture', 'tb_bom.kode_produk', '=', 'tb_manufacture.kode_produk')
            ->where('tb_bom.kode_bom', $kode_bom)
            ->first(['tb_bom.*', 'tb_manufacture.nama_produk', 'tb_manufacture.harga_jual']);
        $list = BomListModel::join('tb_inventory', 'tb_bom_list.kode_produk', '=', 'tb_inventory.id_bahan')
            ->where('tb_bom_list.kode_bom', $kode_bom)
            ->get(['tb_bom_list.*', 'tb_inventory.nama_bahan', 'tb_inventory.harga']);
        $produk = Inventory::all();
        $pdf = Pdf::loadView('bom.cetak_item',compact('list'));
        return $pdf->download('invoice_item.pdf');
    }
    public function upload(Request $request)
    {
        $this->validate($request, [
            'kode_bom' => 'required',
            'kode_produk' => 'required',
        ]);
        $tanggal = date("Y/m/d");
        BomModel::create([
            'kode_bom' => $request->kode_bom,
            'kode_produk' => $request->kode_produk,
            'tanggal' => $tanggal,
        ]);
        return redirect('/product/bom-input-item/' . $request->kode_bom);
    }
    public function uploadList(Request $request)
    {
        $check = BomListModel::where('kode_produk', $request->kode_bahan)
            ->where('kode_bom', $request->kode_bom)
            ->first();
        if ($check != null) {
            $list = BomListModel::find($check->kode_bom_list);
            $jumlah_baru = $list->quantity + $request->quantity;
            $list->quantity = $jumlah_baru;
            $list->save();
        } else {
            BomListModel::create([
                'kode_bom' => $request->kode_bom,
                'kode_produk' => $request->kode_bahan,
                'quantity' => $request->quantity,
                'satuan' => '-'
            ]);
        }
        return $this->calcPrice($request->kode_bom);
    }
    public function calcPrice($kode_bom)
    {
        $total_harga = 0;
        $lists = BomListModel::where('kode_bom', $kode_bom)->get();
        foreach ($lists as $i) {
            $product = Inventory::find($i->kode_produk);
            $harga = $product->harga;
            $total_harga = $total_harga + ($harga * $i->quantity);
        }
        $bom = BomModel::find($kode_bom);
        $bom->total_harga = $total_harga;
        $bom->save();
        return redirect('/product/bom-input-item/' . $kode_bom);
    }
    public function deleteList($kode_bom_list)
    {
        $bom_list = BomListModel::find($kode_bom_list);
        $bom_list->delete();
        // dd($bom_list);
        // $product = Manufacture::find($bom_list->kode_produk);
        // $harga = $product->harga;
        // $bom = BomModel::find($bom_list->kode_bom);
        // $harga_lama = $bom->total_harga;
        // $harga_baru = $harga_lama - ($harga * $bom_list->quantity);

        // $bom->total_harga = $harga_baru;
        // $bom->save();

        // $bom_list->delete();
        return redirect('/product/bom-input-item/' . $bom_list->kode_bom);
    }
}
