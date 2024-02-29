  <div class="mb-3">
    <label for="ship_from" class="form-label">Ships from</label>
    <div class="dropdown show d-flex">
      <select name="ship_from" class="custom-select d-block w-50" required style="cursor: pointer;">
        <option selected disabled>Country</option>
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
        <option selected disabled>Continent</option>
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
        <option selected disabled>Country</option>
        <x-form.countries/>
      </select>
      <input type="text" name="vat_estimate" class="form-control ml-2" id="vatEstimate" placeholder="Enter VAT estimate">
      <input type="text" name="vat_currency" class="form-control ml-2" id="vatCurrency" placeholder="Enter currency">
    </div>
    <p class="text-muted ml-1">VAT amount entered will be added to the total price</p>
  </div>