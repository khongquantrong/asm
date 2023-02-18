<?php
  session_start();

    include_once __DIR__ . '/../vendor/autoload.php';
    use App\Controllers\ProductController;
    use App\Controllers\Controller;
    use App\Models\BaseModel ;
    use App\Models\ProductModel;
    use App\Request ;
    use App\Router ;

    $router = new Router();
    $controller = new Controller ;
    $modelproduct = new ProductModel();
    $modelproduct ->delete(37);
    //ben trang  Index
    Router::get('/',[ProductController::class,'trangchu']);
    Router::get('/index',[ProductController::class,'trangchu']);
    Router::get('/sanpham',[ProductController::class,'sanpham']);
    Router::get('/chitietsp',[ProductController::class ,'chitietsp']);
    // ben trang Admin
    Router::get('/admin',[ProductController::class,'admin']);
    Router::get('/admin/sanpham',[ProductController::class,'showsanpham']);
    Router::get('/admin/showtk',[ProductController::class,'showtk']);
    Router::get('/admin/showdm',[ProductController::class,'showdm']);
    //phan XOA BEN ADMIN ->GET
    Router::get('/admin/delete',[ProductController::class,'delete']);
    Router::get('/admin/deletetk',[ProductController::class,'deletetk']);
    Router::get('/admin/deletedm',[ProductController::class,'deletedm']);
    Router::get('/admin/addm',[ProductController::class,'addm']);
    Router::get('/admin/addsp',[ProductController::class,'fromadd']);
    // ADD BEN admin ->POST
    Router::post('/admin/showdm',[ProductController::class,'adddm']);
    Router::post('admin/showdm',[ProductController::class,'addsp']);
    $router ->resolve();
    ?>
  <link rel="stylesheet" href="./css/style.css">