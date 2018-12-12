{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--<div class="row justify-content-center">--}}
{{--<div class="col-md-8">--}}
{{--<div class="card">--}}
{{--<div class="card-header">Dashboard</div>--}}

{{--<div class="card-body">--}}
{{--@if (session('status'))--}}
{{--<div class="alert alert-success" role="alert">--}}
{{--{{ session('status') }}--}}
{{--</div>--}}
{{--@endif--}}

{{--You are logged in!--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--@endsection--}}
@extends('layouts.template')

@section('title')
    Trang chủ
@endsection

@section('content')
    @include('modals.add-modal')
    <div class="m-portlet m-portlet--mobile">
        {{--USERMANAGEMENT.COMPONENT--}}
        <user-management></user-management>


        <div class="m-portlet__body">
            {{--USERTABLE.component--}}
            <user-table></user-table>

        </div>
    </div>
@endsection


@section('script')
    <script type="text/javascript" src="{{url('/'). mix('/js/home.js') }}"></script>
@endsection


