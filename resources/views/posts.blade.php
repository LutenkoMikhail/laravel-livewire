@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-sm-9 mx-auto">
            <h1 class="text-success"> Laravel LiveWire CRUD</h1>

            {{--         <livewire:post-component/>--}}
            @livewire('post-component')
        </div>
    </div>
@endsection
