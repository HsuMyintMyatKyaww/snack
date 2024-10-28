
<div class="container">
<center>
<form action=" {{ url("/item/edit/$item->id") }}" method="post" enctype="multipart/form-data">
@csrf
    <div class="form-group">
        <label>Snack Name</label>
        <input type="text" name="snack_name" class="form-control" 
        value="{{ $item->snack_name }}">
    </div>
    <div class="form-group">
        <label>Price</label>
        <input type="text" name="price" class="form-control" value="{{ $item->price }}">
    </div>
    <div class="form-group">
        <label>About</label>
        <input type="text" name="about" class="form-control" value="{{ $item->about }}">
    </div>
    <div>
        <label>Image</label>
        <input type="file" name="image" class="custom-file-input" placeholder="Choose File" value="{{ $item->image }}">
    </div>
    <div class="form-group">
        <label>Category</label>
        <input type="text" name="category_id" class="form-control" value="{{ $item->category_id }}">
    </div>
    <input type="submit" value="Add Item" class="btn btn-primary">
</form>
</center>
</div>