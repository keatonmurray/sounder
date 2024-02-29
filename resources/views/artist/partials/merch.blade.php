<div class="mt-30">
    <br>
    <div class="row oneMusic-albums">
        @if(count($merches) > 0)
            @foreach($merches as $result)
                <div class="col-6 col-md-3 col-lg-3">
                    <div class="single-album px-2">
                        <a href="/albums/{{$result->id}}">
                            <img src="{{asset('storage/' . $result->merch_first_upload)}}">
                        </a>
                        <div class="album-info">
                            <p>${{$result->merch_price}}</p>
                            <a href="/albums/{{$result->id}}">
                                <h5>{{$result->merch_name}}</h5>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    @if(count($merches) == 0) 
        <p class="text-muted text-center">All of the merches you post will show up on this page for your fans to see. If you are not seeing anything, you probably haven't added anything yet. Start by adding one!</p>
    @endif
</div>