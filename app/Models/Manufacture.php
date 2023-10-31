<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Manufacture extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'tb_manufacture';
    protected $primaryKey = 'id_produk';
    public $incrementing = true;
    protected $fillable = ['kode_produk','nama_produk','jumlah', 'harga_jual', 'biaya_produksi','gambar','status'];
    protected $hidden = ['created_at', 'updated_at'];

    // public function datainventory()
    // {
    //     return $this->belongsTo(Inventory::class, 'id_bahan')->withDefault([
    //         'id_bahan' => 'tidak ada',
    //     ]);
    // }
}
