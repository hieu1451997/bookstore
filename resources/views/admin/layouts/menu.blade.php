<div class="sidebar sidebar-style-2" data-background-color="dark2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">
                <li class="nav-item active">
                    <a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Tổng quan</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Components</h4>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#sanpham">
                        <i class="fas fa-layer-group"></i>
                        <p>Sản phẩm</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="sanpham">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{URL::to('/list-product')}}">
                                    <span class="sub-item">Danh sách</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{URL::to('/add-product')}}">
                                    <span class="sub-item">Thêm mới</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#theloai">
                        <i class="fas fa-layer-group"></i>
                        <p>Danh mục sản phẩm</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="theloai">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{URL::to('/list-category-product')}}">
                                    <span class="sub-item">Danh sách</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#nxb">
                        <i class="fas fa-layer-group"></i>
                        <p>NXB</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="nxb">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{URL::to('/list-publisher')}}">
                                    <span class="sub-item">Danh sách</span>
                                </a>
                                <a href="{{URL::to('/add-publisher')}}">
                                    <span class="sub-item">Them moi</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>