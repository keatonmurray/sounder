  <input type="hidden" name="email" class="form-control" id="email" value="{{ Auth::user()->email }}">
  <div class="mb-3">
      <label for="albumTitle" class="form-label">Album Title</label>
      <input type="text" name="album_title" class="form-control" id="albumTitle" placeholder="Enter an album title">
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Album Description</label>
    <textarea name="album_description" id="description" class="form-control" cols="20" rows="3" placeholder="Enter an album description"></textarea>
  </div>
  <div class="mb-3">
    <label for="genre" class="form-label">Genre</label>
    <div class="dropdown show d-flex">
      <select class="custom-select d-block w-50" name="genre" required style="cursor: pointer;">
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
      <input type="text" name="tags" class="form-control ml-2" id="tags" placeholder="Enter tags here (ie., #rap, #deathmetal, #pop)">
    </div>
  </div>