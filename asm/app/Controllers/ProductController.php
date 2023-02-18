<?php 
  namespace App\Controllers;
use App\Models\BaseModel;
use App\Models\UserModel;
use App\Models\CateModel;
use App\Models\ProductModel;
use App\Request;

  class ProductController extends Controller {

        protected $db;

    public function __construct() {

        $this->db = new ProductModel();

    }


    public function trangchu(){
      $data['sanpham'] = $this->db->getAll();
      $data['timkiem'] = $this->db->findAll();
      $this->view('index',$data);

    }
    public function admin(){
   

      $this->view('admin/admin');
 
    }



    public function chitietsp(Request $request){
        $data=[];
        $value = $request->getColums()['id'];
        $product = new ProductModel();
        $data['sanpham']= $product->findOne($value);
        $this->view('detail',$data);


    }
    public function sanpham(){
      $data['sanpham'] = $this->db->getAll();

        $this->view('product',$data);
    }

    public function showsanpham(){
      $data['sanpham'] = $this->db->getAll();

      $this->view('admin/showsp',$data);

    }

    public function showtk(){
      $data = [];
      $dm = new UserModel();
      $data['tk'] = $dm::getAll();
      $this->view('admin/showtk',$data);
    }

    public function showdm(){
    
      $data=[];
        $dm = new CateModel();
      $data['dm'] = $dm::getAll();
      $this->view('admin/showdm',$data);
    }



    public function delete(Request $request){

      $id = $request->getColums()['id'];

      $a =  $this->db->delete($id);
      header("location:sanpham");
    }

    public function deletetk(Request $request){
      $id = $request->getColums()['id'];

      $db = new UserModel();
      $db->delete($id);
      header("location:showtk");
      

    }
    public function deletedm(Request $request){
      $id = $request->getColums()['id'];
      $db = new CateModel();
      $db->delete($id);
      header("location:showdm");
    }

    public function addm(){
    $this->view('admin/addm');

    }

    //Post
    public function adddm(Request $request){
        $id = $request->getColums();
        $db = new CateModel();
        $db->insert($id);
        header("location:showdm");

    }

    public function formadd(){
      

      $this->view('admin/addsp');
    }


  }
  