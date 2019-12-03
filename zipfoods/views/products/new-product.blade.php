@extends('templates.master')

@section('title')
Add a new product
@endsection




@section("content")

@if($app->errorsExist())
<ul class='error alert alert-danger'>
    @foreach($app->errors() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

@if($confirmationProduct)
<div class='alert alert-success'>
    Product: {{ $confirmationProduct }} successfully added.
</div>
@endif


<div id="product-show">
    <form method='POST' id='product-review' action='/products/save-product'>
        <h3 style="margin: auto;">Add a product</h3>

        <div class='form-group'>
            <label for='name'>Name</label>
            <input type='text' class="form-control" name='name' id='name' value='{{ $app->old("name") }}'>
        </div>

        <div class='form-group'>
            <label for='name'>Description</label>
            <input type='text' class="form-control" name='description' id='description'
                value='{{ $app->old("description") }}'>
        </div>

        <div class='form-group'>
            <label for='name'>Price</label>
            <input type='text' class="form-control" name='price' id='price' value='{{ $app->old("price") }}'>
        </div>

        <div class='form-group'>
            <label for='name'>Available</label>
            <input type='text' class="form-control" name='available' id='available'
                value='{{ $app->old("available") }}'>
        </div>

        <div class='form-group'>
            <label for='name'>Weight</label>
            <input type='text' class="form-control" name='weight' id='weight' value='{{ $app->old("weight") }}'>
        </div>

        <div class='form-group'>
            <label for='name'>Perishable</label>
            <input type='text' class="form-control" name='perishable' id='perishable'
                value='{{ $app->old("perishable") }}'>
        </div>


        <button type='submit' class='btn btn-primary'>Submit Product</button>
    </form>
    <a href='/products'>&larr; Return to all products</a>
</div>
@endsection