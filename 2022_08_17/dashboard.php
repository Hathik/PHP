<a href ="dashboard2.php?action=logout"><button style="float:right" type="button" name="logout" >Logout</button></a>
<?php
    session_start();
    //echo $_SESSION["username"];

    class Product{
        private $productID;
        private $productName;
        private $price;

        public function __construct($id,$name,$price){
            $this->productID  = $id;
            $this->productName  = $name;
            $this->price  = $price;
        }
        public function setID($id){
            $this->productID = $id;
        }
        public function getID(){
            return $this->productID;
        } 
        public function setName($name){
            $this->productName = $name;
        }
        public function getName(){
            return $this->productName;
        }
        public function setPrice($price){
            $this->price = $name;
        }
        public function getPrice(){
            return $this->price;
        }
    }
    $products = array("1"=> new Product(1,"Bag",2000.00),
                        "2"=> new Product(2,"Watch",1000.00),
                        "3" => new Product(3,"Ball",100.00));

                       
?>
<h1>Product List</h1>
<table border="Solid 1px">
<tr>
<th>Product ID</th>
<th>Product Name</th>
<th>Price</th>
<th>Actions</th>
</tr>
<?php
    foreach($products as $product){ ?>
      <tr>
        <td><?php echo $product->getID(); ?></td>
        <td><?php echo $product->getName(); ?></td>
        <td><?php echo $product->getPrice(); ?></td>
        <td><a href="dashbpoard.php?action=addItem&amp;productID=<?php echo $product->getID(); ?>">Add</a></td>
      </tr>
<?php    } ?>

</table> 