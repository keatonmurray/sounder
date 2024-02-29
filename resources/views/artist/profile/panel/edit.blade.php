@extends('layouts.app')
@section('content')
  <div class="head py-5 bg-dark"><br></div>
  <section class="upload-music-area bg-white">
    <form action="/update/{{$results->id}}" method="POST" enctype="multipart/form-data">
      <div class="container my-5" style="height: auto;">
        <div class="hero section-padding-30">
          @csrf
          @method('PUT')
          <x-form.body>
            @include('front.partials.errors')
            <x-form.heading heading="Edit Merch Details"/><br/>
            <x-form.row>
                <x-form.column type="col-md-3">
                    <x-form.border>
                      <div class="text-center mb-4 mx-2">
                        <x-form.thumbnail type="mt-3 mb-2">
                          <img src="{{asset('assets/img/bg-img/gallery.svg')}}" class="merch_first" alt="" style="height: 180px; width: 180px;">
                        </x-form.thumbnail>
                        <input type="file" name="merch_first_upload" id="merchFirstUpload" class="merch_first_upload">
                        <label for="merchFirstUpload" id="merchBtn" class="btn btn-dark d-block">Choose a file</label>
                      </div>  
                    </x-form.border><br/>
                  </x-form.column>
        
                  <x-form.column type="col-md-3">
                    <x-form.border>
                      <div class="text-center mb-4 mx-2">
                        <x-form.thumbnail type="mt-3 mb-2">
                         <img src="{{asset('assets/img/bg-img/gallery.svg')}}" class="merch_second" alt="" style="height: 180px; width: 180px;">
                        </x-form.thumbnail>
                        <input type="file" name="merch_second_upload" id="merchSecondUpload" class="merch_second_upload">
                        <label for="merchSecondUpload" id="merchBtn" class="btn btn-dark d-block">Choose a file</label>
                      </div>  
                    </x-form.border><br/>
                  </x-form.column>
        
                  <x-form.column type="col-md-3">
                    <x-form.border>
                      <div class="text-center mb-4 mx-2">
                        <x-form.thumbnail type="mt-3 mb-2">
                         <img src="{{asset('assets/img/bg-img/gallery.svg')}}" class="merch_third" alt="" style="height: 180px; width: 180px;">
                        </x-form.thumbnail>
                        <input type="file" name="merch_third_upload" id="merchThirdUpload" class="merch_third_upload">
                        <label for="merchThirdUpload" id="merchBtn" class="btn btn-dark d-block">Choose a file</label>
                      </div>  
                    </x-form.border><br/>
        
                  </x-form.column>
                  <x-form.column type="col-md-3">
                    <x-form.border>
                      <div class="text-center mb-4 mx-2">
                        <x-form.thumbnail type="mt-3 mb-2">
                         <img src="{{asset('assets/img/bg-img/gallery.svg')}}" class="merch_fourth" alt="" style="height: 180px; width: 180px;">
                        </x-form.thumbnail>
                        <input type="file" name="merch_fourth_upload" id="merchFourthUpload" class="merch_fourth_upload">
                        <label for="merchFourthUpload" id="merchBtn" class="btn btn-dark d-block">Choose a file</label>
                      </div>  
                    </x-form.border><br/>
                  </x-form.column>
            </x-form.row>

            <br><br>

            <x-form.row>

                <x-form.column type="col-md-6">
                  <h6 class="mb-3">Merch Details</h6>
                 @include('components.form.edit-merch-details')
                </x-form.column>
      
                <x-form.column type="col-md-6">
                  <h6 class="mb-3">Shipping Information</h6>
                  <x-form.shipping-details-input-field/>
                </x-form.column>
            
              </x-form.row>

          </x-form.body>
        </div>

        <div class="text-center mt-30">
          <button class="btn oneMusic-btn-dark d-block w-100" type="submit">Save Changes</button>
        </div>

      </div>
    </form>
  </section>
@endsection