<x-admin-dashboard>
    @section('admin_content')
      <div class="row">
        <div class="col-12">
          <div class="card card-chart">
            <div class="card-header ">
              <div class="row">
                <div class="col-sm-6 text-left">
                  <h5 class="card-category">Contact Show</h5>
                  <h2 class="card-title">View Contacts</h2>
                </div>
                <div class="col-md-12">
                  <table class="table table-dark">
                    <thead>
                      <tr>
                        <th scope="col" style="color: white">#</th>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">message</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($contact as $item)
                            <tr>
                                <th scope="row" style="color: white">1</th>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->message}}</td>
                            </tr> 
                        @endforeach
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