@if($music)
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

    <div class="row mt-30">
        <div class="col-12">
            <div class="load-more-btn text-center">
                <a href="#" class="btn oneMusic-btn">Load More <i class="fa fa-angle-double-right"></i></a>
            </div>
        </div>
    </div>
@else
<p class="text-center">You have not purchased anything yet</p>
@endif