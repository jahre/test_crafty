@extends('layouts.default')
@section('content')
@include('adminka.admin-menu')

<div class="pag_container">{{$products->links()}}</div>

<section>

<table class="admin_table">
<tr style="font-weight:bold;">
	<td>Item</td>
	<td>Price</td>
	<td>Quantity</td>
	<td>Description</td>
	<td>Image</td>
</tr>
@foreach($products as $one)
<tr>
	<td>{{$one->title}}</td>
	<td>{{$one->price}}</td>
	<td>{{$one->quantity}}</td>
	<td>{{$one->description}}</td>
	<td><a href="{{asset('adminka/products/edit')}}">edit</a><br>
		<a href="#" onclick="delete_position('{{asset('adminka/products/'.$one->id.'/delete')}}','Really?')">delete</a>
		
	</td>
</tr>
@endforeach

</table>
<div class="pag_container">{{$products->links()}}</div>

</section>
@stop
