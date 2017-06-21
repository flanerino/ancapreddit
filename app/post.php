<?php
namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model{
  protected $table ='posts';

  protected $fillable = ['title','description','url'];

  protected $casts = ['user_id' => 'integer'];


  public function user()
  {
    return $this->belongsTo(User::class);
  }




  public function wasCreatedBy($user)
  {
    if(is_null($user)){
      return false;
    }else{
      return $this->user_id === $user->id;
    }

  }
}
 ?>
