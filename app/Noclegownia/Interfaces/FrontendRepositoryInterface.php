<?php
/*
|--------------------------------------------------------------------------
| app/Enjoythetrip/Interfaces/FrontendRepositoryInterface.php *** Copyright netprogs.pl | available only at Udemy.com | further distribution is prohibited  ***
|--------------------------------------------------------------------------
*/

namespace App\Noclegownia\Interfaces; /* Lecture 13 */


/* Lecture 13 */
interface FrontendRepositoryInterface   {
    
    /* Lecture 13 */
    public function getObjectsForMainPage();
    
    /* Lecture 15 */
    public function getObject($id);
}


