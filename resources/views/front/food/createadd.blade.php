@extends('front.template')
@section('main')
    <div class="col-sm-9">
        {!! Form::open(['url' => 'food/addadditives', 'method' => 'post', 'class' => 'form-horizontal panel']) !!}
        {!! Form::control('text', 12, 'name', $errors, 'Заголовок') !!}
        {!! Form::submit(trans('front/form.send')) !!}
        {!! Form::close() !!}
    </div>

@stop