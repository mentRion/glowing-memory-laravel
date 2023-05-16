
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        
        <div class="col-md-12">
            <div class="card">
                <div class="card-header fw-bold">{{ __('Update Task') }}</div>

                <div class="card-body">

                    <form class="form" method="POST" action="{{ route('tasks.update', ['id' => $task->id]) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="title" class="fw-bold">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{$task->title}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="description" class="fw-bold">Description</label>
                            <textarea class="form-control" id="description" name="description" style="height:200px">{{$task->description}}</textarea>
                        </div>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Submit
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Save</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Are you sure to save the changes?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                            </div>
                        </div>
                        </div>

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
