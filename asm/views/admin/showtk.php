<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>QUẢN LÝ TÀI KHOẢN</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="container mx-auto max-width-7xl p-4  ">
    <header class="py-4 m-auto">
            
            <h1 class="text-[32px] px-2 text-green-700 bg-green-200">SIÊU THỊ TRỰC TUYẾN</h1>

            <div class="menu my-4 bg-black">
                <ul class="flex gap-8 px-2 p-4">
                <li class="text-white"><a href="../admin.php">Quản lý </a></li>
                   <li class="text-white"><a href="./trangchu.php">trang chu </a></li>
                    <li class="text-white"><a href="../view/show_loaihang.php">List loại hàng</a></li>
                    <li class="text-white"><a href="../view/show_sp.php"> List sản phẩm</a></li>
                    <li class="text-white"><a href="../view/show_tk.php">List tài khoản</a></li>
                </ul>
            </div>

        </header>  

        <table class="w-full border ">
                    <tr>
                        <th class="text-center border-2" >mã khách hàng</th>
                        <th class="text-center border-2" >tên khách hàng </th>
                        <th class="text-center border-2" >password</th>
                        <th class="text-center border-2" >image</th>
                        <th class="text-center border-2" >email</th>
                        <th class="text-center border-2" >chức năng </th>
                    </tr>
                    <?php 
                 
                        foreach ($tk as $row) { ?> 
                            <tr>
                                <td class="text-center border-2" > <?php   echo $row['id']     ?>  </td>
                                <td class="text-center border-2" > <?php   echo $row['fullname']     ?>  </td>
                                <td class="text-center border-2" > <?php   echo $row['username']     ?>  </td>
                                <td class="text-center border-2" > <?php   echo $row['password']     ?>  </td>
                                <td class="text-center border-2" > <?php   echo $row['email']     ?>  </td>
                                <td class="text-center border-2" >
                                    <a class="text-center border-2 w-[50px] ">sửa</a>
                                    <a class="text-center border-2 w-[50px]" href="/admin/deletetk?id=<?= $row['id'] ?>" >xóa</a>
                                </td>
                            </tr>

                        <?php   }?>
        </table>
  </div>
  <footer class="bg-black">
                            <p class="text-white text-[20px] text-center"> Assignment </p>
                            <p class="text-white text-[20px] text-center">Nguyễn Hữu Trọng Nhph21822</p>
    </footer>
</body>
</html>