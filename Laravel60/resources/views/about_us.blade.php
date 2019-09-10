@extends('layouts.app')
@section('content')
    <p>嗨！大家好！我們是{{$name}}</p>

    {{--  @if (count($records) === 1)
        有一筆資料!
    @elseif (count($records) > 1)
        有多筆資料!
    @else
        沒有資料
    @endif  --}}


    {{--  @switch(count($records))
        @case(0)
            無資料
            @break
        @case(1)
            有一筆資料!
            @break
        @case(2)
            有多筆資料!
            @break
        @default
            有資料
    @endswitch  --}}

    // fore 迴圈
    @for ($i = 0 ; $i < 10 ; $i++)
        現在迴圈跑到 {{ $i }} <br/>
    @endfor

    // foreach
    @foreach ( $users as $user)
        現在 user id 為 {{ $user }} <br/>
    @endforeach

    // while 迴圈
    {{--  @while (true)
        無窮迴圈
    @endwhile  --}}





@endsection
