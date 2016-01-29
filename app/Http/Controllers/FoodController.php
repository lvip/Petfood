<?php namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Requests\SearchRequest;
use App\Http\Requests\FoodRequest;
use App\Repositories\FoodRepository;
use App\Repositories\BlogRepository;
use App\Repositories\UserRepository;

class FoodController extends Controller
{

    /**
     * The BlogRepository instance.
     *
     * @var App\Repositories\BlogRepository
     */
    protected $blog_gestion;

    /**
     * The UserRepository instance.
     *
     * @var App\Repositories\UserRepository
     */
    protected $user_gestion;
    /**
     * The UserRepository instance.
     *
     * @var App\Repositories\FoodRepository
     */
    protected $food_gestion;

    /**
     * The pagination number.
     *
     * @var int
     */
    protected $nbrPages;

    /**
     * Create a new BlogController instance.
     *
     * @param  App\Repositories\BlogRepository $blog_gestion
     * @param  App\Repositories\UserRepository $user_gestion
     * @return void
     */
    public function __construct(
        BlogRepository $blog_gestion,
        UserRepository $user_gestion,
        FoodRepository $food_gestion)
    {
        $this->user_gestion = $user_gestion;
        $this->blog_gestion = $blog_gestion;
        $this->food_gestion = $food_gestion;
        $this->nbrPages = 10;

        //$this->middleware('redac', ['except' => ['indexFront', 'show', 'tag', 'search']]);
        //$this->middleware('ajax', ['only' => ['updateSeen', 'updateActive']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $posts = $this->blog_gestion->indexFront($this->nbrPages);
        //$links = $posts->setPath('')->render();
        //$messages = $food_gestion->index();
        //dd($messages);
        //$foods = $this->food_gestion->index();
        $foods = $this->food_gestion->indexFront($this->nbrPages);
        $additives =$this->food_gestion->index();
        $links = $foods->setPath('')->render();
        //dd($additives);
        //dd($foods);
        //return view('back.messages.index', compact('messages'));
        if($request->ajax()) {
            return response()->json([
                'view' => 'OK all',
                'links' => 'LINKS ok'
            ]);
        }

        return view('front.food.index', compact('foods','links','additives'));
    }

    public function compare(Request $request)
    {
        //$user = $auth->user();
        $compareitem=$request->session()->get('food.compare');
        return view('front.food.compare', $this->food_gestion->compare($compareitem));
    }

    /**
     * Find search in pet foods
     *
     * @param  App\Http\Requests\SearchRequest $request
     * @return Response
     */
    public function search(SearchRequest $request)
    {
        $additives =$this->food_gestion->index();
        $search = $request->input('search');
        $foods = $this->food_gestion->search($this->nbrPages, $search);
        $info = trans('front/blog.info-search') . '<strong>' . $search . '</strong>';
        //  dd($foods);
        $links = $foods->setPath('')->render();
        return view('front.food.index', compact('foods','additives','links'));
    }
    public function addadditives()
    {
        $url = config('medias.url');

        return view('front.food.createadd');
    }


    public function create()
    {
        $url = config('medias.url');

        return view('front.food.create');
    }
    public function store(FoodRequest$request)
    {
        $this->food_gestion->store($request->all());

        return redirect('food')->with('ok', trans('back/blog.stored'));
    }

    public function storeadd(Request $request)
    {
        $this->food_gestion->storeadd($request->all());

        return redirect('food')->with('ok', trans('back/blog.stored'));
    }

    public function edit(
        UserRepository $user_gestion,
        $id)
    {
        $url = config('medias.url');

        return view('back.blog.edit',  array_merge($this->blog_gestion->edit($id), compact('url')));
    }


    public function show(Request $request,
        Guard $auth,
        $slug)
    {
        if($request->ajax()) {
            $act=$request->get('act', 'none');
            if($act=='add'){
                $request->session()->push('food.compare', $slug);
            }
            else {
                //удаляем прошлую и помещает массив без нашего значения
                $request->session()->put('food.compare', array_diff($request->session()->get('food.compare'), [$slug]));
            }
            return response()->json([
                'slug' => $slug,
                'act' => $act
            ]);
        }
        $user = $auth->user();

        return view('front.food.show',  array_merge($this->food_gestion->show($slug), compact('user')));
    }
}