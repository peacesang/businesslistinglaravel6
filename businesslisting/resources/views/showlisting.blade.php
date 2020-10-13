@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               
                <div class="panel-heading"> </div>
                <div class="panel-body">
                    <h3>{{$listing->name}}<a href="/listings" class="float-right btn btn-info btn-xs">Go back</a></h3>
                    
                    <ul class="list-group">
                        
                        <li class="list-group-item">Address: {{$listing->address}}</li>     
                        <li class="list-group-item">Website<a href="{{$listing->website}}" target="_blank">{{$listing->website}}</a></li> 
                        <li class="list-group-item">Email: {{$listing->email}}</li>  
                        <li class="list-group-item">Phone: {{$listing->phone}}</li>     
                    </ul>                              
                        <hr>
                        <div class="well">
                            {{$listing->bio}}
                        </div>
                      
                    </ul>
                   
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                </div>
            </div>
        </div>
    </div>

@endsection
