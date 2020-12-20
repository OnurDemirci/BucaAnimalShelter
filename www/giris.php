<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>Buca Hayvan Barınağı</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/admincss1.css" rel="stylesheet">
	<link rel="stylesheet" href="background2.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  </head>
<body>
	<div class="crossfade">
    <figure></figure>
    <figure></figure>
    <figure></figure>
    <figure></figure>
    <figure></figure>
    </div>
  <center>
<div id="giris2">
  <div class="card card-container">
            <img src="images/giris.png" style="height: 200px; margin-top: 20px;">
            <p id="profile-name" class="profile-name-card"></p>
            <form method="POST" action="login.php" class="form-signin">
                <span id="reauth-email" class="reauth-email">
                    </span><h2>Admin Girişi</h2>
                <input type="text" id="inputEmail" class="form-control" placeholder="Kullanıcı Adı" name="kadi" required autofocus autocomplete="off"><br>
                <input type="password" id="inputPassword" name="sifre" class="form-control" placeholder="Şifre" required><br>
                <button class="btn btn-lg btn-primary bg-dark btn-block btn-signin" type="submit">Giriş Yap</button><br><a class="btn btn-lg btn-primary bg-dark btn-block btn-signin" href="index.php"><img style='padding:7px;' width="40" src="images/site.png">Siteye Dön</a>
            </form><!-- /form -->
        </div>
</div></center>
</body>