<?php

namespace App\Http\Controllers;

use App\Models\Donate;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function donate(){
        // $donate= Donate::all();
        // // dd($donate->toArray());
        return view('get_involved.donate');
    }
    public function donate_submit(Request $request){
        // dd($request);
        Donate::create(['donation_amount'=>$request->donation_amount,'f_name'=>$request->f_name,'l_name'=>$request->l_name,'email'=>$request->email,'address'=>$request->address,'massage'=>$request->massage,'b_tnumber'=>$request->b_tnumber,'r_tnumber'=>$request->r_tnumber,'n_tnumber'=>$request->n_tnumber]);
        return redirect()->back()->withmsg('Successfully Done');
    }
    public function disaster(){
        return view('programs.disaster');
    }
    public function women(){
        return view('programs.women');
    }
    public function parenting(){
        return view('programs.parenting');
    }
    public function child(){
        return view('programs.child');
    }
    public function campaign(){
        return view('get_involved.campaign');
    }
    public function ambagpathshala(){
        return view('projects.ambagpathshala');
    }
    public function sewingmachine(){
        return view('projects.sewingmachine');
    }
    public function oxygenbank(){
        return view('projects.oxygenbank');
    }
    public function zakatdistribution(){
        return view('projects.zakatdistribution');
    }
    public function ramadanproject(){
        return view('projects.ramadanproject');
    }
    public function disastersnothers(){
        return view('projects.disastersnothers');
    }
}
