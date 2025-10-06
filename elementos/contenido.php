<?php
// Estructura asociativa: producto => precio
$productos = [
  "Pan de Camas"        => 1.20,
  "Aceitunas aliñadas"  => 2.50,
  "Tortas de aceite"    => 3.00
];
?>

<h2 class="text-success text-center mt-4">Productos locales de Camas</h2>

<table class="table table-bordered table-striped w-75 mx-auto mt-4 text-center align-middle">
  <thead class="table-primary">
    <tr>
      <th>Producto</th>
      <th>Precio (€)</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($productos as $nombre => $precio): ?>
      <tr>
        <td><?= htmlspecialchars($nombre) ?></td>
        <td><?= number_format($precio, 2, ',', '.') ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?php
// Estructura asociativa: producto => precio
$productos = [
  "Pan de Camas"        => 1.20,
  "Aceitunas aliñadas"  => 2.50,
  "Tortas de aceite"    => 3.00
];

$nombres = array_keys($productos);
$precios = array_values($productos);
?>

<h2 class="text-success text-center mt-4">Productos locales de Camas</h2>

<table class="table table-bordered table-striped w-75 mx-auto mt-4 text-center align-middle">
  <thead class="table-primary">
    <tr>
      <th>Producto</th>
      <th>Precio (€)</th>
    </tr>
  </thead>
  <tbody>
    <?php
      for ($i=0; $i < count($nombres); $i++) { 
        $nombre = $nombres[$i];
        $precio = $precios[$i];
        echo "<tr>";
        echo "<td>" . htmlspecialchars($nombre) . "</td>";
        echo "<td>" . number_format($precio, 2, ',', '.') . "</td>";
        echo "</tr>";
      } 
    ?>
  </tbody>
</table>

