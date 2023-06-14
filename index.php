<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commerch</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="res/css/index.css">
</head>

<body>
    <nav>
        <div class="commerch-navbar-logo">
            <a href="#">
                <img src="res/HDLogo.png" alt="Commerch Logo">
            </a>
        </div>
        <form class="commerch-navbar-search">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fas fa-search"></i></button>
        </form>
        <div class="commerch-navbar-cart">
            <a href="#"><i class="fas fa-shopping-cart"></i></a>
            <div class="commerch-navbar-cart-count">0</div>
        </div>
        <div class="commerch-navbar-access">
            <a href="#">Login</a>
            <a href="#">Signup</a>
            <a href="#" id="user-dropdown-btn"><i class="fas fa-user"></i></a>
            <div class="user-dropdown-content">
                <a href="#">Profile</a>
                <a href="#">Settings</a>
                <a href="#">Logout</a>
                <a href="#">Help</a>

            </div>
        </div>

    </nav>

    <main>
        <div class="commerch-carousel">

            <div class="commerch-carousel-item">
                <img src="res/HDLogo.png" alt="Image 1">
            </div>
            <div class="commerch-carousel-item">
                <img src="https://images.pexels.com/photos/14641274/pexels-photo-14641274.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    alt="Image 2">
            </div>
            <div class="commerch-carousel-item">
                <img src="https://images.pexels.com/photos/380954/pexels-photo-380954.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    alt="Image 3">
            </div>
            <div class="commerch-carousel-item">
                <img src="https://images.pexels.com/photos/335257/pexels-photo-335257.jpeg?auto=compress&cs=tinysrgb&w=600"
                    alt="Image 4">
            </div>

            <div class="commerch-carousel-arrows">
                <span class="arrow left">&lt;</span>
                <span class="arrow right">&gt;</span>
            </div>

            <div class="commerch-carousel-dots">

            </div>
        </div>
        <!-- Categories -->
        <div class="commerch-categories">
            <div class="commerch-category-header">
                <h3>Categories</h3>
                <hr>
            </div>
            <div class="commerch-categories-wrapper">
                <div class="commerch-categories-content">
                    <a href="#">
                        <div class="commerch-category-item">
                            <img src="https://pluspng.com/img-png/tshirt-png-black-t-shirt-png-transparent-image-2050.png"
                                alt="Shirt">
                            <h3>Shirt</h3>
                        </div>
                    </a>
                    <a href="#">
                        <div class="commerch-category-item">
                            <img src="https://www.pngall.com/wp-content/uploads/5/Pant-PNG-Free-Download.png"
                                alt="Pants">
                            <h3>Pants</h3>
                        </div>
                    </a>
                    <a href="#">
                        <div class="commerch-category-item">
                            <img src="https://www.pngarts.com/files/4/Fashion-Accessory-Download-Transparent-PNG-Image.png"
                                alt="Accessories">
                            <h3>Accessories</h3>
                        </div>
                    </a>
                    <a href="#">
                        <div class="commerch-category-item">
                            <img src="https://www.pngarts.com/files/1/School-Bag-PNG-Picture.png" alt="Bags">
                            <h3>Bags</h3>
                        </div>
                    </a>
                    <a href="#">
                        <div class="commerch-category-item">
                            <img src="https://www.pngmart.com/files/7/Mug-PNG-Image.png" alt="Mugs">
                            <h3>Mugs</h3>
                        </div>
                    </a>
                    <a href="#">
                        <div class="commerch-category-item">
                            <img src="https://clipart-library.com/images_k/sale-transparent-background/sale-transparent-background-23.png"
                                alt="On Sale">
                            <h3>On Sale</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>


        <div class="commerch-daily">
            <div class="commerch-daily-header">
                <h3>Daily Discovery</h3>
                <hr>
            </div>
            <div class="commerch-daily-wrapper">
                <div class="commerch-daily-content">
                    <div class="product">
                        <div class="productImage">
                            <img src="https://freepngimg.com/thumb/suit/2-suit-png-image.png" alt="Product Image">
                        </div>
                        <h3 class="product-name">Black Suit</h3>
                        <p class="sale-text">Sale</p>
                        <div class="price-section">
                            <p><strong>₱0</strong></p>
                            <p><strong>0 </strong>Sold</p>
                        </div>
                    </div>
                    <div class="product">
                        <div class="productImage">
                            <img src="https://freepngimg.com/thumb/suit/2-suit-png-image.png" alt="Product Image">
                        </div>
                        <h3 class="product-name">Black Suit</h3>
                        <p class="sale-text">Sale</p>
                        <div class="price-section">
                            <p><strong>₱0</strong></p>
                            <p><strong>0 </strong>Sold</p>
                        </div>
                    </div>
                    <div class="product">
                        <div class="productImage">
                            <img src="https://freepngimg.com/thumb/suit/2-suit-png-image.png" alt="Product Image">
                        </div>
                        <h3 class="product-name">Black Suit</h3>
                        <p class="sale-text">Sale</p>
                        <div class="price-section">
                            <p><strong>₱0</strong></p>
                            <p><strong>0 </strong>Sold</p>
                        </div>
                    </div>
                    <div class="product">
                        <div class="productImage">
                            <img src="https://freepngimg.com/thumb/suit/2-suit-png-image.png" alt="Product Image">
                        </div>
                        <h3 class="product-name">Black Suit</h3>
                        <p class="sale-text">Sale</p>
                        <div class="price-section">
                            <p><strong>₱0</strong></p>
                            <p><strong>0 </strong>Sold</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>





    </main>

    <h1>Welcome to Commerch</h1>
    <p>Work in progress... coming soon.</p>

    <footer>

        <div class="commerch-footer-content">
            <div class="footer-left">
                <p>&copy; COMMERCH. All Right Reserved</p>
            </div>
            <div class="commerch-footer-right">
                <ul>
                    <li>Follow Us: <a href="https://github.com/Louie-Jay"><img
                                src="https://avatars.githubusercontent.com/u/92704954?s=48&v=4" alt="GithubAvatar.png"
                                title="Github Account:Louie-Jay"></a>
                        <a href="https://github.com/ryusaplad"><img
                                src="https://avatars.githubusercontent.com/u/37370852?v=4" alt="GithubAvatar.png"
                                title="Github Account:ryusaplad"></a>
                    </li>
                    <li id="aboutus"><a href="#">About Us</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="res/js/carousel.js"></script>
    <script type="text/javascript" src="">
        document.getElementById("user-dropdown-btn").addEventListener("click", function () {
            var dropdownContent = this.nextElementSibling;
            dropdownContent.style.display = (dropdownContent.style.display === "block") ? "none" : "block";
        });

    </script>
</body>

</html>