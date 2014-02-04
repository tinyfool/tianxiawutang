<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <title><?php echo $this->pageTitle;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- <?php
      $baseUrl = Yii::app()->theme->baseUrl; 
      $cs = Yii::app()->getClientScript();
      Yii::app()->clientScript->registerCoreScript('jquery');
    ?> -->
    <link href="<?php echo $baseUrl;?>/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {padding-top: 60px;}
    .footer {
    text-align: center;
    padding: 30px 0;
    border-top: 1px solid 
    #e5e5e5;
    background-color: 
    #f5f5f5;
    }
    </style>
  </head>
<body>  
<?php require_once('tpl_navigation.php')?>
