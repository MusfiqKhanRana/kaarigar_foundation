<?php

namespace App\Http\Controllers;

use App\Models\AdminDashBoard;
use Illuminate\Http\Request;

class AdminDashBoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admindashboard.index');
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
     * @param  \App\Models\AdminDashBoard  $adminDashBoard
     * @return \Illuminate\Http\Response
     */
    public function show(AdminDashBoard $adminDashBoard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminDashBoard  $adminDashBoard
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminDashBoard $adminDashBoard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdminDashBoard  $adminDashBoard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdminDashBoard $adminDashBoard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminDashBoard  $adminDashBoard
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminDashBoard $adminDashBoard)
    {
        //
    }

    public function pages(){
        return view('admin_pages.pages');
    }
}
