@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 my-2">
            <div class="card h-100">
                <div class="card-header">{{ __('Tasks') }}</div>

                <div class="card-body">
                    Total Tasks
                    <hr>
                    <p class="h1">3</p>
                    <hr>
                    
                </div>
            </div>
        </div>

        <div class="col-md-6 my-2">
            <div class="card h-100">
                <div class="card-header">{{ __('Done Tasks') }}</div>

                <div class="card-body">

                     Total Tasks
                    <hr>
                    <p class="h1">2</p>
                    <hr>


                </div>
            </div>
        </div>
        <div class="col-md-6 my-2">
            <div class="card h-100">
                <div class="card-header">{{ __('Your Info') }}</div>

                <div class="card-body">
                    <p><span class="fw-bold">Name: </span>{{ $name }}</p>
                    <hr>
                    <p><span class="fw-bold">Email: </span>{{ $email }}</p>
                    <hr>
                </div>
            </div>
        </div>
        <div class="col-md-6 my-2">
            <div class="card h-100">
                <div class="card-header">{{ __('About') }}</div>

                <div class="card-body">
                    TaskPulse is a powerful task management solution that helps you stay organized and focused. With its user-friendly interface, you can easily create and prioritize tasks, set deadlines, and track progress. Collaborate with your team, delegate tasks, and achieve optimal productivity. TaskPulse simplifies your task management process, enabling you to streamline your workflow and accomplish your goals efficiently.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
