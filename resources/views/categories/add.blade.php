
<div class="container">
<center>
<form action=" {{ url('/categories') }}" method="post">
@csrf
	<div class="form-group">
		<label>Category Name</label>
		<input type="text" name="categoryName" class="form-control">
	</div>
	<input type="submit" value="Add Category" class="btn btn-primary">
</form>
</center>
</div>