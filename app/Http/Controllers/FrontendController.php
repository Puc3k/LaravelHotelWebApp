<?php
/*
|--------------------------------------------------------------------------
| app/Http/Controllers/FrontendController.php *** Copyright netprogs.pl | available only at Udemy.com | further distribution is prohibited  ***
|--------------------------------------------------------------------------
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noclegownia\Interfaces\FrontendRepositoryInterface; /* Lecture 12 Lecture 13 FrontendRepositoryInterface  */
use App\Noclegownia\Gateways\FrontendGateway; /* Lecture 17 */

class FrontendController extends Controller
{
    /* Lecture 12 */
    public function __construct(FrontendRepositoryInterface $frontendRepository, FrontendGateway $frontendGateway /* Lecture 17 */) /* Lecture 13 FrontendRepositoryInterface */
    {
        $this->fR = $frontendRepository;
        $this->fG = $frontendGateway; /* Lecture 17 */
    }
    
    
    /* Lecture 6 */
    public function index()
    {
        $objects = $this->fR->getObjectsForMainPage(); /* Lecture 12 */
        //dd($objects);  /* Lecture 12 */
        return view('frontend.index',['objects'=>$objects]); /* Lecture 12 second argument */
    }
    
    /* Lecture 6 */
    public function article($id)
    {
        $article = $this->fR->getArticle($id); /* Lecture 22 */
        return view('frontend.article',compact('article')); 
    }
    
    /* Lecture 6 */
    public function object($id) /* Lecture 15 $id */
    {
        $object = $this->fR->getObject($id); /* Lecture 15 */

        return view('frontend.object',['object'=>$object]); /* Lecture 16 second argument */
    }
    
    /* Lecture 6 */
    public function person()
    {
        return view('frontend.person');
    }
    
    /* Lecture 6 */
    public function room($id /* Lecture 20 */)
    {
        $room = $this->fR->getRoom($id); /* Lecture 20 */
        return view('frontend.room',['room'=>$room]/* Lecture 20 */);
    }
    
    
    /* Lecture 20 */
    public function ajaxGetRoomReservations($id)
    {
        
        $reservations = $this->fR->getReservationsByRoomId($id);
        
        return response()->json([
            'reservations'=>$reservations
        ]);
    }
    
    /* Lecture 6 */
    public function roomsearch(Request $request /* Lecture 18 */)
    {
        /* Lecture 18 */
        if($city = $this->fG->getSearchResults($request))
        {
            return view('frontend.roomsearch',['city'=>$city]);
        }
        else /* Lecture 18 */
        {
            if (!$request->ajax())
            return redirect('/')->with('norooms', __('No offers were found matching the criteria'));
        }
        
    }
    
    
    /* Lecture 17 */
    public function searchCities(Request $request)
    {

        $results = $this->fG->searchCities($request);

        return response()->json($results);
    }
    
    
}

