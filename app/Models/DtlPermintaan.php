<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DtlPermintaan extends Model
{
    use HasFactory;

    protected $table = 'dtl_permintaan';

    protected $primaryKey = 'id_dtl_permintaan';

    protected $fillable = ["id_barang","jml_barang"];

    public $timestamps = true;
}
