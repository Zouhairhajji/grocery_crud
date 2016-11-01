<!-- Initialisation des variables -->
<?php $design = Design::instance(); ?>



<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>AdminLTE 2 | Starter</title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

<?php echo $design->render_icone() ?>
<?php echo $design->render_css() ?>
<?php echo $design->render_custom_css() ?>
<?php echo $design->render_grocerycrud_css() ?>
<?php echo $design->render_js_top() ?>