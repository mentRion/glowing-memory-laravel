@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header fw-bold">{{ __('Task View') }}</div>

                <div class="card-body">

                    <ul class="list-group">
                        <li class="list-group-item">
                        <div class="form-group">
                        <label class="fw-bold" for="title">{{ __('Title') }}</label>
                        <p class="form-control-static">{{ $task->title }}</p>
                    </div>
                        </li>
                        <li class="list-group-item">
                        <div class="form-group" style="height:200px">
                            <label class="fw-bold"  for="description">{{ __('Description') }}</label>
                            <p class="form-control-static">{{ $task->description }}</p>
                    </div>
                        </li>
                    </ul>


                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
