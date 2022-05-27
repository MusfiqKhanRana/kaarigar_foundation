<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
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
        $donate = Donate::where('id',$id)->first();
        // dd($donate->toArray());
        return view('get_involved.show_donate',compact('donate'));
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
        $donation=Donate::create(['programs'=>$request->programs,'donation_amount'=>$request->donation_amount,'f_name'=>$request->f_name,'l_name'=>$request->l_name,'email'=>$request->email,'address'=>$request->address,'massage'=>$request->massage,'b_tnumber'=>$request->b_tnumber,'r_tnumber'=>$request->r_tnumber,'n_tnumber'=>$request->n_tnumber]);
        return redirect()->route('donation.show',"$donation->id");
    }
    public function show_donation(Request $request ,$id){
        // dd($id);
        $donate = Donate::where('id',$id)->first();
        // dd($donate->toArray());
        return view('get_involved.show_donate',compact('donate'));
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
        $posts=BlogPost::where('status','ambaagpathshala')->latest()->paginate(3);
        return view('projects.ambagpathshala',compact('posts'));
    }
    public function sewingmachine(){
        $posts=BlogPost::where('status','sewing_machine_course')->latest()->paginate(3);
        return view('projects.sewingmachine',compact('posts'));
    }
    public function oxygenbank(){
        $posts=BlogPost::where('status','oxygen_bank')->latest()->paginate(3);
        return view('projects.oxygenbank',compact('posts'));
    }
    public function zakatdistribution(){
        $posts=BlogPost::where('status','zakat_distribution')->latest()->paginate(3);
        return view('projects.zakatdistribution',compact('posts'));
    }
    public function ramadanproject(){
        $posts=BlogPost::where('status','ramadan_projects')->latest()->paginate(3);
        return view('projects.ramadanproject',compact('posts'));
    }
    public function disastersnothers(){
        $posts=BlogPost::where('status','disaster_n_others')->latest()->paginate(3);
        return view('projects.disastersnothers',compact('posts'));
    }
}
