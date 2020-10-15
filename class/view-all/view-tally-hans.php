<?php
    require_once '../excel-proto2/config/database.php';
    // $sql = "SELECT 
    //             SUM(hgt = 'hans_hgt') AS hgt_hansom_tally,
    //             SUM(rbs = 'hans_rbs') AS rbs_hansom_tally,
    //             SUM(fbs = 'hans_fbs') AS fbs_hansom_tally,
    //             SUM(bun = 'hans_bun') AS bun_hansom_tally,
    //             SUM(bua = 'hans_bua') AS bua_hansom_tally,
    //             SUM(cholesterol = 'hans_chol') AS cholesterol_hansom_tally,
    //             SUM(creatinine = 'hans_creatinine') AS creatinine_hansom_tally,
    //             SUM(total_protein = 'hans_total_protein') AS total_protein_hansom_tally,
    //             SUM(albumin = 'hans_albumin') AS albumin_hansom_tally,
    //             SUM(globulin = 'hans_globulin') AS globulin_hansom_tally,
    //             SUM(ag_ratio = 'hans_ag_ratio') AS ag_ratio_hansom_tally,
    //             SUM(sgot = 'hans_sgot') AS sgot_hansom_tally,
    //             SUM(sgpt = 'hans_sgpt') AS sgpt_hansom_tally,
    //             SUM(alp = 'hans_alp') AS alp_hansom_tally,
    //             SUM(trigly = 'hans_trigly') AS trigly_hansom_tally,
    //             SUM(hdl_chole = 'hans_hdl_chole') AS hdl_chole_hansom_tally,
    //             SUM(ldl_chole = 'hans_ldl_chole') AS ldl_chole_hansom_tally,
    //             SUM(vldl = 'hans_vldl') AS vldl_hansom_tally,
    //             SUM(sodium = 'hans_sodium') AS sodium_hansom_tally,
    //             SUM(potassium = 'hans_potassium') AS potassium_hansom_tally,
    //             SUM(chloride = 'hans_chloride') AS chloride_hansom_tally,
    //             SUM(hbaic = 'hans_hbaic') AS hbaic_hansom_tally,
    //             SUM(amylase = 'hans_amylase') AS amylase_hansom_tally,
    //             SUM(ica = 'hans_ica') AS ica_hansom_tally,
    //             SUM(ogtt = 'hans_ogtt') AS ogtt_hansom_tally,
    //             SUM(ldh = 'hans_ldh') AS ldh_hansom_tally,
    //             SUM(mg = 'hans_mg') AS mg_hansom_tally,
    //             SUM(total_bilirubin = 'hans_total_bilirubin') AS total_bilirubin_hansom_tally,
    //             SUM(direct_bili = 'hans_direct_bili') AS direct_bili_hansom_tally,
    //             SUM(indirect_bili = 'hans_indirect_bili') AS indirect_bili_hansom_tally,
    //             SUM(phosphorus = 'hans_phosphorus') AS phosphorus_hansom_tally
    //         FROM census_lab c 
    //         INNER JOIN patient_table p ON p.id = c.census_id 
    //         (p.patient_type = 'opd' AND p.gender = 'male') OR (p.patient_type = 'in-patient' AND p.gender = 'female')
    //         ";
    // $result = $con->query($sql);

    // $row = $result->fetch_assoc();

    // $hans_hgt = $row["gt_hansom_tally"];
    // $hans_globulin = $row["globulin_hansom_tally"];
    // $hans_sgot = $row['sgot_hansom_tally'];

    
    // $con->close();
?>