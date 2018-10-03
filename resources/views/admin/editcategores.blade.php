@extends('layouts.bootstrap')

@section('content')

    <div class="container">
        <h3>Редактирование пользователя</h3>
        <div class="row col-md-12">
            <div class="col-md-3">
                @include('include.menuadmin')
            </div>
            <div class="col-md-9">
                {!! Form::open([
                'route' => ['update.categores',$categores->id],
                'class' => "form-group",
                'files' => true
                ]) !!}
                {{Form::token()}}
                <div class="row col-md-12">
                    <div class="col-md-6">

                        {{Form::label('name', 'Название категории', $attributes = ['class'=>'col-form-label'])}}
                        {{Form::text('name', $categores->name, $attributes = ['class'=>'form-control'])}}



                    </div>

                    <div class="row col-md-12">
                        <hr>
                        <div class="col-md-3">
                            {{Form::submit('Внести изменения', [
                            'class' => 'btn btn-success'
                            ])}}
                        </div>

                    </div>
    {!! Form::close() !!}

@endsection