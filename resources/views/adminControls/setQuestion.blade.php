@extends('layouts.app')

@section('content')
<?php echo require_once(resource_path('assets/lib/nusoap.php')) ;
$url = "http://localhost/fyp/QuestionsServer.php?wsdl";
$client = new nusoap_client($url, true);

$error  = $client->getError();
echo($data['categoryId']);
if ($error) {
echo "<h2>Constructor error</h2><pre>" . $error . "</pre>";

}
$result = $client->call('getAllCategories');
$categories = new SimpleXMLElement($result);?>
<div class="container">
    <div class="row">
        <div class="col-md-11 col-md-offset-1">
        	    <div class="panel panel-default">
               	 	<div class="panel-heading">Set Tournament Questions</div>
                	<div class="panel-body">
                		<div class="btn-group-vertical col-md-2" role="group" aria-label="true">

                            <div class="nav-pills" id="category">
                            @foreach($categories as $category)
                                <li><a href="{{ url('/tournament/setQuestion/'.$category->cat_id)}}">{{$category->cat_name}}
                                    {{--<input type="radio" name="cat" id="{{$category->cat_id}}" value="{{$category->cat_id}}" checked/>--}}
                                    </a></li>
                                
                            @endforeach
                            </div>
                        <?php 
                        
                        $params = array(
                            "category" => $data['categoryId']
                                ); 
                                $questions = $client->call('getQuestions',$params);
                                $Questions = new SimpleXMLElement($questions);

                                //var_dump($categories);
                                ?>
						</div>
                            {{--Handling getting of questions from individual categories--}}


						<div class="col-md-9" id="questionsInCategory">
                            <!-- Set of Questions. -->
                            @foreach($Questions as $question)
							<span class="checkbox">
                                <input type="checkbox">
                                <p>{{$question->question}} </p>
                            </span>
                            @endforeach
						</div>
                	</div>
                </div>

        </div>
    </div>
</div>
@endsection