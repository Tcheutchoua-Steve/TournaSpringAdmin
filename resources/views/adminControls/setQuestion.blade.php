@extends('layouts.app')

@section('content')
<?php echo require_once(resource_path('assets/lib/nusoap.php')) ;
$url = "http://localhost/fyp/QuestionsServer.php?wsdl";
$client = new nusoap_client($url, true);

$error  = $client->getError();

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

                            <div class="radio" id="category">
                            @foreach($categories as $category)
                                <label>
                                    <input type="radio" name="cat" id="{{$category->cat_id}}" value="{{$category->cat_id}}" checked>
                                    {{$category->cat_name}}
                                </label>
                            @endforeach
                            </div>


						</div>
						<div class="col-md-9" id="questionsInCategory">
							<!-- Set of Questions. -->
							<span class="checkbox">
                                <input type="checkbox">
                                <p>What is the administrative Capital of Cameroon ? </p>
                            </span>
                            <hr style="width: 100%; color: black; height: 1px; background-color:black;" />
                            <span class="checkbox">
                                <input type="checkbox">
                                <p>Who is the minister of Territorial Adminstration  ? </p>
                            </span>
                            <hr style="width: 100%; color: black; height: 1px; background-color:black;" />
                            <span class="checkbox">
                                <input type="checkbox">
                                <p>How many Divisions are there in Cameroon ? </p>
                            </span>
                            <hr style="width: 100%; color: black; height: 1px; background-color:black;" />
                            <span class="checkbox">
                                <input type="checkbox">
                                <p>Which town is the most populated in Cameroon ? </p>
                            </span>
                            <hr style="width: 100%; color: black; height: 1px; background-color:black;" />
                            <span class="checkbox">
                                <input type="checkbox">
                                <p>By how many countries is Cameroon Bounded ? </p>
                            </span>
                            <hr style="width: 100%; color: black; height: 1px; background-color:black;" />
                            <span class="checkbox">
                                <input type="checkbox">
                                <p>What is the highest mountan in Cameroon  ? </p>
                            </span>
                            <hr style="width: 100%; color: black; height: 1px; background-color:black;" />
                            <span class="checkbox">
                                <input type="checkbox">
                                <p>Where is maroua Found  ? </p>
                            </span>
                            <hr style="width: 100%; color: black; height: 1px; background-color:black;" />
                            <span class="checkbox">
                                <input type="checkbox">
                                <p>How many Official languages are there in Cameroon  ? </p>
                            </span>
                            <hr style="width: 100%; color: black; height: 1px; background-color:black;" />
                            <span class="checkbox">
                                <input type="checkbox">
                                <p>How many editions does the Java programming language have ? </p>
                            </span>
                            <hr style="width: 100%; color: black; height: 1px; background-color:black;" />
                            <span class="checkbox">
                                <input type="checkbox">
                                <p>How many editions does the Java programming language have ? </p>
                            </span>
                            <hr style="width: 100%; color: black; height: 1px; background-color:black;" />
                            <span class="checkbox">
                                <input type="checkbox">
                                <p>How many editions does the Java programming language have ? </p>
                            </span>
                            <hr style="width: 100%; color: black; height: 1px; background-color:black;" />
                            <span class="checkbox">
                                <input type="checkbox">
                                <p>How many editions does the Java programming language have ? </p>
                            </span>
                            <hr style="width: 100%; color: black; height: 1px; background-color:black;" />
                            <span class="checkbox">
                                <input type="checkbox">
                                <p>How many editions does the Java programming language have ? </p>
                            </span>
                            <hr style="width: 100%; color: black; height: 1px; background-color:black;" />  
                            <span class="checkbox">
                                <input type="checkbox">
                                <p>How many editions does the Java programming language have ? </p>
                            </span>
                            <span class="checkbox">
                                <input type="checkbox">
                                <p>How many editions does the Java programming language have ? </p>
                            </span>
                            <span class="checkbox">
                                <input type="checkbox">
                                <p>How many editions does the Java programming language have ? </p>
                            </span>
                            <span class="checkbox">
						    	<input type="checkbox">
                                <p>How many editions does the Java programming language have ? </p>
						    </span>
						</div>
                	</div>
                </div>

        </div>
    </div>
</div>
@endsection