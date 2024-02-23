<input type="hidden" name="email" class="form-control" id="email" value="{{ Auth::user()->email }}">
<div class="mb-3">
    <label for="merchName" class="form-label">Merch Name</label>
    <input type="text" name="merch_name" class="form-control" id="merchName" placeholder="Enter a name for this merch">
</div>
<div class="mb-3">
    <label for="merchPrice" class="form-label">Price in USD</label>
    <input type="text" name="merch_price" class="form-control" id="merchPrice" placeholder="Enter a price">
</div>
<div class="mb-3">
    <label for="merchDescription" class="form-label">Merch Description</label>
    <textarea name="merch_description" id="merchDescription" class="form-control" cols="20" rows="3" placeholder="Enter an album description"></textarea>
</div>