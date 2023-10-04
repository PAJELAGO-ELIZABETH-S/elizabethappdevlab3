<?= view('/tags/top'); ?>
<?= view('/tags/head'); ?>

<!-- product section start -->
<div class="product_section layout_padding text-center"> <!-- Dagdag ng "text-center" class -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="product_taital">
                    <?= $product['name'] ?>
                </h1>
                <p class="product_text">
                    <?= $product['description'] ?>
                </p>
            </div>
        </div>
        <div class="product_section_2 layout_padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 mx-auto"> <!-- Dagdag ng "mx-auto" class -->
                        <div class="product_box">
                            <img src="<?= base_url() ?>/uploads/<?= $product['image'] ?>" alt="product image" class="mx-auto"> <!-- Dagdag ng "mx-auto" class -->
                            <div class="btn_main">
                                <div class="buy_bt">
                                    <ul>
                                        <li><a href="#">Buy Now</a></li>
                                    </ul>
                                </div>
                                <h3 class="price_text">
                                    $<?= $product['price'] ?>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="seemore_bt"><a href="/">Home</a></div>
            </div>
        </div>
    </div>
</div>
<!-- product section end -->
<?= view('/tags/end'); ?>
