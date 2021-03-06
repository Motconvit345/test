@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Thêm slide
            </h1>
        </div>
        <div class="col-lg-7" style="padding-bottom:120px">
            <form action="{{ action('Admin\SliderController@store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Mô tả</label>
                    <textarea class="form-control" rows="8" name="description"></textarea>
                </div>
                <div class="form-group">
                    <label>Ảnh</label>
                    <input type="file" name="fImages" required>
                </div>
                <div class="form-group">
                    <label>Thứ tự</label>
                    <input type="number" class="form-control" name="order" min='1' max="3" step="1" placeholder="Please Enter Order" required/>
                </div>
                <button type="submit" class="btn btn-default">Thêm</button>
                <button type="reset" class="btn btn-default">Reset</button>
            <form>
        </div>
    </div>
@stop
            