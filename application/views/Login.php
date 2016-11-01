<!-- Initialisation des variables -->
<?php /* custom php initialisation */?>
<!DOCTYPE html>
<html>
    <head>
        <?php $this->load->view('template/header')?>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">

        <div class="wrapper">

            <?php $this->load->view('template/navbar')?>
            <?php $this->load->view('template/left_menu')?>
            

            <div class="content-wrapper">
                <?php $this->load->view('template/section_header')?>
                <section class="content">
                    code html
                </section>
            </div>
            
            <?php $this->load->view('template/end')?>
        </div>
    </body>
</html>