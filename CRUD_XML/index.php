<a href="add.php">Add Product</a><br><br>
<?php
    $products = simplexml_load_file("products.xml");
    echo " no of products:".count($products)."<br>";
?>
<table>
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Price</th>
    <th>Action</th>
  </tr>
  <?php foreach($products->product as $product) {?>
    <tr>
      <td><?php echo $product["id"] ?></td>
      <td><?php echo $product->name ?></td>
      <td><?php echo $product->price?></td>
      <td><?php echo $product["id"] ?></td>
    </tr>
</table>