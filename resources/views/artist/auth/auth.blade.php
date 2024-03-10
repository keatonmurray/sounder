<section id="artistProfile1" class="jumbotron-fluid text-center border-0 bg-white">
    <div class="head px-5 py-4 bg-absolute bg-overlay justify-content-center" style="background-image: url('{{$profile->profile_picture ? asset('storage/' . $profile->cover_photo) : asset('assets/img/bg-img/no-image.png')}}');
        height: auto;">
        <div class="artist-profile-section">
            <div id="artistProfileInfo">
                <img src="{{$profile->profile_picture ? asset('storage/' . $profile->profile_picture) : asset('assets/img/bg-img/no-image.png')}}" class="rounded-circle" ></br>
                <h2 class="artist-name">{{$profile->artists->name}}</h2>
                <h6 class="country">Montreal, CA</h6>
                <div class="buttons">
                    <a href="/update-artist-profile/{{$profile->id}}" id="followBtn" class="btn btn-light mt-2 mr-1">
                        <i class="fa-solid fa-user-pen"></i> Edit Profile
                    </a>
                    <a href="/artist-dashboard" id="messageBtn" class="btn btn-light mt-2 ml-1">
                        <i class="fa-solid fa-user"></i> Go to Dashboard
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="artistNavSection">
        <div class="container">
            <div class="nav nav-tabs nav-fill d-flex w-100 justify-content-center" id="nav-tab" role="tablist">
                <h4 class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Albums</h4>
                <h4 class="nav-item nav-link" id="nav-merch-tab" data-toggle="tab" href="#nav-merch" role="tab" aria-controls="nav-merch" aria-selected="false">Merch</h4>
                <h4 class="nav-item nav-link" id="nav-tours-tab" data-toggle="tab" href="#nav-tours" role="tab" aria-controls="nav-tours" aria-selected="false">Tours</h4>
            </div>
            <div class="tab-content mt-30" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                   @include('artist.auth.partials.albums')
                </div>
                <div class="tab-pane fade" id="nav-merch" role="tabpanel" aria-labelledby="nav-merch-tab">
                    @include('artist.auth.partials.merch')
                </div>
                <div class="tab-pane fade" id="nav-tours" role="tabpanel" aria-labelledby="nav-tours-tab">
                    @include('artist.auth.partials.tours')
                </div>
            </div>
        </div>
    </div>
</section>