<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    @include('includes.admin.head')
</head>
<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
            {{-- main nav --}}
        @include('includes.admin.nav1')

<!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
            {{--  sid bar --}}
        @include('includes.admin.nav2')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">


{{--                statr content --}}

                @yield('content')

{{--                end content--}}

            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
                {{--footer --}}
         @include('includes.admin.footer')

        <!-- partial -->
            </div>
            <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
            </div>
            <!-- container-scroller -->

            <!-- plugins:js -->
            @include('includes.admin.scripts')


        <script>
            $(document).on("click","#delete",function (e){
                e.preventDefault();
                var link = $(this).attr("href");
                bootbox.confirm("DO you really want to delete this ?" , function (confirmed){
                    if (confirmed){
                        window.location.href =link;
                    };
                });
            });
        </script>






</body>

</html>
