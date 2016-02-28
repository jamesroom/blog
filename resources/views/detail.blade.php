@extends('layout')
@section('content')
    <div class="list-main">
        @foreach( $images as $img)
            <div>
                <img class="lazy" data-original="{{$img['url'] }}"   width="{{ $img['width'] }}" height="{{ $img['height'] }}" src=""/>
            </div>
        @endforeach
    </div>
@endsection


