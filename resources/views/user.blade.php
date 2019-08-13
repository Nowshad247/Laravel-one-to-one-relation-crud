@extends('template.body')
@section('body')
<div class="container">
    <div class="link"> <h2>User list </h2></div>
    <table class="table">
        <tr>
            <td>ID</td>
            <td>first name</td>
            <td>last name</td>
            <td>email</td>
            <td>phone</td>
            <td>profile</td>
            <td>edit</td>
        </tr>
        @foreach($result as $p)
            <tr>
                <td>{{ $p['id'] }}</td>
                <td>{{ $p['firtsname'] }}</td>
                <td>{{ $p['lastname'] }}</td>
                <td>{{ $p['emial'] }}</td>
                <td>{{ $p['phone'] }}</td>
                <td><a href="/profile/{{ $p['id'] }}" class="btn btn-outline-warning">Profile</a></td>
                <td><a href="/update/{{ $p['id'] }}" class="btn btn-outline-danger">edit</a></td>
               

            </tr>
            @endforeach
    </table>
</div>
@endsection