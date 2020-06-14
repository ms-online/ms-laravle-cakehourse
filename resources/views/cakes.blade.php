<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
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
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    蛋糕预定列表
                </div>
                <p>{{$type}} - {{$size}} - ¥{{$price}}</p>

                @if($price > 100)
                <p>这个蛋糕太贵了！</p>
                @elseif($price < 50)
                <p>这个蛋糕太实惠了！</p>
                @else
                <p>这个蛋糕的价格比较合理</p>
                @endif

                <!-- 除非为真，否则就执行代码 -->
                @unless($size == '10 英寸')
                <p>蛋糕的尺寸不为10英寸</p>
                @endunless

                @php
                $name = 'Summer';
                echo($name);
                @endphp
            </div>
        </div>
    </body>
</html>
