<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

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
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                {{--                 the company profile starts here                      --}}
                <div class="">
                    @foreach($brandingData as $data)
                        <ls>{{$data->cover_image_link}}</ls>
                    @endforeach
                    @foreach($brandingData as $data)
                        <div>
                            {{$data->logo_link}}
                        </div>
                    @endforeach
                    @foreach($brandingData as $data)
                        <div>
                            {{$data->company_name}}
                        </div>
                    @endforeach
                    @foreach($brandingData as $data)
                        <div>
                            {{$data->rate}}
                        </div>
                    @endforeach
                    @foreach($brandingData as $data)
                        <div>
                            {{$data->email}}
                        </div>
                    @endforeach
                    @foreach($brandingData as $data)
                        <div>
                            {{$data->phone_number}}
                        </div>
                    @endforeach
                    @foreach($brandingData as $data)
                        <div>
                            {{$data->site}}
                        </div>
                    @endforeach
                    @foreach($brandingData as $data)
                        <div>
                            {{$data->fax}}
                        </div>
                    @endforeach
                        <hr>
                        <div class="links">
                            <a href="#about">About</a>
                            <a href="#job">Job</a>
                            <a href="#benefit">Benefit</a>
                            <a href="#review">Review</a>
                            <a href="#location">Location</a>
                            <a href="#qanda">QandA</a>
                        </div>
                </div>
{{--                 the company profile ends here                      --}}

                <hr>

                <div id="about">@include('BrandingViews.About')</div>

                <hr>
                <div id="job">@include('BrandingViews.Job')</div>

                <hr>
                <div id="benefit">@include('BrandingViews.Benefit')</div>

                <hr>
                <div id="review">@include('BrandingViews.Review')</div>

                <hr>
                <div id="location">@include('BrandingViews.Location')</div>

                <hr>
                <div id="qanda">@include('BrandingViews.QandA')</div>
            </div>
        </div>
    </body>
</html>
