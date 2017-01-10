<?php

namespace App\Http\Controllers;

/*use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;*/


class PagesController extends Controller
{
    //
    public function home()
    {
        $people = ['Lopa', 'Abir', 'Partho'];
        return view( 'welcome', compact('people') );
		/*return view( 'welcome' );*/
    }

    public function about()
    {
    	/*$people = ['Lopa', 'Abir', 'Partho'];*/

        return view('about');

		/*return view( 'pages.about', compact('people') );*/
    }


}
