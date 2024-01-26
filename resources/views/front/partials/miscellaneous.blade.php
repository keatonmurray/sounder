<!-- ##### Miscellaneous Area Start ##### -->
<section class="miscellaneous-area section-padding-100-0 bg-white">
    <x-row-heading>
        <p>Trending on Sounder</p>
        <h2>Top 10 Most Played</h2>
    </x-row-heading>
    <div class="container">
        <div class="row">
            <!-- ***** New Hits Songs ***** -->
            <div class="col-12 col-lg-4">
                <div class="new-hits-area mb-100">
                    <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                        <p>See what’s new</p>
                        <h2>New Hits</h2>
                    </div>
                    @foreach($results as $result)
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="{{asset('storage/' . $result->album_cover)}}" alt="">
                                </div>
                                <div class="content-">
                                    <h6>{{$result->artist_name}}</h6>
                                    <p>{{$result->album_title}}</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/dummy-audio.mp3">
                            </audio>
                        </div>
                    @endforeach
                </div>
            </div>
                    
            <div class="col-12 col-lg-4">
                <div class="new-hits-area mb-100">
                    <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                        <p>See what’s new</p>
                        <h2>New Hits</h2>
                    </div>
                    @foreach($results as $result)
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="{{asset('storage/' . $result->album_cover)}}" alt="">
                                </div>
                                <div class="content-">
                                    <h6>{{$result->artist_name}}</h6>
                                    <p>{{$result->album_title}}</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/dummy-audio.mp3">
                            </audio>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="new-hits-area mb-100">
                    <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                        <p>See what’s new</p>
                        <h2>New Hits</h2>
                    </div>
                    @foreach($results as $result)
                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="{{asset('storage/' . $result->album_cover)}}" alt="">
                                </div>
                                <div class="content-">
                                    <h6>{{$result->artist_name}}</h6>
                                    <p>{{$result->album_title}}</p>
                                </div>
                            </div>
                            <audio preload="auto" controls>
                                <source src="audio/dummy-audio.mp3">
                            </audio>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>