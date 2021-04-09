@extends('layouts.appadmin')

@section('title')
    Product
@endsection

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">



            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Product table</h4>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="order-listing" class="table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Product Name</th>
                                        <th>price</th>
                                        <th>category</th>
                                        <th>image</th>
                                        <th>status</th>
                                        <th>Actions</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i=1; ?>
                                    @foreach($products as $product)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$product->product_name}}</td>
                                        <td>$ {{$product->price}}</td>
                                        <td>{{$product ->category}}</td>
                                        <td><img src="/storage/product_images/{{$product->image}}" alt=""></td>
                                        <td>
                                            @if($product ->status == 1)
                                            <label class="badge badge-success">active</label>
                                            @else
                                                <label class="badge badge-danger">deactive</label>
                                            @endif
                                        </td>
                                        <td>
                                            <button class="btn btn-outline-primary">View</button>
                                            <button class="btn btn-outline-danger" id="delete">Delete</button>

                                            @if($product ->status == 1)
                                                <button class="btn btn-outline-warning">Deactive</button>
                                            @else
                                                <button class="btn btn-outline-success">Active</button>
                                            @endif

                                        </td>
                                    </tr>
                                    @endforeach


                                    </tbody>
                                </table>
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
