@extends('header')
<body style="background-color: #1da1f2;">
<div class="container h-100">
    <div class="row align-items-center h-100">
        <div class="col-md-6 mx-auto card p-5 card">
            <form method="POST" action="{{ action('MessageController@store') }}">
            @csrf

            <div class="row text-center">
            <div class="col-md-12 mb-4">
                <h1 class="text-center">Message App</h1>    
            </div>
            
            <div class="col-md-6">
                <label>First Name</label>
                <input class="form-control" type="text" name="fname" required/><br>
                </div>

                <div class="col-md-6">
                <label>Last Name</label>
                <input class="form-control" type="text" name="lname" required/><br>
                </div>

                <div class="col-md-6">
                <label>Email Address</label>
                <input class="form-control" type="email" name="email" required/><br>
                </div>

                <div class="col-md-6">
                <label>Phone</label>
                <input class="form-control" type="number" name="phone" required/><br>
                </div>

                <div class="col-md-12">
                <label>Message</label>
                <textarea rows="5" class="form-control" name="msg"></textarea><br>
                </div>
            </div>

            <input class="btn btn-primary float-left" type="submit" value="Save Message"/>
            <a value="Save Message" class="btn btn-danger float-right" href="{{route('message')}}">
            Back
            </a>
        </form>
            
        </div>    
    </div>
    </div>
    
</body>
</html>