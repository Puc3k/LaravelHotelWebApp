<?php
/*
|--------------------------------------------------------------------------
| app/Http/Controllers/FrontendController.php *** Copyright netprogs.pl | avaiable only at Udemy.com | further distribution is prohibited  ***
|--------------------------------------------------------------------------
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noclegownia\Interfaces\FrontendRepositoryInterface; 

class FrontendController extends Controller
{
    
    public function __construct(FrontendRepositoryInterface $frontendRepository)
    {
        $this->fR = $frontendRepository;
    }
    
    
    /* Lecture 6 */
    public function index()
    {
        $objects = $this->fR->getObjectsForMainPage(); 
	    // dd($objects); 
        return view('frontend.index',['objects'=>$objects]); /* Lecture 12 second argument */
    }
    
    /* Lecture 6 */
    public function article()
    {
        return view('frontend.article');
    }
    
    /* Lecture 6 */
    public function object()
    {
        return view('frontend.object');
    }
    
    /* Lecture 6 */
    public function person()
    {
        return view('frontend.person');
    }
    
    /* Lecture 6 */
    public function room()
    {
        return view('frontend.room');
    }
    
    /* Lecture 6 */
    public function roomsearch()
    {
        return view('frontend.roomsearch');
    }
    
    
}

