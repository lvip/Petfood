<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Presenters\DatePresenter;

class Food extends Model
 {

    use DatePresenter;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'foods';
    public function food_additives()
    {
        return $this->hasMany('App\Models\FoodAdditives');
    }
    public function additives()
    {
        return $this->belongsToMany('App\Models\Additives','food_additives','food_id');
    }

}
