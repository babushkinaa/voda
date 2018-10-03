@extends('layouts.bootstrap')

@section('content')

    <div class="container">
        <h3>Редактирование категорий</h3>
        <div class="row col-md-12">
            <div class="col-md-3">
                @include('include.menuadmin')
            </div>

            <div class="col-md-9">
                @include('include.allcategores')
            </div>

    {{--{{dump($categores)}}--}}

@endsection