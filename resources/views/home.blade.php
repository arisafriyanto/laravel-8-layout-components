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
    Ini adalah halaman home
</x-app-layout>
