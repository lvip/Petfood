@extends('front.template')


@section('main')


            {!! Form::open(['url' => 'blog/search', 'method' => 'get', 'role' => 'form', 'class' => 'pull-right']) !!}  
                {!! Form::control('text', 12, 'search', $errors, null, null, null, trans('front/blog.search')) !!}
            {!! Form::close() !!}


        @foreach($posts as $post)
            <div class="box">
                <div class="col-lg-8 text-center">
                    <h2>{{ $post->title }}
                    <br>
                    <small>{{ $post->user->username }} {{ trans('front/blog.on') }} {!! $post->created_at . ($post->created_at != $post->updated_at ? trans('front/blog.updated') . $post->updated_at : '') !!}</small>
                    </h2>
                </div>
                <div class="col-lg-8">
                    <p>{!! $post->summary !!}</p>
                </div>
                <div class="col-lg-8 text-center">
                    {!! link_to('blog/' . $post->slug, trans('front/blog.button'), ['class' => 'btn btn-default btn-lg']) !!}
                    <hr>
                </div>
            </div>
        @endforeach

        <div class="col-lg-8 text-center">
            {!! $links !!}
        </div>
            <div class="share42init" data-image="http://188.255.85.134/filemanager/userfiles/greatredactor/m_6b5a69cb.jpg"
                 data-description="Описание ОписаниеОписаниеОписаниеОписаниеОписаниеОписаниеОписание
			ОписаниеОписаниеОписаниеОписаниеОписаниеОписание">

@stop

