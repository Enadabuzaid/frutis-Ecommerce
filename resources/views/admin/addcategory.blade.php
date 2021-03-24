@extends('layouts.appadmin')
@section('title')
   add category
@endsection
@section('content')


    <div class="row grid-margin">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
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
                    <h4 class="card-title">Add Categories</h4>
                    <form class="cmxform" id="commentForm" method="post" action="{{route('save.category')}}">
                        @csrf
                        <fieldset>
                            <div class="form-group">
                                <label for="category_name">Category (required, at least 2 characters)</label>
                                <input id="category_name" class="form-control" name="category_name" minlength="2" type="text" required>
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
    <script src="js/form-validation.js"></script>
    <script src="js/bt-maxLength.js"></script>
@endsection
