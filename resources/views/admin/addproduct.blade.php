@extends('layouts.appadmin')
@section('title')
    add category
@endsection
@section('content')


    <div class="row grid-margin">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add product</h4>
                    <form class="cmxform" id="commentForm" method="post" action="{{route('add.category')}}">
                        @csrf
                        <fieldset>
                            <div class="form-group">
                                <label for="product">products (required, at least 2 characters)</label>
                                <input id="product" class="form-control" name="product" minlength="2" type="text" required>
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input id="price" class="form-control" name="price" type="text" required>
                            </div>
                            <div class="form-group">
                                <label for="category">Product category </label>
                                <select name="category" id="category" class="form-control">
                                    <option value="">Select Category</option>
                                    <option value="">Small</option>
                                    <option value="">Large</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="image">Product Image </label>
                                <input id="image" class="form-control" name="image"  type="file" required>
                            </div>
                            <label for="status">Product status </label>
                            <input id="status" class="" name="status"  type="checkbox"><br>
                            <input class="btn btn-warning" type="submit" value="Save">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="backend/js/form-validation.js"></script>
    <script src="backend/js/bt-maxLength.js"></script>
@endsection

{{--                                {{FORM::label('','Product category')}}--}}
{{--                                {{FORM::select('size',['L'=>'large','S'=>'small',],null,--}}
{{--                                ['placeholder'=>'Select Category','class'=>'form-control'])}}--}}
