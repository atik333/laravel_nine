<?php 

namespace App\Repositories;

use Illuminate\Support\Facades\Facade;

class About extends Facade{
      protected static function getFacadeAccessor(){
            return 'home';
      } 
}



?>