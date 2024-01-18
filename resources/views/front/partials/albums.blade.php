<section class="latest-albums-area section-padding-100 bg-white">
    <div class="container">
        <x-row-heading>
            <p>See what’s new</p>
            <h2>Discover Sounder Community</h2>
        </x-row-heading>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="ablums-text text-center mb-70">
                    <p>Nam tristique ex vel magna tincidunt, ut porta nisl finibus. Vivamus eu dolor eu quam varius rutrum. Fusce nec justo id sem aliquam fringilla nec non lacus. Suspendisse eget lobortis nisi, ac cursus odio. Vivamus nibh velit, rutrum at ipsum ac, dignissim iaculis ante. Donec in velit non elit pulvinar pellentesque et non eros.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="albums-slideshow owl-carousel">
                    @if(count($results) > 0)
                        @foreach($results as $music)
                            <div class="single-album">
                                <img src="{{asset('storage/' . $music->album_cover)}}" alt="">
                                <div class="album-info">
                                    <a href="/albums/{{$music->id}}">
                                        <h5>{{$music->album_title}}</h5>
                                    </a>
                                    <p>{{$music->artist_name}}</p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>