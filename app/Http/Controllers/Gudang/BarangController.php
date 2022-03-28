<?php

namespace App\Http\Controllers\Gudang;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;

class BarangController extends Controller
{
    public function index()
    {
        $query = Barang::filter(Request::only('search'));
        if (Request::has('sort_by')) {
            $query=$query->orderBy(Request::input('sort_by'), Request::input('sort_dir'));
        }

        return Inertia::render('Gudang/barang', [
            'filters' => Request::all('search', 'per_page', 'sort_by', 'sort_dir'),
            'barang' => $query->paginate(Request::input('per_page', 5))
        ]);
    }

    public function create()
    {
        return Inertia::render('Gudang/barangAdd');
    }
}
