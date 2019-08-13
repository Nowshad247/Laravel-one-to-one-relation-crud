@extends('template.body')
@section('body')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
        <h2>Edit  Page</h2>
        <form action="/update/{{$result->id}}" method="POST">

        <div class="col-sm-4">
    <ul class="list-group">
        <li class="list-group-item active">profile</li>
        <li class="list-group-item">{{$result->id}}</li>
        <li class="list-group-item">{{$result->firtsname}}</li>
        <li class="list-group-item">{{$result->lastname}}</li>
        <li class="list-group-item">{{$result->emial}}</li>
        <li class="list-group-item">{{$result->phone}}</li>
        <li class="list-group-item">{{$result->profile->city}}</li>
        <li class="list-group-item">{{$result->profile->state}}</li>
        <li class="list-group-item">{{$result->profile->zip}}</li>
      
    </ul>

    </div>
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        
        {{ csrf_field() }}
        {!! method_field('patch') !!}
        <input type="hidden" name="_method" value="PATCH">
            <div class="form-row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="First name" value="{{$result->firtsname}}" name="firstname">
                </div>
                <div class="col">
                     <input type="text" class="form-control" placeholder="Last name" value="{{$result->lastname}}" name="lastname">
                </div>
            </div>
            <br>
            <div class="form-row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="email" value="{{$result->emial}}" name="email">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="phone" value="{{$result->phone}}" name="phone">
                </div>
        </div>
                
        <hr>
        <div class="form-row">
            <div class="col-7">
                 <input type="text" class="form-control" placeholder="City" value="{{$result->profile->city}}" name="city">
            </div>
            <div class="col">
                 <input type="text" class="form-control" placeholder="State" value="{{$result->profile->state}}" name="state">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Zip"  value="{{$result->profile->zip}}" name="zip">
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary mb-2">Update</button> || <a href="/distroy/{{$result->id}}" class="btn btn-danger">Delete Account</a>
        
        </form>
       
        </div>
    </div>
</div>
@endsection