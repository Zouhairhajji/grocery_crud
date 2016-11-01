<!-- Initialisation des variables -->
<?php $design = Design::instance(); ?>
<?php $this->load->view('template/footer')?>
<?php echo $design->render_js_down() ?>
<?php echo $design->render_custom_js() ?>
<?php echo $design->render_grocerycrud_js() ?>