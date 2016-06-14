<!DOCTYPE html>
<html>
<head>
	<title>Login Mahreen</title>
	<link rel="stylesheet" type="text/css" href="/public/css/login.css">
	<script src="/public/js/jquery.js" type="text/javascript"></script>
	<script src="/public/js/login.js" type="text/javascript"></script>
</head>
<body>
	<div class="login-page">
	  <div class="form">
		<h1 class="title">Mahreen Hijab</h1>
		@if ($error = $errors->first('email'))
		  <div class="alert">
		    {{ $error }}
		  </div>
		@endif
		@if ($error = $errors->first('password'))
		  <div class="alert">
		    {{ $error }}
		  </div>
		@endif
	    <form class="login-form" method="post" action="/auth/login">
	    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
	      <input type="email" required placeholder="email" name="email"/>
	      <input type="password" required placeholder="password" name="password"/>
	      <button>login</button>
	    </form>
	  </div>
	</div>
</body>
</html>