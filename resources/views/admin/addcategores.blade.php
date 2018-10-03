@extends('layouts.bootstrap')

@section('content')

    <div class="container">
        <h3>Добавить категорию</h3>
        <div class="row col-md-12">
            <div class="col-md-3">
                @include('include.menuadmin')
            </div>

            <div class="col-md-9">
                {!! Form::open([
                'route' => ['categores.add'],
                'class' => "form-group",
                'files' => true
                ]) !!}
                {{Form::token()}}
                <div class="row col-md-12">
                    <div class="col-md-6">

                        {{Form::label('name', 'Название категории', $attributes = ['class'=>'col-form-label'])}}
                        {{Form::text('name', null, $attributes = ['class'=>'form-control'])}}

                    </div>

                    <div class="row col-md-12">
                        <hr>
                        <div class="col-md-3">
                            {{Form::submit('Добавить', [
                            'class' => 'btn btn-success'
                            ])}}
                        </div>

                    </div>
    {!! Form::close() !!}

    {{--{{dump($categores)}}--}}

@endsection