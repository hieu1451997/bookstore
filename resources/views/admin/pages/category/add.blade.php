<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h5 class="modal-title">
                    <span class="fw-mediumbold">
                    Thêm mới</span> 
                    <span class="fw-light">
                        Danh mục
                    </span>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="small">Thêm mới danh mục sản phẩm</p>
                <form action="{{URL::to('/save-category-product')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Tên danh mục</label>
                                <input name="category_name" id="category_name" type="text" class="form-control" placeholder="Nhập tên">
                            </div>
                        </div>
                        <div class="col-md-6 pr-0">
                            <div class="form-group form-group-default">
                                <label for="comment">Mô tả</label>
                                    <textarea name="category_desc" class="form-control" id="category_desc" rows="5">

                                    </textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label>Trạng thái</label>
                                    <select class="form-control" id="category_status" name="category_status">
                                        <option value="1">Hiển thị</option>
                                        <option value="0">Ẩn</option>
                                    </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer no-bd">
                        <button type="submit" id="addRowButton" class="btn btn-primary">Thêm</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>