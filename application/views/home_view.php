<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Home | Productos</title>
    <link rel="stylesheet" href="<?=base_url();?>styles/css/styles.css">
  </head>
  <body>
      <form name="form_home" action="<?=base_url();?>Home/add" method="post">
        <fieldset>
          <legend><h2>Lista de Productos</h2></legend>
          <table id="tblProductos">
            <thead>
              <tr>
                <th><label for="Nombre">Nombre:</label></th>
                <th><input type="text" name="name" placeholder="Ingrese su Nombre." value=""></th>
              </tr>
              <tr>
                <th><label for="Descripcion">Descripcion:</label></th>
                <th><input type="text" name="descri" placeholder="Ingrese su Descripcion." value=""></th>
              </tr>
              <tr>
                <th><label for="Precio">Precio:</label></th>
                <th><input type="text" name="precio" placeholder="Ingrese el Precio." value=""></th>
              </tr>
              <tr>
                <th>
                <th><input type="submit" name="submit" value="Guardar"></th>
              </tr>
              <tr>
                <?= validation_errors();?>

              </tr>

            </thead>
            <tbody>

              <tr>
                <td><strong><h4>Nombre</h4></strong></td>
                <td><strong><h4>Descripcion</h4></strong></td>
                <td><strong><h4>Precio</h4></strong></td>
              </tr>
                <?php
                  foreach ($producto as $product) {
                    echo"
                      <tr>
                        <td>{$product->name}</td>
                        <td>{$product->descri}</td>
                        <td>{$product->precio}</td>
                      </tr>
                    ";
                  }
                ?>
            </tbody>
            </fieldset>
          </table>
          </fieldset>
      </form>


  </body>
</html>
