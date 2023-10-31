<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inventory extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'tb_inventory';
    protected $primaryKey = 'id_bahan';
    public $incrementing = true;
    protected $fillable = ['kode_bahan', 'nama_bahan','jumlah', 'harga','perusahaan'];
    protected $hidden = ['created_at', 'updated_at'];
}
