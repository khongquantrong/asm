<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>thống kê hàng hóa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="container mx-auto max-width-7xl p-4  ">
    <header class="py-4 m-auto">
            
            <h1 class="text-[32px] px-2 text-green-700 bg-green-200">Show sản phẩm</h1>

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

    <table border = "1" class = "borde-2 w-full  ">
        <tr class = "border ">
            <th class = "gap-8 border-2">mã</th>
            <th class = "gap-8 border-2">tên</th>
            <th class = "gap-8 border-2">giá</th>
            <th class = "gap-8 border-2">khuyến mãi</th>
            <th class = "gap-8 border-2">hình</th>

            <th class = "gap-8 border-2">mô tả</th>
           
            <th class = "gap-8 border-2">  <a href="/admin/addsp"> <button class=" bg-red-500 w-full"> thêm mới</button> </a>  </th>
        </tr>
        <?php 
          
                foreach ($sanpham as $row) { ?>  
                   <tr>
                   <td class="border-2 text-center"> <?php echo $row['id'] ?>  </td>
                   <td class="border-2 text-center">  <?php echo $row['tenhh'] ?>  </td>
                   <td class="border-2 text-center">  <?php echo $row['gia'] ?>  </td>
                   <td class="border-2 text-center"> <?php echo $row['soluong'] ?>  </td>
                   <td class="border-2 text-center"> <img class="w-[100px] block m-auto" src="../control/imgs/<?php echo $row['hinh'] ?>" alt=" <?php echo $row['hinh'] ?>">  </td>

                   <td class="border-2 text-center">  <?php echo substr($row['mota'],0,50)  ?>  </td>
                   
                    <td class="border-2 text-center">
                        <a href="../control/fix_sp.php?id=<?php echo $row['id'] ?>">sửa</a>
                        <a onclick=" confirm('bạn chắc muốn xóa chứ???')"  href="/admin/delete?id=<?php echo $row['id'] ?>" >xóa</a>
                    </td>
                       
                   </tr>


                <?php } ?>

    </table>


</div>
<footer class="bg-black">
                            <p class="text-white text-[20px] text-center"> Dự án Mẫu Web </p>
                            <p class="text-white text-[20px] text-center">Nguyễn Hữu Trọng Nhph21822</p>
    </footer>
</body>
</html>