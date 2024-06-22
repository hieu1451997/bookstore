{{-- Edit Category --}}
<div class="modal fade" id="EditRowModal{{$cate->category_id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h5 class="modal-title">
                    <span class="fw-mediumbold">
                    Sửa</span> 
                    <span class="fw-light">
                    </span>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="small">Sửa danh mục sản phẩm</p>
                <form action="{{URL::to('/edit-category-product/'.$cate->category_id)}}" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Tên danh mục</label>
                                <input name="category_name" id="category_name" type="text" class="form-control" placeholder="" value="{{$cate->category_name}}">
                            </div>
                        </div>
                        <div class="col-md-6 pr-0">
                            <div class="form-group form-group-default">
                                <label for="comment">Mô tả</label>
                                    <textarea name="category_desc" class="form-control" id="category_desc" rows="5">{{$cate->category_desc}}
                                    </textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label>Trạng thái</label>
                                    <select class="form-control" id="category_status" name="category_status">
                                        @if ($cate->category_status==1)
                                        <option value="1">Hiển thị</option>
                                        <option value="0">Ẩn</option>
                                        @else
                                        <option value="0">Ẩn</option>
                                        <option value="1">Hiển thị</option>                                       
                                        @endif
                                    </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer no-bd">
                        <button type="submit" id="EditRowButton" class="btn btn-primary">Sửa</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>