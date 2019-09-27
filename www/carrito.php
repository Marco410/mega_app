<?php include 'header.php';  ?>
<div class="container" >
<table class="table border-bottom ">
  <thead>
    <tr  >
      <th class="border-right" scope="col">Producto</th>
      <th scope="col">Reyshen</th>
      <th scope="col">Glicoxil</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th class="border-right" scope="row">Cantidad</th>
      <td> 4    <i class="fas fa-sort-up"></i></td>
      <td> 1    <i class="fas fa-sort-up"></i></td>
    </tr>
    <tr>
      <th class="border-right" scope="row">Precio U.</th>
      <td>$350</td>
      <td>$550</td>
    </tr>
    <tr>
      <th class="border-right" scope="row">Subtotal</th>
      <td>$3250</td>
      <td>$5250</td>
    </tr>
      <tr>
      <th class="border-right" scope="row">Eliminar</th>
      <td><i class="fas fa-times"></i></td>
      <td><i class="fas fa-times"></i></td>
    </tr>
  </tbody>
</table>
    <div>
        <p class="text-center font-weight-bold" >Productos Totales: 5</p>
        <p class="text-center font-weight-bold" >Total: $51313</p>
        
        <a href="conf_pedido.php" class="btn btn-block text-white " role="button" aria-pressed="true"style="background-color:#09BDE6"> Realizar Pedido </a><br>
    </div>

</div>
<?php include 'footer.php';  ?>