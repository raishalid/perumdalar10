<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BelajarModel;
// ini ditambahkan karena sekarang kita gunakan model

class BelajarController extends Controller
{

    // public function index()
    // {
    //     $param = "Indonesia";
    //     return view('about', compact('param'));
    // }

    public function index(BelajarModel $belajar)
    {
        $param = $belajar->getArray();
        return view('about', compact('param'));
    }
}
