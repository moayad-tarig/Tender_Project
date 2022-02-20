<?php

namespace App\Http\Controllers;

use App\Models\Tender;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class TenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.tender-create');
    }



    public function view_tender()
    {
        $tenders = Tender::all();
        return view('admin.pages.view-tender', compact('tenders'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function Download(Request $request)
    {
        
       $file = $request->file;
    
        $filenew = public_path(). $file;

        $headers = ['Content-Type: application/pdf'];
    
        return Response::download($file, 'plugin.pdf', $headers);
       ;
    }

    
    public function store(Request $request)
    {   
        $file = $request->file;
        $newFile = time().$file->getClientOriginalName();

        
        $file->move('uploads/posts', $newFile);
        

        Tender::create([
        'TenderNo' => $request->TenderNo,
        'OrgID',
        'Department' => $request->Dept,
        'Description'=> $request->Desc,
        'price' => $request->Price,
        'DueDate' => $request->DueDate,
        'Duration' => $request->Duration,
        'file' => 'uploads/posts/'. $newFile,
        
        ]);
       
 
 
     
        
        return back();
    }

 
    public function show(Tender $tender)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tender  $tender
     * @return \Illuminate\Http\Response
     */
    public function edit(Tender $tender)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tender  $tender
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tender $tender)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tender  $tender
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $trash = Tender::where('id', $request->id)->first();
        $trash->delete();
        return redirect()->back();
    }
}
