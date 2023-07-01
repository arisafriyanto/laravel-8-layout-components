<x-app-layout title="Edit Task">

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card text-bg-primary">
                    <div class="card-header">Edit Task</div>
                    <div class="card-body">
                        <form action="{{ route('tasks.update', $task->id) }}" method="post" class="row">
                            @method('put')
                            @csrf
                            @include('tasks._form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
