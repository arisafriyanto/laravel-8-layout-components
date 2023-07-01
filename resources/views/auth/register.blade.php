<x-app-layout title="Register">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card text-bg-primary">
                    <div class="card-header">Create new account</div>
                    <div class="card-body">
                        <form action="{{ route('register') }}" method="post">
                            @csrf
                            <div class="mb-4">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" value="{{ old('email') }}"
                                    class="form-control">

                                @error('email')
                                    <small>*{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" id="name" value="{{ old('name') }}"
                                    class="form-control">

                                @error('name')
                                    <small>*{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" name="username" id="username" value="{{ old('username') }}"
                                    class="form-control">

                                @error('username')
                                    <small>*{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" value="{{ old('password') }}"
                                    class="form-control">

                                @error('password')
                                    <small>*{{ $message }}</small>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-light">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
