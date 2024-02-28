<div class="errors mx-4">
    @error('album_title')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    @error('album_description')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    @error('genre')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    @error('tags')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    @error('album_cover')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    @error('digital_audio_price')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    @error('single_track_price')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    @error('audio')
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>