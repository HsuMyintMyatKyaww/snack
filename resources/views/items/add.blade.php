
<div class="container">
<center>
<form action=" {{ url('/items/add') }}" method="post" enctype="multipart/form-data">
@csrf
    <div class="form-group">
        <label>Snack Name</label>
        <input type="text" name="snack_name" class="form-control">
    </div>
    <div class="form-group">
        <label>Price</label>
        <input type="text" name="price" class="form-control">
    </div>
    <div class="form-group">
        <label>About</label>
        <input type="text" name="about" class="form-control">
    </div>
    <div>
        <label>Image</label>
        <input type="file" name="image" class="custom-file-input" placeholder="Choose File">
    </div>
    <div class="form-group">
        <label>Category</label>
        <input type="text" name="category_id" class="form-control">
    </div>
    <input type="submit" value="Add Item" class="btn btn-primary">
</form>
</center>
</div>