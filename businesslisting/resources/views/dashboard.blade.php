@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard <span class="float-right"><a href="/listings/create" class="btn btn-success btn-xs">Add Listing</a></span></div>


                <div class="panel-body">
                    <h3>Your Listings</h3>
                    @if(count($listings))
                    <table class="table table-striped">
                        <tr>
                            <th>Company</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach($listings as $listing)
                        <tr>
                            <td>{{$listing->name}}</td>
                        <td><a class="btn btn-info float-right" href="/listings/{{$listing->id}}/edit">edit</a></td>
                            <td>
                                    <form method="post" action="{{route('listings.destroy',$listing->id)}}" onsubmit="return confirm('Are you sure you want to delete?')" >
                                     
                                                
                                                @csrf
                                                @method('DELETE')
                                                        
                                                <button type="submit" class="btn btn-danger" >Delete</button>
                                                
                                            </form>
                                            
                            
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    @endif
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
