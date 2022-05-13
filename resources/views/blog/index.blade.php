<x-layout>
    @section('content')
    <div class="fh5co-hero">
        <div class="fh5co-overlay"></div>
        <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/a16.jpeg);  filter: blur(2px);  -webkit-filter: blur(2px);"></div>
            <div class="desc animate-box">
                <h2 style="color: white">We Are <strong>Non-profit</strong></h2>
            
                <span><a class="btn btn-primary btn-lg" href="#">Donate Now</a></span>
            </div>
        
    
    </div>
    
    <div id="fh5co-blog-section" class="fh5co-section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    <p>He who has never denied himself for the sake of giving, has but glanced at the joys of charity.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row row-bottom-padded-md">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="fh5co-blog animate-box">
                        <a href="#"><img class="img-responsive" src="images/a5.jpeg" alt=""></a>
                        <div class="blog-text">
                            <div class="prod-title" style="text-align: center">
                                <p style="color: white;  font-family: Garamond, serif;margin-top:10px"><b>Annual Result and prize giving ceremony of Ambag Pathshaala at 31st December.</b></p>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="fh5co-blog animate-box">
                        <a href="#"><img class="img-responsive" src="images/a6.jpeg" alt=""></a>
                        <div class="blog-text">
                            <div class="prod-title" style="text-align: center">
                                <p style="color: white;  font-family: Garamond, serif;margin-top:10px"><b>Certificate distribution of 'Sewing Machine training course' at the late afternoon of the last day of 2021.</b></p>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="clearfix visible-sm-block"></div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="fh5co-blog animate-box">
                        <a href="#"><img class="img-responsive" src="images/a7.jpeg" alt=""></a>
                        <div class="blog-text">
                            <div class="prod-title" style="text-align: center">
                                <p style="color: white;  font-family: Garamond, serif;margin-top:10px"><b>The year started with a discussion session about proper parenting with the gurdians.</b></p>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="clearfix visible-md-block"></div>
            </div>

            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center animate-box">
                    <a href="{{route('blog.index')}}" class="btn btn-primary btn-lg">Our Blog</a>
                </div>
            </div>

        </div>
    </div>
    @endsection
    </x-layout>