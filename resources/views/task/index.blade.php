@extends('layouts.app')

@section('content')

<script>
    function del(route){
        document.getElementById('destroyTrigger').action = route;
    }

    function check(route){
        document.getElementById('checkTrigger').action = route;
    }

</script>

<div class="container">

    <div class="row justify-content-center">

        <div class="col-12">

            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center fw-bold">
                    {{ __('Tasks') }}
                    <a class="btn btn-sm btn-primary" href="{{ route('tasks.create') }}">
                        <i class="bi bi-plus"></i>
                    </a>
                </div>

                <div class="card-body bg-transparent">

                    <div class="list-group">
                        @foreach ($tasks as $task)
                            <div class="list-group-item list-group-item-action">
                                <div class="row align-items-center">

                                    
                                    <div class="col-1">
                                        @if ($task->flag == 'is_done')
                                        <span class="icon"><i class="bi bi-check-square-fill"></i></span>
                                    @else
                                        <span class="icon"><i class="bi bi-square"></i></span>
                                    @endif


                                    </div>

                                    <div class="col-7">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="mb-1 fw-bold">{{ $task->title }}</p>
                                        </div>
                                        <p class="mb-1">{{ substr($task->description, 0, 50) . '...' }}</p>
                                        
                                        <small>{{ $task->created_at }}</small>
                                    </div>

                                    <div class="col-4">
                                        <div class="d-flex justify-content-center">

                                            <div class="dropdown">
                                            
                                            <a class="btn" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-three-dots fs-3"></i>
                                            </a>

                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal" onclick="del('{{ route('task.destroy', ['id' => $task->id]) }}')">
                                                            <i class="bi bi-trash-fill"></i>
                                                        </a>

                                                        <a href="{{ route('tasks.edit', ['id' => $task->id]) }}" class="btn btn-sm"><i class="bi bi-pencil-fill"></i></a>

                                                        <a href="{{ route('tasks.show', ['id' => $task->id]) }}" class="btn btn-sm"><i class="bi bi-eye-fill"></i></a>

                                                        <a class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#checkModal" onclick="check('{{ route('tasks.markdone', ['id' => $task->id, 'flag' => 'is_done']) }}')">
                                                            <i class="bi bi-check-square-fill"></i>
                                                        </a>

                                                    </li>

                                                    

                                                </ul>
                                            
                                            </div>

                                                <!-- Button trigger modal -->
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


    <!-- Modal -->
<div class="modal fade" id="checkModal" tabindex="-1" aria-labelledby="checkModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Done?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure to mark this as done?
      </div>
      <div class="modal-footer">
        <form id="checkTrigger" action="" method="POST">
            @csrf
            @method('PUT')
            <button type="submit" class="btn btn-danger">Yes</button>
        </form>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Delete</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure to delete this item?
      </div>
      <div class="modal-footer">
        <form id="destroyTrigger" action="" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Yes</button>
        </form>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>

@endsection
