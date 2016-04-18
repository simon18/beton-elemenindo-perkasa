<!DOCTYPE html>
<html ng-app>
<head>
  <title>PT. Beton Elemenindo Perkasa</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <meta content="" name="description"/>
  <meta content="" name="author"/>
  <!-- BEGIN GLOBAL MANDATORY STYLES -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
  <link href="<?php echo $baseURL; ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo $baseURL; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo $baseURL; ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
  <!-- END GLOBAL MANDATORY STYLES -->
  <!-- BEGIN THEME STYLES -->
  <link href="<?php echo $baseURL; ?>assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo $baseURL; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo $baseURL; ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo $baseURL; ?>assets/css/plugins.css" rel="stylesheet" type="text/css"/>
  <link href="<?php echo $baseURL; ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
  <link href="<?php echo $baseURL; ?>assets/css/custom.css" rel="stylesheet" type="text/css"/>
  <!-- END THEME STYLES -->
  <link rel="shortcut icon" href="favicon.png"/>
  <style type="text/css">
    /*
      envor-preload
    */

    #envor-preload {
      position: fixed;
      left: 0px;
      top: 0px;
      background-color: #f2f2f2;
      height: 100%;
      width: 100%;
      z-index: 20000;
    }
    #envor-preload i.fa {
      position: absolute;
      width: 100px;
      height: 100px;
      left: 50%;
      margin-left: -50px;
      top: 50%;
      margin-top: -50px;
      line-height: 100px;
      text-align: center;
      font-size: 64px;
      border-radius: 200px;
      color: #DD4B39;
    }
    #envor-preload span {
      position: absolute;
      width: 200px;
      height: 40px;
      left: 50%;
      margin-left: -100px;
      top: 50%;
      margin-top: -80px;
      text-align: center;
      letter-spacing: 4px;
      color: #333;
    }
    .display-none{
      display:none;
    }

    #loader-image
    {
    display : none;
    }
    #loader-image
    {
    display : block;
    position : fixed;
    z-index: 100;
    background-image : url('<?php echo $baseURL; ?>assets/img/ajax_loading.gif');
    background-color:#666;
    opacity : 0.4;
    background-repeat : no-repeat;
    background-position : center;
    left : 0;
    bottom : 0;
    right : 0;
    top : 0;
    }
  </style>
</head>