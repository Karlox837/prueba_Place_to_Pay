<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h2>Formulario de pago PSE</h2>
<p>Juan Carlos Cano Prueba Agosto 27 de 2018.</p>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="php/procesarpago.php" method="POST">
      
        <div class="row">
          <div class="col-50">
            <h3>informacion del Pagador</h3>
            <label for="name"><i class="fa fa-user"></i>Nombre</label>
            <input type="text" id="firstname" name="firstname" placeholder="Andres">
            <label for="lname"><i class="fa fa-user"></i>Apellido</label>
            <input type="text" id="lastname" name="lastname" placeholder="Restrepo">
            <label for="idtype"><i class="fa fa-id-card" aria-hidden="true"></i>Tipo de identificacion</label>
            <select name="idtype">
                <option value="CC">Cedula de Ciudadania</option>
                <option value="CE">Cedula de extranjeria</option>
                <option value="NIT">NIT</option>
                <option value="TI">Tarjeta de identidad</option>
                <option value="PPN">Pasaporte Nacional</option>
                <option value="SSN">Social Security Number</option>
            </select>
            <label for="id"><i class="fa fa-id-badge" aria-hidden="true"></i>Numero de identificacion</label>
            <input type="text" id="id" name="id">
            <label for="company"><i class="fa fa-industry" aria-hidden="true"></i>Empresa</label>
            <input type="text" id="compay" name="company" placeholder="place to pay">            
            <label for="email"><i class="fa fa-envelope"></i>Email</label>
            <input type="text" id="email" name="email" placeholder="juan@juan.com">            
            <label for="address"><i class="fa fa-address-card-o"></i> Direcion de residencia</label>
            <input type="text" id="address" name="address" placeholder="Calle 12C sur">            
            <label for="city"><i class="fa fa-institution"></i>Ciudad</label>
            <input type="text" id="city" name="city" placeholder="Medellin">            
                <div class="row">
                  <div class="col-50">
                    <label for="province">Departamento</label>
                    <input type="text" id="province" name="province" placeholder="Ant">
                  </div>
                  <div class="col-50">
                    <label for="country">Pais</label>
                    <input type="text" id="country" name="country" placeholder="CO">
                  </div>
                </div>
            <label for="phone"><i class="fa fa-phone" aria-hidden="true"></i>Telefono fijo</label>
            <input type="number" id="phone" name="phone" placeholder="233 33 33">
            <label for="mobile"><i class="fa fa-mobile" aria-hidden="true"></i>Telefono celular</label>
            <input type="number" id="mobile" name="mobile" placeholder="312 234 54 54">
            <label for="valor"><i class="fa fa-money" aria-hidden="true"></i>Valor a pagar</label>
            <input type="number" id="valor" name="valor" >
            </div>
<!--
          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>-->
        </div>
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
      <h4>Productos <span class="productos" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p>Producto 1<span class="productos">$15</span></p>
      <p>Producto 2<span class="productos">$5</span></p>
      <p>Producto 3<span class="productos">$8</span></p>
      <p>Producto 4<span class="productos">$2</span></p>
      <hr>
      <p>Total <span class="productos" style="color:black"><b>$30</b></span></p>
    </div>
  </div>
</div>

</body>
</html>