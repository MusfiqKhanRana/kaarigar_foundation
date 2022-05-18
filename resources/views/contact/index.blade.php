<x-layout>
    @section('content')
    <div class="fh5co-hero">
        <div class="fh5co-overlay"></div>
        <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/a15.jpeg);  filter: blur(2px);  -webkit-filter: blur(2px);"></div>
            <div class="desc animate-box">
                <h2 style="color: white">We Are <strong>Non-profit</strong></h2>
            
                <span><a class="btn btn-primary btn-lg" href="{{route('donate')}}">Donate Now</a></span>
            </div>
        
    
    </div>
    
    <div id="fh5co-contact" class="animate-box">
        <div class="container">
            <form action="{{route('contacts.store')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="section-title">Our Address</h3>
                        {{-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> --}}
                        <ul class="contact-info">
                            <li><i class="icon-location-pin"></i>Wasa Road, Paity Bottola, Demra, Dhaka - 1361 <br></li>                              
                            <li><i class="icon-phone2"></i> +8801537207950<br></li>
                            <li><i class="icon-mail"></i><a href="#">Kaarigarorgbd@gmail.com</a></li>
                            {{-- <li><i class="icon-globe2"></i><a href="#">www.yoursite.com</a></li> --}}
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="" cols="30" rows="7" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- END fh5co-contact -->
    <div  class="fh5co-map" style="width:100%;"><iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d305.6088656641047!2d90.47728177309021!3d23.72269677244188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d23.7228362!2d90.4776163!4m5!1s0x3755b779730fb0b5%3A0xaff96648855e0b71!2sMatuail%2C%20Dhaka!3m2!1d23.712033599999998!2d90.4573131!5e1!3m2!1sen!2sbd!4v1641592275948!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>

    @endsection
    </x-layout>