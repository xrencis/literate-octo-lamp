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

    public function create(Request $request)
    {
        $item = new Version();
        $item->name = $request->name;
        $item->save();
    }

    public function kill(Request $request)
    {
        $item = Version::findOrFail($request->id);
        $item->delete();
    }
}
