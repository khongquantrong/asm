<?php
  namespace App\Models;
    use PDO;
  class BaseModel {
    protected $conn ,$sqlbuilder ;
    protected $__tableName, $__primaryKey ;
    public function __construct() {

        try{
            $this->conn = new PDO
            ("mysql:host=localhost;dbname=qlhang;charset=utf8","root","");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conn;

         }catch(\throwable $th){
            echo " conect errr";

         }

    }

    public static function getAll(){
        $model = new static();
        $model->sqlbuilder = "select*from ".$model->__tableName;
        $stmt = $model->conn->prepare($model->sqlbuilder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if($result){
            return $result;
        }
        else{
            return false;
        }
    }

    public function findAll(){
      $this->sqlbuilder = "select * from ".$this->__tableName;
      $stmt = $this->conn->prepare($this->sqlbuilder);
      $stmt->execute();
      $kq = $stmt->fetchAll(PDO::FETCH_ASSOC);
      if($kq){
        return $kq;
      }
      else{
        return false;
      }
  }

  public function findOne($id){
    $this->sqlbuilder = "select * from $this->__tableName where $this->__primaryKey = $id";
    $stmt = $this->conn->prepare($this->sqlbuilder);
    $stmt ->execute();
    $kq = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if($kq){
      return $kq;
    }
    else{
      return false;
    }
  }
  public function delete($id){
    $this->sqlbuilder = "delete from $this->__tableName where $this->__primaryKey = $id";
    $stmt = $this->conn->prepare($this->sqlbuilder);
    $stmt -> execute();

  }
  public function insert($arr=[]){
    if(!empty($arr)){
      $this->sqlbuilder = "insert into $this->__tableName(";
      $colums = '';
      $values ='';
      foreach($arr as $colum =>$value){
        $colums .= " `$colum` ,";
        $values .= "'$value' ,";
      }
      $colums = rtrim($colums,',');
      $values = rtrim($values,',');
      $this->sqlbuilder .= " $colums ) values ( $values )";
      $stmt = $this->conn ->prepare($this->sqlbuilder);
      $stmt->execute();
      echo 'them thanh cong roi nhe';
    }
  }
  
  public function fix($id ,$arr=[]){
    if(!empty($arr)){
      $colums ='';
      $this->sqlbuilder = " update $this->__tableName set ";
      foreach($arr as $colum=>$value){
        $colums .= " `$colum` = '$value',";
      }
      $colums = rtrim($colums,',');
      $this->sqlbuilder .= " $colums where $this->__primaryKey = '$id' ";
      $stmt = $this->conn->prepare($this->sqlbuilder);
      echo $this->sqlbuilder;
      $stmt ->execute();
      echo 'da sua thanh cong';
    }

  }


  }