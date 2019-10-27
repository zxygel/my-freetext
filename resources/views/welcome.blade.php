@extends('layouts.app')

@section('content')

<div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                {{ config('app.name', 'Laravel') }}<small id="net">.net</small>
            </div>

            <div class="links">
                <!-- a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">News</a>
                <a href="{{route('sendmessage')}}">Send Message</a>
                <a href="#">GitHub</a> -->
                <a href=""><span class="text-info">Follow us on Facebook</span></a>
            </div>

        </div>

        
</div>
@endsection
@section('style')
<style>
    html, body {
        /*background-color: #fff !important;*/
        /*color: #636b6f !important;*/
        font-family: 'Nunito', sans-serif !important;
        /*font-weight: 200 !important;*/
        /*height: 100vh !important;*/
        margin: 0 !important;
    }

    .full-height {
        height: 88vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        color: #e3342f;
        font-size: 84px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        /*margin-bottom: 30px;*/
    }
</style>
@endsection