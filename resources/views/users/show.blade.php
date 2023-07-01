<x-app-layout title="{{ $user->name }}">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>
                    {{ $user->name }}
                    <small class="text-secondary">
                        {{ $user->username }}
                    </small>
                </h1>
            </div>
        </div>
    </div>
</x-app-layout>
