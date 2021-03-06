<?php require_once '../excel-proto2/config/database.php'; ?>

  

<h1>All Data</h1>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Patient ID</th>
                    <th>Type</th>
                    <th>Ward</th>
                    <th>Gender</th>
                    <th>Action</th>
                </tr>
            </thead>
            
            <tbody>
            <?php

                $sql = "SELECT * FROM patient_table ORDER BY `id` DESC";
                $result = $con->query($sql);
                    // output data of each row
                    while($row = $result->fetch_assoc()) {?>
                <tr>
                
                    <td><?= $row["id"]; ?></td>
                    <td><?= strtoupper(str_replace('_',' ',$row["disease_type"]));  ?></td>
                    <td><?= strtoupper($row["patient_type"]); ?></td>
                    <td><?= strtoupper($row["gender"]); ?></td>
                    <td>
                        <a href="../excel-proto2/config/delete-single-data.php?id=<?=$row['id']?>" class="btn btn-danger">Delete</a>
                    </td>
                    
                </tr>
                <?php
        
                        }?>
            </tbody>
        </table>
        

<?php
// SELECT u.*, s.*
// FROM users u
//     inner join statuses s on u.status_id = s.id
// WHERE u.status_id =  
// SELECT SUM(hgt = 'hans_hgt') AS hgt_hansom_tally FROM census_lab c INNER JOIN patient_table p ON p.id = c.census_id WHERE p.patient_type = 'opd' AND p.gender = 'male'



?>

