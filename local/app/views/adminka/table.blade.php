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
	<td>Action</td>
</tr>
<tr>
{{Form::open(array('url'=>'adminka/table/add', 'files'=>true))}}
<td>{{Form::text('name', Input::old('name'), array('placeholder'=>'name'))}}</td>
<td>{{Form::text('price', Input::old('price'), array('placeholder'=>'price'))}}</td>
<td>{{Form::text('quantity', Input::old('quantity'), array('placeholder'=>'quantity'))}}</td>
<td class="ck_td">{{Form::textarea('description', Input::old('description'), array('placeholder'=>'description', 'class'=>'ckeditor', 'id'=>'editor1'))}}
	<script>
	// Replace the <textarea id="editor1"> with a CKEditor
	// instance, using default configuration.
	CKEDITOR.replace( 'editor1' );
	</script>
</td>
<td>{{Form::file('file')}}</td>
<td>{{Form::submit('ok')}}</td>
	{{Form::close()}}
	</td>
</tr>
<tr>

@foreach($products as $one)
@if($one->showhide)
	<?php $showhide='adminka/products/'.$one->id.'/show'; 
		$showhide_world='hide';
	
	?>
@else
	<?php $showhide='adminka/products/'.$one->id.'/hide'; 
		$showhide_world='show';
	?>
	
@endif
<tr>
	<td>{{$one->title}}</td>
	<td>{{$one->price}}</td>
	<td>{{$one->quantity}}</td>
	<td>{{$one->description}}</td>
	<td><img src="{{asset('media/uploads/photos/s'.$one->img)}}" title="{{$one->title}}"></td>
	<td><a href="{{asset('adminka/products/edit')}}">edit</a><br>
		<a href="#" onclick="delete_position('{{asset('adminka/products/'.$one->id.'/delete')}}','Really?')">delete</a>
		<a href="{{asset($showhide)}}">{{$showhide_world}}</a>
		
	</td>
	
</tr>
@endforeach

</table>
<div class="pag_container">{{$products->links()}}</div>

</section>
@stop
