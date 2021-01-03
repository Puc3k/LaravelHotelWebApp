<?php
/*
|--------------------------------------------------------------------------
| app/Http/Controllers/BackendController.php *** Copyright netprogs.pl | available only at Udemy.com | further distribution is prohibited  ***
|--------------------------------------------------------------------------
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    /* Lecture 6 */
    public function index()
    {
        return view('backend.index');
    }
    
    /* Lecture 6 */
    public function cities()
    {
        return view('backend.cities');
    }
    
    /* Lecture 6 */
    public function myobjects()
    {
        return view('backend.myobjects');
    }
    
    /* Lecture 6 */
    public function profile()
    {
        return view('backend.profile');
    }
    
    /* Lecture 6 */
    public function saveobject()
    {
        return view('backend.saveobject');
    }
    
    /* Lecture 6 */
    public function saveroom()
    {
        return view('backend.saveroom');
    }
}
