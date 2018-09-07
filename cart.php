<?php require_once 'includes/head.php';?>
<?php require_once 'includes/top-nav.php';?>

<div class="footer-cart-row">
    <div class="col-md-4 price-before"><p></p></div>
    <div class=" col-md-4 wc-proceed-to-checkout">
        <a href="#" class="checkout-button button alt wc-forward">PROCEED TO CHECKOUT</a>
    </div>
    <div class="col-md-4 price-after"><p>TOTAL: 17.75€</p></div>
</div>


<div class="content-container">
    <div class="container">
        <div class="row">
            <!-- Fake navigation -->
            <div class="col-md-4 heading step-box step-first step-selected">
                <h3>Shopping Cart</h3>
            </div>
            <div class="col-md-4 heading step-box step-middle">
                <h3>Checkout</h3>
            </div>
            <div class="col-md-4 heading step-box step-last">
                <h3>You got them!</h3>
            </div>
            <div class="col-md-12 main-wrap">

                <div class="main-content">
                    <div class="commerce">
                        <form>
                            <table class="table shop_table cart">
                                <thead>
                                    <tr>
                                        <th class="product-remove hidden-xs">&nbsp;</th>
                                        <th class="product-thumbnail hidden-xs">&nbsp;</th>
                                        <th class="product-name">Product</th>
                                        <th class="product-price text-center">Price</th>
                                        <th class="product-quantity text-center">Quantity</th>
                                        <th class="product-subtotal text-center hidden-xs">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="cart_item">
                                        <td class="product-remove hidden-xs">
                                            <a href="#" class="remove" title="Remove this item">&times;</a>
                                        </td>
                                        <td class="product-thumbnail hidden-xs">
                                            <a href="#">
                                                <img width="100" height="150" src="images/product/thumb_72x72.jpg" alt="Product-1" />
                                            </a>
                                        </td>
                                        <td class="product-name">
                                            <a href="#">Cras rhoncus duis viverra</a>
                                            <dl class="variation">
                                                <dt class="variation-Color">Color:</dt>
                                                <dd class="variation-Color">
                                                    <p>Green</p>
                                                </dd>
                                                <dt class="variation-Size">Size:</dt>
                                                <dd class="variation-Size">
                                                    <p>Extra Large</p>
                                                </dd>
                                            </dl>
                                        </td>
                                        <td class="product-price text-center">
                                            <span class="amount">&#36;22.00</span>
                                        </td>
                                        <td class="product-quantity text-center">
                                            <div class="quantity">
                                                <input type="number" step="1" min="0" name="qunatity" value="2" title="Qty" class="input-text qty text" size="4" />
                                            </div>
                                        </td>
                                        <td class="product-subtotal hidden-xs text-center">
                                            <span class="amount">&#36;44.00</span>
                                        </td>
                                    </tr>
                                    <tr class="cart_item">
                                        <td class="product-remove hidden-xs">
                                            <a href="#" class="remove" title="Remove this item">&times;</a>
                                        </td>
                                        <td class="product-thumbnail hidden-xs">
                                            <a href="#">
                                                <img width="100" height="150" src="images/product/thumb_72x72.jpg" alt="Product-3" />
                                            </a>
                                        </td>
                                        <td class="product-name">
                                            <a href="#">Creamy Spring Pasta</a>
                                            <dl class="variation">
                                                <dt class="variation-Color">Color:</dt>
                                                <dd class="variation-Color">
                                                    <p>Green</p>
                                                </dd>
                                                <dt class="variation-Size">Size:</dt>
                                                <dd class="variation-Size">
                                                    <p>Medium</p>
                                                </dd>
                                            </dl>
                                        </td>
                                        <td class="product-price text-center">
                                            <span class="amount">&#36;12.00</span>
                                        </td>
                                        <td class="product-quantity text-center">
                                            <div class="quantity">
                                                <input type="number" step="1" min="0" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" />
                                            </div>
                                        </td>
                                        <td class="product-subtotal hidden-xs text-center">
                                            <span class="amount">&#36;12.00</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="6" class="actions">
                                            <div class="coupon">
                                                <label for="coupon_code">Coupon:</label>
                                                <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code" />
                                                <input type="submit" class="button" name="apply_coupon" value="Apply Coupon" />
                                            </div>
                                            <input type="submit" class="button update-cart-button" name="update_cart" value="Update Cart" />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                        <div class="cart-collaterals">

                            <!-- CART TOTALS -->
                            <div class="cart_totals">
                                <h2>Cart Totals</h2>
                                <table>
                                    <tr class="cart-subtotal">
                                        <th>Subtotal</th>
                                        <td>
                                            <span class="amount">&#36;56.00</span>
                                        </td>
                                    </tr>
                                    <tr class="shipping">
                                        <th>Shipping</th>
                                        <td>
                                            <span class="amount">&#36;0.00</span>
                                        </td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td>
                                            <strong>
                                                <span class="amount">&#36;56.00</span>
                                            </strong>
                                        </td>
                                    </tr>
                                </table>

                            </div>
                            <!-- end CART TOTALS -->

                            <!-- CROSS SELLING -->
                            <!-- <div class="cross-sells">
                                <h2>You may be interested in&hellip;</h2>
                                <ul class="products columns-2">
                                    <li class="product">
                                        <div class="product-container">
                                            <figure>
                                                <div class="product-wrap">
                                                    <div class="product-images">
                                                        <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                            <a href="#">
                                                                <img width="400" height="450" src="images/product/thumb_400x400.jpg" alt="Product-1" />
                                                            </a>
                                                        </div>
                                                        <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                            <a href="#">
                                                                <img width="400" height="450" src="images/product/thumb_400x400_alt.jpg" alt="Product-1alt" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="shop-loop-actions">
                                                        <a href="#" class="add_to_cart_button product_type_simple">
                                                            View
                                                        </a>
                                                        <a class="shop-loop-quickview" href="#" data-original-title="Quick view">
                                                        </a>
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <div class="yith-wcwl-add-button">
                                                                <a href="#" class="add_to_wishlist">
                                                                    Add to Wishlist
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                                <figcaption>
                                                    <div class="shop-loop-product-info">
                                                        <div class="info-title">
                                                            <h3 class="product_title">
                                                                <a href="#">
                                                                    Cras rhoncus duis viverra
                                                                </a>
                                                            </h3>
                                                        </div>
                                                        <div class="info-meta">
                                                            <div class="info-price">
                                                                <span class="price">
                                                                    <span class="amount">
                                                                        12.00&#36;
                                                                    </span>
                                                                    &ndash;
                                                                    <span class="amount">
                                                                        23.00&#36;
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                    <li class="product">
                                        <div class="product-container">
                                            <figure>
                                                <div class="product-wrap">
                                                    <div class="product-images">
                                                        <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                            <a href="#">
                                                                <img width="400" height="450" src="images/product/thumb_400x400.jpg" alt="Product-2" />
                                                            </a>
                                                        </div>
                                                        <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                            <a href="#">
                                                                <img width="400" height="450" src="images/product/thumb_400x400_alt.jpg" alt="Product-2alt" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="shop-loop-actions">
                                                        <a href="#" class="add_to_cart_button product_type_simple">
                                                            View
                                                        </a>
                                                        <a class="shop-loop-quickview" href="#" data-original-title="Quick view">
                                                        </a>
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <div class="yith-wcwl-add-button">
                                                                <a href="#" class="add_to_wishlist">
                                                                    Add to Wishlist
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                                <figcaption>
                                                    <div class="shop-loop-product-info">
                                                        <div class="info-title">
                                                            <h3 class="product_title">
                                                                <a href="#">
                                                                    Morbi sed egestas
                                                                </a>
                                                            </h3>
                                                        </div>
                                                        <div class="info-meta">
                                                            <div class="info-price">
                                                                <span class="price">
                                                                    <span class="amount">
                                                                        12.00&#36;
                                                                    </span>
                                                                    &ndash;
                                                                    <span class="amount">
                                                                        23.00&#36;
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                </ul>
                            </div> -->
                            <!-- end CROSS SELLING -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- FOOTER -->


<script type='text/javascript' src='js/jquery-1.11.3.min.js'>
</script>
<script type='text/javascript' src='js/jquery-migrate.min.js'>
</script>
<script type='text/javascript' src='js/easing.min.js'>
</script>
<script type='text/javascript' src='js/imagesloaded.pkgd.min.js'>
</script>
<script type='text/javascript' src='js/bootstrap.min.js'>
</script>
<script type='text/javascript' src='js/superfish-1.7.4.min.js'>
</script>
<script type='text/javascript' src='js/jquery.appear.min.js'>
</script>
<script type='text/javascript' src='js/script.js'>
</script>
<script type='text/javascript' src='js/jquery.prettyPhoto.js'>
</script>
<script type='text/javascript' src='js/jquery.prettyPhoto.init.min.js'>
</script>
<script type='text/javascript' src='js/jquery.selectBox.min.js'>
</script>
<script type='text/javascript' src='js/jquery.parallax.js'>
</script>
<script type='text/javascript' src='js/core.min.js'>
</script>
<script type='text/javascript' src='js/widget.min.js'>
</script>
<script type='text/javascript' src='js/mouse.min.js'>
</script>
<script type='text/javascript' src='js/slider.min.js'>
</script>
<script type='text/javascript' src='js/jquery-ui-touch-punch.min.js'>
</script>
<script type='text/javascript' src='js/price-slider.js'>
</script>
<script type='text/javascript' src='js/preloader.min.js'>
</script>

</body>

</html>