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
<tr>
    <th>id</th>
    <th>corporate_number</th>
    <th>corporate_name</th>
    <th>created</th>
</tr>
@foreach ($items as $item )
<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->corporate_number}}</td>
    <td>{{$item->corporate_name}}</td>
    <td>{{$item->created}}</td>
</tr>
    
@endforeach
    
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