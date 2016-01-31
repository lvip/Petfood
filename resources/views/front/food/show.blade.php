@extends('front.template')
@section('head')


    <!-- Add jQuery library -->
    <script type="text/javascript" src="/fancybox/lib/jquery-1.10.1.min.js"></script>

    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
    <link rel="stylesheet" type="text/css" href="../source/jquery.fancybox.css?v=2.1.5" media="screen" />

    <!-- Add Button helper (this is optional) -->
    <link rel="stylesheet" type="text/css" href="/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
    <script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

    <!-- Add Thumbnail helper (this is optional) -->
    <link rel="stylesheet" type="text/css" href="/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
    <script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>


    <!-- Add Media helper (this is optional) -->
    <script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
    <script type="text/javascript" src="/js/jRate.js"></script>

    <script type="text/javascript">
        $(function () {
            var that = this;
            var toolitup = $("#jRate").jRate({
                rating: 3,
                strokeColor: 'black',
                precision: 1,
                minSelected: 1,
                startColor: '#FF8940'   ,
                endColor: "#FFDE40",
                onChange: function(rating) {
                    //console.log("OnChange: Rating: "+rating);
                },
                onSet: function(rating) {
                    console.log("OnSet: Rating: "+rating);
                }
            });

            $('#btn-click').on('click', function() {
                toolitup.setRating(0);
            });

        });
    </script>
<script type="text/javascript">
    $(document).ready(function() {
        /*
         *  Simple image gallery. Uses default settings
         */

        $('.fancybox').fancybox();

        /*
         *  Different effects
         */

        // Change title type, overlay closing speed
        $(".fancybox-effects-a").fancybox({
            helpers: {
                title : {
                    type : 'outside'
                },
                overlay : {
                    speedOut : 0
                }
            }
        });

        // Disable opening and closing animations, change title type
        $(".fancybox-effects-b").fancybox({
            openEffect  : 'none',
            closeEffect	: 'none',

            helpers : {
                title : {
                    type : 'over'
                }
            }
        });

        // Set custom style, close if clicked, change title type and overlay color
        $(".fancybox-effects-c").fancybox({
            wrapCSS    : 'fancybox-custom',
            closeClick : true,

            openEffect : 'none',

            helpers : {
                title : {
                    type : 'inside'
                },
                overlay : {
                    css : {
                        'background' : 'rgba(238,238,238,0.85)'
                    }
                }
            }
        });

        // Remove padding, set opening and closing animations, close if clicked and disable overlay
        $(".fancybox-effects-d").fancybox({
            padding: 0,

            openEffect : 'elastic',
            openSpeed  : 150,

            closeEffect : 'elastic',
            closeSpeed  : 150,

            closeClick : true,

            helpers : {
                overlay : null
            }
        });

        /*
         *  Button helper. Disable animations, hide close button, change title type and content
         */

        $('.fancybox-buttons').fancybox({
            openEffect  : 'none',
            closeEffect : 'none',

            prevEffect : 'none',
            nextEffect : 'none',

            closeBtn  : false,

            helpers : {
                title : {
                    type : 'inside'
                },
                buttons	: {}
            },

            afterLoad : function() {
                this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
            }
        });


        /*
         *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
         */

        $('.fancybox-thumbs').fancybox({
            prevEffect : 'none',
            nextEffect : 'none',

            closeBtn  : false,
            arrows    : false,
            nextClick : true,

            helpers : {
                thumbs : {
                    width  : 50,
                    height : 50
                }
            }
        });

        /*
         *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
         */
        $('.fancybox-media')
                .attr('rel', 'media-gallery')
                .fancybox({
                    openEffect : 'none',
                    closeEffect : 'none',
                    prevEffect : 'none',
                    nextEffect : 'none',

                    arrows : false,
                    helpers : {
                        media : {},
                        buttons : {}
                    }
                });

        /*
         *  Open manually
         */

        $("#fancybox-manual-a").click(function() {
            $.fancybox.open('1_b.jpg');
        });

        $("#fancybox-manual-b").click(function() {
            $.fancybox.open({
                href : 'iframe.html',
                type : 'iframe',
                padding : 5
            });
        });

        $("#fancybox-manual-c").click(function() {
            $.fancybox.open([
                {
                    href : '1_b.jpg',
                    title : 'My title'
                }, {
                    href : '2_b.jpg',
                    title : '2nd title'
                }, {
                    href : '3_b.jpg'
                }
            ], {
                helpers : {
                    thumbs : {
                        width: 75,
                        height: 50
                    }
                }
            });
        });


    });
</script>
<style type="text/css">
    .fancybox-custom .fancybox-skin {
        box-shadow: 0 0 50px #222;
    }

    body {
        max-width: 700px;
        margin: 0 auto;
    }
</style>
@stop
@section('left-side')
    <h1 class="lead">Параметры отбора</h1>
    <div class="list-group">
        <a href="#" class="list-group-item">Category 1</a>
        <a href=	"#" class="list-group-item">Category 2</a>
        <a href="#" class="list-group-item">Category 3</a>
    </div>

@stop

@section('main')
    <div class="row">
        <div class="box">
            <div class="row">
                <div class="col-md-4"><h2 >{{$food->title }} </h2></div>
                <div class="col-md-2"><div id="jRate"> Рейтинг:</div></div>

                <div class="col-md-4 col-md-offset-4">

                    @if(session()->has('food.compare'))
                        {{ ($flag = false) ? '' : '' }}
                    @foreach(session('food.compare') as $item)
                        @if($item==$food->slug)
                                <button type='button' id='del' class='btn btn-warning'>Убрать из сравнения ({{Count(session('food.compare'))}})</button>
                                {{ ($flag = true) ? '' : '' }}
                            @endif
                        @endforeach
                    @if($flag==false)
                        {{ ($var = 'Присвоить переменную в шаблоне') ? '' : '' }}
                            <button  type="button" id ="add" class="btn btn-primary">Добавить к сравнению ({{Count(session('food.compare'))}})</button>
                    @endif
                    @else
                        <button  type="button" id ="add" class="btn btn-primary">Добавить к сравнению</button>
                    @endif
                </div>
            </div>



            <p>
                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="/img/4_b.jpg"><img src="/img/4_s.jpg" alt="" /></a>

                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="/img/3_b.jpg"><img src="/img/3_s.jpg" alt="" /></a>

                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="/img/2_b.jpg"><img src="/img/2_s.jpg" alt="" /></a>

                <a class="fancybox-thumbs" data-fancybox-group="thumb" href="/img/1_b.jpg"><img src="/img/1_s.jpg" alt="" /></a>
            </p>
            <br>

            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#sostav">Состав</a></li>
                <li><a data-toggle="tab" href="#oproivoditele">О производителе</a></li>
                <li><a data-toggle="tab" href="#otzivi">Отзывы</a></li>
            </ul>

            <div class="tab-content">
                <div id="sostav" class="tab-pane fade in active">
                    <h3>HOME</h3>
                    <p>Ингредиенты:
                        Филе индейки, картофель, горошек, свежие цельные яйца, томаты, масло канолы (источник витамина Е), семена льна, натуральный ароматизатор, филе лосося, утиное филе, кокосовое масло (источник витамина Е), яблоки, морковь, тыква, бананы, черника, клюква, малина, ежевика, папайя, ананас, грейпфрут, чечевица, брокколи, шпинат, творог, ростки люцерны, дикальций фосфат, люцерна, карбонат кальция, фосфорная кислота, натрия хлорид, лецитин, хлорид калия, DL-метионин, таурин, витамины (витамин Е, L-аскорбил-2-полифосфатов (источник витамина С), никотиновая кислота, инозит, витамин А, тиамин, амононитрат, пантотенат D-кальция, пиридоксинагидрохлорид, рибофлавин, бета-каротин, витамин D3, фолиевая кислота, биотин, витаминВ12), минералы (протеинат цинка, сульфат железа, оксид цинка, протеинат железа, сульфат меди, протеинат меди, протеинат марганца, оксид марганца, йодат кальция, селенит натрия), сушеные водоросли,L-лизин, сухой корень цикория, Lactobacillus, Enterococcusfaecium, Aspergillus, экстракт Юкки Шидигера, L-карнитин, ноготки, сушеный розмарин..</p>
                </div>
                <div id="oproivoditele" class="tab-pane fade">
                    <h3>Menu 1</h3>
                    <p>Канадский супер-премиум корм Now Natural Holistic изготовлен только из свежего бескостного мяса, с добавлением овощей и фруктов, без использования гормонов и субпродуктов.
                        100% беззерновой корм со сбалансированным содержанием белков и жиров.
                        NOW - единственный корм, который не только не содержит зерновых, но и обладает оптимальным соотношением белков и жиров.</p>
                </div>
                <div id="otzivi" class="tab-pane fade">
                    <h3>Menu 2</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                </div>
            </div>
            <hr>
            <p>Гарантированный анализ:</p>
            <br>

            <table class="table table-striped">
                <thead>
                <tr>
                    <th> <h2>{{ trans('front/food.additives') }}</h2></th>
                    <th><h2>{{ trans('front/food.value') }}</h2></th>
                </tr>
                </thead>
                <tbody>

                @if($food->food_additives->count())
                    @if($food->food_additives->count() > 0)
                        @foreach($food->food_additives as $add)
                            <tr>
                                <td>{!! $add->name !!}  </td>
                                <td>{!! $add->value !!}  </td>
                            </tr>
                        @endforeach
                    @endif
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    <script id="dsq-count-scr" src="//choosepetsfood.disqus.com/count.js" async></script>

    <div id="vk_comments"></div>
    <script type="text/javascript">
        window.onload = function () {
            VK.init({apiId: 5055411, onlyWidgets: true});
            VK.Widgets.Comments('vk_comments', {width: 800, limit: 15}, 321);
        }
    </script>
@stop
@section('scripts')
    <script type="text/javascript">


        $('body').delegate( "button#del", "click", function() {

            $.get(
                    document.location.href,
                    {
                        act:'del'
                    },
                    onAjaxSuccess
            );
            function onAjaxSuccess(data)
            {
                $( ".btn" ).replaceWith("<button type='button' id='add' class='btn btn-primary'>Добавить к сравнению</button>")
            }

        });
        $('body').delegate( "button#add", "click", function() {
            $.get(
                    document.location.href,
                    {
                        act:'add'
                    },
                    onAjaxSuccess

            );
            function onAjaxSuccess(data)
            {
                $( ".btn" ).replaceWith("<button type='button' id='del' class='btn btn-warning'>Убрать из сравнения ({{Count(session('food.compare'))+1}})</button>");
            }
        });



</script>
@stop