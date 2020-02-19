<?php
include 'indexcontroller.php';
include 'header.php';
$info=new read_file_excel();
$excelIno=$info->selectFromExcelInfo();

?>
<body>

<div class="container">
    <h2>Students Info</h2>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>Academy ID#</th>
            <th>Student Name</th>
            <th>Phone</th>
            <th>Major</th>
        </tr>
        </thead>
        <tbody>

           <?php
           foreach ($excelIno as $row){
            echo '<tr><td>'.$row['academy_id'].'</td>';
            echo '<td>'.$row['student_name'].'';
            echo '<td>'.$row['phone'].'</td>';
            echo '<td>'.$row['student_major'].'</td></tr>';
           }?>


        </tbody>
    </table>
</div>

</body>
</html>
