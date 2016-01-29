@extends('front.template')
@section('left-side')
    {!! Form::open(['url' => 'food/search', 'method' => 'get', 'class' => 'form-vertical panel']) !!}
    {!! Form::label('type', 'Кошкака или собака')!!}
    <div class="row">
            <div class="col-lg-3">
    {!! Form::select('addname', $additives) !!}
            </div>
                <div class="col-lg-1">
    {!! Form::number('$additives', 'value') !!}
            </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            {!! Form::select('addname', $additives) !!}
        </div>
        <div class="col-lg-1">
            {!! Form::number('$additives', 'value') !!}
        </div>
    </div>
    <div class="row">
            <button type='button' id='addB' class='btn btn-success'>Добавать парметр</button>
    </div>
    {!! Form::select('animal', array(
    'Cats' => array('leopard' => 'Leopard'),
    'Dogs' => array('spaniel' => 'Spaniel')
    )) !!}
    {!! Form::submit(trans('front/form.send')) !!}
    {!! Form::close() !!}

    <h1 class="lead">Параметры отбора</h1>
    <div class="list-group">
        <a href="#" class="list-group-item">Category 1</a>
        <a href=	"#" class="list-group-item">Category 2</a>
        <a href="#" class="list-group-item">Category 3</a>
    </div>

@stop
@section('main')
    {!! Form::open(['url' => 'food/search', 'method' => 'get', 'role' => 'form', 'class' => 'pull-right']) !!}
    {!! Form::control('text', 12, 'search', $errors, null, null, null, 'Поиск корма') !!}
    {!! Form::close() !!}

    @foreach($foods as $food)
        <div class="box">
            <div class="col-lg-8 text-center">

                <h2><a href="/food/{!! $food->slug !!}" >{{$food->title }}</a>
                    <a href="/food/{!! $food->slug !!}" ><img alt="" src="/{{ $food->image }}" style="float:left; height:128px; width:128px"></a>
                    <br>
                    <small>{{ $food->slug }} {{ trans('front/blog.on') }} {!! $food->created_at . ($food->created_at != $food->updated_at ? trans('front/blog.updated') . $food->updated_at : '') !!}</small>
                </h2>
            </div>
            <div class="col-lg-8 text-center">
                {!! link_to('food/' . $food->slug, trans('front/blog.button'), ['class' => 'btn btn-default btn-lg']) !!}
                <hr>
            </div>
        </div>
    @endforeach
    @if(session('statut') == 'admin')
        <a href="/food/addadditives" type="button" name="total" class="btn btn-success ">Добавить микроэлемент </a>
        <a href="/food/create" type="button" name="total" class="btn btn-success ">Добавить Корм </a>
    @endif
    <div class="col-lg-8 text-center">
        {!! $links !!}
    </div>
    <div class="share42init" data-image="http://188.255.85.134/filemanager/userfiles/greatredactor/m_6b5a69cb.jpg"
         data-description="Описание ОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписание
			ОписаниеОписаниеОписаниеОписаниеОписаниеОписание"></div>


@stop
@section('scripts')
    <script type="text/javascript">
        $( "#addB" ).click(function() {
            $( "#addB").parent().before('<div class=row><div class=col-lg-3>'+ '{!! Form::select('addname', $additives) !!}'+'</div><div class="col-lg-1">'+
                    '{!! Form::number('$additives', 'value') !!}'+'</div></div>');
        });
    </script>
@stop
