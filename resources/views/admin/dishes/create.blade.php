<form  method="POST" action="{{route('admin.dishes.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group p-3">
        <label for="name" class="form-label p-2"><b>Name:</b></label>
        <input type="text" class="form-control" id="name" name="name">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group p-3">
        <label for="image" class="form-label p-2"><b>Image:</b></label>
        <input type="file" class="form-control" id="image" name="image">
        @error('image')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group p-3">
        <label for="ingredient" class="form-label p-2"><b>Ingredient:</b></label>
        <textarea class="form-control" id="ingredient" name="ingredient"></textarea>
        @error('ingredient')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group p-3">
        <label for="price" class="form-label p-2"><b>Price:</b></label>
        <input type="text" class="form-control" id="price" name="price">
        @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group p-3">
        <label for="availability" class="form-label p-2"><b>Availability:</b></label>
        <select class="form-control" id="availability" name="availability">
            <option value="1">Available</option>
            <option value="0">Unavailable</option>
        </select>
        @error('availability')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary m-3">Add</button>
</form>
