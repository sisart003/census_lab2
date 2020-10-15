<?php include 'templates/header.php'; ?>
<?php require_once 'class/add-data/add-data-hansen.php'; ?>

<div class="row">
    <div class="col-md-2">
        <?php include 'templates/sidebar.php'; ?>
    </div>

    <div class="col-md-8 my-4 mx-auto animate__animated animate__zoomIn">
        <h1>Hansen</h1>
        <form method="post">
            <table class="table table-hover table-bordered table-striped">
                <thead>
                    <tr>
                        <th colspan="2">
                            <input type="hidden" name="disease_type" value="hansen">
                            <select class="custom-select custom-select-md mb-3" name="patient_type">
                                <option value="opd">OPD</option>
                                <option value="in-patient">In Patient</option>
                            </select>
                        </th>
                        <th colspan="2">
                            <select class="custom-select custom-select-md mb-3" name="patient_gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_hgt" type="checkbox" id="hans_hgt1" value="hans_hgt">
                                <label class="form-check-label" for="hans_hgt1">HGT/CBG</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_hgt_icu" type="checkbox" id="hans_hgt2" value="hans_icu">
                                <label class="form-check-label" for="hans_hgt2">w/ ICU</label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_rbs" type="checkbox" id="hans_rbs1" value="hans_rbs">
                                <label class="form-check-label" for="hans_rbs1">RBS</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_rbs_icu" type="checkbox" id="hans_rbs2" value="hans_icu">
                                <label class="form-check-label" for="hans_rbs2">w/ ICU</label>
                            </div>
                        </td> 

                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_fbs" type="checkbox" id="hans_fbs1" value="hans_fbs">
                                <label class="form-check-label" for="hans_fbs1">FBS</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_fbs_icu" type="checkbox" id="hans_fbs2" value="hans_icu">
                                <label class="form-check-label" for="hans_fbs2">w/ ICU</label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_bun" type="checkbox" id="hans_bun1" value="hans_bun">
                                <label class="form-check-label" for="hans_bun1">BUN</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_bun_icu" type="checkbox" id="hans_bun2" value="hans_icu">
                                <label class="form-check-label" for="hans_bun2">w/ ICU</label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_bua" type="checkbox" id="hans_bua1" value="hans_bua">
                                <label class="form-check-label" for="hans_bua1">BUA</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_bua_icu" type="checkbox" id="hans_bua2" value="hans_icu">
                                <label class="form-check-label" for="hans_bua2">w/ ICU</label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_chol" type="checkbox" id="hans_chol1" value="hans_chol">
                                <label class="form-check-label" for="hans_chol1">CHOLESTEROL</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_chol_icu" type="checkbox" id="hans_chol2" value="hans_icu">
                                <label class="form-check-label" for="hans_chol2">w/ ICU</label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_crea" type="checkbox" id="hans_crea1" value="hans_crea">
                                <label class="form-check-label" for="hans_crea1">CREATININE</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_crea_icu" type="checkbox" id="hans_crea2" value="hans_icu">
                                <label class="form-check-label" for="hans_crea2">w/ ICU</label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_tpro" type="checkbox" id="hans_tpro1" value="hans_tpro">
                                <label class="form-check-label" for="hans_tpro1">TOTAL PROTEIN</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_tpro_icu" type="checkbox" id="hans_tpro2" value="hans_icu">
                                <label class="form-check-label" for="hans_tpro2">w/ ICU</label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_albumin" type="checkbox" id="hans_albumin1" value="hans_albumin">
                                <label class="form-check-label" for="hans_albumin1">ALBUMIN</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_albumin_icu" type="checkbox" id="hans_albumin2" value="hans_icu">
                                <label class="form-check-label" for="hans_albumin2">w/ ICU</label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_globulin" type="checkbox" id="hans_globulin1" value="hans_globulin">
                                <label class="form-check-label" for="hans_globulin1">GLOBULIN</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_globulin_icu" type="checkbox" id="hans_globulin2" value="hans_icu">
                                <label class="form-check-label" for="hans_globulin2">w/ ICU</label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_ag_ratio" type="checkbox" id="hans_ag_ratio1" value="hans_ag_ratio">
                                <label class="form-check-label" for="hans_ag_ratio1">A/G RATIO</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_ag_ratio_icu" type="checkbox" id="hans_ag_ratio2" value="hans_icu">
                                <label class="form-check-label" for="hans_ag_ratio2">w/ ICU</label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_sgot" type="checkbox" id="hans_sgot1" value="hans_sgot">
                                <label class="form-check-label" for="hans_sgot1">SGOT</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_sgot_icu" type="checkbox" id="hans_sgot2" value="hans_icu">
                                <label class="form-check-label" for="hans_sgot2">w/ ICU</label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_sgpt" type="checkbox" id="hans_sgpt1" value="hans_sgpt">
                                <label class="form-check-label" for="hans_sgpt1">SGPT</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_sgpt_icu" type="checkbox" id="hans_sgpt2" value="hans_icu">
                                <label class="form-check-label" for="hans_sgpt2">w/ ICU</label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_alp" type="checkbox" id="hans_alp1" value="hans_alp">
                                <label class="form-check-label" for="hans_alp1">ALP</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_alp_icu" type="checkbox" id="hans_alp2" value="hans_icu">
                                <label class="form-check-label" for="hans_alp2">w/ ICU</label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_trigly" type="checkbox" id="hans_trigly1" value="hans_trigly">
                                <label class="form-check-label" for="hans_trigly1">TRIGLY</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_trigly_icu" type="checkbox" id="hans_trigly2" value="hans_icu">
                                <label class="form-check-label" for="hans_trigly2">w/ ICU</label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_hdl_chole" type="checkbox" id="hans_hdl_chole1" value="hans_hdl_chole">
                                <label class="form-check-label" for="hans_hdl_chole1">HDL-CHOLE</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_hdl_chole_icu" type="checkbox" id="hans_hdl_chole2" value="hans_icu">
                                <label class="form-check-label" for="hans_hdl_chole2">w/ ICU</label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_ldl_chole" type="checkbox" id="hans_ldl_chole1" value="hans_ldl_chole">
                                <label class="form-check-label" for="hans_ldl_chole1">LDL-CHOLE</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_ldl_chole_icu" type="checkbox" id="hans_ldl_chole2" value="hans_icu">
                                <label class="form-check-label" for="hans_ldl_chole2">w/ ICU</label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_vldl" type="checkbox" id="hans_vldl1" value="hans_vldl">
                                <label class="form-check-label" for="hans_vldl1">VLDL</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_vldl_icu" type="checkbox" id="hans_vldl2" value="hans_icu">
                                <label class="form-check-label" for="hans_vldl2">w/ ICU</label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_sodium" type="checkbox" id="hans_sodium1" value="hans_sodium">
                                <label class="form-check-label" for="hans_sodium1">SODIUM</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_sodium_icu" type="checkbox" id="hans_sodium2" value="hans_icu">
                                <label class="form-check-label" for="hans_sodium2">w/ ICU</label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_potassium" type="checkbox" id="hans_potassium1" value="hans_potassium">
                                <label class="form-check-label" for="hans_potassium1">POTASSIUM</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_potassium_icu" type="checkbox" id="hans_potassium2" value="hans_icu">
                                <label class="form-check-label" for="hans_potassium2">w/ ICU</label>
                            </div>
                        </td>
                    </tr>

                    <tr>

                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_chloride" type="checkbox" id="hans_chloride1" value="hans_chloride">
                                <label class="form-check-label" for="hans_chloride1">CHLORIDE</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_chloride_icu" type="checkbox" id="hans_chloride2" value="hans_icu">
                                <label class="form-check-label" for="hans_chloride2">w/ ICU</label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_hbaic" type="checkbox" id="hans_hbaic1" value="hans_hbaic">
                                <label class="form-check-label" for="hans_hbaic1">HBAIC</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_hbaic_icu" type="checkbox" id="hans_hbaic2" value="hans_icu">
                                <label class="form-check-label" for="hans_hbaic2">w/ ICU</label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_amylase" type="checkbox" id="hans_amylase1" value="hans_amylase">
                                <label class="form-check-label" for="hans_amylase1">AMYLASE</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_amylase_icu" type="checkbox" id="hans_amylase2" value="hans_icu">
                                <label class="form-check-label" for="hans_amylase2">w/ ICU</label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_ica" type="checkbox" id="hans_ica1" value="hans_ica">
                                <label class="form-check-label" for="hans_ica1">ICA</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_ica_icu" type="checkbox" id="hans_ica2" value="hans_icu">
                                <label class="form-check-label" for="hans_ica2">w/ ICU</label>
                            </div>
                        </td>

                    </tr>

                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_ogtt" type="checkbox" id="hans_ogtt1" value="hans_ogtt">
                                <label class="form-check-label" for="hans_ogtt1">OGTT</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_ogtt_icu" type="checkbox" id="hans_ogtt2" value="hans_icu">
                                <label class="form-check-label" for="hans_ogtt2">w/ ICU</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_ldh" type="checkbox" id="hans_ldh1" value="hans_ldh">
                                <label class="form-check-label" for="hans_ldh1">LDH</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_ldh_icu" type="checkbox" id="hans_ldh2" value="hans_icu">
                                <label class="form-check-label" for="hans_ldh2">w/ ICU</label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_mg" type="checkbox" id="hans_mg1" value="hans_mg">
                                <label class="form-check-label" for="hans_mg1">MG</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_mg_icu" type="checkbox" id="hans_mg2" value="hans_icu">
                                <label class="form-check-label" for="hans_mg2">w/ ICU</label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_tbili" type="checkbox" id="hans_tbili1" value="hans_tbili">
                                <label class="form-check-label" for="hans_tbili1">TOTAL BILIRUBIN</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_tbili_icu" type="checkbox" id="hans_tbili2" value="hans_icu">
                                <label class="form-check-label" for="hans_tbili2">w/ ICU</label>
                            </div>
                        </td>


                    </tr>

                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_dbili" type="checkbox" id="hans_dbili1" value="hans_dbili">
                                <label class="form-check-label" for="hans_dbili1">DIRECT-BILI</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_dbili_icu" type="checkbox" id="hans_dbili2" value="hans_icu">
                                <label class="form-check-label" for="hans_dbili2">w/ ICU</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_indbili" type="checkbox" id="hans_indbili1" value="hans_indbili">
                                <label class="form-check-label" for="hans_indbili1">INDIRECT-BILI</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_indbili_icu" type="checkbox" id="hans_indbili2" value="hans_icu">
                                <label class="form-check-label" for="hans_indbili2">w/ ICU</label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_phosphorus" type="checkbox" id="hans_phosphorus1" value="hans_phosphorus">
                                <label class="form-check-label" for="hans_phosphorus1">PHOSPHORUS</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="hans_phosphorus_icu" type="checkbox" id="hans_phosphorus2" value="hans_icu">
                                <label class="form-check-label" for="hans_phosphorus2">w/ ICU</label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="5">
                            <input type="submit" value="Submit" class="btn btn-block btn-info" name="hans_table_submit">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
</div>

    <?php include 'templates/footer.php'; ?>