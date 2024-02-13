<x-form.column type="col-md-5 mb-4">
  <x-form.heading heading="File Upload"/>
    <x-form.border>
      <div class="text-center mb-4 mx-2">
        <h6>Album Cover</h6>
        <x-form.thumbnail type="mt-3 mb-2">
          <img src="{{asset('assets/img/bg-img/gallery.svg')}}" class="avatar" alt="" style="height: 200px; width: 200px;">
        </x-form.thumbnail>
        <p>Album cover must not exceed 1500x1500px</p>
        <input type="file" name="file" id="file" class="file-upload">
        <label for="file" class="btn btn-dark d-block">Choose a file</label>
      </div>
    </x-form.border> 
</x-form.column>