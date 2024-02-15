<div class="mb-3">
    <label for="country" class="form-label">Ships from</label>
    <div class="dropdown show d-flex">
      <select name="ship_from" class="custom-select d-block w-50" required style="cursor: pointer;">
        <x-form.countries/>
      </select>
      <input type="text" name="city" class="form-control ml-2" id="albumTitle" placeholder="Enter city">
      <input type="text" name="zip_code" class="form-control ml-2" id="albumTitle" placeholder="Enter ZIP code">
    </div>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Ships to</label>
    <div class="dropdown show d-flex">
      <select name="ship_to" class="custom-select d-block w-50" required style="cursor: pointer;">
        <x-form.continents/>
      </select>
      <input type="text" name="shipping_cost" class="form-control ml-2" id="albumTitle" placeholder="Enter shipping cost">
      <input type="text" name="shipping_currency" class="form-control ml-2" id="albumTitle" placeholder="Enter currency (eg., $)">
    </div>
    <p class="text-muted ml-1">Check with your logistics provider to get an estimate</p>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">VAT</label>
    <div class="dropdown show d-flex">
      <select name="vat_country" class="custom-select d-block w-50" required style="cursor: pointer;">
        <x-form.countries/>
      </select>
      <input type="text" name="album_title" class="form-control ml-2" id="vat_estimate" placeholder="Enter VAT estimate">
      <input type="text" name="album_title" class="form-control ml-2" id="vat_currency" placeholder="Enter currency">
    </div>
    <p class="text-muted ml-1">VAT amount entered will be added to the total price</p>
  </div>