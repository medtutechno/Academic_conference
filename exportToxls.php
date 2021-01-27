<?php
/**
 * PHPExcel
 *
 * Copyright (C) 2006 - 2011 PHPExcel
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   PHPExcel
 * @package    PHPExcel
 * @copyright  Copyright (c) 2006 - 2011 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt	LGPL
 * @version    1.7.6, 2011-02-27
 */

/** Error reporting */
error_reporting(E_ALL);

//date_default_timezone_set('Europe/London');

/** PHPExcel */
require '../php/connect.php';
require_once '../Classes/PHPExcel.php';


// Create new PHPExcel object
echo date('H:i:s') . " Create new PHPExcel object\n";
$objPHPExcel = new PHPExcel();

// Set properties
/*$objPHPExcel->getProperties()->setCreator("Maarten Balliauw")
							 ->setLastModifiedBy("Maarten Balliauw")
							 ->setTitle("Office 2007 XLSX Test Document")
							 ->setSubject("Office 2007 XLSX Test Document")
							 ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
							 ->setKeywords("office 2007 openxml php")
							 ->setCategory("Test result file");*/


// Add some data
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'ลำดับ')
            ->setCellValue('B1', 'คำนำหน้า')
            ->setCellValue('C1', 'ชื่อ')
			->setCellValue('D1', 'นามสกุล')
			->setCellValue('E1', 'ประเภท')
            ->setCellValue('F1', 'สถานที่ทำงาน')
            ->setCellValte('G1', 'เบอร์ติดต่อ');

// Write data from MySQL result
$con = connect('localhost','root','medadmin','medtu_academic','utf8');
//$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");
//$objDB = mysql_select_db("mydatabase");
//$strSQL = "SELECT * FROM customer";
//$objQuery = mysql_query($strSQL);
$sql ='SELECT reg.reg_name,reg.reg_lastname,type_reg.type_reg,food.food,reg.tel
FROM register AS reg
LEFT JOIN type_reg
ON reg.type_reg_idtype_reg = type_reg.idtype_reg
LEFT JOIN food
ON reg.food_idfood = food.idfood';
$objQuery = query($sql);
$i = 2;
while($objResult=$objQuery->fetch_array()){
	$objPHPExcel->getActiveSheet()->setCellValue('A' . $i, $objResult["reg_name"]);
	$objPHPExcel->getActiveSheet()->setCellValue('B' . $i, $objResult["reg_lastname"]);
	$objPHPExcel->getActiveSheet()->setCellValue('C' . $i, $objResult["Email"]);
	$objPHPExcel->getActiveSheet()->setCellValue('D' . $i, $objResult["type_reg"]);
	$objPHPExcel->getActiveSheet()->setCellValue('E' . $i, $objResult["food"]);
	$objPHPExcel->getActiveSheet()->setCellValue('F' . $i, $objResult["Used"]);
	$i++;
}

// Rename sheet
echo date('H:i:s') . " Rename sheet\n";
$objPHPExcel->getActiveSheet()->setTitle('My Customer');


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);


// Save Excel 2007 file
echo date('H:i:s') . " Write to Excel2007 format\n";
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$strFileName = "myData.xlsx";
$objWriter->save($strFileName);