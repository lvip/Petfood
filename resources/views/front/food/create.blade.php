@extends('front.template')
@section('main')
    <div class="col-sm-9">
        {!! Form::open(['url' => 'food', 'method' => 'post', 'class' => 'form-horizontal panel']) !!}
        {!! Form::control('text', 12, 'title', $errors, 'Заголовок') !!}
        {!! Form::control('text', 12, 'slug', $errors,'slug') !!}
        {!! Form::submit(trans('front/form.send')) !!}
        {!! Form::close() !!}
    </div>

@stop