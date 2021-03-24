@extends('layouts.appadmin')

@section('title')
    Category
@endsection

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            @if(Session::has('success'))
                <div class="alert alert-success">
                    <span class="text-danger">{{Session::get('success')}}</span>
                </div>
            @endif
            @if(Session::has('wrong'))
                <div class="alert alert-danger">
                    <span class="text-warning">{{Session::get('wrong')}}</span>
                </div>
            @endif

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Category table</h4>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                @if($categories->count() > 0)
                                <table id="order-listing" class="table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Category Name</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                    $i = 1;
                                    @endphp
                                    @foreach($categories as $category)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$category->category_name}}</td>
{{----}}
                                        <td>
                                           <a  class="btn btn-outline-primary" href="{{route('edit.category',['id' => $category->id])}}">View</a>
                                            <button class="btn btn-outline-success" onclick="window.location='{{url('/edit/category/'.$category->id)}}'" >Edit</button>
                                            <a href="/delete/category/{{$category->id}}" class="btn btn-outline-danger" id="delete" >Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                @else
                                    <div class="alert alert-danger">
                                        <span class="text-warning">No records</span>
                                    </div>

                                        <a href="{{URL::to('/addcategory')}}" class="btn btn-outline-warning"> Add Category</a>

                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->

        <!-- partial -->
    </div>
@endsection

@section('script')
    <script src="backend/js/data-table.js"></script>
    <!-- End custom js for this page-->
@endsection
