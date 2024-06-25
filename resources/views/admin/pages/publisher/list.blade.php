@extends('admin.layouts.master')

@section('title')

@endsection

@section('content')
   <div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="d-flex align-items-center">
                <h4 class="card-title">NXB </h4>
            </div>
        </div>
        <div class="card-body">
            @if (Session::has('message')) 
                <div class="alert alert-success" style="background-color: #155724">
                    {{Session::get('message')}}
                    {{Session::put('message',null)}}
                </div>				
            @endif
            <div class="table-responsive">
                <table id="add-row" class="display table table-striped table-hover" >
                    <thead>
                        <tr>
                            <th>Tên nxb</th>
                            <th>Dia chi</th>
                            <th>SDT</th>
                            <th>Mo ta</th>
                            <th>Trạng thái</th>
                            <th style="width: 10%"></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Tên nxb</th>
                            <th>Dia chi</th>
                            <th>SDT</th>
                            <th>Mo ta</th>
                            <th>Trạng thái</th>
                            <th></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($data as $publisher)
                        <tr>
                            <td>{{$publisher->publisher_name}}</td>
                            <td>{{$publisher->publisher_address}}</td>
                            <td>{{$publisher->publisher_phone}}</td>
                            <td>{{$publisher->publisher_desc}}</td>
                            <td>
                                @if ($publisher->publisher_status==1)
                                    {{"Hiển thị"}}
                                    @else {{"Ẩn"}}
                                @endif 
                            </td>
                            <td>
                                <div class="form-button-action">
                                    <a href="{{URL::to('/edit-publisher/'.$publisher->publisher_id)}}" class="btn btn-link btn-primary btn-lg" title="Edit {{$publisher->publisher_name}}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    
                                    <button type="button" data-toggle="modal" data-target="#DeleteRowModal{{$publisher->publisher_id}}" title="Xóa {{$publisher->publisher_name}}" class="btn btn-link btn-danger" data-original-title="Remove">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </td>
                            {{-- Delete Publisher --}}
                            <div class="modal fade" id="DeleteRowModal{{$publisher->publisher_id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header no-bd">
                                            <h5 class="modal-title">
                                                <span class="fw-mediumbold">
                                                Delete</span> 
                                                <span class="fw-light">
                                                    NXB
                                                </span>
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{URL::to('/delete-publisher/'.$publisher->publisher_id)}}" method="POST">
                                                {{ csrf_field() }}
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <label>Tên NXB Delete: {{$publisher->publisher_name}}</label>
                     
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer no-bd">
                                                    <button type="submit" id="addRowButton" class="btn btn-primary">Delete</button>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                                                </div>
                                            </form>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </tr>
                        @endforeach                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> 
@endsection
