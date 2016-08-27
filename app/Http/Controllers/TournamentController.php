<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

//require_once(resource_path('assets/lib/nusoap.php')) ;

class TournamentController extends Controller
{
  // public $url = "http://localhost/fyp/QuestionsServer.php?wsdl";

   //public static  $client = new nusoap_client($url, true);

    public function getCreateTournament()
    {
        return view('adminControls.createTournament');
    }


    public function chooseQuestionInCategory($category_id){
        $data['categoryId'] = $category_id ;

        //echo "well done " ; 
        //exit();
         //return View::make('simple', $data);
        return view('adminControls.setQuestion')->with('data',$data);
    }
    /*public function getQuestionsInCategory($id){

        $error  = $client->getError();

        if ($error) {
            echo "<h2>Constructor error</h2><pre>" . $error . "</pre>";

        }

        $params = array(
            "category_id" => 1
        );
        $result = $client->call('getAllQuestionIDInCategory',$params );

        print_r($result);
    }*/
}