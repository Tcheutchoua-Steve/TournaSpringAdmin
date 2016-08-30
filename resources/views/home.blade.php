@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard  - List of Tournaments</div>

                <div class="panel-body">
                    <br>
                    <table class="table table-bordered">
                       <thead>
                            <tr>
                                <th>Competition Name</th>
                                <th>Admin</th>
                                <th>Maximum Users</th>
                            </tr>
                        </thead>
                        </tbody>
                            <tr>
                                <td>Keep Java Alive</td>
                                <td>Tcheutchoua Steve</td> 
                                <td>8</td>
                            </tr>
                            <tr>
                                <td>Mastering Moodle</td>
                                <td>Nsiany Sandra</td> 
                                <td>4</td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <div class="col-md-offset-4">
                        <a href="{{$url=route('create_tourament')}}" class="btn btn-primary btn-md active" role="button">Create New Competition</a>
                    </div>
                </div>
                <br>
                <div class="panel-footer">Competitons Available</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
