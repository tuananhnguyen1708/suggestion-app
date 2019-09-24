@extends('layouts.dashboard-layout') @section('title') Dashboard @endsection
@section('script')
<script type="text/javascript" src="{{ url('/').mix('/js/home.js') }}"></script>
@endsection @section('content')
<div class="container-fluid dashboard-header">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img
                    src="https://images.tuyensinh247.com/test/images/logo.png"
                />
            </div>
        </div>
    </div>
</div>

<div class="container-fluid dashboard-content">
    <div class="container main-content">
        <div class="row">
            <div class="col-md-3">
                <div class="left-menu">
                    <div class="title-blue">
                        <span><strong>Đồng hành cùng bạn</strong></span>
                    </div>
                    <ul class="list-style">
                        <li class="nobor">
                            <span>
                                <a title="Xếp hạng điểm thi THPTQG" href="#">Xếp hạng điểm thi THPTQG</a>
                            </span>
                        </li>
                        <li class="nobor">
                            <span>
                                <a title="Điểm chuẩn đại học" href="#">Điểm chuẩn đại học</a>
                            </span>
                        </li>
                        <li class="nobor">
                            <span>
                                <a title="Mã Trường - Mã ngành ĐH-CĐ" href="#">Mã Trường - Mã ngành ĐH-CĐ</a>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="center-main-content">
                    <div class="container">
                        <div class="row input-select">
                            <div class="col-md-3 title">
                                Điểm
                            </div>
                            <div class="col-md-9">
                                <select value="" class="custom-select">
                                    <option selected>--Tổng điểm 3 môn dự kiến--</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>

                        <div class="row input-select">
                            <div class="col-md-3 title">
                                Khối thi
                            </div>
                            <div class="col-md-9">
                                <select class="custom-select">
                                    <option value="" selected>--Khối thi--</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>

                        <div class="row input-select">
                            <div class="col-md-3 title">
                                Ngành học
                            </div>
                            <div class="col-md-9">
                                <select class="custom-select">
                                    <option value="" selected>---Tất cả các nghành---</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="search-button">
                            <button type="button" class="btn btn-primary">Tìm kiếm</button>
                    </div>
                    <div>
                        <table class="table table-bordered">
                            <thead>
                                <tr class="table-head-bg">
                                    <th scope="col">STT</th>
                                    <th scope="col">Mã trường</th>
                                    <th scope="col">Tên trường</th>
                                    <th scope="col">Kết quả</th>
                                    <th scope="col">Xem thêm</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>DTT</td>
                                    <td>Đại Học Tôn Đức Thắng</td>
                                    <td>1 Nghành</td>
                                    <td>
                                        <a href="#">Xem thêm</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>DTT</td>
                                    <td>Đại Học Tôn Đức Thắng</td>
                                    <td>1 Nghành</td>
                                    <td>
                                        <a href="#">Xem thêm</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>DTT</td>
                                    <td>Đại Học Tôn Đức Thắng</td>
                                    <td>1 Nghành</td>
                                    <td>
                                        <a href="#">Xem thêm</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>DTT</td>
                                    <td>Đại Học Tôn Đức Thắng</td>
                                    <td>1 Nghành</td>
                                    <td>
                                        <a href="#">Xem thêm</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>DTT</td>
                                    <td>Đại Học Tôn Đức Thắng</td>
                                    <td>1 Nghành</td>
                                    <td>
                                        <a href="#">Xem thêm</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div>
                        <button type="button" class="btn btn-info btn-block">Xem thêm</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="right-content">
                    <div class="title-blue">
                        <span><strong>ĐANG ĐƯỢC QUAN TÂM NHẤT</strong></span>
                    </div>
                    <ul class="list-style">
                        <li class="nobor">
                            <span>
                                <a title="PHƯƠNG ÁN TUYỂN SINH 2019" href="#">PHƯƠNG ÁN TUYỂN SINH 2019</a>
                            </span>
                        </li>
                        <li class="nobor">
                            <span>
                                <a title="TƯ VẤN CHỌN TRƯỜNG ĐH, CĐ 2019" href="#">TƯ VẤN CHỌN TRƯỜNG ĐH, CĐ 2019</a>
                            </span>
                        </li>
                        <li class="nobor">
                            <span>
                                <a title="ĐIỂM CHUẨN ĐẠI HỌC 2018" href="#">ĐIỂM CHUẨN ĐẠI HỌC 2018</a>
                            </span>
                        </li>
                        <li class="nobor">
                            <span>
                                <a title="HỒ SƠ THI THPT QUỐC GIA 2019" href="#">HỒ SƠ THI THPT QUỐC GIA 2019</a>
                            </span>
                        </li>
                        <li class="nobor">
                            <span>
                                <a title="ĐIỂM CHUẨN LỚP 10 2018" href="#">ĐIỂM CHUẨN LỚP 10 2018</a>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
