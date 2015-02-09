@extends('layouts.default')
@section('content')
@include('adminka.admin-menu')

<h1>Cart</h1>


<table class="admin_table">
<tr style="font-weight:bold;">
	<td>Image</td>
	<td>Item</td>
	<td>Description</td>
	<td>Price</td>
	<td>Quantity</td>
	<td >Summa</td>
	<td>Action</td>
</tr>
	<? $itogo=0; ?>
@foreach($_COOKIE as $key=>$value)
	
<tr>	
	<? $key=(int)$key; ?>
	@if($key>0)
	<? $tovs=Product::where('id', '=', $key)->first(); ?>
	
	<td>
		<img src="{{asset('media/uploads/photos/s'.$tovs->img)}}" title="{{$tovs->title}}">
	</td>
	<td>
		<h1 style="font-size:20px;">{{$tovs->title}}</h1>
	</td>
	<td>
		{{$tovs->description}}
	</td>
	

	<td>
		{{$tovs->price}}
	</td>
	<td>
		<div>
			{{Form::open(array('url'=>'cart/edit/'.$key))}}
			{{Form::text('colvo', $value)}}
			{{Form::submit('заменить')}}
			{{Form::close()}}
		</div>
		<div>
			{{Form::open(array('url'=>'cart/delete/'.$key))}}
			{{Form::submit('удалить', array('class'=>'delete_button'))}}
			{{Form::close()}}
		</div>
	</td>
	
	<td >
	{{$tovs->price * $_COOKIE[$key]}}
	</td>
	
	<td>
		ttt
	</td>
	
		
	<?$itogo+=$tovs->price * $_COOKIE[$key]?>
	@endif
</tr>
	
	
	
@endforeach
<tr>
	<td colspan="4"></td>
	
	<td class="itog_table">Итого:</td>
	<td ><b>{{$itogo}}</b></td>
	<td></td>

</tr>

</table>
<table class="checkout">
	{{Form::open(array('url'=>'checkout'))}}
	<tr>
		<td>Имя:</td>
		<td>{{Form::text('name')}}</td>
	</tr>
	<tr>
		<td>Телефон:</td>
		<td>{{Form::text('phone')}}</td>
	</tr>
	<tr>
		<td>Адрес:</td>
		<td>{{Form::text('address')}}</td>
	</tr>
	<tr>
		<td></td>
		<td>{{Form::submit('оформить заказ')}}</td>
	</tr>
	{{Form::close()}}
</table>


@stop