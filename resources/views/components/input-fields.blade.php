<script>
  $(document).ready(function() {
    var readURL = function(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
          $('.avatar').attr('src', e.target.result);  
        }
        reader.readAsDataURL(input.files[0]);
      }
    }
    $(".file-upload").on('change', function(){
      readURL(this);
    });
  });
</script>

<div class="container px-3 py-5" style="background-color: #f5f9fa;
border: 1px solid #d8d8d8; box-shadow: 0 2px 70px 0 rgba(0, 0, 0, 0.15);">
  <div class="row">
    <div class="col-md-5 mb-4">
      <h3 class="heading text-center">File Upload</h3>
      <div class="files">
        <div class="border-dashed text-center">
          <div class="text-center mb-4 mx-2">
            <h6>Album Cover</h6>
            <div class="thumbnail mt-3 mb-2">
              <img src="{{asset('assets/img/bg-img/gallery.svg')}}" class="avatar" alt="" style="height: 200px; width: 200px;">
            </div>
            <p>Album cover must not exceed 1500x1500px</p>
            <input type="file" name="file" id="file" class="file-upload">
            <label for="file" class="btn btn-dark d-block">Choose a file</label>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-7">
      <h3 class="heading">Album Details</h3>
      <div>
        <br>
        <div class="mb-3">
          <label for="albumTitle" class="form-label">Artist Name</label>
          <input type="text" name="artist_name" class="form-control" id="artistName" placeholder="Enter an artist name">
          <p class="text-muted">We'll set your account name by default if this field is left empty</p>
        </div>
        <div class="mb-3">
            <label for="albumTitle" class="form-label">Album Title</label>
            <input type="text" name="album_title" class="form-control" id="albumTitle" placeholder="Enter an album title">
        </div>
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Album Description</label>
          <textarea name="album_description" id="description" class="form-control" cols="20" rows="3" placeholder="Enter an album description"></textarea>
        </div>
        <div class="mb-3">
          <label for="genre" class="form-label">Genre</label>
          <div class="dropdown show d-flex">
            <select class="custom-select d-block w-50" required style="cursor: pointer;">
              <option value="Select Genre">Select Genre</option>
              <option>Pop</option>
              <option>Metal</option>
              <option>Rock</option>
              <option>Punk</option>
              <option>Avante-garde</option>
              <option>Dance</option>
              <option>Disco</option>
              <option>RnB</option>
              <option>Jazz</option>
              <option>Classical</option>
              <option>Others</option>
            </select>
            <input type="text" name="album_title" class="form-control ml-2" id="albumTitle" placeholder="Enter tags here (ie., #rap, #deathmetal, #pop)">
          </div>
        </div>
      </div>
    </div>
  </div>  
<div class="container px-3 py-5 mt-30" style="background-color: #f5f9fa;
border: 1px solid #d8d8d8; box-shadow: 0 2px 70px 0 rgba(0, 0, 0, 0.15);">
  <div class="audio-upload-area">
    <div class="row">
      <div class="col-md-5 text-center mb-4">
        <h3 class="heading text-center">Audio Upload</h3>
        <br>
        <div class="container">
          <div class="border-style px-4 py-4">
            <h6 class="mb-4">Audio Files</h6>
            <div class="thumbnail mt-3 mb-4">
              <img src="{{asset('assets/img/bg-img/file-audio-solid.svg')}}" alt="" style="height: 100px; width: 100px;">
            </div>
            <p class="text-muted">Multiple select MP3, WAV, or FLACC files</p>
            <input type="file" class="file-upload" name="audio[]" id="audio" multiple>
            <label for="audio" class="btn btn-dark d-block d-block">Choose a file</label>
          </div>
        </div>
      </div>
      <div class="col-md-7">
        <h3 class="heading">Digital Audio Downloading</h3>
        <br>
        <div class="mb-3">
          <label for="" class="form-label">Is this album downloadable for free?</label>
          <div class="dropdown show d-flex">
            <select class="custom-select d-block w-50" required style="cursor: pointer;">
              <option value="Select Genre">Select Option</option>
              <option>Yes</option>
              <option>No</option>
            </select>
            <input type="text" class="form-control ml-2" placeholder="If not, enter a price (eg., $1.99)">
          </div>
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Would you like to enable single-track purchasing?</label>
          <div class="dropdown show d-flex">
            <select class="custom-select d-block w-50" required style="cursor: pointer;">
              <option value="Select Genre">Select Option</option>
              <option>Yes</option>
              <option>No</option>
            </select>
            <input type="text" class="form-control ml-2" placeholder="Enter a price per track">
          </div>
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Would you like to make this album playable for free?</label>
          <input type="text" class="form-control" placeholder="Set a play limit using numbers between 0-10">
          <p class="text-muted">A purchase will be required once your max play limit is reached</p>
        </div>
    </div>
  </div>
</div>

<div class="container">
  <button type="submit" data-animation="fadeInUp" data-delay="500ms" href="/" class="btn oneMusic-btn-dark mt-4 d-block w-100">Upload to Sounder <i class="fa fa-angle-double-right"></i></button>
</div>