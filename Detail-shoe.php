<?php include "partials/_header.php"; ?>
<?php
include "database/connecton.php";

$query = "SELECT id, name, gender, price, sold, imageurl FROM products WHERE id=:id";
$stmt = $con->prepare($query);

$id = htmlspecialchars(strip_tags($_GET['p']));

$stmt->bindParam(':id', $id);
$stmt->execute();

if($row = $stmt->fetch(PDO::FETCH_ASSOC)):
    extract($row);
?>

<main>
    <section>
        <div class="container">
            <div class="detail-container">
                <div class="model-display">
                    <img src="<?php echo $imageurl; ?>" alt="Model-shoes-2">
                </div>

                <div class="card-content">
                    <div>
                        <h3><?php echo $name; ?></h3>
                        <p><?php echo $gender; ?>'s Shoes</p>
                        <p>Rp. <?php echo number_format($price,0,'','.'); ?></p>
                    </div>
                    <div>
                        <button>Buy</button>
                        <a>Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php endif; ?>

    <section>
        <div class="container">
            <div class="review-container">
                <div class="header-review">
                    <h4>Review</h4>
                    <hr>
                </div>
                <div class="content-review">
                    <img src="assets/Icon/edit.svg" alt="edit">
                    <a>Write a Review</a>
                </div>

                <div class="card-container">
                    <div class="card">
                        <div class="model-content">
                            <div>
                                <img src="assets/Icon/user.svg" alt="profile-user">
                            </div>
                        </div>
                    
                        <div class="card-content">
                            <div>
                                <h3>Si Joni</h3>
                                <div class="user-star-detail">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <p id="date">30/10/20</p>
                                </div>
                                <p>Perfect Shoes... love the colors</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="model-content">
                            <div>
                                <img src="assets/Icon/user.svg" alt="profile-user">
                            </div>
                        </div>
                    
                        <div class="card-content">
                            <div>
                                <h3>Si Jona</h3>
                                <div class="user-star-detail">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <p id="date">30/10/20</p>
                                </div>
                                <p>My top is right</p>
                            </div>
                        </div>
                    </div>
                        
                </div>
            </div>    
        </div>
    </section>
</main>

<?php include "partials/_footer.php"; ?>