<?php
class DB_CON{
    private $dsn;
    const DB_USER='root';
    const DB_PASSWORD='';
    private $pdo_object;
    public function __construct(){
        try {
            $this->dsn = 'mysql:host=localhost;dbname=excel_info';
            $this->pdo_object = new PDO($this->dsn, DB_CON::DB_USER, DB_CON::DB_PASSWORD);
            $this->pdo_object->exec("set names utf8");
            $this->pdo_object->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $this->pdo_object->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }catch (PDOException $e){
            echo "Error: " . $e->getMessage();
        }
    }
    public function insertTotable($sql,$arrgs=array()){
        $stmt = $this->pdo_object->prepare($sql);
        $stmt->execute($arrgs);

    }
    public function selectFromtable($sql,$arrgs=array()){
        $stmt = $this->pdo_object->prepare($sql);
        $stmt->execute($arrgs);
        return $stmt->fetchAll();

    }
    public function updateTable($sql,$arrgs=array()){
        $stmt = $this->pdo_object->prepare($sql);
        $stmt->execute($arrgs);
    }

}







