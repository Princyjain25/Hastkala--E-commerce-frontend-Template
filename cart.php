<?php include './includes/header.php'?>
<section class="index-section">
        <div class="page-content">
            <div class="mb-5 text-center">
                <h1 class="font-weight-bold">Your cart</h1>
            </div>
            <form action="/" method="post" novalidate class="cart">
                <table>
                    <thead class="cart_row">
                        <tr>
                            <th colspan="2">Product</th>
                            <th class="cart-price">Price</th>
                            <th class="text-center sm-hide">Quantity</th>
                            <th class="text-right sm-hide">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="cart_row border-top border-bottom">
                            <td class="cart_proimg">
                                <div>
                                   <a href="./twelveblends.php"> <img class="cart__image" src="./assets/images/cart_cottage.jpg" style="cursor: pointer;"></a>
                                </div>
                            </td>
                            <td class="cart_proname pr-3 sm-text-left">
                                <div class="item_title">
                                    <span>Swinging Cottage' Handmade & Hand-painted Bird House In Terracotta (6 Inch)</span>
                                </div>
                                <p class="sm-hide mb-0">
                                    <a href="#" class="mt-1 btn btn-outline-dark btn-sm">Remove</a>
                                </p>
                            </td>
                            <td class="cart_price">
                                <span>Rs. 725.00</span>
                            </td>
                            <td class="text-right sm-hide">
                                <div class="text-center">
                                    <input class="cart__qty-input" type="number" value="1" min="0" pattern="[0-9]*" data-quantity-item="1">
                                </div>
                            </td>
                            <td class="text-right sm-hide">
                                <div>
                                    <span class="text-right">Rs. 725.00</span>
                                </div>
                            </td>
                        </tr>
                        <tr class="cart_row border-bottom">
                            <td class="cart_proimg">
                                <div>
                                    <a href="./twelveblends.php"><img class="cart__image" src="./assets/images/cart_spice_box.jpg" style="cursor: pointer;"></a>
                                </div>
                            </td>
                            <td class="cart_proname pr-3 sm-text-left">
                                <div class="item_title">
                                    <span>	
                  Sheesham Wood Square Spice Box With Spoon (9 Containers)</span>
                                </div>
                                <p class="sm-hide mb-0">
                                    <a href="#" class="mt-1 btn btn-outline-dark btn-sm">Remove</a>
                                </p>
                            </td>
                            <td class="cart_price">
                                <span>Rs. 1225.00</span>
                            </td>
                            <td class="text-right sm-hide">
                                <div class="text-center">
                                    <input class="cart__qty-input" type="number" value="1" min="0" pattern="[0-9]*" data-quantity-item="1">
                                </div>
                            </td>
                            <td class="text-right sm-hide">
                                <div>
                                    <span class="text-right">Rs. 1225.00</span>
                                </div>
                            </td>
                        </tr>
                        <tr class="cart_row border-bottom">
                            <td class="cart_proimg">
                                <div>
                                   <a href="./twelveblends.php"> <img class="cart__image" src="./assets/images/cart_cir_spice_box.png" style="cursor: pointer;"></a>
                                </div>
                            </td>
                            <td class="cart_proname pr-3 sm-text-left">
                                <div class="item_title">
                                    <span>	
                  Sheesham Wood Circular Spice Box With Floral Work (9 Compartments)</span>
                                </div>
                                <p class="sm-hide mb-0">
                                    <a href="#" class="mt-1 btn btn-outline-dark btn-sm">Remove</a>
                                </p>
                            </td>
                            <td class="cart_price">
                                <span>Rs. 3,225.00</span>
                            </td>
                            <td class="text-right sm-hide">
                                <div class="text-center">
                                    <input class="cart__qty-input" type="number" value="2" min="0" pattern="[0-9]*" data-quantity-item="3"> </div>
                            </td>
                            <td class="text-right sm-hide">
                                <div>
                                    <span class="text-right">Rs. 1225.00</span>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="container mt-5">
                    <div class="row text-right sm-text-center">
                        <div class="col-md-12">
                            <span class="h4">Subtotal</span>
                            <span class="cart__subtotal"><span>Rs. 8,400.00</span</span></span>
                        </div>
                        <div class="col-md-12 rte pt-1 h6 mb-5">Tax included and shipping calculated at checkout
                        </div>
                        <div class="col-md-12 cart_submit-controls">
                            <a href="./spiceboxes.php" class="btn btn-sec cart_submit-control cart_continue sm-hide hvr-icon-back" style="font-size: 16px;">
                                <i class="fa fa-arrow-left hvr-icon h4">&nbsp;&nbsp;</i> Continue shopping
                            </a>
                            <a href="#" type="submit" name="update" class="btn sm-hide btn-sec cart_submit-control" value="" style="font-size: 16px;">Update</a>
                           <a href="./cart_infopage.php" type="submit" name="checkout" class="btn btn--secondary cart__submit cart_submit-control" value="" style="font-size: 16px;">Check out</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </section>
    <section>
        <div class="container">
            <p class="font-weight-bolder " style="font-size: x-large;">Frequently Bought Together</p>
            <div class="card border-0">
                <div class="card-body text-center  border-0">
                    <div class="center">
                        <div class="card mx-3 p-0" style="height: 460px;width: 284px;">
                            <div class="card-body p-0">
                                <img src="./assets/images/EL-005-614_A_1024x1024@2x.jpg" style="width: 100%;height: 50%;">
                                <p class="m-md-1 m-3"> "Coloured Fish" Handmade & Hand-Painted Garden Decorative Wall Hanging In Terracotta </p>
                                <span>Rs.700</span> <span class="text-muted " style="text-decoration: line-through;">Rs.1200</span>

                                <center>
                                    <p><a href="./cart.php" class="btn buynow-btn mb-2 mt-2 w-50 d-none d-lg-block d-md-block">ADD TO CART</a>
                                        <a href="./cart.php" class="btn buynow-btn mb-2 mt-2 w-100 d-block d-md-none">ADD TO CART</a></p>
                                </center>
                            </div>
                        </div>
                        <div class="card mx-3 p-0" style="height: 460px;width: 284px;">
                            <div class="card-body p-0">
                                <img src="./assets/images/EL-005-058_A_720x.jpg" style="width: 100%;height: 50%;">
                                <p class="m-md-1 m-3"> "Coloured Fish" Handmade & Hand-Painted Garden Decorative Wall Hanging In Terracotta </p>
                                <span>Rs.700</span> <span class="text-muted " style="text-decoration: line-through;">Rs.1200</span>
                                <center>
                                    <p><a href="./cart.php" class="btn buynow-btn mb-2 mt-2 w-50 d-none d-md-block">ADD TO CART</a>
                                        <a href="./cart.php" class="btn buynow-btn mb-2 mt-2 w-100 d-block d-md-none">ADD TO CART</a></p>
                                </center>
                            </div>
                        </div>
                        <div class="card mx-3 p-0" style="height: 460px;width: 284px;">
                            <div class="card-body p-0">
                                <img src="./assets/images/65_720x.png" style="width: 100%;height: 50%;">
                                <p class="m-md-1 m-3"> "Coloured Fish" Handmade & Hand-Painted Garden Decorative Wall Hanging In Terracotta </p>
                                <span>Rs.700</span> <span class="text-muted " style="text-decoration: line-through;">Rs.1200</span>
                                <center>
                                    <p><a href="./cart.php" class="btn buynow-btn mb-2 mt-2 w-50 d-none d-md-block">ADD TO CART</a>
                                        <a href="./cart.php" class="btn buynow-btn mb-2 mt-2 w-100 d-block d-md-none">ADD TO CART</a></p>
                                </center>
                            </div>
                        </div>
                        <div class="card mx-3 p-0" style="height: 460px;width: 284px;">
                            <div class="card-body p-0">
                                <img src="./assets/images//49_720x.png" style="width: 100%;height: 50%;">
                                <p class="m-md-1 m-3"> "Coloured Fish" Handmade & Hand-Painted Garden Decorative Wall Hanging In Terracotta </p>
                                <span>Rs.700</span> <span class="text-muted " style="text-decoration: line-through;">Rs.1200</span>
                                <center>
                                    <p><a href="./cart.php" class="btn buynow-btn mb-2 mt-2 w-50 d-none d-md-block">ADD TO CART</a>
                                        <a href="./cart.php" class="btn buynow-btn mb-2 mt-2 w-100 d-block d-md-none">ADD TO CART</a></p>
                                </center>
                            </div>
                        </div>
                        <div class="card mx-3 p-0" style="height: 460px;width: 284px;">
                            <div class="card-body p-0">
                                <img src="./assets/images/EL-005-058_A_720x.jpg" style="width: 100%;height: 50%;">
                                <p class="m-md-1 m-3"> "Coloured Fish" Handmade & Hand-Painted Garden Decorative Wall Hanging In Terracotta </p>
                                <span>Rs.700</span> <span class="text-muted " style="text-decoration: line-through;">Rs.1200</span>
                                <center>
                                    <p><a href="./cart.php" class="btn buynow-btn mb-2 mt-2 w-50 d-none d-md-block">ADD TO CART</a>
                                        <a href="./cart.php" class="btn buynow-btn mb-2 mt-2 w-100 d-block d-md-none">ADD TO CART</a></p>
                                </center>
                            </div>
                        </div>
                        <div class="card mx-3 p-0" style="height: 460px;width: 284px;">
                            <div class="card-body p-0">
                                <img src="./assets/images/49_720x.png" style="width: 100%;height: 50%;">
                                <p class="m-md-1 m-3"> "Coloured Fish" Handmade & Hand-Painted Garden Decorative Wall Hanging In Terracotta </p>
                                <span>Rs.700</span> <span class="text-muted " style="text-decoration: line-through;">Rs.1200</span>
                                <center>
                                    <p><a href="./cart.php" class="btn buynow-btn mb-2 mt-2 w-50 d-none d-md-block">ADD TO CART</a>
                                        <a href="./cart.php" class="btn buynow-btn mb-2 mt-2 w-100 d-block d-md-none">ADD TO CART</a></p>
                                </center>
                            </div>
                        </div>
                        <div class="card mx-3 p-0" style="height: 460px;width: 284px;">
                            <div class="card-body p-0">
                                <img src="./assets/images/EL-005-614_A_1024x1024@2x.jpg" style="width: 100%;height: 50%;">
                                <p class="m-md-1 m-3"> "Coloured Fish" Handmade & Hand-Painted Garden Decorative Wall Hanging In Terracotta </p>
                                <span>Rs.700</span> <span class="text-muted " style="text-decoration: line-through;">Rs.1200</span>
                                <center>
                                    <p><a href="./cart.php" class="btn buynow-btn mb-2 mt-2 w-50 d-none d-md-block">ADD TO CART</a>
                                        <a href="./cart.php" class="btn buynow-btn mb-2 mt-2 w-100 d-block d-md-none">ADD TO CART</a></p>
                                </center>
                            </div>
                        </div>
                        <div class="card mx-3 p-0" style="height: 460px;width: 284px;">
                            <div class="card-body p-0">
                                <img src="./assets/images/EL-005-614_A_1024x1024@2x.jpg" style="width: 100%;height: 50%;">
                                <p class="m-md-1 m-3"> "Coloured Fish" Handmade & Hand-Painted Garden Decorative Wall Hanging In Terracotta </p>
                                <span>Rs.700</span> <span class="text-muted " style="text-decoration: line-through;">Rs.1200</span>
                                <center>
                                    <p><a href="./cart.php" class="btn buynow-btn mb-2 mt-2 w-50 d-none d-md-block">ADD TO CART</a>
                                        <a href="./cart.php" class="btn buynow-btn mb-2 mt-2 w-100 d-block d-md-none">ADD TO CART</a></p>
                                </center>
                            </div>
                        </div>
                        <div class="card mx-3 p-0" style="height: 460px;width: 284px;">
                            <div class="card-body p-0">
                                <img src="./assets/images/49_720x.png" style="width: 100%;height: 50%;">
                                <p class="m-md-1 m-3"> "Coloured Fish" Handmade & Hand-Painted Garden Decorative Wall Hanging In Terracotta </p>
                                <span>Rs.700</span> <span class="text-muted " style="text-decoration: line-through;">Rs.1200</span>
                                <center>
                                    <p><a href="./cart.php" class="btn buynow-btn mb-2 mt-2 w-50 d-none d-md-block">ADD TO CART</a>
                                        <a href="./cart.php" class="btn buynow-btn mb-2 mt-2 w-100 d-block d-md-none">ADD TO CART</a></p>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

<?php include './includes/footera.php'?>