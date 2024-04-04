<?php

namespace App\Http\Controllers;

use App\Models\Version;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function versions(){
        return response()->json([
            "status" => "OK",
            "versions" => Version::get(),
        ]);
    }
}
