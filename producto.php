<?php
session_start();

$productos = array(
    array('nombre' => 'Producto 1', 'imagen' => 'imagen1.jpg', 'precio' => 10.99),
    array('nombre' => 'Producto 2', 'imagen' => 'imagen2.jpg', 'precio' => 15.50),
    array('nombre' => 'Producto 3', 'imagen' => 'imagen3.jpg', 'precio' => 8.75)
);

if (isset($_POST['agregar'])) {
    $productoIndex = $_POST['productoIndex'];
    $cantidad = $_POST['cantidad'];

    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = array();
    }

    $producto = $productos[$productoIndex];
    $producto['cantidad'] = $cantidad;
    $_SESSION['carrito'][] = $producto;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Productos</title>
</head>
<body>
    <h1>Productos</h1>
    <div class="productos-container">
        <?php foreach ($productos as $index => $producto) { ?>
            <div class="producto">
                <img src="<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>">
                <h2><?php echo $producto['nombre']; ?></h2>
                <p>Precio: $<?php echo number_format($producto['precio'], 2); ?></p>
                <form method="post">
                    <input type="hidden" name="productoIndex" value="<?php echo $index; ?>">
                    <label>Cantidad:</label>
                    <input type="number" name="cantidad" value="1" min="1">
                    <button type="submit" name="agregar">Agregar a carrito</button>
                </form>
            </div>
        <?php } ?>
    </div>

<script>
    function addToCart(index) {
        var cantidad = parseInt(document.getElementById('cantidad_' + index).value);
        var producto = <?php echo json_encode($productos); ?>[index];
        producto.cantidad = cantidad;

        var carrito = JSON.parse(localStorage.getItem('carrito')) || [];
        carrito.push(producto);
        localStorage.setItem('carrito', JSON.stringify(carrito));

        console.log('Producto agregado al carrito:', producto);
        alert('Producto agregado al carrito');
    }
</script>
</body>
</html>