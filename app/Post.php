<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //add this [to solve mass assignment things] whitelisting
    // everything here should be added
    //protected $fillable = ["title", "author", 'body'];



    //blacklistin
    // everything added to gauraded should not be allowed, it is used to take precautions incase someone add malicious or unwanted fields to our projects
    protected $guarded = [];
}
