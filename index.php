<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spring Step</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<header class="container">
    <!-- As a link -->
<nav class="navbar navbar-light bg-transparent">
  <a class="navbar-brand" href="#"><img src="imagenesspring/spring-step1.jpg" alt=""></a>
</nav>
</header>
<section>
<form class="container" action="index.php" method="POST">
  <div class="form-group">
    <label for="exampleFormControlInput1">Nombre</label>
    <input type="text" class="form-control" id="nombreusuario" name="nombreusuario" placeholder="Nombre Comprador">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Cantidad De Zapatos</label>
    <select class="form-control" id="numerodepares" name="numerodepares">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
      <option>7</option>
      <option>8</option>
      <option>9</option>
      <option>10</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Precio Total De La Commpra</label>
    <input type="text" class="form-control" id="preciototal" name="preciototal" placeholder="Precio Total">
  </div>
  
  <button class="btn btn-primary" type="submit" id="calcular" name="calcular" value="calcular">Enviar</button>
</form>

<?php if(isset($_POST['calcular'])):?>

<h1 class="container mt-5" ><?php  
    
    $numerodezapatos = $_POST['numerodepares'];
    $preciocompra = $_POST['preciototal'];

  if($numerodezapatos == '3'){

    $preciodescuento = $preciocompra - ($preciocompra * 0.1);
    echo 'El Total Con Descuento ES: ' .$preciodescuento;

  }elseif('3' > $numerodezapatos || $numerodezapatos <= '8'){

    $preciodescuento1 = $preciocompra - ($preciocompra * 0.2);
    echo 'El Total Con Descuento ES: ' .$preciodescuento1;

  }elseif($numerodezapatos > '8'){

    $preciodescuentot = $preciocompra - ($preciocompra * 0.5);
    echo 'El Total Con Descuento ES: ' .$preciodescuentot;

  }else{

      echo 'N0 Hay Descuento';
  }

    
    
    ?></h1>

<?php endif ?>    

</section>














<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>