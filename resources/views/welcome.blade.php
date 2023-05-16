<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'TaskPulse') }}</title>

        <link rel="icon" type="image/jpeg" href="{{ asset('taskpulse.jpeg') }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

           <script src="{{ asset('js/app.js') }}" defer></script>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;

                background-image: url("{{ asset('background.png') }}");
                background-size: cover;
                background-repeat: no-repeat;
                background-attachment: fixed;

            }
        </style>
    </head>
    <body class="antialiased">
        


        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-lg-6">
                <img src="{{ asset('taskpulse.jpeg') }}" class="d-block mx-lg-auto img-fluid rounded-5" alt="Bootstrap Themes" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Welcome to TaskPulse: Master Your Tasks with Ease</h1>
                <p class="lead">Experience the convenience and efficiency of TaskPulse. Start your journey towards effortless task management today and unlock your full productivity potential. Try TaskPulse now and elevate your task management to new heights.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">

                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                                <a href="{{ url('/home') }}" class="btn btn-primary btn-lg px-4">Home</a>
                            @else

                                <a href="{{ route('login') }}" class="btn btn-primary btn-lg px-4">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-primary btn-lg px-4">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif


                </div>
            </div>
            </div>
        </div>


            

        </div>
    </body>
</html>
