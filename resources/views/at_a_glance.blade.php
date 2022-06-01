<x-layout>
    @section('content')
    <div class="fh5co-hero">
        <div class="fh5co-overlay"></div>
        <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/a103.jpg);  filter: blur(2px);  -webkit-filter: blur(2px);"></div>
            <div class="desc animate-box">
                <h1 style="color: white;font-size:60px"><strong>“At a Glance”</strong></h1>
                {{-- <span><a class="btn btn-primary btn-lg" style="z-index: 0"  href="{{route('donate')}}">Donate Now</a></span> --}}
            </div>
    </div>
    <div id="fh5co-feature-product" class="fh5co-section-gray">
        <div class="container">
            <div class="row">
              <div class="col-md-12 text-center heading-section" style="padding-left:10%;padding-right:10%;text-align:center">
                  {{-- <h2 style="text-align: center;"><b>Here's some of our recent Campaign.</b></h2><br> --}}
                @foreach ($posts as $item)
                    <div class="row" style="margin-bottom: 5%">
                        <div class="feature-text col-md-12">
                            <h1><b>{{$item->title}}</b></h1>
                            <p>{{$item->blogs_content}}</p>
                            <img src="{{ url('images/blog_images/'.$item->blogs_img) }}" width="100%" height="auto" alt="">
                        </div>
                    </div>   
                @endforeach                 
              </div> 
        </div>
    </div>
</div>
    @endsection
</x-layout>