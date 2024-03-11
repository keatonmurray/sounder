<div class="mt-30 h-auto">
    <div class="row">
        @if(count($merch) > 0)
            @foreach($merch as $result)
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
    @if(count($merch) == 0) 
        <div class="informative-message justify-content-center">
            <p class="text-muted text-center">Oops! Looks like this artist hasn't added any merch yet. Meanwhile, you may hit the follow button and we'll give you a heads up!</p>
        </div>
    @endif
</div>