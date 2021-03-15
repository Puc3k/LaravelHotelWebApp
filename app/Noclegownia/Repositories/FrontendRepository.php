<?php
/*
|--------------------------------------------------------------------------
| app/Enjoythetrip/Repositories/FrontendRepository.php *** Copyright netprogs.pl | available only at Udemy.com | further distribution is prohibited  ***
|--------------------------------------------------------------------------
*/

namespace App\Noclegownia\Repositories; /* Lecture 12 */

use App\Noclegownia\Interfaces\FrontendRepositoryInterface;  /* Lecture 13 */
use App\{TouristObject,City/*Lecture 17*/,Room/* Lecture 20 */,Reservation/* Lecture 20 */,Article/* Lecture 22 */,User/* Lecture 23 */}; /* Lecture 12 */

/* Lecture 12 */
class FrontendRepository implements FrontendRepositoryInterface  {   /* Lecture 13 implements FrontendRepositoryInterface */
    
    /* Lecture 12 */
    public function getObjectsForMainPage()
    {
        // return TouristObject::all(); /* Lecture 15 */
        return TouristObject::with(['city','photos'])->ordered()->paginate(8); /* Lecture 15 */
    } 
    
    
    /* Lecture 15 */
    public function getObject($id)
    {
        //return TouristObject::find($id); /* Lecture 15 */

        
        // rooms.object.city   for json mobile because there is no lazy loading there
        return  TouristObject::with(['city','photos', 'address','users.photos','rooms.photos','comments.user','articles.user','rooms.object.city'])->find($id); /* Lecture 17 */
    }
    
    
    /* Lecture 17 */
    public function getSearchCities( string $term)
    {
        return  City::where('name', 'LIKE', $term . '%')->get();               
    } 
    
    
    /* Lecture 18 */
    public function getSearchResults( string $city)
    {
        // rooms.object.photos  for json mobile
        return  City::with(['rooms.reservations','rooms.photos','rooms.object.photos'])->where('name',$city)->first() ?? false;  /* Lecture 19 */
    } 
    
    
    /* Lecture 20 */
    public function getRoom($id)
    {
        // with - for mobile json
        return  Room::with(['object.address'])->find($id);
    } 
    
    
    /* Lecture 20 */
    public function getReservationsByRoomId( $room_id )
    {
        return  Reservation::where('room_id',$room_id)->get(); 
    } 
    
    
    /* Lecture 22 */
    public function getArticle($id)
    {
        return  Article::with(['object.photos','comments'])->find($id);
    } 
    
    /* Lecture 23 */
    public function getPerson($id)
    {
        return  User::with(['objects','larticles','comments.commentable'])->find($id);
    } 
    
  
}


