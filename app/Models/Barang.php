<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';

    protected $primaryKey = 'id_barang';

    protected $fillable = ["nama_barang","id_satuan","id_jenis","no_sku","jml_barang","status","lokasi"];

    public function scopeFilter($query, array $filters) {
        $query->when($filters['search'] ?? null, function($query, $search){
            $query->where(function($query) use ($search){
                $query->where('nama_barang', 'like', '%'.$search.'%')
                    ->orWhere('no_sku', 'like', '%'.$search.'%')
                    ->orWhere('lokasi', 'like', '%'.$search.'%');
            });
        });
    }

    public $timestamps = true;
    
}
