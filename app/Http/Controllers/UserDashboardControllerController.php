<?php

namespace App\Http\Controllers;

use App\Models\Tender;
use App\Models\userDashboardController;
use Illuminate\Http\Request;

class UserDashboardControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tenders = Tender::all();
        

       
        
        return view('user.pages.index', compact('tenders'));
    }
    
    
    
    public function view(Request $request)
    {

        // $project = Tender::query();
        $project = $request['search'];
        // $tenders = Tender::all();
        // if (request('search')) {
        //     $project->where('Description', 'Like', '%' . request('search') . '%')->get();
        
        // }
        
        // return $project->orderBy('id', 'DESC')->paginate(10);
        
        if($project){
            $tenders = Tender::where('Description', 'Like', '%' . request('search') . '%')->get();
            
        }else {
            $tenders = Tender::all();
        }
        
        return view('user.pages.index', compact('tenders'));

    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\userDashboardController  $userDashboardController
     * @return \Illuminate\Http\Response
     */
    public function show(userDashboardController $userDashboardController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\userDashboardController  $userDashboardController
     * @return \Illuminate\Http\Response
     */
    public function edit(userDashboardController $userDashboardController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\userDashboardController  $userDashboardController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, userDashboardController $userDashboardController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\userDashboardController  $userDashboardController
     * @return \Illuminate\Http\Response
     */
    public function destroy(userDashboardController $userDashboardController)
    {
        //
    }
}
