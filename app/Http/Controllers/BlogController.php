<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogPost;
use App\Models\BlogPosts;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs=Blog::first();
        // dd($blogs);
        $posts=BlogPost::latest()->paginate(6);
        return view('blog.index',compact('blogs','posts'));
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
    //    dd($request->toArray());
    //    $request->validate([
    //         'b_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //         'blogs_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    //     ]);

        if ($image = $request->b_img) {
            $destinationPath = 'images/blog_images';
            $b_img = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $b_img);
            $request->b_img = "$b_img";
        }
        // dd($data);
        Blog::create([
            'b_img'=>$request->b_img,
            'tag_line'=>$request->tag_line,
            'quote_line'=>$request->quote_line,
        ]);
        return redirect()->back()->withmsg('Successfully Done');
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
    public function blog_posts(Request $request){
        // dd($request);
        if ($image = $request->blogs_img) {
            $destinationPathxx = 'images/blog_images';
            $blogs_img = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPathxx, $blogs_img);
            $request->blogs_img = "$blogs_img";
        }
        BlogPost::create([
            'blogs_img' =>$request->blogs_img,
            'blogs_content' =>$request->blogs_content
        ]);
        return redirect()->back()->withmsg('Successfully Done');
    }
    public function blog_posts_delete($id){
        // dd($id);
        BlogPost::where('id',$id)->delete();
        return redirect()->back()->withmsg('Successfully Done');
    }
    public function blog_posts_update(Request $request){
        // dd($request);
        if ($image = $request->blogs_img) {
            $destinationPathxx = 'images/blog_images';
            $blogs_img = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPathxx, $blogs_img);
            $request->blogs_img = "$blogs_img";
        }
        BlogPost::where('id',$request->id)->update([
            'blogs_img' =>$request->blogs_img,
            'blogs_content' =>$request->blogs_content
        ]);
        return redirect()->back()->withmsg('Successfully Done');
    }
}
