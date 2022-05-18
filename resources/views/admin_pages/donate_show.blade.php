<x-admin-dashboard>
    @section('admin_content')
      <div class="row">
        <div class="col-12">
          <div class="card card-chart">
            <div class="card-header ">
              <div class="row">
                <div class="col-sm-6 text-left">
                  <h5 class="card-category">Donation Show</h5>
                  <h2 class="card-title">View Donation</h2>
                </div>
                <div class="col-md-12">
                  <table class="table table-dark">
                    <thead>
                      <tr>
                        <th scope="col" style="color: white">#</th>
                        <th scope="col">Donator's name</th>
                        <th scope="col">Donation Programs</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Massage</th>
                        <th scope="col">Donation Amount</th>
                        <th scope="col">Transection Number</th>
                        <th scope="col">Donation Date</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($donate as $item)
                            <tr>
                                <th scope="row" style="color: white">1</th>
                                <td>{{$item->f_name}} {{$item->l_name}}</td>
                                <td>{{$item->programs}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->address}}</td>
                                <td>{{$item->massage}}</td>
                                <td>{{$item->donation_amount}}</td>
                                <td>
                                    <li>Bkash: {{$item->b_tnumber}}</li>   
                                    <li>Nagad: {{$item->n_tnumber}}</li> 
                                    <li>Rocket: {{$item->r_tnumber}}</li>
                                </td>
                                <td>{{$item->created_at}}</td>
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