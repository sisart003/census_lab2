<?php include 'templates/header.php'; ?>
<?php require_once 'class/add-data/add-data-non.php'; ?>

<div class="row">
    <div class="col-md-2">
        <?php include 'templates/sidebar.php'; ?>
    </div>

    <div class="col-md-8 my-4 mx-auto animate__animated animate__zoomIn">
        <h1>Non Hansen</h1>
        <form method="post">
            <table class="table table-hover table-bordered table-striped">
                <thead>
                    <tr>
                        <th>
                            <input type="hidden" name="disease_type" value="non_hansen">
                            <select class="custom-select custom-select-md mb-3" name="patient_type">
                                <option value="opd">OPD</option>
                                <option value="in-patient">In Patient</option>
                            </select>
                        </th>
                        <th>
                            <select class="custom-select custom-select-md mb-3" name="patient_gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_hgt" type="checkbox" id="nh_hgt1" value="nh_hgt">
                                <label class="form-check-label" for="nh_hgt1">HGT/CBG</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_hgt_icu" type="checkbox" id="nh_hgt2" value="nh_icu">
                                <label class="form-check-label" for="nh_hgt2">w/ ICU</label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_rbs" type="checkbox" id="nh_rbs1" value="nh_rbs">
                                <label class="form-check-label" for="nh_rbs1">RBS</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_rbs_icu" type="checkbox" id="nh_rbs2" value="nh_icu">
                                <label class="form-check-label" for="nh_rbs2">w/ ICU</label>
                            </div>
                        </td> 

                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_fbs" type="checkbox" id="nh_fbs1" value="nh_fbs">
                                <label class="form-check-label" for="nh_fbs1">FBS</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_fbs_icu" type="checkbox" id="nh_fbs2" value="nh_icu">
                                <label class="form-check-label" for="nh_fbs2">w/ ICU</label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_bun" type="checkbox" id="nh_bun1" value="nh_bun">
                                <label class="form-check-label" for="nh_bun1">BUN</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_bun_icu" type="checkbox" id="nh_bun2" value="nh_icu">
                                <label class="form-check-label" for="nh_bun2">w/ ICU</label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_bua" type="checkbox" id="nh_bua1" value="nh_bua">
                                <label class="form-check-label" for="nh_bua1">BUA</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_bua_icu" type="checkbox" id="nh_bua2" value="nh_icu">
                                <label class="form-check-label" for="nh_bua2">w/ ICU</label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_chol" type="checkbox" id="nh_chol1" value="nh_chol">
                                <label class="form-check-label" for="nh_chol1">CHOLESTEROL</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_chol_icu" type="checkbox" id="nh_chol2" value="nh_icu">
                                <label class="form-check-label" for="nh_chol2">w/ ICU</label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_crea" type="checkbox" id="nh_crea1" value="nh_crea">
                                <label class="form-check-label" for="nh_crea1">CREATININE</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_crea_icu" type="checkbox" id="nh_crea2" value="nh_icu">
                                <label class="form-check-label" for="nh_crea2">w/ ICU</label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_tpro" type="checkbox" id="nh_tpro1" value="nh_tpro">
                                <label class="form-check-label" for="nh_tpro1">TOTAL PROTEIN</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_tpro_icu" type="checkbox" id="nh_tpro2" value="nh_icu">
                                <label class="form-check-label" for="nh_tpro2">w/ ICU</label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_albumin" type="checkbox" id="nh_albumin1" value="nh_albumin">
                                <label class="form-check-label" for="nh_albumin1">ALBUMIN</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_albumin_icu" type="checkbox" id="nh_albumin2" value="nh_icu">
                                <label class="form-check-label" for="nh_albumin2">w/ ICU</label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_globulin" type="checkbox" id="nh_globulin1" value="nh_globulin">
                                <label class="form-check-label" for="nh_globulin1">GLOBULIN</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_globulin_icu" type="checkbox" id="nh_globulin2" value="nh_icu">
                                <label class="form-check-label" for="nh_globulin2">w/ ICU</label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_ag_ratio" type="checkbox" id="nh_ag_ratio1" value="nh_ag_ratio">
                                <label class="form-check-label" for="nh_ag_ratio1">A/G RATIO</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_ag_ratio_icu" type="checkbox" id="nh_ag_ratio2" value="nh_icu">
                                <label class="form-check-label" for="nh_ag_ratio2">w/ ICU</label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_sgot" type="checkbox" id="nh_sgot1" value="nh_sgot">
                                <label class="form-check-label" for="nh_sgot1">SGOT</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_sgot_icu" type="checkbox" id="nh_sgot2" value="nh_icu">
                                <label class="form-check-label" for="nh_sgot2">w/ ICU</label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_sgpt" type="checkbox" id="nh_sgpt1" value="nh_sgpt">
                                <label class="form-check-label" for="nh_sgpt1">SGPT</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_sgpt_icu" type="checkbox" id="nh_sgpt2" value="nh_icu">
                                <label class="form-check-label" for="nh_sgpt2">w/ ICU</label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_alp" type="checkbox" id="nh_alp1" value="nh_alp">
                                <label class="form-check-label" for="nh_alp1">ALP</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_alp_icu" type="checkbox" id="nh_alp2" value="nh_icu">
                                <label class="form-check-label" for="nh_alp2">w/ ICU</label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_trigly" type="checkbox" id="nh_trigly1" value="nh_trigly">
                                <label class="form-check-label" for="nh_trigly1">TRIGLY</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_trigly_icu" type="checkbox" id="nh_trigly2" value="nh_icu">
                                <label class="form-check-label" for="nh_trigly2">w/ ICU</label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_hdl_chole" type="checkbox" id="nh_hdl_chole1" value="nh_hdl_chole">
                                <label class="form-check-label" for="nh_hdl_chole1">HDL-CHOLE</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_hdl_chole_icu" type="checkbox" id="nh_hdl_chole2" value="nh_icu">
                                <label class="form-check-label" for="nh_hdl_chole2">w/ ICU</label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_ldl_chole" type="checkbox" id="nh_ldl_chole1" value="nh_ldl_chole">
                                <label class="form-check-label" for="nh_ldl_chole1">LDL-CHOLE</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_ldl_chole_icu" type="checkbox" id="nh_ldl_chole2" value="nh_icu">
                                <label class="form-check-label" for="nh_ldl_chole2">w/ ICU</label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_vldl" type="checkbox" id="nh_vldl1" value="nh_vldl">
                                <label class="form-check-label" for="nh_vldl1">VLDL</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_vldl_icu" type="checkbox" id="nh_vldl2" value="nh_icu">
                                <label class="form-check-label" for="nh_vldl2">w/ ICU</label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_sodium" type="checkbox" id="nh_sodium1" value="nh_sodium">
                                <label class="form-check-label" for="nh_sodium1">SODIUM</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_sodium_icu" type="checkbox" id="nh_sodium2" value="nh_icu">
                                <label class="form-check-label" for="nh_sodium2">w/ ICU</label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_potassium" type="checkbox" id="nh_potassium1" value="nh_potassium">
                                <label class="form-check-label" for="nh_potassium1">POTASSIUM</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_potassium_icu" type="checkbox" id="nh_potassium2" value="nh_icu">
                                <label class="form-check-label" for="nh_potassium2">w/ ICU</label>
                            </div>
                        </td>
                    </tr>

                    <tr>

                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_chloride" type="checkbox" id="nh_chloride1" value="nh_chloride">
                                <label class="form-check-label" for="nh_chloride1">CHLORIDE</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_chloride_icu" type="checkbox" id="nh_chloride2" value="nh_icu">
                                <label class="form-check-label" for="nh_chloride2">w/ ICU</label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_hbaic" type="checkbox" id="nh_hbaic1" value="nh_hbaic">
                                <label class="form-check-label" for="nh_hbaic1">HBAIC</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_hbaic_icu" type="checkbox" id="nh_hbaic2" value="nh_icu">
                                <label class="form-check-label" for="nh_hbaic2">w/ ICU</label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_amylase" type="checkbox" id="nh_amylase1" value="nh_amylase">
                                <label class="form-check-label" for="nh_amylase1">AMYLASE</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_amylase_icu" type="checkbox" id="nh_amylase2" value="nh_icu">
                                <label class="form-check-label" for="nh_amylase2">w/ ICU</label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_ica" type="checkbox" id="nh_ica1" value="nh_ica">
                                <label class="form-check-label" for="nh_ica1">ICA</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_ica_icu" type="checkbox" id="nh_ica2" value="nh_icu">
                                <label class="form-check-label" for="nh_ica2">w/ ICU</label>
                            </div>
                        </td>

                    </tr>

                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_ogtt" type="checkbox" id="nh_ogtt1" value="nh_ogtt">
                                <label class="form-check-label" for="nh_ogtt1">OGTT</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_ogtt_icu" type="checkbox" id="nh_ogtt2" value="nh_icu">
                                <label class="form-check-label" for="nh_ogtt2">w/ ICU</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_ldh" type="checkbox" id="nh_ldh1" value="nh_ldh">
                                <label class="form-check-label" for="nh_ldh1">LDH</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_ldh_icu" type="checkbox" id="nh_ldh2" value="nh_icu">
                                <label class="form-check-label" for="nh_ldh2">w/ ICU</label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_mg" type="checkbox" id="nh_mg1" value="nh_mg">
                                <label class="form-check-label" for="nh_mg1">MG</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_mg_icu" type="checkbox" id="nh_mg2" value="nh_icu">
                                <label class="form-check-label" for="nh_mg2">w/ ICU</label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_tbili" type="checkbox" id="nh_tbili1" value="nh_tbili">
                                <label class="form-check-label" for="nh_tbili1">TOTAL BILIRUBIN</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_tbili_icu" type="checkbox" id="nh_tbili2" value="nh_icu">
                                <label class="form-check-label" for="nh_tbili2">w/ ICU</label>
                            </div>
                        </td>


                    </tr>

                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_dbili" type="checkbox" id="nh_dbili1" value="nh_dbili">
                                <label class="form-check-label" for="nh_dbili1">DIRECT-BILI</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_dbili_icu" type="checkbox" id="nh_dbili2" value="nh_icu">
                                <label class="form-check-label" for="nh_dbili2">w/ ICU</label>
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_indbili" type="checkbox" id="nh_indbili1" value="nh_indbili">
                                <label class="form-check-label" for="nh_indbili1">INDIRECT-BILI</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_indbili_icu" type="checkbox" id="nh_indbili2" value="nh_icu">
                                <label class="form-check-label" for="nh_indbili2">w/ ICU</label>
                            </div>
                        </td>

                        <td>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_phosphorus" type="checkbox" id="nh_phosphorus1" value="nh_phosphorus">
                                <label class="form-check-label" for="nh_phosphorus1">PHOSPHORUS</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="nh_phosphorus_icu" type="checkbox" id="nh_phosphorus2" value="nh_icu">
                                <label class="form-check-label" for="nh_phosphorus2">w/ ICU</label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="5">
                            <input type="submit" value="Submit" class="btn btn-block btn-info" name="nh_table_submit">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
</div>

    <?php include 'templates/footer.php'; ?>