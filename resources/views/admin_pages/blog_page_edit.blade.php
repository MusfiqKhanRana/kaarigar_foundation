<x-admin-dashboard>
    @section('admin_content')
    <div class="row">
        <div class="col-12">
          <div class="card card-chart">
            <div class="card-header ">
              <div class="row">
                <div class="col-sm-6 text-left">
                  <h5 class="card-category">Index Page</h5>
                  <h2 class="card-title">View/Edit Index Page</h2>
                </div>
                <div class="col-md-12">
                  <form method="POST" action="{{route('blog.store')}}" enctype="multipart/form-data">
                      @csrf
                      <div class="mb-4">
                          <label for="exampleFormControlFile1">Background Image Upload*</label>
                          <input type="file" name="b_img" class="form-control-file" >
                          {{-- <input type="file" name="b_img"> --}}
                      </div>
                      <div class="mb-4">
                          <label for="exampleFormControlFile1">Tag Line *</label>
                          <textarea name="tag_line" class="ck_editor" cols="30" rows="10" style="color: black!important"></textarea>
                      </div>
                      <div class="mb-4">
                          <label for="exampleFormControlFile1">Qoute Line *</label>
                          <input type="text" name="quote_line" class="form-control">
                      </div>
                      <div class="mb-4" style="align-content: center">
                          <button type="submit" class="btn btn-success">Submit</button>
                      </div>
                  </form>
                    {{-- <textarea name="" id="ck_editor" cols="30" rows="10" style="color: black!important"></textarea> --}}
                </div>
                <br><hr><br>
                <div class="col-md-12">
                  <h3>Add new Posts</h3>
                    <form method="POST" action="{{route('blog.blog_posts')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
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