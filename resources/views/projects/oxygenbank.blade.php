<x-layout>
    @section('content')
    <div class="fh5co-hero">
        <div class="fh5co-overlay"></div>
        <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/a40.jpeg);  filter: blur(2px);  -webkit-filter: blur(2px);"></div>
            <div class="desc animate-box" style="margin-left: 0% !important;">
                <h1 style="color: white;font-size:50px"><strong>Money isn't the most important thing in life, but it's reasonably close to oxygen on the 'gotta have it' scale.”</strong></h1>
                <span><a class="btn btn-primary btn-lg" style="z-index: 0"  href="{{route('donate')}}">Donate Now</a></span>
            </div>
    </div>
    <div class="container" style="padding: 5%">
        <h2><b>Oxygen Bank</b></h2>
        <p style="margin-top: 3%">
            Oxygen Bank also called ‘the Breath Saving Project’ is consideringas the most vital service the foundation have provided so far. At a very chaotic situation during the Covid pandemic, when even the hospitals were unable to manage enough Oxygens for the admitted patient the volunteers took the responsibility. They were on the move whenever it requires no matter whether it’s night or day. The peoples we titled frontliners at the pandemic definitely would love to have our volunteers as they provided Oxygens over 200 peoples hand to hand completely at free of cost.
            The project costs almost 1,39,000 BDT so far and our service is still on going here and there inside Dhaka. 
        </p>
    </div>
    <div id="fh5co-feature-product" class="fh5co-section-gray">
        <div class="container">
            <div class="row">
              <div class="col-md-12 text-center heading-section" style="padding-left:10%;padding-right:10%;text-align:center">
                  <h2 style="text-align: center;"><b>Our Recent Activities On Women Empowerment </b></h2><br>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="card" style="width: 18rem;">
                        <img class="card-img-top zoom" src="images/a12.jpeg" height="150px" width="220px" alt="Card image cap"><br>
                        <div class="card-body">
                          <h3 style="font-size: 25px" class="card-title"><b>Card title</b></h3>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card" style="width: 18rem;">
                        <img class="card-img-top zoom" src="images/a13.jpeg" height="150px" width="220px" alt="Card image cap"><br>
                        <div class="card-body">
                          <h3 style="font-size: 25px" class="card-title"><b>Card title</b></h3>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card" style="width: 18rem;">
                        <img class="card-img-top zoom" src="images/a14.jpeg" height="150px" width="220px" alt="Card image cap"><br>
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
    <div style="padding: 5%">
        <div class="container">
            <div class="containerx col-md-12">
                <img src="images/a8.jpeg" height="450px" width="100%" alt="" />
                <div class="overlay" style="text-align: center">
                   <a class="btn btn-success" id="see_more" style="margin-top:13%">See More Photos</a>
                </div>
            </div>
        </div>
    </div>
    <div id="project_photos" style="padding: 5%">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3">
                  <img src="images/a17.jpeg" height="350px" width="290px" alt="" />
                </div>
                <div class="col-md-3">
                    <img src="images/a1.jpeg" height="350px" width="290px" alt="" />
                </div>
                <div class="col-md-3">
                    <img src="images/a2.jpeg" height="350px" width="290px" alt="" />
                </div>
                <div class="col-md-3">
                    <img src="images/a3.jpeg" height="350px" width="290px" alt="" />
                </div>
            </div>
            <div class="row text-center" style="padding: 2%">
                <a class="btn btn-danger" id="see_less">See Less</a>
            </div>
        </div> 
    </div>
    @endsection
    @section('script')
    
	<script>
		$(document).ready(function () {
            $("#project_photos").hide(); 
            $("#see_more").click(function() {
                $("#project_photos").show();  
                $('html,body').animate({
                   scrollTop: $("#project_photos").offset().top},
                'slow');            
            });
            $("#see_less").click(function() {
                $("#project_photos").hide(); 
                $('html,body').animate({
                   scrollTop: $("#see_more").offset().top},
                'slow');               
            });
		});
	</script>    
    @endsection
</x-layout>