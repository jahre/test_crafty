@extends('layouts.default')
@section('content')
<section class="cta login">

        
        <div class="wrapper">
            <h3>Cabinet</h3>
            <div style="height:20px;"></div>
            <a class="logout" href="{{asset('/auth/logout')}}">LOGOUT</a>
            
            <div>
            <form style="margin-top:30px;" method="post" class="cabinet_form" >
                <input type="text" name="item" placeholder="add item">
                <input type="submit" value="OK!" class="cta_btn cabinet_btn">
            </form>    
            <form style="margin-top:20px;" method="post" class="cabinet_form" >
                <input type="text" name="category" placeholder="add category">
                <input type="submit" value="OK!" class="cta_btn cabinet_btn">
            </form>    
            
            </div>
        </div>    
    
</section><!--  End cta  -->


@stop