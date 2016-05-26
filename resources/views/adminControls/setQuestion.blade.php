@extends('layouts.app')

<?php include app_path() . '/includes/lib/nusoap.php'; ?>
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-11 col-md-offset-1">
        	    <div class="panel panel-default">
               	 	<div class="panel-heading">Set Tournament Questions</div>
                	<div class="panel-body">

                        <div class="col-md-9">
                            <?php $url = "http://localhost/fyp/QuestionsServer.php?wsdl" ; ?>
                            <?php $client = new nusoap_client($url, true); ?>

                            <?php $error  = $client->getError() ; ?>

                            
                            @if ($error) 
                                <h2>Constructor error</h2><pre>   </pre>
                            @endif

                            
                            <?php $result = $client->call('getAllCategories') ;?>
                            
                            @if ($client->fault) 
                                <h2>Fault</h2><pre>
                               There is an error
                                </pre>
                            @else 
                                <?php $error = $client->getError() ; ?>
                                @if ($error) 
                                    <h2>Error</h2><pre>" Error again </pre>
                                @else 
                                    <h2>Categories</h2>
                                     {{--$result--}}
                                @endif
                            @endif
                            
                            <?php  $categories = new SimpleXMLElement($result);
  
                           
                          echo ' <div class="btn-group-vertical col-md-3" role="group" aria-label="true">';
                                 $i = 1;
                                foreach ( $categories->category as $cat){
                                  
                                    echo '<div class="panel-group " id="accordion">
                                          <div class="panel panel-default">
                                            <div class="panel-heading">
                                              <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse"'.$i.'>
                                                  '.$cat->cat_name.'
                                                </a>
                                              </h4>
                                            </div>
                                            <div id="collapse'.$i.'" class="panel-collapse collapse in">
                                              <div class="panel-body">
                                                empty
                                              </div>
                                            </div>
                                          </div>';
                                    //echo '<button type="button" class="btn btn-default">'.$cat->cat_name.'</button>';
                                   echo "</br>"; 
                                   $i++;
                                }
                                
                                echo ' </div>';
                            ?>
                           

                            

                		

						</div>
                	</div>
                </div>

        </div>
    </div>
</div>
@endsection