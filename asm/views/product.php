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
                <div class="heading headline">Category Name</div>
                <div class="row">

                    <?php
                        foreach ($sanpham as $key ) { ?>
                              <div class="col">
                        <a href="/chitietsp?$id=<?= $key['id'] ?>">
                            <img src="../views/images/ipho.png" alt="<?= $key['hinh'] ?>">
                            <div class="product-name">
                                <h4><?= $key['tenhh'] ?>:</h4>
                            </div>
                            <div class="price">
                                <?= number_format( $key['gia'] ) ?> <u>đ</u>
                            </div>
                        </a>
                    </div>


                     <?php   }
                    ?>

                  

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