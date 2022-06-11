<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function getByLimit(int $limit_count = 10) 
    {
    // updated_atで降順に並べたあと、limitで件数制限をかける
    return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    //return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->toSql();
    //$sql = $this->orderBy('updated_at', 'DESC')->limit($limit_count)->toSql();
    //return var_dump($sql);
    }
    
    
    public function getPaginateByLimit(int $limit_count = 5) 
    {
    // updated_atで降順に並べたあと、pagenateで指定検数のみ表示する
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function showPost()
    {
        return $this->get();
    }
    
    protected $fillable = [
        'title',
        'body',
    ];

}