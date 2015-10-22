<html>
    <body>
		<h1>Welcome!</h1>
		@unless (Auth::check() == false)
			<a href="auth/logout"><button class="btn btn-default">Logout</button></a>
		@endunless
		@unless (Auth::check() == true)
			<a href="auth/login"><button class="btn btn-default">Login</button></a>
		@endunless
    </body>
</html>