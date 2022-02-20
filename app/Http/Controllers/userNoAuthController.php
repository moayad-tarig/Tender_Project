<?php

namespace App\Http\Controllers;

use App\Models\Tender;
use Illuminate\Http\Request;

class userNoAuthController extends Controller
{
public function index()
{


   $tenders = Tender::all();
    return view('tender', compact('tenders'));
}
}
