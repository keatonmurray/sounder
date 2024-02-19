<div class="mt-30" style="height: auto;">
    <br>
    <div class="row">
        @if(count($artists) > 0)
            @foreach($artists as $result)
                <div class="col-12 col-md-3 col-md-3 col-lg-3">
                    <div class="single-album px-2">
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
            @endforeach
        @endif
    </div>
</div>