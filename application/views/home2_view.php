<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Home | Productos</title>
  </head>
  <body>
      <center><<h1>Resgitro</h1></center>
      <?php if(isset($mensaje)): ?>
      <center><h3><?= $mensaje;?></h3></center>
    <?php endif;?>
    <center><a href="<?=base_url();?>Home">Click para continuar</a></center>
  </body>
</html>
