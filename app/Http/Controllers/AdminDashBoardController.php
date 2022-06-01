<?php

namespace App\Http\Controllers;

use App\Models\AdminDashBoard;
use App\Models\Blog;
use App\Models\BlogPost;
use App\Models\Contact;
use App\Models\Donate;
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

    public function index_page_edit(){
        $blogs=Blog::first();
        // dd($blogs);
        $posts=BlogPost::latest()->paginate(6);
        return view('admin_pages.index_page_edit',compact('blogs','posts'));
    }
    public function programs_page_edit(){
        $blogs=Blog::first();
        // dd($blogs);
        $posts=BlogPost::latest()->paginate(6);
        return view('admin_pages.programs_page_edit',compact('blogs','posts'));
    }
    public function get_involve_page_edit(){
        $blogs=Blog::first();
        // dd($blogs);
        $posts=BlogPost::latest()->paginate(6);
        return view('admin_pages.get_involve_page_edit',compact('blogs','posts'));
    }
    public function projects_page_edit(){
        $blogs=Blog::first();
        // dd($blogs);
        $posts=BlogPost::latest()->paginate(6);
        return view('admin_pages.projects_page_edit',compact('blogs','posts'));
    }
    public function about_page_edit(){
        return view('admin_pages.about_page_edit');
    }
    public function blog_page_edit(){
        $blogs=Blog::first();
        // dd($blogs);
        $posts=BlogPost::where('status','blog_post')->latest()->paginate(6);
        return view('admin_pages.blog_page_edit',compact('blogs','posts'));
    }
    public function donate_page(){
        $donate=Donate::all();
        // dd($donate);
        return view('admin_pages.donate_show',compact('donate'));
    }
    public function contact_page(){
        $contact=Contact::all();
        // dd($contact);
        return view('admin_pages.contact_show',compact('contact'));
    }
}
