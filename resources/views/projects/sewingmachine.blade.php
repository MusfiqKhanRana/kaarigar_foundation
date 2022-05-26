<x-layout>
    @section('content')
    <div class="fh5co-hero">
      <div class="fh5co-overlay"></div>
      <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/a11.jpeg);  filter: blur(2px);  -webkit-filter: blur(2px);"></div>
          <div class="desc animate-box " style="margin-left:15% !important;">
              <h1 style="color: white;font-size:60px"><strong>If She Can Learn She can Earn.</strong></h1>
              <span><a class="btn btn-primary btn-lg" style="z-index: 0"  href="{{route('donate')}}">Donate Now</a></span>
          </div>
    </div>
    <div class="container" style="padding: 5%">
        <h2><b>Sewing Machine Training Course</b></h2>
        <p style="margin-top: 3%">
            Sewing machine training course is one of the 
            three big projects by the foundation
            Followed by the 'BREATHSAVING PROJECT' and
            'AMBAG PATHSHAALA’. The course is going on and Currently 30 ambitious but 
            Financially unable woman has enlisted themselves as they
            wants to learn it. We're looking forward to start more batches
            to help more peoples.
            Kaarigar Foundation is always aiming to create employment or at least to show the way to be employed as unemployment is the biggest crisis of the nation right now. 
            The project costs almost 1,39,000 BDT so far and our service is still on going here and there inside Dhaka. 
        </p>
    </div>
    <div id="fh5co-feature-product" class="fh5co-section-gray">
        <div class="container">
            <div class="row">
              <div class="col-md-12 text-center heading-section" style="padding-left:10%;padding-right:10%;text-align:center">
                  <h2 style="text-align: center;"><b>Our Recent Activities On Sewing Machine Traing Course </b></h2><br>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="card" style="width: 18rem;">
                        <img class="card-img-top zoom" src="images/a12.jpeg" height="150px" width="220px" alt="Card image cap"><br>
                        <div class="card-body">
                          <h3 style="font-size: 20px" class="card-title"><b>Training Course</b></h3>
                          <p class="card-text">We're looking forward to start more batches to help more peoples.</p>
                          {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card" style="width: 18rem;">
                        <img class="card-img-top zoom" src="images/a13.jpeg" height="150px" width="220px" alt="Card image cap"><br>
                        <div class="card-body">
                          <h3 style="font-size: 20px" class="card-title"><b>Training Course</b></h3>
                          <p class="card-text">We're looking forward to start more batches to help more peoples.</p>
                          {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card" style="width: 18rem;">
                        <img class="card-img-top zoom" src="images/a14.jpeg" height="150px" width="220px" alt="Card image cap"><br>
                        <div class="card-body">
                          <h3 style="font-size: 20px" class="card-title"><b>Training Course</b></h3>
                          <p class="card-text">We're looking forward to start more batches to help more peoples.</p>
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