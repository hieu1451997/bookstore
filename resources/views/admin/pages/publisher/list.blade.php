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
                                @if ($publisher->category_status==1)
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
                        </tr>
                        @endforeach                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> 
@endsection
