@extends('layout')
@section('content')
    <link rel="stylesheet" href="{{ URL::asset('/') }}css/list.css"></link>
    <div class="list-main">
        <div class="PL"></div>
        <div class="PR">
            <ul class="list">


                @foreach( $list as $v)
                    <li onclick="javascript:location.href='/{{ Request::path() }}/{{ $v["title"] }}'" class="item">
                        <div class="title">{{ $v["title"] }}</div>
                        <div class="desc">{{ $v['desc']  }}</div>
                        <div class="time">
                            <span class="time-st">设计师间</span>
                            <span>·  {{ $v['time'] }}</span>
                        </div>
                        <img src="/images/list/{{ $v["title"]  }}.png" width="100px" height="100px"/>
                    </li>
                @endforeach

            </ul>

            <div class="pager">
                &lt;共1页&gt;

            </div>
        </div>
    </div>

@endsection
