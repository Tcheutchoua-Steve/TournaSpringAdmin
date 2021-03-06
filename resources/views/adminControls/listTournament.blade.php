@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">
                <div class="panel-heading">List of Available Competitions</div>
                <div class="panel-body">
                    <br>
                    <table class="table table-bordered">
                       <thead>
                            <tr>
                                <th>Competition Name</th>
                                <th>Admin</th>
                                <th>Connected Users</th>
                            </tr>
                        </thead>
                        </tbody>
                            <tr>
                                <td>Jill</td>
                                <td>Smith</td> 
                                <td>50</td>
                            </tr>
                            <tr>
                                <td>Eve</td>
                                <td>Jackson</td> 
                                <td>94</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer">Competitons Available</div>
            </div>
        </div>
    </div>
</div>
@endsection
