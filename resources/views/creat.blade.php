@extends('template.body')
@section('body')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
        <h2>sign up</h2>
        <form action="/creat" method="post">

        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

            <div class="form-row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="First name" name="fname">
                </div>
                <div class="col">
                     <input type="text" class="form-control" placeholder="Last name" name="lastname">
                </div>
            </div>
            <br>
            <div class="form-row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="email" name="email">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="phone" name="phone">
                </div>
        </div>
                
        <hr>
        <div class="form-row">
            <div class="col-7">
                 <input type="text" class="form-control" placeholder="City" name="city">
            </div>
            <div class="col">
                 <input type="text" class="form-control" placeholder="State" name="state">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Zip" name="zip">
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary mb-2">Confirm identity</button>
        
        </form>
        </div>
    </div>
</div>
@endsection