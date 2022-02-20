<?php

namespace App\Http\Controllers;

use App\Mail\Confirmed;
// use Illuminate\Http\Client\Response;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
// use Illuminate\Support\Facades\Response;

class BidMailController extends Controller
{
    public function store(Request $request)
    {
        // Mail::to(request($request->email))->send(new Confirmed);
        // return back();


        $email = $request->email;
   
        $mailData = [
            'title' => 'Demo Email',
            'url' => 'https://www.positronx.io'
        ];
  
        Mail::to($email)->send(new Confirmed($mailData));
   
        return response()->json([
            'message' => 'Email has been sent.'
        ], Response::HTTP_OK);
    }
}
