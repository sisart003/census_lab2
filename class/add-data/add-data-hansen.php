<?php

    require_once '../excel-proto2/config/database.php';

    if (isset($_POST['hans_table_submit'])) {

        // Table 1
        $disease_type = $_POST['disease_type'];
        $patient_type = $_POST['patient_type'];
        $patient_gender = $_POST['patient_gender'];
        

        // Table 2
        $hans_hgt = $_POST['hans_hgt'];
        $hans_rbs = $_POST['hans_rbs'];
        $hans_fbs = $_POST['hans_fbs'];
        $hans_bun = $_POST['hans_bun'];

        $hans_bua = $_POST['hans_bua'];
        $hans_chol = $_POST['hans_chol'];
        $hans_crea = $_POST['hans_crea'];
        $hans_tpro = $_POST['hans_tpro'];

        $hans_albumin = $_POST['hans_albumin'];
        $hans_globulin = $_POST['hans_globulin'];
        $hans_ag_ratio = $_POST['hans_ag_ratio'];
        $hans_sgot = $_POST['hans_sgot'];

        $hans_sgpt = $_POST['hans_sgpt'];
        $hans_alp = $_POST['hans_alp'];
        $hans_trigly = $_POST['hans_trigly'];
        $hans_hdl_chole = $_POST['hans_hdl_chole'];

        $hans_ldl_chole = $_POST['hans_ldl_chole'];
        $hans_vldl = $_POST['hans_vldl'];
        $hans_sodium = $_POST['hans_sodium'];
        $hans_potassium = $_POST['hans_potassium'];

        $hans_chloride = $_POST['hans_chloride'];
        $hans_hbaic = $_POST['hans_hbaic'];
        $hans_amylase = $_POST['hans_amylase'];
        $hans_ica = $_POST['hans_ica'];

        $hans_ogtt = $_POST['hans_ogtt'];
        $hans_ldh = $_POST['hans_ldh'];
        $hans_mg = $_POST['hans_mg'];
        $hans_tbili = $_POST['hans_tbili'];

        $hans_dbili = $_POST['hans_dbili'];
        $hans_indbili = $_POST['hans_indbili'];
        $hans_phosphorus = $_POST['hans_phosphorus'];


        // Table 3
        $hans_hgt_icu = $_POST['hans_hgt_icu'];
        $hans_rbs_icu = $_POST['hans_rbs_icu'];
        $hans_fbs_icu = $_POST['hans_fbs_icu'];
        $hans_bun_icu = $_POST['hans_bun_icu'];

        $hans_bua_icu = $_POST['hans_bua_icu'];
        $hans_chol_icu = $_POST['hans_chol_icu'];
        $hans_crea_icu = $_POST['hans_crea_icu'];
        $hans_tpro_icu = $_POST['hans_tpro_icu'];

        $hans_albumin_icu = $_POST['hans_albumin_icu'];
        $hans_globulin_icu = $_POST['hans_globulin_icu'];
        $hans_ag_ratio_icu = $_POST['hans_ag_ratio_icu'];
        $hans_sgot_icu = $_POST['hans_sgot_icu'];

        $hans_sgpt_icu = $_POST['hans_sgpt_icu'];
        $hans_alp_icu = $_POST['hans_alp_icu'];
        $hans_trigly_icu = $_POST['hans_trigly_icu'];
        $hans_hdl_chole_icu = $_POST['hans_hdl_chole_icu'];

        $hans_ldl_chole_icu = $_POST['hans_ldl_chole_icu'];
        $hans_vldl_icu = $_POST['hans_vldl_icu'];
        $hans_sodium_icu = $_POST['hans_sodium_icu'];
        $hans_potassium_icu = $_POST['hans_potassium_icu'];

        $hans_chloride_icu = $_POST['hans_chloride_icu'];
        $hans_hbaic_icu = $_POST['hans_hbaic_icu'];
        $hans_amylase_icu = $_POST['hans_amylase_icu'];
        $hans_ica_icu = $_POST['hans_ica_icu'];

        $hans_ogtt_icu = $_POST['hans_ogtt_icu'];
        $hans_ldh_icu = $_POST['hans_ldh_icu'];
        $hans_mg_icu = $_POST['hans_mg_icu'];
        $hans_tbili_icu = $_POST['hans_tbili_icu'];

        $hans_dbili_icu = $_POST['hans_dbili_icu'];
        $hans_indbili_icu = $_POST['hans_indbili_icu'];
        $hans_phosphorus_icu = $_POST['hans_phosphorus_icu'];


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
                            `census_id`, `hgt`,`rbs`,`fbs`,`bun`,
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
                            last_insert_id(), '$hans_hgt', '$hans_rbs', '$hans_fbs', '$hans_bun',
                            '$hans_bua', '$hans_chol', '$hans_crea', '$hans_tpro',
                            '$hans_albumin', '$hans_globulin', '$hans_ag_ratio', '$hans_sgot',
                            '$hans_sgpt', '$hans_alp', '$hans_trigly', '$hans_hdl_chole',
                            '$hans_ldl_chole', '$hans_vldl', '$hans_sodium', '$hans_potassium',
                            '$hans_chloride', '$hans_hbaic', '$hans_amylase', '$hans_ica',
                            '$hans_ogtt', '$hans_ldh', '$hans_mg', '$hans_tbili',
                            '$hans_dbili', '$hans_indbili', '$hans_phosphorus'
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
                                `icu_id`, `hgt_icu`,`rbs_icu`,`fbs_icu`,`bun_icu`,
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
                                '$last_last', '$hans_hgt_icu', '$hans_rbs_icu', '$hans_fbs_icu', '$hans_bun_icu',
                                '$hans_bua_icu', '$hans_chol_icu', '$hans_crea_icu', '$hans_tpro_icu',
                                '$hans_albumin_icu', '$hans_globulin_icu', '$hans_ag_ratio_icu', '$hans_sgot_icu',
                                '$hans_sgpt_icu', '$hans_alp_icu', '$hans_trigly_icu', '$hans_hdl_chole_icu',
                                '$hans_ldl_chole_icu', '$hans_vldl_icu', '$hans_sodium_icu', '$hans_potassium_icu',
                                '$hans_chloride_icu', '$hans_hbaic_icu', '$hans_amylase_icu', '$hans_ica_icu',
                                '$hans_ogtt_icu', '$hans_ldh_icu', '$hans_mg_icu', '$hans_tbili_icu',
                                '$hans_dbili_icu', '$hans_indbili_icu', '$hans_phosphorus_icu'
                            )";
                $query = mysqli_query($con, $ins) or die(mysqli_error($con));

                header('Location: http://localhost/excel-proto2/');
            }
        } else {
            echo "We failed again";
        }
    }
