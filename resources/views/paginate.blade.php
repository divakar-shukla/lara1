@extends("template")

@section("footer")
<p>This is footer.</p>
@endsection
@section("content")
<p>This is content.</p>
@endsection

@section("title", "Welcome To my app")

@section("sidebar")

@parent
<table Border="1" cellpadding="10" cellspacing="0" >
    <tr>
        <th>Number</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
    </tr>
@foreach ($user as $key)
<tr>
   
</tr>
<tr>
    <td>{{$key->id}}</td>
    <td>{{$key->name}}</td>
    <td>{{$key->email}}</td>
    <td >{{$key->password}}</td>
    
</tr>
@endforeach
</table>
{{$user->links()}}
<button class="mt-4"><a href="{{route('AddData')}}">Add User</a></button>


@endsection

