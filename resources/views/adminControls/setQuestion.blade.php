@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-11 col-md-offset-1">
        	    <div class="panel panel-default">
               	 	<div class="panel-heading">Set Tournament Questions</div>
                	<div class="panel-body">
                		<div class="btn-group-vertical col-md-2" role="group" aria-label="true">
						  <button type="button" class="btn btn-default">1</button>
						  <button type="button" class="btn btn-default">2</button>
						</div>
						<div class="col-md-9">
							Set of Questions.
							<span class="checkbox">
						    	<input type="checkbox">
						    </span>
						</div>
                	</div>
                </div>

        </div>
    </div>
</div>
@endsection