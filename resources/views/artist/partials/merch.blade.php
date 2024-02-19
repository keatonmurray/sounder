<div class="mt-30">
    <br>
    <div class="row oneMusic-albums">
        @if(count($merches) > 0)
            @foreach($merches as $result)
                <div class="col-12 col-md-3 col-md-3 col-lg-3">
                    <div class="single-album">
                        <a href="/albums/{{$result->id}}">
                            <img src="{{asset('storage/' . $result->merch_first_upload)}}" alt="">
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
</div>