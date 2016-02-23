@extends('crm')

@section('content11')
<table class="table">
	<tr>
	<th>Customer ID</th>
	<th>Name</th>
	<th>Email</th>
	<th>Address</th>
	<th>Phone</th>	
	<th>Products</th>
	<th>Options</th>
	</tr>
    @foreach($customers as $customer)
    <tr>
    	<td style = "text-align:center">{{ $customer->id }}</td>
    	<td>{{ $customer->name }}</td>
    	<td>{{ $customer->email }}</td>
    	<td>{{ $customer->address }}</td>
    	<td>{{ $customer->phone }}</td>
    	<td><a href="/pro/{{ $customer->id }}">Click here</a></td>
    	<td><a href="/edit/{{$customer->id}}" class="btn btn-primary">Edit </a> <a href="/delete/{{$customer->id}}" class="btn btn-danger">X</a></td></td>
    </tr>	
	@endforeach
  </table>
  <hr />
  <h3>add customer</h3>
  <form action = "/create" method="post">
<table>
<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Address</th>
    <th>Phone</th>
</tr>
<tr>
    <td><input type="text" name = "name" value=""></input></td>
    <td><input type="text" name = "email" value=""></input></td>
    <td><input type="text" name = "address" value=""></input></td>
    <td><input type="text" name = "phone" value=""></input><input type="hidden" name="_token" value="{{ csrf_token() }}"></td>
</tr>
<tr>
    <td colspan="4" style="text-align:center"><input type="submit" class="btn btn-primary" value="Done"></input></td>
</tr>
</table>
</form>



@endsection