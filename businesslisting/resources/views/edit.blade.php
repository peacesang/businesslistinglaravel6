@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editing Listing <a href="/dashboard" class="float-right btn btn-info btn-xs">Go back</a></div>


                
                    {{-- <form method="post" action="/listings" > --}}
                    <form method="post" action="{{route('listings.update', $listing->id)}}" >
                    <div class="form-group" >
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="exampleInputName2" value="{{$listing->name}}"  name="name">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="exampleInputName2"  value="{{$listing->address}}" name="address">
                        </div>
                        <div class="form-group">
                                <label for="website">Website</label>
                                <input type="text" class="form-control" id="exampleInputName2"value="{{$listing->website}}"  name="website">
                        </div>
                        <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="exampleInputName2" value="{{$listing->email}}" name="email">
                        </div>
                        <div class="form-group">
                                <label for="phone">phone</label>
                                <input type="text" class="form-control" id="exampleInputName2" value="{{$listing->phone}}" name="phone">
                        </div>
                        <div class="form-group">
                                <label for="bio">bio</label>
                                <textarea class="form-control" rows="5" name="bio">{{$listing->bio}}</textarea>

                        </div>
                        
                        @csrf
                        @method("PUT")
                                
                        <button type="submit" class="btn btn-info">Update</button>
                        
                    </form>
                    
                

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
