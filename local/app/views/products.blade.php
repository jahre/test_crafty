@extends('layouts.default')
@section('content')
@include('adminka.admin-menu')

<div class="products">
@foreach($tovs as $one)
	@if($one->img)
	<? $pic="<a href='#' class='tovar_a' data=".$one->id."><img src='".asset('media/uploads/photos/s'.$one->img)."' title='{{$one->title}}'></a>";?>
	@else
	<? $pic="555";?>
	@endif
	<div class="tov">
		<a href="#" data='{{$one->id}}' class="picname">{{$one->title}}</a>
		{{$pic}}
	</div>
@endforeach
<p align="center">{{$tovs->links()}}</p>
<div class="clearfix"></div>
</div>
@stop