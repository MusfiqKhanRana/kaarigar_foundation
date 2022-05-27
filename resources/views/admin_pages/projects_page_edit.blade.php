<x-admin-dashboard>
  @section('admin_content')
  <div class="row">
      <div class="col-12">
        <div class="card card-chart">
          <div class="card-header ">
            <div class="row">
              <div class="col-sm-6 text-left">
                <h5 class="card-category">Index Page</h5>
                <h2 class="card-title">View/Edit Project Pages</h2>
              </div>
              <div class="col-md-12">
                <div class="container">
                  <div class="row row-bottom-padded-md">
                      @foreach ($posts as $item)
                        @if ($item->status=='disaster_n_others')
                          <div class="col-lg-4 col-md-4 col-sm-6">
                              <div class="fh5co-blog animate-box">
                                  <a href="#"><img class="img-responsive" src="{{ url('images/blog_images/'.$item->blogs_img) }}" alt="" style="height:250px" max-height="200px !important"></a>
                                  <div class="blog-text">
                                      <div class="prod-title" style="text-align: center">
                                          <p style="color: white;  font-family: Garamond, serif;margin-top:10px"><b>{{$item->blogs_content}}</b></p>
                                      </div>
                                  </div> 
                              </div>
                              <button data-toggle="modal" data-target="#exampleModal{{$item->id}}" class="btn btn-edit">Edit</button>&nbsp;&nbsp;<a href="{{route('blog.blog_posts.delete',$item->id)}}" class="btn btn-danger">Delete</a>
                          </div>
                          <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                            <form method="POST" action="{{route('blog.blog_posts.update')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <input type="hidden" name="id" value="{{$item->id}}">
                                    <div class="mb-4">
                                        <img class="img-responsive" src="{{ url('images/blog_images/'.$item->blogs_img) }}" alt="" style="height:250px" max-height="200px !important"><br>
                                        <label for="exampleFormControlFile1">Blogs Image Upload*</label>
                                        <input type="file" name="blogs_img" class="form-control-file">
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleFormControlFile1">Blogs Line *</label>
                                        <input type="text" style="color: black" name="blogs_content" value="{{$item->blogs_content}}" class="form-control">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                              </div>
                            </div>
                          </div>
                        @endif
                            @endforeach
                  </div>
                  {!! $posts->links() !!}
                </div>
              </div>
              <div class="col-md-12">
                <h3>Add new Posts to Disaster & Others</h3>
                <form method="POST" action="{{route('blog.blog_posts')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-4">
                      <input type="hidden" name="status" value="disaster_n_others">
                      <label for="exampleFormControlFile1">Blogs Image Upload*</label>
                      <input type="file" name="blogs_img" class="form-control-file">
                  </div>
                  <div class="mb-4">
                      <label for="exampleFormControlFile1">Blogs Line *</label>
                      <input type="text" name="blogs_content" class="form-control">
                  </div>
                  <div class="mb-4" style="align-content: center">
                      <button type="submit" class="btn btn-success">Submit</button>
                  </div>
                </form>
              </div>
              <br><hr><br>
              <div class="col-md-12">
                <div class="container">
                  <div class="row row-bottom-padded-md">
                      @foreach ($posts as $item)
                        @if ($item->status=='ambaagpathshala')
                          <div class="col-lg-4 col-md-4 col-sm-6">
                              <div class="fh5co-blog animate-box">
                                  <a href="#"><img class="img-responsive" src="{{ url('images/blog_images/'.$item->blogs_img) }}" alt="" style="height:250px" max-height="200px !important"></a>
                                  <div class="blog-text">
                                      <div class="prod-title" style="text-align: center">
                                          <p style="color: white;  font-family: Garamond, serif;margin-top:10px"><b>{{$item->blogs_content}}</b></p>
                                      </div>
                                  </div> 
                              </div>
                              <button data-toggle="modal" data-target="#exampleModal{{$item->id}}" class="btn btn-edit">Edit</button>&nbsp;&nbsp;<a href="{{route('blog.blog_posts.delete',$item->id)}}" class="btn btn-danger">Delete</a>
                          </div>
                          <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                            <form method="POST" action="{{route('blog.blog_posts.update')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <input type="hidden" name="id" value="{{$item->id}}">
                                    <div class="mb-4">
                                        <img class="img-responsive" src="{{ url('images/blog_images/'.$item->blogs_img) }}" alt="" style="height:250px" max-height="200px !important"><br>
                                        <label for="exampleFormControlFile1">Blogs Image Upload*</label>
                                        <input type="file" name="blogs_img" class="form-control-file">
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleFormControlFile1">Blogs Line *</label>
                                        <input type="text" style="color: black" name="blogs_content" value="{{$item->blogs_content}}" class="form-control">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                              </div>
                            </div>
                          </div>
                        @endif
                            @endforeach
                  </div>
                  {!! $posts->links() !!}
                </div>
              </div>
              <div class="col-md-12">
                <h3>Add new Posts to AmbaagPathshala</h3>
                <form method="POST" action="{{route('blog.blog_posts')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-4">
                      <input type="hidden" name="status" value="ambaagpathshala">
                      <label for="exampleFormControlFile1">Blogs Image Upload*</label>
                      <input type="file" name="blogs_img" class="form-control-file">
                  </div>
                  <div class="mb-4">
                      <label for="exampleFormControlFile1">Blogs Line *</label>
                      <input type="text" name="blogs_content" class="form-control">
                  </div>
                  <div class="mb-4" style="align-content: center">
                      <button type="submit" class="btn btn-success">Submit</button>
                  </div>
                </form>
              </div>
              <br><hr><br>
              <div class="col-md-12">
                <div class="container">
                  <div class="row row-bottom-padded-md">
                      @foreach ($posts as $item)
                        @if ($item->status=='sewing_machine_course')
                          <div class="col-lg-4 col-md-4 col-sm-6">
                              <div class="fh5co-blog animate-box">
                                  <a href="#"><img class="img-responsive" src="{{ url('images/blog_images/'.$item->blogs_img) }}" alt="" style="height:250px" max-height="200px !important"></a>
                                  <div class="blog-text">
                                      <div class="prod-title" style="text-align: center">
                                          <p style="color: white;  font-family: Garamond, serif;margin-top:10px"><b>{{$item->blogs_content}}</b></p>
                                      </div>
                                  </div> 
                              </div>
                              <button data-toggle="modal" data-target="#exampleModal{{$item->id}}" class="btn btn-edit">Edit</button>&nbsp;&nbsp;<a href="{{route('blog.blog_posts.delete',$item->id)}}" class="btn btn-danger">Delete</a>
                          </div>
                          <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                            <form method="POST" action="{{route('blog.blog_posts.update')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <input type="hidden" name="id" value="{{$item->id}}">
                                    <div class="mb-4">
                                        <img class="img-responsive" src="{{ url('images/blog_images/'.$item->blogs_img) }}" alt="" style="height:250px" max-height="200px !important"><br>
                                        <label for="exampleFormControlFile1">Blogs Image Upload*</label>
                                        <input type="file" name="blogs_img" class="form-control-file">
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleFormControlFile1">Blogs Line *</label>
                                        <input type="text" style="color: black" name="blogs_content" value="{{$item->blogs_content}}" class="form-control">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                              </div>
                            </div>
                          </div>
                        @endif
                            @endforeach
                  </div>
                  {!! $posts->links() !!}
                </div>
              </div>
              <div class="col-md-12">
                <h3>Add new Posts to Sewing Machine Course</h3>
                <form method="POST" action="{{route('blog.blog_posts')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-4">
                      <input type="hidden" name="status" value="sewing_machine_course">
                      <label for="exampleFormControlFile1">Blogs Image Upload*</label>
                      <input type="file" name="blogs_img" class="form-control-file">
                  </div>
                  <div class="mb-4">
                      <label for="exampleFormControlFile1">Blogs Line *</label>
                      <input type="text" name="blogs_content" class="form-control">
                  </div>
                  <div class="mb-4" style="align-content: center">
                      <button type="submit" class="btn btn-success">Submit</button>
                  </div>
                </form>
              </div>
              <br><hr><br>
              <div class="col-md-12">
                <div class="container">
                  <div class="row row-bottom-padded-md">
                      @foreach ($posts as $item)
                        @if ($item->status=='oxygen_bank')
                          <div class="col-lg-4 col-md-4 col-sm-6">
                              <div class="fh5co-blog animate-box">
                                  <a href="#"><img class="img-responsive" src="{{ url('images/blog_images/'.$item->blogs_img) }}" alt="" style="height:250px" max-height="200px !important"></a>
                                  <div class="blog-text">
                                      <div class="prod-title" style="text-align: center">
                                          <p style="color: white;  font-family: Garamond, serif;margin-top:10px"><b>{{$item->blogs_content}}</b></p>
                                      </div>
                                  </div> 
                              </div>
                              <button data-toggle="modal" data-target="#exampleModal{{$item->id}}" class="btn btn-edit">Edit</button>&nbsp;&nbsp;<a href="{{route('blog.blog_posts.delete',$item->id)}}" class="btn btn-danger">Delete</a>
                          </div>
                          <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                            <form method="POST" action="{{route('blog.blog_posts.update')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <input type="hidden" name="id" value="{{$item->id}}">
                                    <div class="mb-4">
                                        <img class="img-responsive" src="{{ url('images/blog_images/'.$item->blogs_img) }}" alt="" style="height:250px" max-height="200px !important"><br>
                                        <label for="exampleFormControlFile1">Blogs Image Upload*</label>
                                        <input type="file" name="blogs_img" class="form-control-file">
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleFormControlFile1">Blogs Line *</label>
                                        <input type="text" style="color: black" name="blogs_content" value="{{$item->blogs_content}}" class="form-control">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                              </div>
                            </div>
                          </div>
                        @endif
                            @endforeach
                  </div>
                  {!! $posts->links() !!}
                </div>
              </div>
              <div class="col-md-12">
                <h3>Add new Posts to Oxygen Bank</h3>
                <form method="POST" action="{{route('blog.blog_posts')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-4">
                      <input type="hidden" name="status" value="oxygen_bank">
                      <label for="exampleFormControlFile1">Blogs Image Upload*</label>
                      <input type="file" name="blogs_img" class="form-control-file">
                  </div>
                  <div class="mb-4">
                      <label for="exampleFormControlFile1">Blogs Line *</label>
                      <input type="text" name="blogs_content" class="form-control">
                  </div>
                  <div class="mb-4" style="align-content: center">
                      <button type="submit" class="btn btn-success">Submit</button>
                  </div>
                </form>
              </div>
              <br><hr><br>
              <div class="col-md-12">
                <div class="container">
                  <div class="row row-bottom-padded-md">
                      @foreach ($posts as $item)
                        @if ($item->status=='zakat_distribution')
                          <div class="col-lg-4 col-md-4 col-sm-6">
                              <div class="fh5co-blog animate-box">
                                  <a href="#"><img class="img-responsive" src="{{ url('images/blog_images/'.$item->blogs_img) }}" alt="" style="height:250px" max-height="200px !important"></a>
                                  <div class="blog-text">
                                      <div class="prod-title" style="text-align: center">
                                          <p style="color: white;  font-family: Garamond, serif;margin-top:10px"><b>{{$item->blogs_content}}</b></p>
                                      </div>
                                  </div> 
                              </div>
                              <button data-toggle="modal" data-target="#exampleModal{{$item->id}}" class="btn btn-edit">Edit</button>&nbsp;&nbsp;<a href="{{route('blog.blog_posts.delete',$item->id)}}" class="btn btn-danger">Delete</a>
                          </div>
                          <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                            <form method="POST" action="{{route('blog.blog_posts.update')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <input type="hidden" name="id" value="{{$item->id}}">
                                    <div class="mb-4">
                                        <img class="img-responsive" src="{{ url('images/blog_images/'.$item->blogs_img) }}" alt="" style="height:250px" max-height="200px !important"><br>
                                        <label for="exampleFormControlFile1">Blogs Image Upload*</label>
                                        <input type="file" name="blogs_img" class="form-control-file">
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleFormControlFile1">Blogs Line *</label>
                                        <input type="text" style="color: black" name="blogs_content" value="{{$item->blogs_content}}" class="form-control">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                              </div>
                            </div>
                          </div>
                        @endif
                            @endforeach
                  </div>
                  {!! $posts->links() !!}
                </div>
              </div>
              <div class="col-md-12">
                <h3>Add new Posts to Zakat Distribution</h3>
                <form method="POST" action="{{route('blog.blog_posts')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-4">
                      <input type="hidden" name="status" value="zakat_distribution">
                      <label for="exampleFormControlFile1">Blogs Image Upload*</label>
                      <input type="file" name="blogs_img" class="form-control-file">
                  </div>
                  <div class="mb-4">
                      <label for="exampleFormControlFile1">Blogs Line *</label>
                      <input type="text" name="blogs_content" class="form-control">
                  </div>
                  <div class="mb-4" style="align-content: center">
                      <button type="submit" class="btn btn-success">Submit</button>
                  </div>
                </form>
              </div>
              <br><hr><br>
              <div class="col-md-12">
                <div class="container">
                  <div class="row row-bottom-padded-md">
                      @foreach ($posts as $item)
                        @if ($item->status=='ramadan_projects')
                          <div class="col-lg-4 col-md-4 col-sm-6">
                              <div class="fh5co-blog animate-box">
                                  <a href="#"><img class="img-responsive" src="{{ url('images/blog_images/'.$item->blogs_img) }}" alt="" style="height:250px" max-height="200px !important"></a>
                                  <div class="blog-text">
                                      <div class="prod-title" style="text-align: center">
                                          <p style="color: white;  font-family: Garamond, serif;margin-top:10px"><b>{{$item->blogs_content}}</b></p>
                                      </div>
                                  </div> 
                              </div>
                              <button data-toggle="modal" data-target="#exampleModal{{$item->id}}" class="btn btn-edit">Edit</button>&nbsp;&nbsp;<a href="{{route('blog.blog_posts.delete',$item->id)}}" class="btn btn-danger">Delete</a>
                          </div>
                          <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                            <form method="POST" action="{{route('blog.blog_posts.update')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <input type="hidden" name="id" value="{{$item->id}}">
                                    <div class="mb-4">
                                        <img class="img-responsive" src="{{ url('images/blog_images/'.$item->blogs_img) }}" alt="" style="height:250px" max-height="200px !important"><br>
                                        <label for="exampleFormControlFile1">Blogs Image Upload*</label>
                                        <input type="file" name="blogs_img" class="form-control-file">
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleFormControlFile1">Blogs Line *</label>
                                        <input type="text" style="color: black" name="blogs_content" value="{{$item->blogs_content}}" class="form-control">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                              </div>
                            </div>
                          </div>
                        @endif
                            @endforeach
                  </div>
                  {!! $posts->links() !!}
                </div>
              </div>
              <div class="col-md-12">
                <h3>Add new Posts to Ramadan Projects</h3>
                <form method="POST" action="{{route('blog.blog_posts')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-4">
                      <input type="hidden" name="status" value="ramadan_projects">
                      <label for="exampleFormControlFile1">Blogs Image Upload*</label>
                      <input type="file" name="blogs_img" class="form-control-file">
                  </div>
                  <div class="mb-4">
                      <label for="exampleFormControlFile1">Blogs Line *</label>
                      <input type="text" name="blogs_content" class="form-control">
                  </div>
                  <div class="mb-4" style="align-content: center">
                      <button type="submit" class="btn btn-success">Submit</button>
                  </div>
                </form>
              </div>  
            </div>
          </div>
          <div class="card-body">
              <div class="chart-area">
                <canvas ></canvas>
              </div>
          </div>
        </div>
      </div>
    </div>
  @endsection
</x-admin-dashboard>