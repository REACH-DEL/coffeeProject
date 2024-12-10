<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/main.css">
    <title>Carts</title>
</head>
<body>
    <section class="d-flex">
        <?php include('./utilities/nav.php')?>
        <div class="cart-item container d-flex align-items-center justify-content-center ">
            <div class="row">
                <div class="col-8">
                    <div class="items">
                        <div class="item">
                            <div class="item-img d-flex align-items-center">
                                <img class="img-thumbnail" src="./assets/products/hot-coffee.jpg" alt="">
                            </div>
                            <div class="item-detail px-2">
                                <p class="item-text mb-1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias, sint.</p>
                                <div class="price-amount d-flex justify-content-between">
                                    <div class="price-per-item">$1.99</div>
                                    <div class="amount">X1</div>
                                    <div class="final-price">$2.99</div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-img d-flex align-items-center">
                                <img class="img-thumbnail" src="./assets/products/hot-coffee.jpg" alt="">
                            </div>
                            <div class="item-detail px-2">
                                <p class="item-text mb-1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias, sint.</p>
                                <div class="price-amount d-flex justify-content-between">
                                    <div class="price-per-item">$1.99</div>
                                    <div class="amount">X1</div>
                                    <div class="final-price">$2.99</div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-img d-flex align-items-center">
                                <img class="img-thumbnail" src="./assets/products/hot-coffee.jpg" alt="">
                            </div>
                            <div class="item-detail px-2">
                                <p class="item-text mb-1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias, sint.</p>
                                <div class="price-amount d-flex justify-content-between">
                                    <div class="price-per-item">$1.99</div>
                                    <div class="amount">X1</div>
                                    <div class="final-price">$2.99</div>
                                </div>
                            </div>
                        </div>
                        <div class="calulate-price">
                            <div class="sub-total d-flex justify-content-between">
                                <p class="sub-total-text">Sub Total</p>
                                <p class="sub-total-value">$2.99</p>
                            </div>
                            <div class="tax d-flex justify-content-between">
                                <p class="tax-text">Tax</p>
                                <p class="tax-value">5%</p>
                            </div>
                            <hr>
                            <div class="total d-flex justify-content-between">
                                <p class="total-text fw-bold">Total</p>
                                <p class="total-value fw-bold">$4.99</p>
                            </div>
                        </div>
                        <button class="place-order">Place Order</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>