<!-- product section start -->
<div class="product_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="product_taital">Our Products</h1>
                <p class="product_text">incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                    nostrud exercitation</p>
            </div>
        </div>
        <div class="product_section_2 layout_padding">
            <div class="container">
                <div class="row">
                    <?php foreach ($items as $item): ?>
                        <div class="col-lg-3 col-sm-6">
                            <div class="product_box">
                                <h4 class="bursh_text"><?= $item['name'] ?></h4>
                                <a href="<?= base_url('productDetails/' . $item['id']) ?>">
                                    <img src="/uploads/<?= $item['image'] ?>" alt="product image">
                                </a>
                                <div class="btn_main">
                                    <div class="buy_bt">
                                        <ul>
                                            <li><a href="#">Buy Now</a></li>
                                        </ul>
                                    </div>
                                    <h3 class="price_text"><?= $item['price'] ?></h3>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product section end -->
