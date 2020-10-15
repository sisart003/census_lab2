<?php
    ob_start();
    session_start();

    $con=mysqli_connect("localhost", "root", "", "census_lab");

        if(mysqli_connect_errno()){
            echo "Failed to Connect : ".mysqli_connect_error();
        }


    $sql = "SELECT 
                *
            FROM census_lab c 
            INNER JOIN patient_table p ON p.id = c.census_id
            ";

        
    $result = $con->query($sql);

    $row = $result->fetch_assoc();

    // $hans_hgt = $row["gt_hansom_tally"];
    // $hans_globulin = $row["globulin_hansom_tally"];
    // $hans_sgot = $row['sgot_hansom_tally'];

    
    $con->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
    

<!-- <div class="row">

    <div class="col-md-10 my-4 mx-auto animate__animated animate__zoomIn">


        <h1>View Hansen Tally</h1>
        <form class="form-inline">
            <label class="sr-only" for="inlineFormInputName2">Name</label>
            <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2">

            <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
            <div class="input-group mb-2 mr-sm-2">
                <input type="text" class="form-control" id="inlineFormInputGroupUsername2">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Search</button>
        </form>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th></th>
                    <th style="text-align:center" colspan="2">OPD</th>
                    <th style="text-align:center" colspan="2">IN-PATIENT</th>
                    <th style="text-align:center">ICU</th>
                </tr>
                <tr>
                    <th style="text-align:center">Type</th>
                    <th style="text-align:center">Male</th>
                    <th style="text-align:center">Female</th>
                    <th style="text-align:center">Male</th>
                    <th style="text-align:center">Female</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>HGT/CBG</td>
                    <td><?= $row['hgt_hansom_tally'] ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>RBS</td>
                    <td><?= $row['rbs_hansom_tally'] ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>FBS</td>
                    <td><?= $row['fbs_hansom_tally'] ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>BUN</td>
                    <td><?= $row['bun_hansom_tally'] ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>BUA</td>
                    <td><?= $row['bua_hansom_tally'] ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>CHOLESTEROL</td>
                    <td><?= $row['cholesterol_hansom_tally'] ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>CREATININE</td>
                    <td><?= $row['creatinine_hansom_tally'] ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>TOTAL PROTEIN</td>
                    <td><?= $row['total_protein_hansom_tally'] ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>ALBUMIN</td>
                    <td><?= $row['albumin_hansom_tally'] ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>GLOBULIN</td>
                    <td><?= $row['globulin_hansom_tally'] ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>A/G RATIO</td>
                    <td><?= $row['ag_ratio_hansom_tally'] ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>SGOT</td>
                    <td><?= $row['sgot_hansom_tally'] ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>SGPT</td>
                    <td><?= $row['sgpt_hansom_tally'] ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>ALP</td>
                    <td><?= $row['alp_hansom_tally'] ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>TRIGLY</td>
                    <td><?= $row['trigly_hansom_tally'] ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>HDL-CHOLE</td>
                    <td><?= $row['hdl_chole_hansom_tally'] ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>LDL-CHOLE</td>
                    <td><?= $row['ldl_chole_hansom_tally'] ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>VLDL</td>
                    <td><?= $row['vldl_hansom_tally'] ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>SODIUM</td>
                    <td><?= $row['sodium_hansom_tally'] ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>POTASSIUM</td>
                    <td><?= $row['potassium_hansom_tally'] ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>CHLORIDE</td>
                    <td><?= $row['chloride_hansom_tally'] ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>HBAIC</td>
                    <td><?= $row['hbaic_hansom_tally'] ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>AMYLASE</td>
                    <td><?= $row['amylase_hansom_tally'] ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>ICA</td>
                    <td><?= $row['ica_hansom_tally'] ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>OGTT</td>
                    <td><?= $row['ogtt_hansom_tally'] ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>LDH</td>
                    <td><?= $row['ldh_hansom_tally'] ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>MG</td>
                    <td><?= $row['mg_hansom_tally'] ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>TOTAL BILIRUBIN</td>
                    <td><?= $row['total_bilirubin_hansom_tally'] ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>DIRECT-BILI</td>
                    <td><?= $row['direct_bili_hansom_tally'] ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>INDIRECT-BILI</td>
                    <td><?= $row['indirect_bili_hansom_tally'] ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>PHOSPHORUS</td>
                    <td><?= $row['phosphorus_hansom_tally'] ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>

    </div> -->

    <?php

        

    ?>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>