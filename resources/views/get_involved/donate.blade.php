<x-layout>
    @section('content')
    <div class="fh5co-hero">
        <div class="fh5co-overlay"></div>
        <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/pp11.jpg);  filter: blur(2px);  -webkit-filter: blur(2px);"></div>
            <div class="desc animate-box">
                <h1 style="color: white;font-size:60px"><strong>Donate Here</strong></h1>
            </div>
    </div>
    <div id="fh5co-feature-product" class="fh5co-section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center heading-section" style="padding-left:10%;padding-right:10%">
                    <div class="row">
                        <div class="col-8">
                          <form action="{{route('donate.submit')}}" method="POST">
                            @csrf
                              <div style="background-color: black;color:white; padding:5%">
                                <div class="col-12 form-group">
                                    <input type="text" class="form-control" name="donation_amount" placeholder="Enter Donation Amount">
                                </div>
                                <div class="row" style="margin-top: 3%">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="f_name" class="form-control" placeholder="First name">
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" name="l_name" class="form-control" placeholder="Last name">
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="email" class="form-control" placeholder="Email">
                                </div>            
                                <div class="col-md-6 form-group">
                                    <input type="text" name="address" class="form-control" placeholder="Address">
                                </div>  
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                    <textarea name="massage" style="color: black" id="" cols="50" rows="5" placeholder="Massage"></textarea>
                                    </div>              
                                </div>
                                <div class="row">
                                    <label for="">Choose Your Payment Method</label> <br><br>
                                    <div class="col-md-4 form-group">
                                       <a class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Bkash</a>
                                    </div>   
                                    <div class="col-md-4 form-group">
                                        <a class="btn btn-success" data-toggle="modal" data-target="#exampleModal1">Rocket</a>
                                    </div> 
                                    <div class="col-md-4 form-group">
                                        <a class="btn btn-warning" data-toggle="modal" data-target="#exampleModal2">Nagad</a>
                                    </div>    <br>        
                                </div>
                                <button style="margin-top: 2%" type="submit" class="btn btn-info">Donate Now</button>
                            </div>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h2 class="modal-title" id="exampleModalLabel">Bkash</h2>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <p><b>Our Bkash Number : 01982828282</b></p><br>
                                    <input type="text" name="b_tnumber" class="form-control" placeholder="Give your Transaction Number">
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Done</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h2 class="modal-title" id="exampleModalLabel">Rocket</h2>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                      <p><b>Our Rocket Number : 01982828282</b></p><br>
                                      <input type="text" name="r_tnumber" class="form-control" placeholder="Give your Transaction Number">
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Done</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h2 class="modal-title" id="exampleModalLabel">Nagad</h2>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                      <p><b>Our Nagad Number : 01982828282</b></p><br>
                                      <input type="text" name="n_tnumber" class="form-control" placeholder="Give your Transaction Number">
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Done</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </form>

                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
    </x-layout>