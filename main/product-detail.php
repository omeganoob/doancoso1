<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ringring.com</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/6f3e2743ef.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/footer.css">
    <style>
        .product-img {
            width: 100%;
            height: 450px;
            border: 1px solid var(--silver);
            padding: .5em;
        }
        .product-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .product-details h1 {
            color: #666;
        }
        .checked {
            color: var(--yellow);
        }
        .price {
            color: crimson;
        }
        .stars input {
            position: absolute;
            left: -999999px;
        }

        .stars a {
            display: inline-block;
            padding-right:4px;
            text-decoration: none;
            margin:0;
        }

        .stars a:after {
            position: relative;
            font-size: 18px;
            font-family: 'FontAwesome', serif;
            display: block;
            content: "\f005";
            color: #000;
        }

        .rating {
            font-size: 0; /* trick to remove inline-element's margin */
        }

        .stars a:hover ~ a:after{
            color: #222 !important;
        }
        .rating.active a.active ~ a:after{
            color: #222;
        }

        .rating:hover a:after{
            color: var(--yellow) !important;
        }

        .rating.active a:after,
        .stars a.active:after{
            color: var(--yellow);
        }
        .your-rate {
            color: var(--green);
        }
        #comment {
            padding: 0.8em;
            width: 100%; 
            height: auto;
            resize: none;
        }
        .comments {
            background-color: #eee;
            padding: 0.5em;
        }
        .comments:after {
            content:"";
            display:block;
            width:100%;
            clear:both;
        }
        .comments p {
            margin: 0;
            margin-left: 2em;
            padding: 0;
        }
        .comments p.small {
            color: var(--green);
        }
        .related-product {
            height: 150px;
            width: 100%;
        }
        .related-product p {
            font-size: 14px;
            font-weight: 500;
        }
        .btn-add, .btn-compare {
            margin: 0 .2em;
            font-size: 18px;
            font-weight: bold;
            color: #eee;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, .3);
            border: none;
            padding: 0.5em 2em;
            background: var(--green);
        }
        .btn-compare {
            background: var(--red);
        }
        table {
            width: 100%;
        }
        tr {
        }
        th,td {
            padding: .5em;
            color: #333;
        }
    </style>
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
                            <a class="nav-link" href="cartdemo.html">Giỏ hàng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactus.html">Liên hệ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="product-history.html">Lịch sử</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.html">Đăng nhập</a>
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
                        <a href="cartdemo.html">Giỏ hàng - <span id="productCount">3</span> Sản phảm</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-nav-lg">
            <nav class="navbar navbar-expand-sm">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="home.html">trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="product.html">sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cartdemo.html">giỏ hàng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="hit-product.html">hot</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">danh mục</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <?php 
        $products = array (
            array("opoa520","Oppo A5 2020","product-img/oppo-a5-2020.png",4490,"product-detail-text/opoa520.txt"),
            array("opoa920","Oppo A9 2020","product-img/oppo-a9-2020.jpg",5500,"product-detail-text/opoa920.txt"),
            array("sgn10p","Galaxy Note 10 Plus","product-img/galaxy-note-10-plus.jpg",17000,"product-detail-text/sgn10p.txt"),
            array("zfmp1","Asus Zenfone max pro m1","product-img/asus-zenfone-max-pro-m1.jpg",5900,"product-detail-text/zfmp1.txt"),
            array("zfmp2","Asus Zenfone max pro m2","product-img/asus-zenfone-max-pro-m2.jpg",6900,"product-detail-text/zfmp2.txt"),
            array("bpb86","Bphone B86","product-img/bphone-b86.png",12000,"product-detail-text/bpb86.txt"),
            array("ip11p","Iphone 11 pro","product-img/iphone-11-pro.jpg",12000,"product-detail-text/ip11p.txt"),
            array("rme2p","Realme 2 pro","product-img/realme-2-pro.jpg",12000,"produtc-detail-text/rme2p.txt"),
            array("hwn3i","Huawei Nova 3i","product-img/huawei-nova-3i.jpg",7000,"product-detail-text/hwn3i.txt"),
            array("mixaomn10l","Xiaomi mi note 10 lite","product-img/xiaomi-mi-note-10-lite.jpg",9900,"product-detail-text/mixaomn10l.txt"),
            array("mixaorn9","Xiaomi redmi note 9","product-img/xiaomi-redmi-note-9.jpg",4900,"product-detail-text/mixaorn9.txt"),
        );

        $product_id = $_REQUEST["id"];
        $product_name = "";
        $product_img = "";
        $product_price = 0;
        $product_detail = "";

        for($row = 0; $row < count($products); $row++) {
            if(strcmp($product_id, $products[$row][0]) == 0) {
                $product_name = $products[$row][1];
                $product_img = $products[$row][2];
                $product_price = $products[$row][3]*1000;
                $product_detail = $products[$row][4];
            }
        }

    ?>

    <main>
        <section class="container">
            <div class="row my-3">
                <div class="col-md-5">
                    <div class="product-img">
                        <img src=" <?php echo $product_img ?>" alt="product">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="product-details">
                        <h1> <?php echo $product_name ?> </h1>
                        <div class="rating-stars">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                        <h3 class="price">
                            <?php echo $product_price ?>đ
                        </h3>
                    </div>
                    <div id="details-text">

                    </div>
                    <div class="d-flex justify-content-center mt-2">
                        <button onclick="window.alert('Đã thêm <?php echo $product_name?>')" class="btn-add">Thêm vào giỏ hàng</button>
                        <button onclick="window.open('compare.html')" class="btn-compare">So sánh</button>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-5">
                    <h5>Sản phẩm tương tự</h5>
                    <div class="row">
                        <div class="col-4">
                            <div class="related-product">
                                <div class="related-product-icon">
                                <a href="product-detail.php?id=zfmp2"><img class="fit-img" src="product-img/asus-zenfone-max-pro-m2.jpg" alt=""></a>
                                </div>
                                <p>Zenfone max pro m2 <span class="text-danger">6.900.000</span></p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="related-product">
                                <div class="related-product-icon">
                                <a href="product-detail.php?id=rme2p"><img class="fit-img" src="product-img/realme-2-pro.jpg" alt=""></a>
                                </div>
                                <p>Realme 2 Pro <span class="text-danger">6.900.000</span></p>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="related-product">
                                <div class="related-product-icon">
                                <a href="product-detail.php?id=opoa520"><img class="fit-img" src="product-img/oppo-a5-2020.png" alt=""></a>
                                </div>
                                <p>Oppo A5 2020 <span class="text-danger">4.490.000</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col-sm-5">
                        <h4 class="your-rate">Đánh giá của bạn</h4>
                        <p class="stars" id="starts">
                            <span class="rating">
                                <a class="star-1" href="#starts">1</a>
                                <a class="star-2" href="#starts">2</a>
                                <a class="star-3" href="#starts">3</a>
                                <a class="star-4" href="#starts">4</a>
                                <a class="star-5" href="#starts">5</a>
                            </span>
                        </p>
                        </div>
                        <div class="col-sm-7">
                        <textarea name="comment" id="comment" ></textarea>
                        <button id="comment-submit" class="btn btn-warning mt-2">Đăng</button>
                        <hr>
                        </div>
                        <div class="col-sm-5"></div>
                        <div class="col-sm-7">
                            <div id="comment-section">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
    <script>
        $(document).ready(function() {
            $.ajax({
                url: "<?php echo $product_detail ?>",
                success: function(result) {
                    $('#details-text').html(result);
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.stars a').on('click',function(){
                $('.stars span,.stars a').removeClass('active');

                $(this).addClass('active');
                $('.stars span').addClass('active');
            });

            $('#comment-submit').click(function() {
                var cmt = $('#comment').val();
                var d = new Date();
                var strdate = d.getDate() + "/" + (d.getMonth()+1)  + "/" + d.getFullYear();
                $('#comment-section').append("<div class='comments'> <h5>Khách hàng:</h5> <p>"+cmt+"</p><p class='small float-right'>("+strdate+")</div>");
            });
        });
    </script>
</body>
</html>