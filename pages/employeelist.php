<html>
<div class="tes">
<h4 class="title">
<span class="text">
<strong>Employee List</strong>
</span></h4>
<a class="btn btn-primary" href="index.php?p=employee">Add</a>
<table class="table table-bordered">
<tr>
<th>No.</th>
<th>SSN</th>
<th>Name</th>
<th>Address</th>
<th>Action</th>
</tr>


<?php
    require_once('./class/class.Employee.php');
    $objEmployee = new Employee();
    $arrayResult = $objEmployee->SelectAllEmployee();
    
    if(count($arrayResult) == 0){
        echo '<tr><td colspan="5">Tidak ada data!</td></tr>';
    }

    else
    {
    $no = 1;
        foreach ($arrayResult as $dataEmployee) {
            echo '<tr>';
            echo '<td>'.$no.'</td>';
            echo '<td>'.$dataEmployee->ssn.'</td>';
            echo '<td>'.$dataEmployee->fname.'</td>';
            echo '<td>'.$dataEmployee->address.'</td>';
            echo '<td>
            <a class="btn btn-warning" href="index.php?p=employee&ssn='.$dataEmployee->ssn.'"> 
            Edit 
            </a> | 
            
            <a class="btn btn-danger" href="index.php?p=deleteemployee&ssn='.$dataEmployee->ssn.'" onclick="return confirm(\'Apakah anda yakin ingin menghapus?\')">
             Delete 
             </a> 
             </td>';
        }
        
    }
    
?>
</div>
</html>