{{-- @foreach ($errors->all() as $error)
<small>* {{ $error }}</small>
@endforeach --}}

<div class="card text-bg-primary">
    <div class="card-header">Create new Task</div>
    <div class="card-body">
        <form action="{{ route('tasks.store') }}" method="post" class="row">
            @csrf
            @include('tasks._form')
        </form>
    </div>
</div>
