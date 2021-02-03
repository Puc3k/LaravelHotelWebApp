<?php
/*
|--------------------------------------------------------------------------
| app/Enjoythetrip/Repositories/FrontendRepository.php *** Copyright netprogs.pl | available only at Udemy.com | further distribution is prohibited  ***
|--------------------------------------------------------------------------
*/

namespace App\Noclegownia\Presenters; 
trait UserPresenter {
    
    
    public function getFullNameAttribute()
    {
        return $this->name.' '.$this->surname;
    } 
  
}


