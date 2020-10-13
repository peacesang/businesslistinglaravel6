@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Listing</div>


                
                    {{-- <form method="post" action="/listings" > --}}
                    <form method="post" action="{{route('listings.store')}}" >
                    <div class="form-group" >
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="exampleInputName2"  name="name">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="exampleInputName2"  name="address">
                        </div>
                        <div class="form-group">
                                <label for="website">Website</label>
                                <input type="text" class="form-control" id="exampleInputName2"  name="website">
                        </div>
                        <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="exampleInputName2" placeholder="Jane Doe" name="email">
                        </div>
                        <div class="form-group">
                                <label for="phone">phone</label>
                                <input type="text" class="form-control" id="exampleInputName2"  name="phone">
                        </div>
                        <div class="form-group">
                                <label for="bio">bio</label>
                                <textarea class="form-control" rows="5" name="bio"></textarea>

                        </div>
                        
                        @csrf
                                
                        <button type="submit" class="btn btn-info">Create</button>
                        
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
