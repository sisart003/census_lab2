<?php

//call the autoload
require 'vendor/autoload.php';
//load phpspreadsheet class using namespaces
use PhpOffice\PhpSpreadsheet\Spreadsheet;
//call xlsx writer class to make an xlsx file
//use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Borders;

//make a new spreadsheet object
$spreadsheet = new Spreadsheet();
//get current active sheet (first sheet)
$sheet = $spreadsheet->getActiveSheet();

//set default style
$spreadsheet->getDefaultStyle()
	->getFont()
	->setName('Calibri')
	->setSize(11);
	
$styleArray = array(
    'borders' => array(
        'outline' => array(
            'style' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
            'color' => array('argb' => '00000000'),
        ),
    ),
);

$sheet->getStyle('A1:P30')->applyFromArray($styleArray);

//heading
$spreadsheet->getActiveSheet()
	->setCellValue('B1', "HANSEN")
	->setCellValue('I1', "NON-HANSEN")
	->setCellValue('B2', "OPD")
	->setCellValue('D2', "IN-PATIENT")
	->setCellValue('I2', "OPD")
	->setCellValue('K2', "IN-PATIENT")
	->setCellValue('B4', "MALE")	//HANSEN IN-PATIENT FEMALE
	->setCellValue('C4', "FEMALE")	//HANSEN IN-PATIENT FEMALE
	->setCellValue('D4', "MALE")	//HANSEN IN-PATIENT FEMALE
	->setCellValue('E4', "FEMALE")	//HANSEN IN-PATIENT FEMALE
	
	->setCellValue('I4', "MALE")	//NON-HANSEN OPD MALE
	->setCellValue('J4', "FEMALE")	//NON-HANSEN OPD FEMALE
	->setCellValue('K4', "MALE")	//NON-HANSEN IN-PATIENT MALE
	->setCellValue('L4', "FEMALE") 	//NON-HANSEN IN-PATIENT FEMALE
	
	->setCellValue('F2', "PHILHEALTH")	//HANSEN
	->setCellValue('G2', "PAY")			//HANSEN
	->setCellValue('H2', "ICU")			//HANSEN
	->setCellValue('M2', "PHILHEALTH")	//NON-HANSEN
	->setCellValue('N2', "PAY")			//NON-HANSEN
	->setCellValue('O2', "ICU")			//NON-HANSEN
	->setCellValue('P2', "TOTAL")		//TOTAL
	
	
	->setCellValue('A5', "HGT/CBG")
	->setCellValue('A6', "RBS")
	->setCellValue('A7', "FBS")
	->setCellValue('A8', "BUN")
	->setCellValue('A9', "BUA")
	->setCellValue('A10', "CHOLESTEROL")
	->setCellValue('A11', "CREATININE")
	->setCellValue('A12', "TOTAL PROTEIN")
	->setCellValue('A13', "ALBUMIN")
	->setCellValue('A14', "GLOBULIN")
	->setCellValue('A15', "A/G RATIO")
	->setCellValue('A16', "SGOT")
	->setCellValue('A17', "SGPT")
	->setCellValue('A18', "ALP")
	->setCellValue('A19', "TRIGLY")
	->setCellValue('A20', "HDL-CHOLE")
	->setCellValue('A21', "LDL-CHOLE")
	->setCellValue('A22', "VLDL")
	->setCellValue('A23', "SODIUM")
	->setCellValue('A24', "POTASSIUM")
	->setCellValue('A25', "CHLORIDE")
	->setCellValue('A26', "HBA1c")
	->setCellValue('A27', "AMYLASE")
	->setCellValue('A28', "I Ca")
	->setCellValue('A29', "OGTT")
	->setCellValue('A30', "TOTAL");
	

//merge heading
$spreadsheet->getActiveSheet()->mergeCells("B1:H1");	//NON-HANSEN
$spreadsheet->getActiveSheet()->mergeCells("I1:P1");	//HANSEN
$spreadsheet->getActiveSheet()->mergeCells("A1:A4");	//BLANK	
$spreadsheet->getActiveSheet()->mergeCells("B2:C3");	//HANSEN OPD
$spreadsheet->getActiveSheet()->mergeCells("D2:E3");	//HANSEN IN-PATIENT
$spreadsheet->getActiveSheet()->mergeCells("I2:J3");	//NON-HANSEN OPD
$spreadsheet->getActiveSheet()->mergeCells("K2:L3");	//NON-HANSEN IN-PATIENT
$spreadsheet->getActiveSheet()->mergeCells("F2:F4");	//HANSEN PHILHEALTH
$spreadsheet->getActiveSheet()->mergeCells("M2:M4");	//NON-HANSEN PHILHEALTH	
$spreadsheet->getActiveSheet()->mergeCells("G2:G4");	//HANSEN PAY
$spreadsheet->getActiveSheet()->mergeCells("H2:H4");	//HANSEN ICU
$spreadsheet->getActiveSheet()->mergeCells("N2:N4");	//NON-HANSEN PAY
$spreadsheet->getActiveSheet()->mergeCells("O2:O4");	//NON-HANSEN ICU
$spreadsheet->getActiveSheet()->mergeCells("P2:P4");	//TOTAL

//set font style
$spreadsheet->getActiveSheet()->getStyle('B1')->getFont()->setSize(11);	//HANSEN FONT
$spreadsheet->getActiveSheet()->getStyle('I1')->getFont()->setSize(11);	//NON-HANSEN FONT

//set cell alignment
$spreadsheet->getActiveSheet()->getStyle('B1')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);	//HANSEN Horizontal Alignment
$spreadsheet->getActiveSheet()->getStyle('I1')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);	//NON-HANSEN Horizontal Alignment
$spreadsheet->getActiveSheet()->getStyle('F2')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);	
$spreadsheet->getActiveSheet()->getStyle('G2')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
$spreadsheet->getActiveSheet()->getStyle('H2')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
$spreadsheet->getActiveSheet()->getStyle('M2')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
$spreadsheet->getActiveSheet()->getStyle('N2')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
$spreadsheet->getActiveSheet()->getStyle('O2')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
$spreadsheet->getActiveSheet()->getStyle('P2')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

$spreadsheet->getActiveSheet()->getStyle('B4')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
$spreadsheet->getActiveSheet()->getStyle('C4')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
$spreadsheet->getActiveSheet()->getStyle('D4')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
$spreadsheet->getActiveSheet()->getStyle('E4')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

$spreadsheet->getActiveSheet()->getStyle('I4')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
$spreadsheet->getActiveSheet()->getStyle('J4')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
$spreadsheet->getActiveSheet()->getStyle('K4')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
$spreadsheet->getActiveSheet()->getStyle('L4')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

$spreadsheet->getActiveSheet()->getStyle('B2')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
$spreadsheet->getActiveSheet()->getStyle('D2')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
$spreadsheet->getActiveSheet()->getStyle('I2')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
$spreadsheet->getActiveSheet()->getStyle('K2')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

//set cell alignment
$spreadsheet->getActiveSheet()->getStyle('B1')->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);	//HANSEN Vertical Alignment
$spreadsheet->getActiveSheet()->getStyle('I1')->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);	//NON-HANSEN Vertical Alignment
$spreadsheet->getActiveSheet()->getStyle('F2')->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);
$spreadsheet->getActiveSheet()->getStyle('G2')->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);
$spreadsheet->getActiveSheet()->getStyle('H2')->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);
$spreadsheet->getActiveSheet()->getStyle('M2')->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);
$spreadsheet->getActiveSheet()->getStyle('N2')->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);
$spreadsheet->getActiveSheet()->getStyle('O2')->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);
$spreadsheet->getActiveSheet()->getStyle('P2')->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);

$spreadsheet->getActiveSheet()->getStyle('B2')->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);
$spreadsheet->getActiveSheet()->getStyle('D2')->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);
$spreadsheet->getActiveSheet()->getStyle('I2')->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);
$spreadsheet->getActiveSheet()->getStyle('K2')->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);

//setting column width
$spreadsheet->getActiveSheet()->getRowDimension('1')->setRowHeight(30);	//BLANK DIMENSION
$spreadsheet->getActiveSheet()->getColumnDimension('F')->setWidth(15);
$spreadsheet->getActiveSheet()->getColumnDimension('M')->setWidth(15);
$spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(16);

//set the header first, so the result will be treatedas an xlsx file
header('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

//make it an attachment so we can define filename
header('Content-Disposition: attachment;filename="census.xlsx"');



//create IOFactory object
$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');

//save into php output
$writer->save('php://output');

header("Location: index.php");