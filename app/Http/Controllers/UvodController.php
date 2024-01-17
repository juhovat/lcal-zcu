<?php

namespace App\Http\Controllers;


use App\Models\UvodModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UvodController extends Controller
{
    public function vypis()
    {
        return view('uvod');
    }
}