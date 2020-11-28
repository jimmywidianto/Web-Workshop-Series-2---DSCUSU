<?php include "partials/_header.php"; ?>
<?php

include "database/connecton.php";

$query = "SELECT id, name, gender, price, sold, imageurl FROM products ORDER BY sold DESC LIMIT 4";

$stmt = $con->prepare($query);
$stmt->execute();

if($row = $stmt->fetch(PDO::FETCH_ASSOC)):
    extract($row);

?>

<main>
    <section>
        <div class="container">
            <div class="top-wrapper">
                <div class="header">
                    <h1><?php echo $name; ?></h1>
                    <p>20th Century Models</p>
                    <button type="button">
                        <a href="Detail-shoe.php?p=<?php echo $id; ?>">
                            <img src="assets/Icon/cart.svg">
                            Buy Now
                        </a>
                    </button>
                </div>
                <figure>
                    <img src="<?php echo $imageurl; ?>" alt="<?php echo $name; ?>">
                </figure>
            </div>
        </div>
    </section>

<?php endif; ?>

    <section>
        <div class="container">
            <div class="quote-wrapper">
                <h2>I Make Shoe Contact<br>Before Eye Contact</h2>
                <p>Airu Store</p>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="shape-background"></div>
            <div class="content-wrapper">
                <h2>Best Seller This Month</h2>
                <div class="card-container">

                    <?php
                    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach($rows as $row):
                        extract($row);
                    ?>

                    <div class="card">
                        <div class="model-content">
                            <div>
                                <img src="<?php echo $imageurl; ?>" alt="$name">
                            </div>
                        </div>
                        <div class="card-content">
                            <div>
                                <h3><?php echo $name; ?></h3>
                                <p><?php echo $gender; ?>'s Shoes</p>
                                <p>Rp. <?php echo number_format($price,0,'','.'); ?></p>
                            </div>
                            <div>
                                <a href="Detail-shoe.php?p=<?php echo $id; ?>">
                                    <button>Buy</button>
                                </a>
                                <a>Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    
                    <?php endforeach; ?>
                    
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="gallery-wrapper">
                <div class="header-2">
                    <h2>Our Gallery</h2>
                </div>
                <div class="grid-container">
                    <img src="assets/Gallery/Gallery-1.png" alt="Img-1">
                    <img src="assets/Gallery/Gallery-2.png" alt="Img-1">
                    <img src="assets/Gallery/Gallery-3.png" alt="Img-1">
                    <img src="assets/Gallery/Gallery-4.png" alt="Img-1">
                    <img src="assets/Gallery/Gallery-5.png" alt="Img-1">
                </div>
            </div>
        </div>
    </section>
</main>

<?php include "partials/_footer.php"; ?>