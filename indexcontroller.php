<?php
require_once 'Classes/PHPExcel/IOFactory.php';
include 'connect.php';
include 'indexModel.php';
class read_file_excel{
  private $db_object;
  private $indexModelObject;
  public function __construct()
  {
      $this->db_object=new DB_CON();
      $this->indexModelObject=new ExcelModel();
  }
  public function insertToExcel($id,$name,$phone,$major){
      $excel_read = $this->db_object->insertTotable(ExcelModel::INSERTINTOEXCELTABLE,array
      ($id,$name,$phone,$major));
      return $excel_read;
  }
public function selectFromExcelInfo(){
    $excel_show = $this->db_object->selectFromtable(ExcelModel::SESLECTFROMEXCELINFO);
    return $excel_show;
}
    public function uploadFile(){
        if(isset($_FILES['excelFile'])&&$_FILES['excelFile']['tmp_name']){
            $objPHPExcel = PHPExcel_IOFactory::load($_FILES['excelFile']['tmp_name']);
            $getsheet= $objPHPExcel->getWorksheetIterator();
            foreach ($getsheet as $worksheet){
                  $hightestRow=$worksheet->getHighestRow();
                  for($row =2;$row<=$hightestRow;$row++){
                      $insert=new read_file_excel();
                    $id=$worksheet->getCellByColumnAndRow(0,$row)->getValue();
                    $name=$worksheet->getCellByColumnAndRow(1,$row)->getValue();
                    $phone=$worksheet->getCellByColumnAndRow(2,$row)->getValue();
                    $major=$worksheet->getCellByColumnAndRow(3,$row)->getValue();
                    $insert->insertToExcel($id,$name,$phone,$major);

                  }
            }

        }
    }

}



?>
