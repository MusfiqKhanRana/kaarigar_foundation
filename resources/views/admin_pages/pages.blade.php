<x-admin-dashboard>
    @section('admin_content')
      <div class="row">
        <div class="col-12">
          <div class="card card-chart">
            <div class="card-header ">
              <div class="row">
                <div class="col-sm-6 text-left">
                  <h5 class="card-category">All Pages</h5>
                  <h2 class="card-title">View/Edit Pages</h2>
                </div>
                <div class="col-md-12">
                  <table class="table table-dark">
                    <thead>
                      <tr>
                        <th scope="col" style="color: white">#</th>
                        <th scope="col">Page Name</th>
                        <th scope="col">Page Slug</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row" style="color: white">1</th>
                        <td>Index</td>
                        <td>"/"</td>
                        <td><a type="button" href="{{route('admindashboard.edit.index_page')}}" class="btn btn-primary">Edit</a></td>
                      </tr>
                      <tr>
                        <th scope="row" style="color: white">2</th>
                        <td>Programs</td>
                        <td>"programs"</td>
                        <td><a href="{{route('admindashboard.edit.programs_page')}}" type="button" class="btn btn-primary">Edit</a></td>
                      </tr>
                      <tr>
                        <th scope="row" style="color: white">3</th>
                        <td>Get Involved</td>
                        <td>"get_involved"</td>
                        <td><a href="{{route('admindashboard.edit.get_involve_page')}}" type="button" class="btn btn-primary">Edit</a></td>
                      </tr>
                      <tr>
                        <th scope="row" style="color: white">4</th>
                        <td>Projects</td>
                        <td>"projects"</td>
                        <td><a href="{{route('admindashboard.edit.projects_page')}}" type="button" class="btn btn-primary">Edit</a></td>
                      </tr>
                      <tr>
                        <th scope="row" style="color: white">5</th>
                        <td>About</td>
                        <td>"about"</td>
                        <td><a href="{{route('admindashboard.edit.about_page')}}" type="button" class="btn btn-primary">Edit</a></td>
                      </tr>
                      <tr>
                        <th scope="row" style="color: white">6</th>
                        <td>Blog</td>
                        <td>"blog"</td>
                        <td><a href="{{route('admindashboard.edit.blog_page')}}" type="button" class="btn btn-primary">Edit</a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="chart-area">
                <canvas id="chartBig1"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endsection
</x-admin-dashboard>