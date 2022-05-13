<x-layout>
    @section('content')
    <div class="fh5co-hero">
        <div class="fh5co-overlay"></div>
        <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/a15.jpeg);  filter: blur(2px);  -webkit-filter: blur(2px);"></div>
            <div class="desc animate-box" style="margin-left: 0% !important;">
                <h1 style="color: white;font-size:60px"><strong>“He who opens a school door, closes a prison.”</strong></h1>
            </div>
    </div>
    <div class="container" style="padding: 5%">
        <h2><b>Zakat Distribution</b></h2>
        <p style="margin-top: 3%">
            The Foundation has been distributing Zakat Collections amongst the listed people every year. As we all know, Zakat is a holy way to distributing money towards the needy. A list had created and has been updating over the years who can afford Zakat.  
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