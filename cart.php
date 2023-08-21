<?php
session_start();

$carrito = isset($_SESSION['carrito']) ? $_SESSION['carrito'] : array();
$total = 0;

foreach ($carrito as $producto) {
    if (isset($producto['precio']) && isset($producto['cantidad'])) {
        $total += $producto['precio'] * $producto['cantidad'];
    }
}

if (isset($_GET['eliminar'])) {
    $indice = $_GET['eliminar'];
    if (isset($carrito[$indice])) {
        unset($carrito[$indice]);
        $_SESSION['carrito'] = array_values($carrito); // Reindexar el array
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Carrito de Compras</title>
</head>
<body>
    <h1>Carrito de Compras</h1>
    <div class="carrito-container">
        <?php foreach ($carrito as $indice => $producto) { ?>
            <div class="producto-carrito">
                <img src="<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>">
                <h2><?php echo $producto['nombre']; ?></h2>
                <p>Precio: $<?php echo number_format($producto['precio'], 2); ?></p>
                <p>Cantidad: <?php echo $producto['cantidad']; ?></p>
                <a href="cart.php?eliminar=<?php echo $indice; ?>">Eliminar</a>
            </div>
        <?php } ?>
        <div class="total">
            <p>Total: $<?php echo number_format($total, 2); ?></p>
        </div>
    </div>

<script>
    function removeFromCart(index) {
        var carrito = JSON.parse(localStorage.getItem('carrito')) || [];
        carrito.splice(index, 1);
        localStorage.setItem('carrito', JSON.stringify(carrito));

        location.reload(); // Recargar la página para reflejar los cambios
    }

    function loadCart() {
        var carrito = JSON.parse(localStorage.getItem('carrito')) || [];
        var carritoContainer = document.getElementById('carrito-container');

        carrito.forEach(function(producto, index) {
            var productoDiv = document.createElement('div');
            productoDiv.className = 'producto-carrito';
            productoDiv.innerHTML = `
                <img src="${producto.imagen}" alt="${producto.nombre}">
                <h2>${producto.nombre}</h2>
                <p>Precio: $${producto.precio.toFixed(2)}</p>
                <p>Cantidad: ${producto.cantidad}</p>
                <a href="#" onclick="removeFromCart(${index}); return false;">Eliminar</a>
            `;

            carritoContainer.appendChild(productoDiv);
        });

        // Calcular y mostrar el total
        var total = carrito.reduce(function(sum, producto) {
            return sum + (producto.precio * producto.cantidad);
        }, 0);
        var totalDiv = document.createElement('div');
        totalDiv.className = 'total';
        totalDiv.innerHTML = `<p>Total: $${total.toFixed(2)}</p>`;
        carritoContainer.appendChild(totalDiv);
    }

    window.onload = function() {
        loadCart();
    };
</script>
</body>
</html>