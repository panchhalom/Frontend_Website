<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Om Coffee</title>
</head>

<body>
    <header>
        <div class="logo">
            <a href="#">Om <span>Coffee</span></a>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#shop">Shop</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="login.php">login</a></li>
                <li><a href="signup.php">signup</a></li>
            </ul>
        </nav>
    </header>

    <div class="content">
        <h2>Om Coffee</h2>
        <p>Would you like to start the day with a nice coffee?</p>
    </div>

    <div class="menu" id="menu">
        <div class="menu-header">
            <h3>Menu</h3>
            <h4>Om Coffee Menu</h4>
        </div>
        <div class="menu-content">
            <div class="hot-coffees">
                <div class="hot-coffees-image">
                    <img src="img/hot-coffees.jpg" alt="">
                </div>
                <div class="hot-coffees-body">
                    <h2>Hot Coffees</h2>
                    <label>Hot coffee steams, invigoratingly aromatic, satisfyingly robust, comforting, and revitalizing.</label>
                </div>
            </div>
            <div class="cold-coffees">
                <div class="cold-coffees-image">
                    <img src="img/cold-coffees.jpg" alt="">
                </div>
                <div class="cold-coffees-body">
                    <h2>Cold Coffees</h2>
                    <label>Cold coffee chills, refreshingly invigorating, subtly sweet, smooth, satisfying, and revitalizing.</label>
                </div>
            </div>
            <div class="frappucino-coffees">
                <div class="frappucino-coffees-image">
                    <img src="img/frappuccino.jpg" alt="">
                </div>
                <div class="frappucino-coffees-body">
                    <h2>Frappucino Coffees</h2>
                    <label>Frappuccino-coffees blend, irresistibly creamy, decadently sweet, indulgent, satisfying, and energizing</label>
                </div>
            </div>
        </div>
    </div>

    <div class="shop" id="shop">
        <div class="shop-header">
            <h3>Shop</h3>
            <h4>Om Coffee Drinks</h4>
        </div>
        <div class="shop-box">
            <div class="item-1">
                <div class="card">
                    <div class="card-image">
                        <img src="img/caramel-macchiato.jpg">
                    </div>
                    <div class="card-body">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half"></i>
                        <label class="cash">₹499</label>
                        <h3>Caramel Macchiato</h3>
                        <label>Caramel Macchiato swirls, decadently sweet, velvety smooth, indulgent, satisfying, and invigorating</label>
                        <button class="add-to-cart" onclick="addToCart('Caramel Macchiato', 499)">Add to Cart</button> <!-- Add to Cart button -->
                    </div>
                </div>
            </div>
            <div class="item-2">
                <div class="card">
                    <div class="card-image">
                        <img src="img/flat-white.png">
                    </div>
                    <div class="card-body">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <label class="cash">₹429</label>
                        <h3>Flat White</h3>
                        <label>Flat White coffee boasts, elegantly velvety, subtly bold, creamy, satisfying, and comforting.</label>
                        <button class="add-to-cart" onclick="addToCart('Flat White', 429)">Add to Cart</button> <!-- Add to Cart button -->
                    </div>
                </div>
            </div>
            <!-- Add other coffee items similarly -->
            <div class="item-3">
                <div class="card">
                    <div class="card-image">
                        <img src="img/chocolate-frappuccino.png">
                    </div>
                    <div class="card-body">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half"></i>
                        <label class="cash">₹379</label>
                        <h3>Chocolate Frappucino</h3>
                        <label>Chocolate Frappuccino swirls, luxuriously creamy, richly chocolatey, indulgent, satisfying, and refreshing.</label>
                        <button class="add-to-cart" onclick="addToCart('Chocolate Frappucino', 379)">Add to Cart</button> <!-- Add to Cart button -->
                    </div>
                </div>
            </div>
            <div class="item-4">
                <div class="card">
                    <div class="card-image">
                        <img src="img/frappe.jpg">
                    </div>
                    <div class="card-body">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <label class="cash">₹549</label>
                        <h3>Frappe</h3>
                        <label>Frappe swirls, refreshingly creamy, ice-cold, indulgent, satisfying, and invigorating.</label>
                        <button class="add-to-cart" onclick="addToCart('Frappe', 549)">Add to Cart</button> <!-- Add to Cart button -->
                    </div>
                </div>
            </div>
            <div class="item-5">
                <div class="card">
                    <div class="card-image">
                        <img src="img/caffe-mocha.png">
                    </div>
                    <div class="card-body">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half"></i>
                        <label class="cash">₹649</label>
                        <h3>Caffe Mocha</h3>
                        <label>Caffe Mocha swirls, decadently chocolatey, richly indulgent, satisfying, comforting, and invigorating.</label>
                        <button class="add-to-cart" onclick="addToCart('Caffe Mocha', 649)">Add to Cart</button> <!-- Add to Cart button -->
                    </div>
                </div>
            </div>
            <div class="item-6">
                <div class="card">
                    <div class="card-image">
                        <img src="img/vanilla-frappuccino.jpg">
                    </div>
                    <div class="card-body">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <label class="cash">₹519</label>
                        <h3>Vanilla Frappucino</h3>
                        <label>Vanilla Frappuccino swirls, delightfully creamy, subtly sweet, indulgent, satisfying, and refreshing.</label>
                        <button class="add-to-cart" onclick="addToCart('Vanilla Frappucino', 519)">Add to Cart</button> <!-- Add to Cart button -->
                    </div>
                </div>
            </div>
            <div class="item-7">
                <div class="card">
                    <div class="card-image">
                        <img src="img/white-chocolate-mocha.jpg">
                    </div>
                    <div class="card-body">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half"></i>
                        <label class="cash">₹449</label>
                        <h3>White Chocolate Mocha</h3>
                        <label>White Chocolate Mocha swirls, decadently creamy, luxuriously sweet, indulgent, satisfying, and comforting.</label>
                        <button class="add-to-cart" onclick="addToCart('White Chocolate Mocha', 449)">Add to Cart</button> <!-- Add to Cart button -->
                    </div>
                </div>
            </div>
            <div class="item-8">
                <div class="card">
                    <div class="card-image">
                        <img src="img/ice-latte.jpg">
                    </div>
                    <div class="card-body">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <label class="cash">₹349</label>
                        <h3>Ice Latte</h3>
                        <label>Ice Latte swirls, refreshingly cool, subtly creamy, invigorating, satisfying, and revitalizing..</label>
                        <button class="add-to-cart" onclick="addToCart('Ice Latte', 349)">Add to Cart</button> <!-- Add to Cart button -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact" id="contact">
        <div class="contact-box">
            <div class="contact-image">
                <img src="img/bg-image.jpeg">
            </div>
        </div>
        <div class="contact-box">
            <div class="contact-body">
                <form action="cont.php" method="post">
                    <h2>Contact Us</h2>
                    <div class="form-content">
                        <input type="text" name="username" required>
                        <span></span>
                        <label>Username</label>
                    </div>
                    <div class="form-content">
                        <input type="email" name="email" required>
                        <span></span>
                        <label>Email</label>
                    </div>
                    <button type="submit" name="submit">Contact Us</button>
                </form>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="footer-box">
            <div class="social-media">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
            </div>
            <div class="copyright">
                <label>Copyright &copy; 2024</label>
            </div>
            <div class="brand">
                <label>Om <span>Coffee</span></label>
            </div>
        </div>
    </div>

    <div class="shop" id="shop2">
        <!-- Existing code -->
        <!-- Add to Cart Modal -->
        <div id="cartModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Cart</h2>
                <div id="cartItems">
                    <!-- Cart items will be dynamically added here -->
                </div>
                <button id="checkoutBtn">Checkout</button>
            </div>
        </div>
    </div>

    <script>
        function addToCart(itemName, itemPrice) {
            // You can implement the functionality here to add the item to the cart
            alert('Added ' + itemName + ' to cart. Price: ₹' + itemPrice);
        }
    </script>
    
</body>

</html>