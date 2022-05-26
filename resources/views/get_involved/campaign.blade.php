<x-layout>
    @section('content')
    <div class="fh5co-hero">
        <div class="fh5co-overlay"></div>
        <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/a21.jpeg);  filter: blur(2px);  -webkit-filter: blur(2px);"></div>
            <div class="desc animate-box" style="margin-left: 0% !important;">
                <h1 style="color: white;font-size:60px"><strong>“Service to others is the rent you pay for your room here on earth.”</strong></h1>
                <span><a class="btn btn-primary btn-lg" style="z-index: 0"  href="{{route('donate')}}">Donate Now</a></span>
            </div>
    </div>
    <div id="fh5co-feature-product" class="fh5co-section-gray">
        <div class="container">
            <div class="row">
              <div class="col-md-12 text-center heading-section" style="padding-left:10%;padding-right:10%;text-align:center">
                  <h2 style="text-align: center;"><b>Here's some of our recent Campaign.</b></h2><br>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="card" style="width: 18rem;">
                        <img class="card-img-top zoom" src="images/a22.jpeg" height="150px" width="220px" alt="Card image cap"><br>
                        <div class="card-body">
                          <h5 style="font-size: 20px" class="card-title"><b>Festival for all(Campaign 1)</b></h5>
                          <p class="card-text" style="font-size: 15px">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card" style="width: 18rem;">
                        <img class="card-img-top zoom" src="images/a23.jpeg" height="150px" width="220px" alt="Card image cap"><br>
                        <div class="card-body">
                          <h5 style="font-size: 20px" class="card-title"><b>Seasonal Food Giving Festival</b></h5>
                          <p class="card-text" style="font-size: 15px">We have been providing food, clothing and money for the last two years at various festivals for the disadvantaged people.</p>
                          {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card" style="width: 18rem;">
                        <img class="card-img-top zoom" src="images/a24.jpeg" height="150px" width="220px" alt="Card image cap"><br>
                        <div class="card-body">
                          <h5 style="font-size: 20px" class="card-title"><b>Festival for all(Campaign 2)</b></h5>
                          <p class="card-text" style="font-size: 15px">We have been providing food, clothing and money for the last two years at various festivals for the disadvantaged people.</p>
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