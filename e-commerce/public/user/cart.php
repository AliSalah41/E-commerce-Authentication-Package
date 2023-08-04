<?php include 'header.php' ?>
<?php include 'navbar.php' ?>
<!-- <?php // session_start() ?> -->

<?php
//  echo $_GET['id'] 

if(isset($_POST['addCart']))
{
    $cart =[
        'id' => $_GET['id'],
        'name'=> $_POST['name'],
        'image'=> $_POST['image'],
        'description'=> $_POST['description'],
        'price'=> $_POST['price'],
        'quantity'=> $_POST['quantity'],
    ];

    if(!isset($_SESSION['Cart']))
    {
        $_SESSION['Cart']=[];

    }
        $_SESSION['Cart'][]=$cart;


    // print_r($_SESSION['cart']);
}
?>

<section id="page-header" class="about-header"> 
        <h2>#Cart</h2>
        <p>Let's see what you have.</p>
    </section>
 
    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Image</td>
                    <td>Name</td>
                    <td>Desc</td>
                    <td>Quantity</td>
                    <td>price</td>
                    <td>Subtotal</td>
                    <td>Remove</td>
                    <td>Edit</td>
                </tr>
            </thead>

            <tbody>
                <?php foreach($_SESSION['Cart'] as $product)
                {
                    $subtotal = (int)$product['quantity'] * (int)$product['price']; 
                ?>
                <tr>
                    <td><img src="admin/upload/<?php echo $product['image'] ?>" alt="product1"></td>
                    <td><?php echo $product['name'] ?></td>
                    <td><?php echo $product['description'] ?></td>
                    <td><?php echo $product['quantity'] ?></td>
                    <td><?php echo $product['price'] ?></td>
                    <td><?php echo $subtotal; ?></td>
                   
            
                    
                    <!-- Remove any cart item  -->
                    <form action="removeProduct.php?id=<?php echo $product['id'] ?>" method="post">
                    <td><button type="submit" name="remove"  class="btn btn-danger">Remove</button></td>
                    </form>
                    <!-- edit -->
                    <td><button type="submit"  class="btn btn-warning">Edit</button></td>
                </tr>
                <?php } ?>
            </tbody>
            <!-- confirm order  -->
            <td><button type="submit" name="" class="btn btn-success">Confirm</button></td>
            
        </table>
    </section>

    <!-- <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Coupon</h3>
            <input type="text" placeholder="Enter coupon code">
            <button class="normal">Apply</button>
        </div>
        <div id="subTotal">
            <h3>Cart totals</h3>
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>$118.25</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>$0.00</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$0.00</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>$118.25</strong></td>
                </tr>
            </table>
            <button class="normal">proceed to checkout</button>
        </div>
    </section> -->

    <?php include "footer.php" ?>

