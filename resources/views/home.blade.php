{{-- @extends('layouts.app', ['title' => 'Home'])

@section('content')
    @component('components.alert')
        @slot('title')
            This is Header wih <strong>strong</strong> tag
        @endslot

        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi, corrupti?

        @slot('footer')
            <strong>Footer</strong>
        @endslot
    @endcomponent --}}


{{-- <x-alert>


        <x-slot name='title'>
            This is title
        </x-slot>

        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi, corrupti?

        <x-slot name='footer'>
            Footer
        </x-slot>

    </x-alert> --}}

{{-- <p>Ini adalah halaman home</p>
@endsection --}}

<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @if (session()->has('success'))
                    <div id="myAlert" class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session()->get('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="card mb-3">
                    <div class="card-header" style="background-color: #e3f2fd;">Welcome to my site</div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid repudiandae aliquam
                            obcaecati culpa cumque ex aut distinctio sunt enim, rerum beatae sequi magni quia delectus?
                        </p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A sed nobis accusamus error maiores
                            distinctio doloremque unde molestiae beatae consectetur. Ab, est omnis. Ratione voluptas
                            quod architecto aspernatur eos laudantium rerum totam ad! Quasi voluptatum dolor voluptas,
                            sapiente reprehenderit similique sed exercitationem aliquid enim vel!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
