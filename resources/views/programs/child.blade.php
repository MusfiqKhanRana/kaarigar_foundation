<x-layout>
    @section('content')
    <div class="fh5co-hero">
        <div class="fh5co-overlay"></div>
        <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/a15.jpeg);  filter: blur(2px);  -webkit-filter: blur(2px);"></div>
            <div class="desc animate-box" style="margin-left: 0% !important;">
                <h1 style="color: white;font-size:60px"><strong>“He who opens a school door, closes a prison.”</strong></h1>
                <span><a class="btn btn-primary btn-lg" style="z-index: 0"  href="{{route('donate')}}">Donate Now</a></span>
            </div>
    </div>
    <div id="fh5co-feature-product" class="fh5co-section-gray">
        <div class="container">
            <div class="row">
              <div class="col-md-12 text-center heading-section" style="padding-left:10%;padding-right:10%;text-align:center">
                  <h2 style="text-align: center;"><b>Our School for underprivileged Children</b></h2><br>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="card" style="width: 18rem;">
                        <img class="card-img-top zoom" src="images/a16.jpeg" height="150px" width="220px" alt="Card image cap"><br>
                        <div class="card-body">
                          <h3 style="font-size: 25px" class="card-title"><b>Card title</b></h3>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card" style="width: 18rem;">
                        <img class="card-img-top zoom" src="images/a17.jpeg" height="150px" width="220px" alt="Card image cap"><br>
                        <div class="card-body">
                          <h3 style="font-size: 25px" class="card-title"><b>Card title</b></h3>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card" style="width: 18rem;">
                        <img class="card-img-top zoom" src="images/kf2.jpeg" height="150px" width="220px" alt="Card image cap"><br>
                        <div class="card-body">
                          <h3 style="font-size: 25px" class="card-title"><b>Card title</b></h3>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                        </div>
                      </div>
                    </div>
                  </div>
              </div> 
        </div>
    </div>
    @endsection
</x-layout>