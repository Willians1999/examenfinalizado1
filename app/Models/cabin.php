<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//Generated By PlantUML Command
class cabin extends Model{
public function classroom(){ return $this->belongsTo('App\Models\classroom'); }
public function vote(){ return $this->hasMany('App\Models\vote'); }
}