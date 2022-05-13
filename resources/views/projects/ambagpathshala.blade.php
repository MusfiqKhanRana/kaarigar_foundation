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
        <h2><b>AmbagPathshala</b></h2>
        <p style="margin-top: 3%">
            AmbagPathshala is an institution we have established to serve the quality education for the Childs who are underprivileged. The foundation has always been aiming to do something for the society no matter what it is, or how we have done it. Ensuring education for childs from all corners of the society is one of the keys we have focused on from the very beginning of our journey – said Fuad Khandakar. The School has named by the name of its locality called ‘AMBAG’ under SONARGAON, NARAYANGONJ. The school have provided education from play to grade two to the kids and its all free for the maximums in term of financial equivalence of them. Ther school have more than 50 students right now at all and more than 35 students are being financed by the foundation. Its including all the accessories , foods, medical support and many more. To run this school, we have spent 2,35000 BDT so far even having a very small finance and with many more challenges.
            The executive panel took a decision to establish 5 more schools in five different locations and initially the budget requires 3,00,000 BDT 
        </p>
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
                          <h3 style="font-size: 25px" class="card-title"><b>AmbagPathshala</b></h3>
                          <p class="card-text">AmbagPathshala is an institution we have established to serve the quality education for the Childs who are underprivileged.</p>
                          {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card" style="width: 18rem;">
                        <img class="card-img-top zoom" src="images/a17.jpeg" height="150px" width="220px" alt="Card image cap"><br>
                        <div class="card-body">
                          <h3 style="font-size: 25px" class="card-title"><b>AmbagPathshala</b></h3>
                          <p class="card-text">AmbagPathshala is an institution we have established to serve the quality education for the Childs who are underprivileged.</p>
                          {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card" style="width: 18rem;">
                        <img class="card-img-top zoom" src="images/kf2.jpeg" height="150px" width="220px" alt="Card image cap"><br>
                        <div class="card-body">
                          <h3 style="font-size: 25px" class="card-title"><b>AmbagPathshala</b></h3>
                          <p class="card-text">AmbagPathshala is an institution we have established to serve the quality education for the Childs who are underprivileged.</p>
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
                <img src="images/a16.jpeg" height="450px" width="100%" alt="" />
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
                  <img src="images/a36.jpeg" height="350px" width="290px" alt="" />
                </div>
                <div class="col-md-3">
                    <img src="images/a37.jpeg" height="350px" width="290px" alt="" />
                </div>
                <div class="col-md-3">
                    <img src="images/a38.jpeg" height="350px" width="290px" alt="" />
                </div>
                <div class="col-md-3">
                    <img src="images/a39.jpeg" height="350px" width="290px" alt="" />
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