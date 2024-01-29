<section class="oneMusic-buy-now-area has-fluid bg-gray section-padding-100">
    <div class="container-fluid">
        <x-row-heading>
            <p>Artist Merch</p>
            <h2>Support Directly</h2>
        </x-row-heading>
        <div class="row">

            
            <!-- Single Album Area -->
            @foreach($results as $result)
            <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                <div class="single-album-area wow fadeInUp" data-wow-delay="200ms">
                    <div class="album-thumb">
                        <img src="{{asset('storage/' . $result->merch)}}" alt="">
                    </div>
                    <div class="album-info text-center">
                        <a href="#">
                            <h5>{{$result->merch_name}}</h5>
                        </a>
                        <p>{{$result->artist_name}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
