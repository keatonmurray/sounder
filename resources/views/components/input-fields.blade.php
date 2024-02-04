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
      <h3 class="heading">File Upload</h3>
      <div class="files">
        <div class="border-dashed text-center">
          <div class="text-center mb-4 mx-2">
            <h6>Album Cover</h6>
            <div class="thumbnail mt-3 mb-2">
              <img src="{{asset('assets/img/bg-img/gallery.svg')}}" class="avatar" alt="" style="height: 100px; width: 100px;">
            </div>
            <p>Album cover must not exceed 1500x1500px</p>
            <input type="file" name="file" id="file" class="file-upload">
            <label for="file" class="btn btn-dark d-block d-block">Choose a file</label>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-7">
      <h3 class="heading">Album Details</h3>
      <div>
        <br>
        <div class="mb-3">
            <label for="albumTitle" class="form-label">Album Title</label>
            <input type="text" name="album_title" class="form-control" id="albumTitle">
          </div>
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Album Description</label>
          <textarea name="album_description" id="description" class="form-control" cols="20" rows="3"></textarea>
        </div>
        <div class="mb-3">
          <label for="genre" class="form-label">Genre</label>
          <div class="dropdown show d-flex">
            <select class="custom-select d-block w-50" required>
              <option value="Select Genre">Select Genre</option>
              <option>Pop</option>
              <option>Metal</option>
              <option>Rock</option>
              <option>Punk</option>
              <option>Dance</option>
              <option>Disco</option>
              <option>RnB</option>
              <option>Jazz</option>
              <option>Others</option>
            </select>
            <input type="text" name="album_title" class="form-control ml-2" id="albumTitle" placeholder="Enter tags here (ie., #rap, #deathmetal, #pop)">
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
</div>
<div class="container">
  <button type="submit" data-animation="fadeInUp" data-delay="500ms" href="/" class="btn oneMusic-btn-dark mt-4 d-block w-100">Upload to Sounder <i class="fa fa-angle-double-right"></i></button>
</div>