<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
       <head>
              <title>Admin MOS Template</title>
              <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
              <meta http-equiv="Copyright" content="arirusmanto.com" />
              <meta name="description" content="Admin MOS Template" />
              <meta name="keywords" content="Admin Page" />
              <meta name="author" content="Ari Rusmanto" />
              <meta name="language" content="Bahasa Indonesia" />

              <link rel="shortcut icon" href="stylesheet/img/devil-icon.png" /> <!--Pemanggilan gambar favicon-->

              <!-- blueprint CSS framework -->
              <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
              <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
              <!--[if lt IE 8]>
              <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
              <![endif]-->

              <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
              <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
              <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/mos-style.css" />
              <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-editable.css" rel="stylesheet" />
              <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" rel="stylesheet" />
              <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/prettify.css" rel="stylesheet" />
              <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/select2.css" />
              
              
              <?php
              Yii::app()->getClientScript()->registerCoreScript('jquery.ui');
              Yii::app()->clientScript->registerCssFile(
              Yii::app()->clientScript->getCoreScriptUrl() . '/jui/css/base/jquery-ui.css');
              
              
              ?>

              
              <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/select2.js"></script>
              <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-editable.js"></script>
              <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.js"></script>
              <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap-contextmenu.js"></script>
              
              
              <script>  
                            $.fn.editable.defaults.mode = 'inline';  
                            
              </script>
              
              <title><?php
                            $cs = Yii::app()->getClientScript();
                            $cs->registerCoreScript('masterdata');
                            echo CHtml::encode($this->pageTitle); 
                     ?>
              </title>
       </head>

       <body>
              
              <div id="header">
                     <div class="inHeader">
                            <div class="mosAdmin">
                                   Hallo, Mas Administrator<br>
                                          <a href="">Lihat website</a> | <a href="">Help</a> | <a href="login.html">Keluar</a>
                                          <a href="#" id="username" data-type="text" data-pk="1" data-url="/post" data-original-title="Enter username">superuser</a>
                            </div>
                            <div class="clear"></div>
                     </div>
              </div>

              <div id="wrapper">
                     <div id="leftBar">
                            <ul>
                                   <li><a href="index.html">Dashboard</a></li>
                                   <li><a href="<?=Yii::app()->getBaseUrl(true)?>/index.php/role">Tabel</a></li>
                                   <li><a href="form.html">Form</a></li>
                            </ul>
                     </div>

                     <div id="rightContent">
                            <h3>
                                   <?php if($this->uniqueid == "user") echo "User Management"?>
                            </h3>      
<!--                            <div class="quoteOfDay">
                                   <b>Quote of the day :</b><br />
                                   <i style="color: #5b5b5b;">"If you think you can, you really can"</i>
                            </div>-->
                            <div class="shortcutHome">
                                   <a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/photo.png" /><br />Dashboard</a>
                            </div>
                            <div class="shortcutHome">
                                   <a <?php if($this->uniqueid == "masterdata") echo 'class="menucurrent"'?> href="<?=Yii::app()->getBaseUrl(true)?>/index.php/masterdata"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/masterdata.png" /><br />Master Data</a>
                            </div>
                            
                            <div class="shortcutHome">
                                   <a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/halaman.png" /><br />Tambah Halaman</a>
                            </div>
                            <div class="shortcutHome">
                                   <a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/template.png" /><br />Pengaturan Template</a>
                            </div>
                            <div class="shortcutHome">
                                   <a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/quote.png" /><br />Tambah QOD</a>
                            </div>
                            <div class="shortcutHome">
                                   <a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/bukutamu.png" /><br />Data Buku Tamu</a>
                            </div>
                            <div class="shortcutHome">
                                   <a <?php if($this->uniqueid == "user") echo 'class="menucurrent"'?> href="<?=Yii::app()->getBaseUrl(true)?>/index.php/user"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/adduser.png" /><br />User Management</a>
                            </div>

                            <div class="clear"></div>

                            <div class="smallRightWrapper">
                                   <?php echo $content; ?>
                            </div>
                     </div>
              </div>       
              <div class="clear"></div>
              <div id="footer">
                     &copy; 2013 MOS css template | <a href="#">renja.kominfo.com</a> |
                     design <a href="http://arirusmanto.com" target="_blank">arirusmanto.com</a><br />
                     redesign <a href="#">Rizky Ramadhan</a> | Silahkan baca <a
                            href="lisensi.txt" target="_blank">Lisensi</a>
              </div>


       </body>
</html>
