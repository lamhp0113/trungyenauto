<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
        <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light"> {{ Auth::user()->name }}</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="/admin/news" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Bài viết
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/category" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p> Loại dịch vụ</p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="/admin/services" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p> Dịch vụ </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/booking" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p> Lịch đặt sửa chữa </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
