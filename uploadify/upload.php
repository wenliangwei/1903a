<?php
	/** @var 切片上传 [description] */

	// $arr= $_FILES;
	// // var_dump($arr);die;
	// $info=$_REQUEST;
	// $ext=explode(".",$info['Filename'])[1];
	// $fileName=$info['Filename'];
	// // var_dump($fileName);die;

	// $baseDir="./".date("Y-m-d/",time());
	// if(!is_dir($baseDir)){
	// 	mkdir($baseDir,0,777);
	// }
	// $filePath = $baseDir.$fileName;

	// $tmpName = $arr['Filedata']['tmp_name'];
	// $content = file_get_contents($tmpName);
	// file_put_contents($filePath,$content,FILE_APPEND);

	// $filePath = ltrim($filePath,".");
	// $fielPath = "/file/".$filePath;

	// $arrReturn = array(
	// 			"error" => 0,
	// 			"data" => array(
	// 				'path' => $filePath,
	// 			),
	// );
	// echo json_encode($arrReturn);
	
	// 无刷新上传图片
	$arrInfo = $_FILES['Filedata'];
	$tmpName = $arrInfo['tmp_name'];
	$realName= $arrInfo['name'];
	$ext = explode(".", $realName)[1];
	$baseName=md5(uniqid()).".$ext";

	$baseDir=Date("Y-m-d/",time());
	if(!is_dir($baseDir)){
		mkdir($baseDir,0,777);
	}
	$filePath = $baseDir.$baseName;
	move_uploaded_file($tmpName,$filePath);

	
