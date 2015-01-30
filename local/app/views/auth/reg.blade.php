@extends('layouts.default')
@section('content')
<section class="cta login">
	
		
        <h3>Login or Register</h3>
		
        <div class="wrapper">
            <div class="form_container">
        <div id="login" class="form_block" style="margin-left:50px;">
		
		@if($errors)	
			@foreach($errors->all() as $err)
			<p style="color:red;">{{$err}}</p>
			@endforeach
		@endif	
		
			
		
		
            <form method="post" action="{{asset('auth/login')}}">
                
				<p>
                    <label for="username" class="uname" data-icon="u" > Your email or username </label>
                    <input id="username" name="username" required="required" type="text" placeholder="mymail@mail.com"/>
                </p>
                <p>
                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" />
                </p>
                
                <div class="submit_block">
                    <p class="login button">
                        <input type="submit" value="Login" class="cta_btn" />
                    </p>
                    
                </div>    
            </form>
        </div>
 
        <div id="subscribe" class="form_block">
            <form method="post" action="{{asset('auth/reg')}}">
                <!--<h1> Sign up </h1>-->
				<p>
                    <label for="username" class="uname" data-icon="u" >Username</label>
                    <input id="username" name="username" required="required" type="text" placeholder="user"/>
                </p>
				
                <p>
                    <label for="email" class="uname" data-icon="u" > Your email</label>
                    <input id="email" name="email" required="required" type="text" placeholder="email"/>
                </p>
				
                <p>
                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" />
                </p>
                
                <div class="submit_block">
                    <p class="login button">
                        <input type="submit" value="Register" class="cta_btn" />
                    </p>
                    
                </div>    
            </form>
        </div>
            <div class="clearfix">
			<a href="logout">LOGOUT</a>
                </div>    
        </div>
        
	</section><!--  End cta  -->


@stop