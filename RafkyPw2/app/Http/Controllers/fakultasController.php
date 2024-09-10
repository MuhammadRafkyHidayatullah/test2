<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;

class fakultasController extends Controller
{
    public function index()
    {
        $data['message'] = true;
        $data['result'] = true;
        return response()->json($data. Response::HTTP_OK);
    }
}
