<?php
namespace App;
use \Illuminate\Database\Eloquent\Model;
/**
 * Description of Post
 *
 * @author Sammy Guergachi <sguergachi at gmail.com>
 */
class Post extends Model{
    protected $fillable = ['title', 'body'];
}
