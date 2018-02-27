<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>taller 1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  </head>
  <body>

    <div class="container">
      <h1>
        Taller 1 jeaffer villadiego y carlos mercado
      </h1>
      <form action="datos.php" method="POST">
          <div class="form-group">
            <label for="exampleInputEmail1">Digite la cantida de informacion ha almacenar </label>
            <input type="text" name="dato1" class="form-control"  placeholder="Digite la cantida de informacion ha almacenar">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Seleccione tipo de medida</label>
            <select class="form-control"  name="dato2">
              <option value="1">Bit</option>
              <option value="2">Byte</option>
              <option value="3">Kiobyte</option>
              <option value="4">Megabyte</option>
            </select>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
      </form>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
