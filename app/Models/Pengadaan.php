<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengadaan extends Model
{
    use HasFactory;

    protected $table = 'pengadaan';

    protected $primaryKey = 'id_pengadaan';

    protected $fillable = ["tgl_pengadaan","no_pengadaan","tgl_barangmasuk","usercreate","userspv","status"];

    public $timestamps = true;
}
