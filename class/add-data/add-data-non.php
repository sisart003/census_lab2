<?php

    require_once '../excel-proto2/config/database.php';

    if (isset($_POST['nh_table_submit'])) {

        // Table 1
        $disease_type = $_POST['disease_type'];
        $patient_type = $_POST['patient_type'];
        $patient_gender = $_POST['patient_gender'];
        

        // Table 2
        $nh_hgt = $_POST['nh_hgt'];
        $nh_rbs = $_POST['nh_rbs'];
        $nh_fbs = $_POST['nh_fbs'];
        $nh_bun = $_POST['nh_bun'];

        $nh_bua = $_POST['nh_bua'];
        $nh_chol = $_POST['nh_chol'];
        $nh_crea = $_POST['nh_crea'];
        $nh_tpro = $_POST['nh_tpro'];

        $nh_albumin = $_POST['nh_albumin'];
        $nh_globulin = $_POST['nh_globulin'];
        $nh_ag_ratio = $_POST['nh_ag_ratio'];
        $nh_sgot = $_POST['nh_sgot'];

        $nh_sgpt = $_POST['nh_sgpt'];
        $nh_alp = $_POST['nh_alp'];
        $nh_trigly = $_POST['nh_trigly'];
        $nh_hdl_chole = $_POST['nh_hdl_chole'];

        $nh_ldl_chole = $_POST['nh_ldl_chole'];
        $nh_vldl = $_POST['nh_vldl'];
        $nh_sodium = $_POST['nh_sodium'];
        $nh_potassium = $_POST['nh_potassium'];

        $nh_chloride = $_POST['nh_chloride'];
        $nh_hbaic = $_POST['nh_hbaic'];
        $nh_amylase = $_POST['nh_amylase'];
        $nh_ica = $_POST['nh_ica'];

        $nh_ogtt = $_POST['nh_ogtt'];
        $nh_ldh = $_POST['nh_ldh'];
        $nh_mg = $_POST['nh_mg'];
        $nh_tbili = $_POST['nh_tbili'];

        $nh_dbili = $_POST['nh_dbili'];
        $nh_indbili = $_POST['nh_indbili'];
        $nh_phosphorus = $_POST['nh_phosphorus'];


        // Table 3
        $nh_hgt_icu = $_POST['nh_hgt_icu'];
        $nh_rbs_icu = $_POST['nh_rbs_icu'];
        $nh_fbs_icu = $_POST['nh_fbs_icu'];
        $nh_bun_icu = $_POST['nh_bun_icu'];

        $nh_bua_icu = $_POST['nh_bua_icu'];
        $nh_chol_icu = $_POST['nh_chol_icu'];
        $nh_crea_icu = $_POST['nh_crea_icu'];
        $nh_tpro_icu = $_POST['nh_tpro_icu'];

        $nh_albumin_icu = $_POST['nh_albumin_icu'];
        $nh_globulin_icu = $_POST['nh_globulin_icu'];
        $nh_ag_ratio_icu = $_POST['nh_ag_ratio_icu'];
        $nh_sgot_icu = $_POST['nh_sgot_icu'];

        $nh_sgpt_icu = $_POST['nh_sgpt_icu'];
        $nh_alp_icu = $_POST['nh_alp_icu'];
        $nh_trigly_icu = $_POST['nh_trigly_icu'];
        $nh_hdl_chole_icu = $_POST['nh_hdl_chole_icu'];

        $nh_ldl_chole_icu = $_POST['nh_ldl_chole_icu'];
        $nh_vldl_icu = $_POST['nh_vldl_icu'];
        $nh_sodium_icu = $_POST['nh_sodium_icu'];
        $nh_potassium_icu = $_POST['nh_potassium_icu'];

        $nh_chloride_icu = $_POST['nh_chloride_icu'];
        $nh_hbaic_icu = $_POST['nh_hbaic_icu'];
        $nh_amylase_icu = $_POST['nh_amylase_icu'];
        $nh_ica_icu = $_POST['nh_ica_icu'];

        $nh_ogtt_icu = $_POST['nh_ogtt_icu'];
        $nh_ldh_icu = $_POST['nh_ldh_icu'];
        $nh_mg_icu = $_POST['nh_mg_icu'];
        $nh_tbili_icu = $_POST['nh_tbili_icu'];

        $nh_dbili_icu = $_POST['nh_dbili_icu'];
        $nh_indbili_icu = $_POST['nh_indbili_icu'];
        $nh_phosphorus_icu = $_POST['nh_phosphorus_icu'];


        // Insert First query on Table_1
        $insert = "INSERT INTO `patient_table`
                        (
                            `disease_type`,`patient_type`,`gender`
                        ) 
                    VALUES 
                        (
                            '$disease_type', '$patient_type', '$patient_gender'
                        )";

        $query = mysqli_query($con, $insert) or die(mysqli_error($con));

        if ($query == 1) {
            $ins = "INSERT INTO `census_lab`
                        (
                            `census_id`,`hgt`,`rbs`,`fbs`,`bun`,
                            `bua`,`cholesterol`,`creatinine`,`total_protein`,
                            `albumin`,`globulin`,`ag_ratio`,`sgot`,
                            `sgpt`,`alp`,`trigly`,`hdl_chole`,
                            `ldl_chole`,`vldl`,`sodium`,`potassium`,
                            `chloride`,`hbaic`,`amylase`,`ica`,
                            `ogtt`,`ldh`,`mg`,`total_bilirubin`,
                            `direct_bili`,`indirect_bili`,`phosphorus`
                        ) 
                    VALUES 
                        (
                            last_insert_id(),'$nh_hgt', '$nh_rbs', '$nh_fbs', '$nh_bun',
                            '$nh_bua', '$nh_chol', '$nh_crea', '$nh_tpro',
                            '$nh_albumin', '$nh_globulin', '$nh_ag_ratio', '$nh_sgot',
                            '$nh_sgpt', '$nh_alp', '$nh_trigly', '$nh_hdl_chole',
                            '$nh_ldl_chole', '$nh_vldl', '$nh_sodium', '$nh_potassium',
                            '$nh_chloride', '$nh_hbaic', '$nh_amylase', '$nh_ica',
                            '$nh_ogtt', '$nh_ldh', '$nh_mg', '$nh_tbili',
                            '$nh_dbili', '$nh_indbili', '$nh_phosphorus'
                        )";
            $query = mysqli_query($con, $ins) or die(mysqli_error($con));
            if ($query == 1) {
                $sql = "SELECT id FROM patient_table";
                $result = $con->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        $last_last = $row["id"];
                    }
                }
                $ins = "INSERT INTO `icu_table`
                            (
                                `icu_id`,`hgt_icu`,`rbs_icu`,`fbs_icu`,`bun_icu`,
                                `bua_icu`,`cholesterol_icu`,`creatinine_icu`,`total_protein_icu`,
                                `albumin_icu`,`globulin_icu`,`ag_ratio_icu`,`sgot_icu`,
                                `sgpt_icu`,`alp_icu`,`trigly_icu`,`hdl_chole_icu`,
                                `ldl_chole_icu`,`vldl_icu`,`sodium_icu`,`potassium_icu`,
                                `chloride_icu`,`hbaic_icu`,`amylase_icu`,`ica_icu`,
                                `ogtt_icu`,`ldh_icu`,`mg_icu`,`total_bilirubin_icu`,
                                `direct_bili_icu`,`indirect_bili_icu`,`phosphorus_icu`
                            ) 
                        VALUES 
                            (
                                '$last_last', '$nh_hgt_icu', '$nh_rbs_icu', '$nh_fbs_icu', '$nh_bun_icu',
                                '$nh_bua_icu', '$nh_chol_icu', '$nh_crea_icu', '$nh_tpro_icu',
                                '$nh_albumin_icu', '$nh_globulin_icu', '$nh_ag_ratio_icu', '$nh_sgot_icu',
                                '$nh_sgpt_icu', '$nh_alp_icu', '$nh_trigly_icu', '$nh_hdl_chole_icu',
                                '$nh_ldl_chole_icu', '$nh_vldl_icu', '$nh_sodium_icu', '$nh_potassium_icu',
                                '$nh_chloride_icu', '$nh_hbaic_icu', '$nh_amylase_icu', '$nh_ica_icu',
                                '$nh_ogtt_icu', '$nh_ldh_icu', '$nh_mg_icu', '$nh_tbili_icu',
                                '$nh_dbili_icu', '$nh_indbili_icu', '$nh_phosphorus_icu'
                            )";
                $query = mysqli_query($con, $ins) or die(mysqli_error($con));

                header('Location: http://localhost/excel-proto2/');
            }
        } else {
            echo "We failed again";
        }
    }
