<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="login.css">
    <title>Masuk</title>
</head>
<body>
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
</style>


<!-- Custom styles for this template -->
<link href="signin.css" rel="stylesheet">
</head>
<body class="text-center">

<main class="form-signin">
<form action="daftar.php" method="GET">
<img class="mb-4" src="assets/img/logo.png" alt="" width="72" height="72">
<h1 class="h3 mb-3 fw-normal">Please sign in</h1>
<label for="inputEmail" class="visually-hidden"></label>
<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
<label for="inputPassword" class="visually-hidden"></label>
<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
<div class="checkbox mb-3">
  <label>
    <input type="checkbox" value="remember-me"> Remember me
  </label>
</div>

<button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>

<p class="mt-5 mb-3 text-muted">&copy; 2020-2021</p>
</form>
</main>

</body>
</html>