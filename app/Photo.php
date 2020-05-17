<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //

    protected $uploads = '/userimages/';			//For Acessor

    protected $fillable = ['file'];  

    public function getFileAttribute($photo)					//For Accessor
    {
    	return $this->uploads . $photo;
    }
}
