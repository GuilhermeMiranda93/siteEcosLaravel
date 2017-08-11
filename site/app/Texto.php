<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Texto extends Model
{

	use Sluggable;

	protected $table = 'tb_texto';

	public function sluggable(){
		return [
            'slug' => [
                'source' => 'title'
            ]
        ];
	}
}
