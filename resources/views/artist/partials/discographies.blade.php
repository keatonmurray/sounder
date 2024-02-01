<section class="album-catagory section-padding-100-0 bg-white">
    <div class="container">
        <div class="mb-30 mt-30">
            <h2>Discographies</h2>
        </div>
        @if(count($artists) > 0)
            @foreach($artists as $result)
                <div class="row oneMusic-albums">
                    <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item t g u">
                        <div class="single-album">
                            <a href="/albums/{{$result->id}}">
                                <img src="{{asset('storage/' . $result->album_cover)}}" alt="">
                            </a>
                            <div class="album-info">
                                <a href="/albums/{{$result->id}}">
                                    <h5>{{$result->artist_name}}</h5>
                                </a>
                                <p>{{$result->album_title}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        <div class="row mt-30">
            <div class="col-12">
                <div class="load-more-btn text-center">
                    <a href="#" class="btn oneMusic-btn">Load More <i class="fa fa-angle-double-right"></i></a>
                </div>
            </div>
        </div>
        @else
        <p class="text-center">You have not posted any music yet</p>
        @endif
        <br><br><br>
    </div>
</section>