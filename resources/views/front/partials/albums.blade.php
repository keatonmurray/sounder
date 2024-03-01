<section class="latest-albums-area section-padding-100 bg-white">
    <div class="container">
        <x-row-heading>
            <p>Discover Sounder Community</p>
            <h2>See What's New</h2>
        </x-row-heading>
        <!--<div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="ablums-text text-center">
                    <p>Just like you, we are an independent streaming service working to provide a 
                        free platform for independent musicians to connect, share music, and sell it.
                        Designed to make more out of your music, we only take an 8% cut off of your every sale.
                    </p>
                </div>
            </div>
        </div>-->
        <div class="row">
            <div class="col-12">
                <div class="albums-slideshow owl-carousel">
                    @if(count($results) > 0)
                        @foreach($results as $music)
                            <div class="single-album">
                                <a href="/albums/{{$music->id}}">
                                    <img src="{{asset('storage/' . $music->album_cover)}}" alt="">
                                </a>
                                    <div class="album-info">
                                    <a href="/albums/{{$music->id}}">
                                        <h5>{{$music->album_title}}</h5>
                                    </a>
                                    <p>{{$music->name}}</p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>