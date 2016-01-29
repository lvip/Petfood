<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Presenters\DatePresenter;

class Additives extends Model
{
    protected $table = 'additives';

    /**
     * Many to Many relation
     *
     * @return Illuminate\Database\Eloquent\Relations\belongToMany
     */
    public function group()
    {
        return $this->belongsToMany('App\Models\Food','foods_id','id');
    }
}
