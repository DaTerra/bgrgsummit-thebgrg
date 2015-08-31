<div class="page-top">  
	<h1 class="page-title btn-yellow-100">Login</h1>
	<p></p>
</div>


<main class="signin">
	<div class="auto-alerts">
      <div class="error">
        <p>Error!</p>
      </div>
      <div class="success">
        <p>Success!</p>
      </div>
    </div>
	
	<section class="highlights">
		<header>
			<h1>The UCLA H3 / BGRG SUMMIT is open for registration !</h1>
		</header>
		<a class="banner br333" href="./?page=registration">Register now and get a discount for NAESM</a>
		<div class="clearfix"></div>
		<a class="banner br349" href="./?page=abstract">Submit an abstract to be included in the program!</a>
		<div class="clearfix"></div>
		<a class="banner br415" href="./?page=awards">Nominate a community member for an well-deserved award!</a>
		<div class="clearfix"></div>
		<a class="banner br430" href="./?page=travel">Make your travel plans!  We look forward to see you in Atlanta!</a>
	</section>
	<section class="forms col1of3">	
		<article class="login box">
			<header>
				<h1>Log In</h1>
			</header>		
			<form action="/login_check" method="post">
			    <input type="hidden" name="_csrf_token" value="JcFbsk8XdQQO9ulvbN_FnEBSgV6E8j95IEYw8ffCHHA" />
			    <label for="email">Email:</label>
			    <input type="text" id="email" name="_email" value="" required="required" />
			    <div class="clearfix"></div>
			    <label for="password">Password:</label>
			    <input type="password" id="password" name="_password" required="required" />
			    <div class="clearfix"></div>
			    <input type="checkbox" id="remember_me" name="_remember_me" value="on" />
			    <label for="remember_me">Remember me</label>
			    <div class="clearfix"></div>
			    <input class="btn-submit btn-red-146" type="submit" id="_submit" name="_submit" value="Login" />
			</form>
		</article>	
		<article class="reset box">
			<header>
				<h1>Reset Password</h1>
			</header>	
			<form action="" method="">
			    <label for="username">Email:</label>
			    <input type="text" id="email" name="_email" value="" required="required" />
			    <input class="btn-submit btn-red-146" type="submit" id="_submit" name="_submit" value="Reset Password" />
			</form>
		</article>
	</section>
</main>