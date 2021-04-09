@extends('layouts.appadmin')
@section('title')
    add Product
@endsection
@section('content')


    <div class="row grid-margin">
        <div class="col-lg-12">
            <div class="card">
                @if(Session::has('success'))
                <div class="alert alert-success">
                    <span class="text-warning">{{Session::get('success')}}</span>
                </div>
            @endif
            @if(Session::has('wrong'))
                <div class="alert alert-danger">
                    <span class="text-warning">{{Session::get('wrong')}}</span>
                </div>
            @endif
                <div class="card-body">
                    <h4 class="card-title">Add product</h4>
                    <form class="cmxform" id="commentForm" method="post" action="{{route('save.product')}}" enctype="multipart/form-data">
                        @csrf
                        <fieldset>
                            <div class="form-group">
                                <label for="product_name">products (required, at least 2 characters)</label>
                                <input id="product_name" class="form-control" name="product_name" minlength="2" type="text" required>
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input id="price" class="form-control" name="price" type="text" required>
                            </div>
                            <div class="form-group">
                                <label for="category">Product category </label>
                                <select name="category" id="category" class="form-control">
                                    <option value="">Select Category</option>
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="image">Product Image </label>
                                <input id="image" class="form-control" name="image"  type="file">
                            </div>

                            <input class="btn btn-warning" type="submit" value="Save">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    {{-- <script src="backend/js/form-validation.js"></script>
    <script src="backend/js/bt-maxLength.js"></script> --}}
@endsection

{{--                                {{FORM::label('','Product category')}}--}}
{{--                                {{FORM::select('size',['L'=>'large','S'=>'small',],null,--}}
{{--                                ['placeholder'=>'Select Category','class'=>'form-control'])}}--}}
