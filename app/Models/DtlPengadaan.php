<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DtlPengadaan extends Model
{
    use HasFactory;

    protected $table = 'dtl_pengadaan';

    protected $primaryKey = 'id_dtl_pengadaan';

    protected $fillable = ["id_pengadaan","id_barang","jml_barang","status"];

    public $timestamps = true;
}
