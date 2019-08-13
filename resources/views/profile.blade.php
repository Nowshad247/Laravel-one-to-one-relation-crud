@extends('template.body')
@section('body')
<div class="container">
    <div class="link"> <h2>profile </h2></div>
    <table class="table">
        <tr>
        </tr> 
        <td></td>
    </table>
    <div class="row">
    <div class="col-sm-4">
    <ul class="list-group">
        <li class="list-group-item active">profile</li>
        <li class="list-group-item">id</li>
        <li class="list-group-item">lastname</li>
        <li class="list-group-item">emial</li>
        <li class="list-group-item">phone</li>
        <li class="list-group-item">city</li>
        <li class="list-group-item">state</li>
        <li class="list-group-item">zip</li>
      
    </ul>

    </div>
    <div class="col-sm-4">
    <ul class="list-group">
        <li class="list-group-item active">profile</li>
        <li class="list-group-item">{{$show->id}}</li>
        <li class="list-group-item">{{$show->lastname}}</li>
        <li class="list-group-item">{{$show->emial}}</li>
        <li class="list-group-item">{{$show->phone}}</li>
        <li class="list-group-item">{{$show->profile->city}}</li>
        <li class="list-group-item">{{$show->profile->state}}</li>
        <li class="list-group-item">{{$show->profile->zip}}</li>
      
    </ul>

    </div>
    <div class="col-sm-4">
    <ul class="list-group">
        <li class="list-group-item active">profile</li>
        <li class="list-group-item"><a href="/update/{{$show->id}}" class="btn btn-primary">Edit</a></li>
        <li class="list-group-item"><a href="/distroy/{{$show->id}}" class="btn btn-primary">Delete</a></li>

      
    </ul>

    </div>
    </div>
</div>
@endsection