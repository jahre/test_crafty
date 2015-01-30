@extends('layouts.default')
@section('content')

{{$text->body}}


	<section class="features">

		<div class="wrapper">
				<div class="feature">
					<div class="ficon">
						<img src="{{asset('media/img/icon1.png')}}" alt="">
					</div>
					<div class="details_exp">
						<h3>Design</h3>
						<p>Coccaecat cupidatat aliqu proident sunt in culpa qui officia deserunt mollit anim.</p>
						<a href="#">more details<span>></span></a>
					</div>
				</div>
				<div class="feature">
					<div class="ficon">
						<img src="{{asset('media/img/icon2.png')}}" alt="">
					</div>
					<div class="details_exp">
						<h3>Coding</h3>
						<p>Coccaecat cupidatat aliqu proident sunt in culpa qui officia deserunt mollit anim.</p>
						<a href="#">more details<span>></span></a>
					</div>
				</div>
				<div class="feature">
					<div class="ficon">
						<img src="{{asset('media/img/icon3.png')}}" alt="">
					</div>
					<div class="details_exp">
						<h3>Copyrighting</h3>
						<p>Coccaecat cupidatat aliqu proident sunt in culpa qui officia deserunt mollit anim.</p>
						<a href="#">more details<span>></span></a>
					</div>
				</div>
				<div class="feature">
					<div class="ficon">
						<img src="{{asset('media/img/icon4.png')}}" alt="">
					</div>
					<div class="details_exp">
						<h3>Data Security</h3>
						<p>Coccaecat cupidatat aliqu proident sunt in culpa qui officia deserunt mollit anim.</p>
						<a href="#">more details<span>></span></a>
					</div>
				</div>
				<div class="feature">
					<div class="ficon">
						<img src="{{asset('media/img/icon5.png')}}" alt="">
					</div>
					<div class="details_exp">
						<h3>Worldwide action </h3>
						<p>Coccaecat cupidatat aliqu proident sunt in culpa qui officia deserunt mollit anim.</p>
						<a href="#">more details<span>></span></a>
					</div>
				</div>				
				<div class="feature">
					<div class="ficon">
						<img src="{{asset('media/img/icon6.png')}}" alt="">
					</div>
					<div class="details_exp">
						<h3>Videoworks</h3>
						<p>Coccaecat cupidatat aliqu proident sunt in culpa qui officia deserunt mollit anim.</p>
						<a href="#">more details<span>></span></a>
					</div>
				</div>
			</div>

	</section><!--  End Features  -->

	<section class="testimonials wrapper">

		<span class="sep_line sep_top">
		</span>

		<h2>Testimonials</h2>
		<div class="testi_slider" id="tslider">
			<div class="t">
				<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu pariatur.</p>
				<p class="author">John Doe - UX Designer</p>
			</div>
			<div class="t">
				<p>Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu pariatur.</p>
				<p class="author">Jane Eva - SEO Expert</p>
			</div>
			<div class="t">
				<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu pariatur, Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				<p class="author">John David - Developer</p>
			</div>
            
		</div>
		<div id="t_navigation"></div>
		<span class="sep_line sep_bottom"></span>

	</section><!--  End Testimonials  -->

	<section class="info">

		<div class="info_pic">

		</div>
		<div class="info_details">
			<h3>sed do eiusmod tempor incididunt ut labore et dolore.</h3>
			
			<p>Magna aliqua ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
			<a href="">More Details <span>></span></a>
			
		</div>

	</section><!--  End Info  -->
    <section class="cta login">
	
		
        <h3>Login or Register</h3>
		
        <div class="wrapper">
         <div class="form_container">
            <div id="login" class="form_block" style="margin-left:50px;">
                <form>

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
            <form>
                <!--<h1> Sign up </h1>-->
                <p>
                    <label for="usernamesignup" class="uname" data-icon="u">Your username or email</label>
                    <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="mysuperusername690" />
                </p>
        
                <p>
                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                    <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="eg. X8df!90EO"/>
                </p>
                <p>
                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
                </p>
                <div class="submit_block">
                    <p class="signin button">
                        <input type="submit" value="Sign up" class="cta_btn"/>
                    </p>
                   
                </div>    
            </form>
        </div>
        <div class="clearfix"></div>    
        </div>
        </div>
	</section><!--  End cta  -->

	<section class="cta">
		<h3>Take Action & buy your copy now!</h3>
		<p>excepteur sint occaecat cupidatat non proiden deserunt mollit anim laborum.</p>
		<a href="#" class="cta_btn">Sign up now!</a>
		<span class="cta_sep"></span>
	</section><!--  End cta  -->
@stop