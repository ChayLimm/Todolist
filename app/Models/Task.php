<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
     public $tables ='tasks';
    // 'tasks'
    protected $fillable=[
        'description',
    ];
    public function iscompleted(){
        return $this->completed_at != null;
    }
}
