<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>taptap.com</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/6f3e2743ef.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/cart.css">
</head>
<body>
    
    <header style="overflow-x: hidden;">
        <div class="my-nav">
            <nav class="container navbar navbar-expand-sm fixed-top">
                <a class="navbar-brand" href="#">
                    <h1>TapTap</h1>
                </a>
                <form autocomplete="off" class="form-inline" id="searchProduct" action="search-result.php" method="POST">
                    <div class="auto-hint">
                        <input id="searchInput" name="product-name" class="form-control mr-sm-2" type="text" placeholder="Tìm gì đó..">
                    </div>
                    <input id="btnSearch" class="btn btn-success" type="submit" value="Tìm">
                </form>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapseNav">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                </button>
                
                <div class="collapse navbar-collapse" id="collapseNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="cart.php">Giỏ hàng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactus.html">Liên hệ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="product-history.html">Lịch sử</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Đăng nhập</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="large-brand">
            <div class="row justify-content-around">
                <div class="col-md-5">
                    <div class="logo">
                        <a href="home.html"><img src="logo.png" alt="taptap.com"></a>
                    </div>
                </div>
                <div class="col-md-5" style="position: relative;">
                    <div class="cart">
                        <a href="cart.php">Giỏ hàng - <span id="productCount">3</span> Sản phảm</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-nav-lg">
            <nav class="navbar navbar-expand-sm">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="home.html">trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="product.html">sản phẩm</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="cart.php">giỏ hàng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">hot</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">danh mục</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container">
        <h1 class="my-4">Giỏ hàng của bạn</h1>
        <div class="cart-container p-3">
            <div class="row p-2 mx-auto">
                <div class="col-sm-2">
                    <div class="cart-product-icon">
                        <img class="fit-img" src="product-img/asus-zenfone-max-pro-m1.jpg" alt="">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="cart-product-name">
                        <h4>Asus zenfone MAX Pro m1</h4>
                        <p class="single-price">5900000</p>
                        <p class="stock-check">
                            <span><i class="fas fa-check"></i></span>
                            Còn hàng
                        </p>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="product-quantity d-flex">
                        <form action="">
                            <input class="form-control" type="number" min="0" value="1">
                        </form>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="total-price d-flex">
                        <p class="h5">
                            5900000
                        </p>
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="delete-item d-flex">
                        <div class="delete-item-btn">
                            <p>
                                <span><i class="fas fa-times-circle"></i></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row p-2 mx-auto">
                <div class="col-sm-2">
                    <div class="cart-product-icon">
                        <img class="fit-img" src="product-img/galaxy-note-10-plus.jpg" alt="">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="cart-product-name">
                        <h4>Samsung Galaxy Note 10 Plus</h4>
                        <p class="single-price">17000000</p>
                        <p class="stock-check">
                            <span><i class="fas fa-check"></i></span>
                            Còn hàng
                        </p>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="product-quantity d-flex">
                        <form action="">
                            <input class="form-control" type="number" min="0" value="1">
                        </form>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="total-price d-flex">
                        <p class="h5">
                            17000000
                        </p>
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="delete-item d-flex">
                        <div class="delete-item-btn">
                            <p>
                                <span><i class="fas fa-times-circle"></i></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row p-2 mx-auto">
                <div class="col-sm-2">
                    <div class="cart-product-icon">
                        <img class="fit-img" src="product-img/oppo-a5-2020.png" alt="">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="cart-product-name">
                        <h4>Oppo A5 2020</h4>
                        <p class="single-price">4490000</p>
                        <p class="stock-check">
                            <span><i class="fas fa-check"></i></span>
                            Còn hàng
                        </p>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="product-quantity d-flex">
                        <form action="">
                            <input class="form-control" type="number" min="0" value="1">
                        </form>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="total-price d-flex">
                        <p class="h5">
                            4490000
                        </p>
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="delete-item d-flex">
                        <div class="delete-item-btn">
                            <p>
                                <span><i class="fas fa-times-circle"></i></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cart-footer">
            <div class="Update-cart d-flex justify-content-end my-4 p-1">
                <a href="product.html">
                    Tiếp tục mua sắm
                </a>
                <button onclick="window.location.reload();" id="updateCart">
                    Cập nhật giỏ
                    <span>
                        <i class="fas fa-redo-alt"></i>
                    </span>
                </button>
            </div>
            <div class="cart-check-out my-5">
                <div class="row">
                    <div class="col-sm-7">
                        <p>Thêm ghi chú vào đơn hàng</p>
                        <textarea name="order-note" id="order-note"></textarea>
                    </div>
                    <div class="col-sm-5">
                        <div class="pay-methods">
                            <p class="h5 text-center">Tổng cộng: <span id="total-price">27390000</span> đồng</p>
                            <p class="text-center font-italic">Thanh toán ngay</p>
                            <form action="" class="customer-info mb-3">
                                <div class="form-group">
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="gender" value="male">Anh
                                        </label>
                                      </div>
                                      <div class="form-check-inline">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="gender" value="female">Chị
                                        </label>
                                      </div>
                                </div>
                               <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Họ và tên" required>
                               </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Số điện thoại" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email" required>
                                </div>
                                <p class="h6">Địa chỉ:</p>
                                <div class="form-group">
                                    <label for="provinces">Chọn tỉnh thành:</label>
                                    <select name="provinces" id="provinces" class="form-control">
                                        <option value="hcm">Tp. Hồ Chí Minh</option>
                                        <option value="hn">Hà Nội</option>
                                        <option value="dn">Đà Nẵng</option>
                                        <option value="hp">Hải Phòng</option>
                                        <option value="dklk">Đăk Lăk</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Quận, huyện" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phường, xã" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Tên đường, số nhà" required>
                                </div>
                            </form>
                            <p class="text-center">
                                <button class="check-out">
                                    <span><i class="fas fa-cash-register"></i></span>
                                    Thanh Toán
                                </button>
                                <p class="small text-center">Bạn có thể chọn phương thức thanh toán sau</p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="mt-5 p-4">
        <section class="row">
            <div class="col-sm-3">
                <p class="font-weight-bold" style="color: #fff;">
                    Taptap.com
                </p>
                <p>
                    TapTap.com là nhà phân phối lẻ các sản phẩm smartphone chính hãng, giá rẻ và ưu đãi đến người dùng. Chúng tôi luôn ưu tiên trải nghiểm của khách hàng lên hàng đầu. Mọi thắc mắc xin liên hệ chúng tôi qua email <a class="font-weight-bold" href="mailto:taptapstore@gmail.com.vn">taptapstore@gmail.com.vn</a> <br>
                    Chúc các bản có trải nghiệm tốt!
                </p>
                <div class="social-contact">
                    <ul>
                        <li>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <p class="bold">Tìm cửa hàng</p>
                <p><a href="#">Hà Nội</a></p>
                <p><a href="#">Đà Nẵng</a></p>
                <p><a href="#">Tp. Hồ Chí Minh</a></p>
                <p><a href="#">Mua Hàng Từ Xa</a></p>
                <div class="pay-method">
                    <p>Phương thức thanh toán</p>
                    <div class="container">
                        <div class="row">
                            <div class="col-3">
                                <div class="pay-method-icon">
                                    <img class="fit-img" src="image/method-atm.jpg" alt="atm">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="pay-method-icon">
                                    <img class="fit-img" src="image/metheod-momo.png" alt="atm">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="pay-method-icon">
                                    <img class="fit-img" src="image/method-visa.jpg" alt="atm">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="pay-method-icon">
                                    <img class="fit-img" src="image/method-paypal.png" alt="atm">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <p>Gọi mua hàng: <span class="font-weight-bold text-danger">987654321</span> (8h00 - 22h00) </p>
                <p>Gọi khiếu nại: <span class="font-weight-bold text-danger">987654321</span> (8h00 - 21h00) </p>
                <p>Gọi bảo hành: <span class="font-weight-bold text-danger">987654321</span> (8h00-22h00) </p>
                <div class="contact-form">
                    <p>Đăng ký nhận tin khuyến mại</p>
                    <form action="#" class="form-inline">
                        <input class="input-group" type="email" placeholder="Email">
                        <input class="btn-primary" type="submit" value="Đăng ký">
                    </form>
                </div>
            </div>
            <div class="col-sm-3">
                <p>
                    <a href="#">Mua hàng online</a>
                </p>
                <p><a href="#">Mua trả góp</a></p>
                <p><a href="#">Tra thông tin bảo hành</a></p>
                <p><a href="#">Chính sách sử dụng</a></p>
                <p><a href="#">Chính sách bảo hành</a></p>
            </div>
        </section>
    </footer>

    <!--JQuery-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.js" integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <!--Script-->
    <script src="script/hint.js"></script>
    <!-- <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
    })
    </script> -->
</body>
</html>