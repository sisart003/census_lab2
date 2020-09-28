<?php

require '../config/database.php';
//call the autoload
require 'vendor/autoload.php';
//load phpspreadsheet class using namespaces
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
//call xlsx writer class to make an xlsx file
//use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Style\Alignment;

$reader = IOFactory::createReader('Xlsx');
$spreadsheet = $reader->load('result.xlsx');

// nh_opd_male
// nh_opd_female
// nh_ip_male
// nh_ip_female

// hans_opd_male
// hans_opd_female
// hans_ip_male
// hans_ip_female
include '../config/process.php';

$spreadsheet->getActiveSheet()
            // HANSEN OPD MALE
            ->setCellValue('B5', $hgt_hansom_tally)
            ->setCellValue('B6', $rbs_hansom_tally)
            ->setCellValue('B7', $fbs_hansom_tally)
            ->setCellValue('B8', $bun_hansom_tally)
            ->setCellValue('B9', $bua_hansom_tally)
            ->setCellValue('B10', $chol_hansom_tally)
            ->setCellValue('B11', $crea_hansom_tally)
            ->setCellValue('B12', $t_pro_hansom_tally)
            ->setCellValue('B13', $alb_hansom_tally)
            ->setCellValue('B14', $glo_hansom_tally)
            ->setCellValue('B15', $agr_hansom_tally)
            ->setCellValue('B16', $sgot_hansom_tally)
            ->setCellValue('B17', $sgpt_hansom_tally)
            ->setCellValue('B18', $alp_hansom_tally)
            ->setCellValue('B19', $trigly_hansom_tally)
            ->setCellValue('B20', $hdlc_hansom_tally)
            ->setCellValue('B21', $ldlc_hansom_tally)
            ->setCellValue('B22', $vldl_hansom_tally)
            ->setCellValue('B23', $sodium_hansom_tally)
            ->setCellValue('B24', $pot_hansom_tally)
            ->setCellValue('B25', $chloride_hansom_tally)
            ->setCellValue('B26', $dba_c_hansom_tally)
            ->setCellValue('B27', $amylase_hansom_tally)
            ->setCellValue('B28', $i_ca_hansom_tally)
            ->setCellValue('B29', $ogtt_hansom_tally)

            // HANSEN OPD FEMALE
            ->setCellValue('C5', $hgt_hansof_tally)
            ->setCellValue('C6', $rbs_hansof_tally)
            ->setCellValue('C7', $fbs_hansof_tally)
            ->setCellValue('C8', $bun_hansof_tally)
            ->setCellValue('C9', $bua_hansof_tally)
            ->setCellValue('C10', $chol_hansof_tally)
            ->setCellValue('C11', $crea_hansof_tally)
            ->setCellValue('C12', $t_pro_hansof_tally)
            ->setCellValue('C13', $alb_hansof_tally)
            ->setCellValue('C14', $glo_hansof_tally)
            ->setCellValue('C15', $agr_hansof_tally)
            ->setCellValue('C16', $sgot_hansof_tally)
            ->setCellValue('C17', $sgpt_hansof_tally)
            ->setCellValue('C18', $alp_hansof_tally)
            ->setCellValue('C19', $trigly_hansof_tally)
            ->setCellValue('C20', $hdlc_hansof_tally)
            ->setCellValue('C21', $ldlc_hansof_tally)
            ->setCellValue('C22', $vldl_hansof_tally)
            ->setCellValue('C23', $sodium_hansof_tally)
            ->setCellValue('C24', $pot_hansof_tally)
            ->setCellValue('C25', $chloride_hansof_tally)
            ->setCellValue('C26', $dba_c_hansof_tally)
            ->setCellValue('C27', $amylase_hansof_tally)
            ->setCellValue('C28', $i_ca_hansof_tally)
            ->setCellValue('C29', $ogtt_hansof_tally)

            // // HANSEN IN-PATIENT MALE
            ->setCellValue('D5', $hgt_hansipm_tally)
            ->setCellValue('D6', $rbs_hansipm_tally)
            ->setCellValue('D7', $fbs_hansipm_tally)
            ->setCellValue('D8', $bun_hansipm_tally)
            ->setCellValue('D9', $bua_hansipm_tally)
            ->setCellValue('D10', $chol_hansipm_tally)
            ->setCellValue('D11', $crea_hansipm_tally)
            ->setCellValue('D12', $t_pro_hansipm_tally)
            ->setCellValue('D13', $alb_hansipm_tally)
            ->setCellValue('D14', $glo_hansipm_tally)
            ->setCellValue('D15', $agr_hansipm_tally)
            ->setCellValue('D16', $sgot_hansipm_tally)
            ->setCellValue('D17', $sgpt_hansipm_tally)
            ->setCellValue('D18', $alp_hansipm_tally)
            ->setCellValue('D19', $trigly_hansipm_tally)
            ->setCellValue('D20', $hdlc_hansipm_tally)
            ->setCellValue('D21', $ldlc_hansipm_tally)
            ->setCellValue('D22', $vldl_hansipm_tally)
            ->setCellValue('D23', $sodium_hansipm_tally)
            ->setCellValue('D24', $pot_hansipm_tally)
            ->setCellValue('D25', $chloride_hansipm_tally)
            ->setCellValue('D26', $dba_c_hansipm_tally)
            ->setCellValue('D27', $amylase_hansipm_tally)
            ->setCellValue('D28', $i_ca_hansipm_tally)
            ->setCellValue('D29', $ogtt_hansipm_tally)

            // // HANSEN IN-PATIENT FEMALE
            ->setCellValue('E5', $hgt_hansipf_tally)
            ->setCellValue('E6', $rbs_hansipf_tally)
            ->setCellValue('E7', $fbs_hansipf_tally)
            ->setCellValue('E8', $bun_hansipf_tally)
            ->setCellValue('E9', $bua_hansipf_tally)
            ->setCellValue('E10', $chol_hansipf_tally)
            ->setCellValue('E11', $crea_hansipf_tally)
            ->setCellValue('E12', $t_pro_hansipf_tally)
            ->setCellValue('E13', $alb_hansipf_tally)
            ->setCellValue('E14', $glo_hansipf_tally)
            ->setCellValue('E15', $agr_hansipf_tally)
            ->setCellValue('E16', $sgot_hansipf_tally)
            ->setCellValue('E17', $sgpt_hansipf_tally)
            ->setCellValue('E18', $alp_hansipf_tally)
            ->setCellValue('E19', $trigly_hansipf_tally)
            ->setCellValue('E20', $hdlc_hansipf_tally)
            ->setCellValue('E21', $ldlc_hansipf_tally)
            ->setCellValue('E22', $vldl_hansipf_tally)
            ->setCellValue('E23', $sodium_hansipf_tally)
            ->setCellValue('E24', $pot_hansipf_tally)
            ->setCellValue('E25', $chloride_hansipf_tally)
            ->setCellValue('E26', $dba_c_hansipf_tally)
            ->setCellValue('E27', $amylase_hansipf_tally)
            ->setCellValue('E28', $i_ca_hansipf_tally)
            ->setCellValue('E29', $ogtt_hansipf_tally)

            // // NON-HANSEN OPD MALE
            ->setCellValue('I5', $hgt_nhom_tally)
            ->setCellValue('I6', $rbs_nhom_tally)
            ->setCellValue('I7', $fbs_nhom_tally)
            ->setCellValue('I8', $bun_nhom_tally)
            ->setCellValue('I9', $bua_nhom_tally)
            ->setCellValue('I10', $chol_nhom_tally)
            ->setCellValue('I11', $crea_nhom_tally)
            ->setCellValue('I12', $t_pro_nhom_tally)
            ->setCellValue('I13', $alb_nhom_tally)
            ->setCellValue('I14', $glo_nhom_tally)
            ->setCellValue('I15', $agr_nhom_tally)
            ->setCellValue('I16', $sgot_nhom_tally)
            ->setCellValue('I17', $sgpt_nhom_tally)
            ->setCellValue('I18', $alp_nhom_tally)
            ->setCellValue('I19', $trigly_nhom_tally)
            ->setCellValue('I20', $hdlc_nhom_tally)
            ->setCellValue('I21', $ldlc_nhom_tally)
            ->setCellValue('I22', $vldl_nhom_tally)
            ->setCellValue('I23', $sodium_nhom_tally)
            ->setCellValue('I24', $pot_nhom_tally)
            ->setCellValue('I25', $chloride_nhom_tally)
            ->setCellValue('I26', $dba_c_nhom_tally)
            ->setCellValue('I27', $amylase_nhom_tally)
            ->setCellValue('I28', $i_ca_nhom_tally)
            ->setCellValue('I29', $ogtt_nhom_tally)

            // // NON-HANSEN OPD FEMALE
            ->setCellValue('J5', $hgt_nhof_tally)
            ->setCellValue('J6', $rbs_nhof_tally)
            ->setCellValue('J7', $fbs_nhof_tally)
            ->setCellValue('J8', $bun_nhof_tally)
            ->setCellValue('J9', $bua_nhof_tally)
            ->setCellValue('J10', $chol_nhof_tally)
            ->setCellValue('J11', $crea_nhof_tally)
            ->setCellValue('J12', $t_pro_nhof_tally)
            ->setCellValue('J13', $alb_nhof_tally)
            ->setCellValue('J14', $glo_nhof_tally)
            ->setCellValue('J15', $agr_nhof_tally)
            ->setCellValue('J16', $sgot_nhof_tally)
            ->setCellValue('J17', $sgpt_nhof_tally)
            ->setCellValue('J18', $alp_nhof_tally)
            ->setCellValue('J19', $trigly_nhof_tally)
            ->setCellValue('J20', $hdlc_nhof_tally)
            ->setCellValue('J21', $ldlc_nhof_tally)
            ->setCellValue('J22', $vldl_nhof_tally)
            ->setCellValue('J23', $sodium_nhof_tally)
            ->setCellValue('J24', $pot_nhof_tally)
            ->setCellValue('J25', $chloride_nhof_tally)
            ->setCellValue('J26', $dba_c_nhof_tally)
            ->setCellValue('J27', $amylase_nhof_tally)
            ->setCellValue('J28', $i_ca_nhof_tally)
            ->setCellValue('J29', $ogtt_nhof_tally)

            // // NON-HANSEN IN-PATIENT MALE
            ->setCellValue('K5', $hgt_nhipm_tally)
            ->setCellValue('K6', $rbs_nhipm_tally)
            ->setCellValue('K7', $fbs_nhipm_tally)
            ->setCellValue('K8', $bun_nhipm_tally)
            ->setCellValue('K9', $bua_nhipm_tally)
            ->setCellValue('K10', $chol_nhipm_tally)
            ->setCellValue('K11', $crea_nhipm_tally)
            ->setCellValue('K12', $t_pro_nhipm_tally)
            ->setCellValue('K13', $alb_nhipm_tally)
            ->setCellValue('K14', $glo_nhipm_tally)
            ->setCellValue('K15', $agr_nhipm_tally)
            ->setCellValue('K16', $sgot_nhipm_tally)
            ->setCellValue('K17', $sgpt_nhipm_tally)
            ->setCellValue('K18', $alp_nhipm_tally)
            ->setCellValue('K19', $trigly_nhipm_tally)
            ->setCellValue('K20', $hdlc_nhipm_tally)
            ->setCellValue('K21', $ldlc_nhipm_tally)
            ->setCellValue('K22', $vldl_nhipm_tally)
            ->setCellValue('K23', $sodium_nhipm_tally)
            ->setCellValue('K24', $pot_nhipm_tally)
            ->setCellValue('K25', $chloride_nhipm_tally)
            ->setCellValue('K26', $dba_c_nhipm_tally)
            ->setCellValue('K27', $amylase_nhipm_tally)
            ->setCellValue('K28', $i_ca_nhipm_tally)
            ->setCellValue('K29', $ogtt_nhipm_tally)

            // // NON-HANSEN IN-PATIENT FEMALE
            ->setCellValue('L5', $hgt_nhipf_tally)
            ->setCellValue('L6', $rbs_nhipf_tally)
            ->setCellValue('L7', $fbs_nhipf_tally)
            ->setCellValue('L8', $bun_nhipf_tally)
            ->setCellValue('L9', $bua_nhipf_tally)
            ->setCellValue('L10', $chol_nhipf_tally)
            ->setCellValue('L11', $crea_nhipf_tally)
            ->setCellValue('L12', $t_pro_nhipf_tally)
            ->setCellValue('L13', $alb_nhipf_tally)
            ->setCellValue('L14', $glo_nhipf_tally)
            ->setCellValue('L15', $agr_nhipf_tally)
            ->setCellValue('L16', $sgot_nhipf_tally)
            ->setCellValue('L17', $sgpt_nhipf_tally)
            ->setCellValue('L18', $alp_nhipf_tally)
            ->setCellValue('L19', $trigly_nhipf_tally)
            ->setCellValue('L20', $hdlc_nhipf_tally)
            ->setCellValue('L21', $ldlc_nhipf_tally)
            ->setCellValue('L22', $vldl_nhipf_tally)
            ->setCellValue('L23', $sodium_nhipf_tally)
            ->setCellValue('L24', $pot_nhipf_tally)
            ->setCellValue('L25', $chloride_nhipf_tally)
            ->setCellValue('L26', $dba_c_nhipf_tally)
            ->setCellValue('L27', $amylase_nhipf_tally)
            ->setCellValue('L28', $i_ca_nhipf_tally)
            ->setCellValue('L29', $ogtt_nhipf_tally);




header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Cache-Control: max-age=0');
//set the header first, so the result will be treatedas an xlsx file


//make it an attachment so we can define filename
//make it an attachment so we can define filename
header('Content-Disposition: attachment;filename="census.xlsx"');

//create IOFactory object
$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');

//save into php output
$writer->save('php://output');