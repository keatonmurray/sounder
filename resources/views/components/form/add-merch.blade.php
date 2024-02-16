<div class="head py-5 bg-dark"><br></div>
<section class="upload-music-area bg-white">
  <form action="/store" method="POST" enctype="multipart/form-data">
    <div class="container my-5" style="height: auto;">
    
      <x-form.body>
        <x-form.heading heading="Add Merch"/><br/>
        
        <x-form.row>
        
          <x-form.column type="col-md-3">
            <x-form.border>
              <div class="text-center mb-4 mx-2">
                <x-form.thumbnail type="mt-3 mb-2">
                    <img src="{{asset('assets/img/bg-img/plus-solid.svg')}}" class="merch_first" alt="" style="height: 180px; width: 180px;">
                </x-form.thumbnail>
                <input type="file" name="merch_first_upload" id="merchFirstUpload" class="merch_first_upload">
                <label for="merchFirstUpload" class="btn btn-dark d-block">Choose a file</label>
              </div>  
            </x-form.border><br/>
          </x-form.column>

          <x-form.column type="col-md-3">
            <x-form.border>
              <div class="text-center mb-4 mx-2">
                <x-form.thumbnail type="mt-3 mb-2">
                  <img src="{{asset('assets/img/bg-img/plus-solid.svg')}}" class="merch_second" alt="" style="height: 180px; width: 180px;">
                </x-form.thumbnail>
                <input type="file" name="merch_second_upload" id="merchSecondUpload" class="merch_second_upload">
                <label for="merchSecondUpload" class="btn btn-dark d-block">Choose a file</label>
              </div>  
            </x-form.border><br/>
          </x-form.column>

          <x-form.column type="col-md-3">
            <x-form.border>
              <div class="text-center mb-4 mx-2">
                <x-form.thumbnail type="mt-3 mb-2">
                  <img src="{{asset('assets/img/bg-img/plus-solid.svg')}}" class="merch_third" alt="" style="height: 180px; width: 180px;">
                </x-form.thumbnail>
                <input type="file" name="merch_third_upload" id="merchThirdUpload" class="merch_third_upload">
                <label for="merchThirdUpload" class="btn btn-dark d-block">Choose a file</label>
              </div>  
            </x-form.border><br/>

          </x-form.column>
          <x-form.column type="col-md-3">
            <x-form.border>
              <div class="text-center mb-4 mx-2">
                <x-form.thumbnail type="mt-3 mb-2">
                  <img src="{{asset('assets/img/bg-img/plus-solid.svg')}}" class="merch_fourth" alt="" style="height: 180px; width: 180px;">
                </x-form.thumbnail>
                <input type="file" name="merch_fourth_upload" id="merchFourthUpload" class="merch_fourth_upload">
                <label for="merchFourthUpload" class="btn btn-dark d-block">Choose a file</label>
              </div>  
            </x-form.border><br/>
          </x-form.column>
        </x-form.row>

        <br><br>
        
        <x-form.row>

          <x-form.column type="col-md-6">
            <h6 class="mb-3">Merch Details</h6>
            <x-form.merch-details-input-field/>
          </x-form.column>

          <x-form.column type="col-md-6">
            <h6 class="mb-3">Shipping Information</h6>
            <x-form.shipping-details-input-field/>
          </x-form.column>
      
        </x-form.row>
      </x-form.body>
    </div>
  </form>
</section>