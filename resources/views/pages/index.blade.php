@extends('header')
<body style="background-color: #1da1f2;">
<div class="container h-100">
    <div class="row align-items-center h-100">
        <div class="col-md-12 mx-auto card" style="padding-top : 10px">
        <div class="row">
            <div class="col-md-12">
            <a class="btn btn-primary mb-4 float-left" href="{{route('create')}}">+ Add Message</a>
            <div class="table-responsive">
            <table border="1" class="table">
                <thead class="thead-dark">
                    <th>Num</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email Address</th>
                    <th>Phone</th>
                    <th>Messages</th>
                </thead>
                @php
                    $i = 1;
                @endphp
                @foreach($messages as $message)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$message->firstname}}</td>
                        <td>{{$message->lastname}}</td>
                        <td>{{$message->email}}</td>
                        <td>{{$message->phone}}</td>
                        <td>{{$message->message}}</td>
                    </tr>
                @endforeach    
            </table>              
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
</body>
</html>