@extends('layouts.default')
@section('content')
@include('adminka.admin-menu')


<section>
<form method="post" action="{{asset('adminka/products/0/items')}}">
<table class="admin_table">
<tr style="font-weight:bold;">
	<td>Item</td>
	<td>Price</td>
	<td>Quantity</td>
	<td>Description</td>
	<td>Image</td>
</tr>

<tr>
	<td><input type="text"  name="title"></td>
	<td><input type="text"  name="price"></td>
	<td><input type="text"  name="quantity"></td>
	<td><input type="text"  name="description"></td>
	<td><img src="{{asset('media/img/food.jpg')}}"></td>
</tr>


<tr>
<td colspan="4"><input type="submit" value="Add Item"></td>
</tr>
</table>
</form>


</section>
@stop
