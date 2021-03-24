<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{URL::to('/admin')}}">
                <i class="fas fa-tachometer-alt"></i>&nbsp;&nbsp;&nbsp;
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                <i class="fas fa-plus-square"></i>&nbsp;&nbsp;&nbsp;
                <span class="menu-title">Creation</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{URL::to('/addcategory')}}">Add category</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{URL('/addproduct')}}">Add product</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{URL('/addslider')}}">Add Slider</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Add somthing</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <i class="fas fa-eye"></i>&nbsp;&nbsp;&nbsp;
                <span class="menu-title">Views</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{URL::to('/categories')}}">category</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{URL::to('/products')}}">product</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{URL::to('/sliders')}}">slider</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{URL::to('/orders')}}">orders</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
