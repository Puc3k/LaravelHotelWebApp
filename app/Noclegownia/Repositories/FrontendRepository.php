<?php
/*
|--------------------------------------------------------------------------
| app/Enjoythetrip/Repositories/FrontendRepository.php *** Copyright netprogs.pl | available only at Udemy.com | further distribution is prohibited  ***
|--------------------------------------------------------------------------
*/

namespace App\Noclegownia\Repositories; 
use App\Noclegownia\Interfaces\FrontendRepositoryInterface;
use App\TouristObject; 


class FrontendRepository implements FrontendRepositoryInterface   {
    
    
    public function getObjectsForMainPage()
    {
        return TouristObject::with(['city','photos'])->ordered()->paginate(8);
    } 
    public function getObject($id)
    {
        return TouristObject::find($id);
    } 
  
}


