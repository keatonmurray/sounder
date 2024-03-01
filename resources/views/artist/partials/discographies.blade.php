<div class="mt-30" style="height: auto;">
    <br>
    <div class="row">
        @if(count($albums) > 0)
            @foreach($albums as $result)
                <div class="col-6 col-lg-6">
                    <div class="single-album px-2">
                        <a href="/albums/{{$result->id}}">
                            <img src="{{asset('storage/' . $result->album_cover)}}">
                        </a>
                        <div class="album-info">
                            <a href="/albums/{{$result->id}}">
                                <h5>{{$result->album_title}}</h5>
                            </a>
                            <p>{{$result->name}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    @if(count($albums) == 0) 
        <p class="text-muted text-center">You have not posted any music yet</p>
    @endif
</div>