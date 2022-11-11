<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SeriesFormRequest;
use App\Models\Series;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
    {
        return Series::all();
    }

    // Criando uma API serie
    public function store(SeriesFormRequest $request)
    {
        dd($request->all());

    }
}
