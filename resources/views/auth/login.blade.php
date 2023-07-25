<x-app-layout title="Login">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card text-bg-primary">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="mb-4">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" value="{{ old('email') }}"
                                    class="form-control" autofocus>

                                @error('email')
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

                            <button type="submit" class="btn btn-light">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
