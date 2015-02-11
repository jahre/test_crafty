@extends('layouts.default')
@section('content')
@include('adminka.admin-menu')

<div class="pag_container">{{$orders->links()}}</div>

<section>


<table class="admin_table orders_table">
<tr style="font-weight:bold;">
	<td>Name</td>
	<td>Phone</td>
	<td>Address</td>
	<td>Order Details</td>
	<td>Order Sum</td>
	
</tr>

<? $itogo=0; ?>
@foreach($orders as $one)
<?$test_serial=unserialize($one->serial)?>
<tr>
	<td>{{$one->name}}</td>
	<td>{{$one->phone}}</td>
	<td>{{$one->address}}</td>
	<td class="user_order">
		<table>
		<tr>
			<td>Image</td>
			<td>Name</td>
			<td>Quantity</td>
		</tr>
		
		@foreach($test_serial as $key=>$value)
		
		<? $tovs=Product::where('id', '=', $key)->first(); ?>
		
		<tr>
			<td><img src="{{asset('media/uploads/photos/s'.$tovs->img)}}" title="{{$tovs->title}}" height="30"></td>
			<td>{{$tovs->title}}</td>
			<td>{{$value}}</td>
		</tr>
		<?$itogo+=$tovs->price * $value?>
		@endforeach
		</table>
	</td>
	<td><h1 style="font-size:35px;">{{$itogo}}</h1></td>
</tr>
@endforeach

</table>
<div class="pag_container">{{$orders->links()}}</div>

</section>


@stop
