<x-layout>
    @section('content')
    <div class="fh5co-hero">
        <div class="fh5co-overlay"></div>
        <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/blog_images/{{$blogs->b_img}});  filter: blur(2px);  -webkit-filter: blur(2px);"></div>
            <div class="desc animate-box">
                <h2 style="color: white">{{$blogs->tag_line}}</h2>
            
                <span><a class="btn btn-primary btn-lg" href="{{route('donate')}}">Donate Now</a></span>
            </div>
        
    
    </div>
    
    <div id="fh5co-blog-section" class="fh5co-section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                    <p>{{$blogs->quote_line}}</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row row-bottom-padded-md">
                @foreach ($posts as $item)
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="fh5co-blog animate-box">
                            <a href="#"><img class="img-responsive" src="images/blog_images/{{$item->blogs_img}}" alt=""></a>
                            <div class="blog-text">
                                <div class="prod-title" style="text-align: center">
                                    <p style="color: white;  font-family: Garamond, serif;margin-top:10px"><b>{{$item->blogs_content}}</b></p>
                                </div>
                            </div> 
                        </div>
                    </div>
                @endforeach
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