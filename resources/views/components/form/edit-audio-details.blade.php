<div class="mb-3">
    <label for="" class="form-label">Is this album downloadable for free?</label>
    <div class="dropdown show d-flex">
      <select class="custom-select d-block w-50" required style="cursor: pointer;">
        <option value="Select Genre">Select Option</option>
        <option>Yes</option>
        <option>No</option>
      </select>
      <input type="text" name="digital_audio_price" class="form-control ml-2" placeholder="If not, enter a price (eg., $1.99)" value="{{old('digital_audio_price', $results->digital_audio_price)}}">
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
      <input type="text" name="single_track_price" class="form-control ml-2" placeholder="Enter a price per track" value="{{old('single_track_price', $results->single_track_price)}}">
    </div>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Would you like to make this album playable for free?</label>
    <input type="text" name="play_limit" class="form-control" placeholder="The maximum play limit is 10 consecutive plays" value="{{old('play_limit', $results->play_limit)}}">
    <p class="text-muted">A purchase will be required once your max play limit is reached</p>
  </div>