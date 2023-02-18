<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop online</title>
    <link rel="stylesheet" href="../views/css/style.css">
</head>

<body>
    <div class="container">
        <header>
            <div class="logo">
                <h2>SHOP ONLINE</h2>
            </div>
            <div class="search">
                <form action="">
                    <input type="search" name="keyword" id="" placeholder="iphone">
                    <button>Tìm kiếm</button>
                </form>
            </div>

        </header>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/sanpham">sanpham</a></li>
                <li>
                    <a href="#">Liên hệ</a>
                </li>
                <li>
                    <a href="#">Dịch vụ</a>
                </li>
                <li>
                    <a href="#">Khuyến mại</a>
                </li>
            </ul>
        </nav>
        <article>
            <div class="content">
                
                <?php  foreach ($sanpham as $chitiet); ?>
                <div class="heading headline"><?= $chitiet['tenhh'] ?></div>
                <div class="row-detail">
                    <div class="col-6">
                        <div class="thumb">
                            <img src="data:image/jpeg;base64,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" alt="">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="price-detail">
                            <span class="price-new"><?= $chitiet['gia'] ?><u>đ</u></span> 
                            Giá niêm yết: <span class="price-old">16,900,000 <u>đ</u></span> 
                        </div>
                    </div>
                </div>
                <div class="detail">
                   <?= $chitiet['mota'] ?>
                <div class="heading headline">Sản phẩm cùng loại</div>
                <div class="row">
                    <div class="col">
                        <a href="#">
                            <img src="../views/images/iphone.png" alt="">
                            <div class="product-name">
                                <h4>Samsung Galaxy A50s - Chính hãng</h4>
                            </div>
                            <div class="price">
                                7000000 <u>đ</u>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">
                            <img src="images/iphone.jfif" alt="">
                            <div class="product-name">
                                <h4>Iphone 11 Pro Max</h4>
                            </div>
                            <div class="price">
                                27000000 <u>đ</u>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">
                            <img src="images/anh1.jfif" alt="">
                            <div class="product-name">
                                <h4>Apple iPad Mini 5 - Wifi - 64GB - Chính hãng</h4>
                            </div>
                            <div class="price">
                                7000000 <u>đ</u>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
            <aside>
                <div class="panel">
                    <div class="heading">TÀI KHOẢN</div>
                    <div class="form">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="username">
                                    Tên đăng nhập
                                </label> <input type="text" name="username" id="username" placeholder="username">
                            </div>
                            <div class="form-group">
                                <label for="password">
                                    Mật khẩu
                                </label> <input type="text" name="password" id="password" placeholder="password">
                            </div>
                            <button class="btn">Đăng nhập</button>
                        </form>
                    </div>
                </div>
                <div class="panel">
                    <div class="heading">DANH MỤC SẢN PHẨM</div>
                    <div class="list">
                        <ul>
                            <li><a href="#">Sản phẩm 1</a></li>
                            <li><a href="#">Sản phẩm 2</a></li>
                            <li><a href="#">Sản phẩm 3</a></li>
                            <li><a href="#">Sản phẩm 4</a></li>
                            <li><a href="#">Sản phẩm 5</a></li>
                            <li><a href="#">Sản phẩm 6</a></li>
                        </ul>
                    </div>
                </div>
            </aside>
        </article>
        <footer>
            <h3>&copy Copy All rights reserved 2021 - Copyright by h Shop online</h3>
        </footer>
    </div>
</body>

</html>