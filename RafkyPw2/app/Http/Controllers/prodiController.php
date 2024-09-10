<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;

class prodiController extends Controller
{
    public function index()
    {
        $prodi = prodi::with('fakultas')->get();
        $data['message'] = true;
        $data['result'] = $prodi;
        return response()->json($data, Response::HTTP_OK);
    }
}
