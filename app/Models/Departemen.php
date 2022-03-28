<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departemen extends Model
{
    use HasFactory;

    protected $table = 'departemen';

    protected $primaryKey = 'id_dept';

    protected $fillable = ["nama_dept"];

    public $timestamps = true;
}
