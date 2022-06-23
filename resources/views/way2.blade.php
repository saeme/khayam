<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>Pascal Triangle</title>
        <style>
            .dot {
                height: 25px;
                width: 25px;
                background-color: #bbb;
                border-radius: 50%;
                display: inline-block;
            }
        </style>

    </head>
    <body>

        @foreach($numbers as $num)
        {!!  $num !!}
        @if (is_numeric($num))
            <span class="dot">{!! $num !!}</span>
        @else
            {!! $num !!}
        @endif
        @endforeach
        
    </body>
</html>
