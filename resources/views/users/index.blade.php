<x-app-layout title="Users">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>All Users</h1>

                <ul>
                    @foreach ($users as $user)
                        <li><a href="{{ route('users.show', $user) }}">{{ $user->name }}</a></li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
</x-app-layout>
