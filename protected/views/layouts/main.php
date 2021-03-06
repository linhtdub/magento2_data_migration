<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap/css/bootstrap-theme.min.css">

    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/script.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
</head>

<body>

<div id="page" class="container">
    <div class="row">

        <div id="header">
            <div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
        </div><!-- header -->

        <?php
        /*
        $this->widget('zii.widgets.CBreadcrumbs', array(
		'links'=>$this->breadcrumbs,
	    ));
        */
        ?><!-- breadcrumbs -->

        <?php if(Yii::app()->user->hasFlash('error')):  ?>
            <div id="message" class="flash-error">
                <?php echo Yii::app()->user->getFlash('error'); ?>
            </div>
        <?php endif;?>

        <?php if(Yii::app()->user->hasFlash('note')):  ?>
            <div id="message" class="flash-notice">
                <?php echo Yii::app()->user->getFlash('note'); ?>
            </div>

        <?php endif;?>

        <?php if(Yii::app()->user->hasFlash('success')):  ?>
            <div id="message" class="flash-success">
                <?php echo Yii::app()->user->getFlash('success'); ?>
            </div>
        <?php endif;?>

        <?php echo $content; ?>

        <div id="footer">
            Copyright &copy; <?php echo date('Y'); ?> by UberTheme.<br/>
            All Rights Reserved.<br/>
            <?php echo Yii::powered(); ?>
        </div><!-- footer -->

    </div>
</div><!-- page -->

<!-- markup for mask box-->
<div id="processor-box" class="modal" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog loading-box">
        <div class="modal-content">
            <div class="modal-body">
                <div>
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/css/images/loading.gif"/>
                    <?php echo Yii::t('frontend', 'Data processing. Please wait…'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--// markup for mask box-->

</body>
</html>