<?php namespace App\Repositories;
//use Illuminate\Support\Facades\DB;
use DB;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Contact, App\Models\Food, App\Models\Additives, App\Models\FoodAdditives;


class FoodRepository extends BaseRepository
{
    protected $additives;
    protected $foodAdditives;

    public function __construct(Food $food,Additives $additives,FoodAdditives $foodAdditives)

    {
        $this->model = $food;
        $this->additives = $additives;
        $this->foodAdditives= $foodAdditives;

    }
    private function queryActiveWithUserOrderByDate()
    {
        return $this->model
            ->select('id', 'image','created_at', 'updated_at', 'title', 'slug')
            ->latest();
    }
    private function queryAddivites($compareitem)
    {
        return $this->model->select('additives.id')->join('food_additives','food_additives.food_id','=','foods.id')
            ->join('additives','food_additives.additives_id','=','additives.id')->distinct()->whereIn('slug',$compareitem);
    }
    /**
     * Get post collection.
     *
     * @param  int  $n
     * @return Illuminate\Support\Collection
     */

    private function savePost($food, $inputs)
    {
        $food->title = $inputs['title'];
        $food->slug = $inputs['slug'];
        $food->active = isset($inputs['active']);

        $food->save();

        return $food;
    }

    private function saveAdd($add, $inputs)
    {
        $add->name = $inputs['name'];

        $add->save();

        return $add;
    }
    public function indexFront($n)
    {
        $query = $this->queryActiveWithUserOrderByDate();

        return $query->paginate($n);
    }

    public function search($n, $search)
    {
        $query = $this->queryActiveWithUserOrderByDate();

        return $query->where(function($q) use ($search) {
            $q->where('title', 'like', "%$search%")
                ->orWhere('slug', 'like', "%$search%");
        })->paginate($n);
    }


    public function compare($compareitem)
    {


        $par1= $this->queryAddivites($compareitem)->get();
        //Выбор всех null параметров
        $par2 = DB::table('additives')->from(DB::raw('additives,foods'))
            ->select(DB::raw('foods.slug,additives.id idA,foods.id idF,null,foods.title,additives.name'))
            ->Wherein('slug',$compareitem)
            ->whereIn('additives.id',$par1)
            ->wherenotExists(function($query)
            {
                $query
                    ->from('food_additives')
                    ->whereRaw('additives.id=food_additives.additives_id and foods.id=food_additives.food_id');
            });
        //dd($par2);
        $foods= $this->foodAdditives
            ->select('foods.slug','food_additives.additives_id','food_additives.food_id','food_additives.value','foods.title','additives.name')
            ->join('foods','foods.id','=','food_additives.food_id')
            ->join('additives','additives.id','=','food_additives.additives_id')
            ->unionall($par2)->Wherein('additives_id',$par1)->Wherein('slug',$compareitem)->orderby('food_id')->get();
        //var_dump($query);

        //dd($add);
        //$grouped=$foods->get('additives');
        $foods = $foods->groupBy('additives_id');
        //dd($foods );
        //    return $item['id'];
        //});
        //$unique=$add->unique('id');
        //$foods=$foods->toarray();
        //$query=$query->toarray();
        //dd($foods);
        //dd($foods);
        //dd($unique);
        //dd($query);
        //dd($json);

        return compact('foods', 'unique');
    }

    /**
     * Get contacts collection.
     *
     * @return Illuminate\Support\Collection
     */
    public function index()
    {
        $additives= $this->additives->lists('name', 'id');
        return $additives;
    }
    public function show($slug)
    {
        //$food = $this->model;
        //$foods=$food->find(1)->group;
        //dd($foods);
        //$food = $this->model->whereSlug($slug)
        //    ->leftjoin('food_additives', 'food_additives.food_id', '=', 'foods.id')
        //    ->get();
        //$food = $this->model->with(['additives','food_additives'])->whereSlug($slug)
        //    ->join('food_additives', 'foods.id', '=', 'food_additives.food_id')
        //  ->firstOrFail();
        $food = $this->model->with(array('food_additives' => function($query)
        {
            $query->join('additives', 'additives.id', '=', 'food_additives.additives_id');

        }))->whereSlug($slug)->firstOrFail();
        //$food_f =$this->model->join('additives', 'additives.id', '=', 'food_additives.additives_id')->get();
        //dd($food_f);

       // $comments = $this->comment
        //    ->wherePost_id($post->id)
        //    ->with('user')
         //   ->whereHas('user', function($q) { $q->whereValid(true); })
         //   ->get();

        return compact('food');
    }
    /**
     * Store a contact.
     *
     * @param  array $inputs
     * @return void
     */
    public function storeadd($inputs)
    {
        $add= new $this->additives;
        $add = $this->saveAdd($add, $inputs);
    }

    public function store($inputs)
    {
        $food= new $this->model;
        $food = $this->savePost($food, $inputs);
    }
    public function addtosession($inputs)
    {
        Session::put('key', 'value');
    }
    /**
     * Update a contact.
     *
     * @param  bool  $vu
     * @param  int   $id
     * @return void
     */
    public function update($seen, $id)
    {
        $food = $this->getById($id);

        $food->seen = $seen == 'true';

        $food->save();
    }
}