<html>

{{-- <head>
    <title>Hello/Index</title>
    <style>
        body {
            font-size: 16pt;
            color: #999;
        }

        h1 {
            font-size: 100pt;
            text-align: right;
            color: #f6f6f6;
            margin: -50px 0px -100px 0px;
        }
    </style>
</head>

<body> --}}
@extends('layouts.helloapp')

@section('title','Index')

@section('menubar')
    @parent
    インデックスページ
    {{-- ももんがページ
    わくわくページ --}}
@endsection

@section('content')
<p>ここが本文のコンテンツです</p>
<p>Controller value
    <br>'message' = {{$message}}</p>
<p>View Composer value
    <br>'view_message' = {{$view_message}}
</p>

    {{-- @component('components.message') --}}
        {{-- @slot('msg_title')
            Caution!
        @endslot

        @slot('msg_content')
        'koko'
        @endslot --}}
    {{-- @endcomponent --}}

    {{-- @include('components.message',['msg_title'=>'OK','msg_content'=>'さぶびゅー！'])

    @each('components.item',$data,'item') --}}
    
@endsection




@section('footer')
huyahuya
@endsection



    {{-- <h1>Blade/Index</h1>
    <p>forディレクティブ</p>

    @php
        echo 'hello';
    @endphp --}}

{{-- </body> --}}

</html>