<?php
/*
|--------------------------------------------------------------------------
| app/Http/Controllers/FrontendController.php *** Copyright netprogs.pl | available only at Udemy.com | further distribution is prohibited  ***
|--------------------------------------------------------------------------
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /* Lecture 6 */
    public function index()
    {
        return view('frontend.index');
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
