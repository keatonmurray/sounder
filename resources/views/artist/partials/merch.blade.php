<div class="mt-30">
    <br>
    @if(count($merches) > 0)
        @foreach($merches as $result)
            <div class="row oneMusic-albums">
                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item t g u">
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
            </div>
        @endforeach
        @else
        <p class="text-center">You have not posted any music yet</p>
    @endif
</div>