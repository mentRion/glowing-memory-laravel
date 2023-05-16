@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        
        <div class="col-md-12">
            <div class="card">
                <div class="card-header fw-bold">{{ __('Add Tasks') }}</div>

                <div class="card-body">

                   <form class="form" method="POST" action="{{ route('tasks.store') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="title" class="fw-bold">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                        </div>
                        <div class="form-group mb-3">
                            <label for="description" class="fw-bold">Description</label>
                            <textarea class="form-control" id="description" name="description" placeholder="Enter description" style="height:200px"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </form>



                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

