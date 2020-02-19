<?php
include 'feedback.php';
include 'header.php';?>


<div class="container" >
    <div class="panel panel-info" style="margin-top:200px">
        <div class="panel-heading">upload file</div>
        <div class="panel-body">
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="file">File</label>
                    <input type="file" class="form-control" name="excelFile" id="file">
                </div><br>

                <button type="submit"  name="submit" class="btn btn-info">Submit</button>
            </form></div>
    </div>

</div>
</body>
</html>


