<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Form Login</title>
	
	<!-- Bootstrap css online -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	
	<!-- login-admin css -->
	<link rel="stylesheet" href="../../assets/css/form-keluhan.css">
		


</head>

<body class="bg-dark">

    <div class="container">
    <div class="card card-register mx-auto mt-5">
    <div class="card-header">Masuk untuk menjadi admin</div>
    <div class="card-body">

          <form method="POST" action="../../handle/handle-form-login/index.php">

    <div class="form-group">
    <div class="form-label-group">
                <input type="text" id="username" name="username" class="form-control" placeholder="username" required="required" >
                <label for="username">Username</label>
    </div>
    </div>
           
    <div class="form-group">
    <div class="form-label-group">
                <input type="password" id="password" name="password" class="form-control" placeholder="password" required="required">
                <label for="password">Password</label>
    </div>
    </div>

            <input type="submit" name="submit" class="btn btn-primary  btn-block" value="Login">
          </form>
    <div class="text-center">
            <a class="d-block small mt-3" href="../../">kembali ke halaman awal</a>
    </div>
    </div>
    </div>
    </div>











	<!-- Bootstrap JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>