<?php
/*
|--------------------------------------------------------------------------
| app/Http/Controllers/FrontendController.php *** Copyright netprogs.pl | available only at Udemy.com | further distribution is prohibited  ***
|--------------------------------------------------------------------------
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noclegownia\Interfaces\FrontendRepositoryInterface; /* Lecture 12 Lecture 13 FrontendRepositoryInterface  */

class FrontendController extends Controller
{
    /* Lecture 12 */
    public function __construct(FrontendRepositoryInterface $frontendRepository) /* Lecture 13 FrontendRepositoryInterface */
    {
        $this->fR = $frontendRepository;
    }
    
    
    /* Lecture 6 */
    public function index()
    {
        $objects = $this->fR->getObjectsForMainPage(); /* Lecture 12 */
        //dd($objects);  /* Lecture 12 */
        return view('frontend.index',['objects'=>$objects]); /* Lecture 12 second argument */
    }
    
    /* Lecture 6 */
    public function article()
    {
        return view('frontend.article');
    }
    
    /* Lecture 6 */
    public function object($id) /* Lecture 15 $id */
    {
        $object = $this->fR->getObject($id); /* Lecture 15 */
        
        
        return view('frontend.object',['object'=>$object]);
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

