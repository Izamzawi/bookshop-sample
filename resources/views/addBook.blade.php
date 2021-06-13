@extends('master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-4 offset-sm-4">
            <form action="store" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title"placeholder="Enter book title" required>
                </div>
                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" class="form-control" name="author" id="author" placeholder="Enter book's author" required>
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select type="text" class="form-control" name="category" id="category" placeholder="Choose a category" required>
                        <option value="Novel">Novel</option>
                        <option value="Short stories">Short stories</option>
                        <option value="Romance">Romance</option>
                        <option value="Essay">Essay</option>
                        <option value="Biography">Biography</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" name="price" id="price" placeholder="Input book's price" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" name="description" id="description" placeholder="Write book's description" required>
                </div>
                <div class="form-group">
                    <label for="image">Cover's URL</label>
                    <input type="text" class="form-control" name="image" id="image" placeholder="Input book cover's URL" required>
                </div>
                <button type="submit" class="btn btn-primary">Add Book</button>
            </form>
        </div>
    </div>
</div>

@endsection