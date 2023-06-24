<x-app-layout title='Tasks'>

    <h1>Tasks</h1>

    <div style="margin-bottom: 15px">
        <form action="/tasks" method="post">
            @csrf
            <input type="text" name="list" placeholder="The name of the task" autofocus>
            <button type="submit" class="btn">Create</button>
        </form>
    </div>

    <ul style="list-style-type: none;">
        @foreach ($tasks as $index => $task)
            <li style="margin-bottom: 15px">
                {{ $index + 1 }}. {{ $task->list }}
                <div>
                    <a style="color: blue;" href="/tasks/{{ $task->id }}/edit">Edit</a>

                    <form action="/tasks/{{ $task->id }}" method="post" style="display: inline">
                        @csrf
                        @method('delete')

                        <button type="submit">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>

</x-app-layout>
