<?php require('controller/controller.php');
$controller = new Controller();
if($_POST){
	$controller->login($_POST["username"], $_POST["password"]);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="charset" charset="UTF-8">
<meta name="aurthor" aurthor="miraj_pudasaini">
<meta name="description" description="Donation">
<meta name="view-port" view-port="width=device-width,initial-scale=0.1">
<title>
		Save a Leopard
	</title>
	<!-- Bpotstrap CDN for Server -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<!--Bootstrp form assets folder -->
	<link href="assets/thirdparty/css/bootstrap.css" rel="stylesheet" type="text/css">

	<!-- custome CSS -->
	<link href="assets/style.css" rel="stylesheet" type="text/css">
	<!-- jQuery CDN -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- jQuerry in server libarary-->
	</head>
	<body >
<header>
<!-- navigation panel -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Save A Leopard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About US</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Leopards</a>
          <a class="dropdown-item" href="#">Volunteer</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Contact US</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">Forum</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
			</header>
			<main>

				<!-- seciton for form-->

				<section>

			</section>
			<div class="container form-structure">
				<?php $controller->load_view();?>
			</div>
<!--Content section -->
			<section>

			</main>

			<footer class="footer">
					<script src="assets/main.js" type="text/javascript"></script>
					<script src="assets/thirdparty/js/bootstrap.js" type="text/javascript"></script>
					<script src="assets/thirdparty/js/bootstrap-bundel.js" type="text/javascript"></script>
			</footer>

	</body>
</html>

