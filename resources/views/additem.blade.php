@extends('master')
@section("content")

<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
        <form action="/addproduct" method="POST" >
                <div class="form-group">
                    @csrf
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control"  placeholder="User Name">
                </div>
                <div class="form-group">
                    @csrf
                    <label for="exampleInputEmail1">price</label>
                    <input type="text" name="price" class="form-control" placeholder="price">
                </div>
                <div class="form-group">
                    @csrf
                    <label for="exampleInputEmail1">category</label>
                    <input type="text" name="category" class="form-control"  placeholder="category">
                </div>
                <div class="form-group">
                    @csrf
                    <label for="exampleInputEmail1">description</label>
                    <input type="text" name="description" class="form-control"  placeholder="description">
                </div>
                <div class="form-group">
                    @csrf
                    <label for="exampleInputEmail1">Photo link</label>
                    <input type="text" name="gallary" class="form-control" placeholder="Photo link">
                </div>



                <button type="submit" class="btn btn-success">Add Product</button>
                </div>
            </form>
    </div>
</div>
   

@endsection