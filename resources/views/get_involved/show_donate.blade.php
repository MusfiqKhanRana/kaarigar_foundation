<x-layout>
    @section('content')
        <div class="fh5co-hero">
            <div class="fh5co-overlay"></div>
            <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url({{asset('images/show_donation.jpg')}});  filter: blur(2px);  -webkit-filter: blur(2px);"></div>
                <div class="desc animate-box">
                    <h1 style="color: rgb(244, 244, 244);font-size:60px;margin-left:-55%!important;margin-bottom:60%!important;"><strong>Thanks For Your Donation!</strong></h1>
                </div>
        </div>
        <div id="fh5co-feature-product" class="fh5co-section-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center heading-section" style="padding-left:10%;padding-right:10%">
                        <div class="row">
                            <div class="col-8 editor" style="border-radius:2px dashed blue">
                                <h1><b>Kaarigar Foundation</b></h1><br>
                                <h3><b>Your Donation Information :</b></h3><br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>Donation Program : <b>{{$donate->programs}}</b></p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Donation Amount : <b>{{$donate->donation_amount}}</b></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <P>First Name : <b>{{$donate->f_name}}</b></P>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Last Name : <b>{{$donate->l_name}}</b></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>Email : <b>{{$donate->email}}</b></p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Address : <b>{{$donate->address}}</b></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>Massage : <b>{{$donate->massage}}</b></p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Transaction Number : 
                                            @if ($donate->b_tnumber!=null)
                                                <b>{{$donate->b_tnumber}}</b>
                                            @endif
                                            @if ($donate->r_tnumber!=null)
                                                <b>{{$donate->r_tnumber}}</b>
                                            @endif
                                            @if ($donate->n_tnumber!=null)
                                                <b>{{$donate->n_tnumber}}</b>
                                            @endif
                                        </p> 
                                    </div>
                                </div>
                                <div class="row">
                                    <p>Transaction Media : 
                                        @if ($donate->b_tnumber!=null)
                                            <b>Bkash</b>
                                        @endif
                                        @if ($donate->r_tnumber!=null)
                                            <b>Rocket</b>
                                        @endif
                                        @if ($donate->n_tnumber!=null)
                                            <b>Nagad</b>
                                        @endif
                                    </p>
                                    {{-- <li>Bkash : {{$donate->b_tnumber}}</li><li>Rocket : {{$donate->r_tnumber}}</li><li>Nagad : {{$donate->n_tnumber}}</li> --}}
                                </div>
                            </div>
                            <button class="btn btn-success btn_pdf">Download Donation info</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
</x-layout>