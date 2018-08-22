<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Juan Pablo Vaca Pliego">

    <title>Send mail - Porrúa.com</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
<style>
body {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #eee;
}
.container{
  width: 1170px;
}
.mail-magic{
  max-width: 630px;
  padding: 15px;
  margin: 0 auto;
}
</style>
</head>

<body>
    <div class="container">
      <div class="col-md-4">
          <form method="post" action="throw-mail.php" class="form-horizontal mail-magic">
              <div class="form-group">
                  <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1">@</span>
                      <input type="text" name="user-mail" class="form-control" placeholder="Ingresa tu correo">
                  </div>
              </div>
              <div class="form-group">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="acepto-tc" value="true"> Acepto T&C
                    </label>
                  </div>
              </div>
              <div class="form-group pull-right">
                  <button type="submit" class="btn btn-default">Enviar</button>
              </div>
          </form>
        </div>
    </div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>