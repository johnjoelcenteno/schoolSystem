<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>School System 404</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="<?= base_url() ?>assets/admin/pages/css/error.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link href="<?= base_url() ?>assets/global/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/global/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/admin/layout4/css/layout.css" rel="stylesheet" type="text/css" />
    <link id="style_color" href="<?= base_url() ?>assets/admin/layout4/css/themes/light.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/admin/layout4/css/custom.css" rel="stylesheet" type="text/css" />
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico" />
</head>

<body class="page-404-full-page">
    <div class="row">
        <div class="col-md-12 page-404">
            <div class="number">
                404
            </div>
            <div class="details">
                <h3>Oops! You're lost.</h3>
                <p>
                    We can not find the page you're looking for.<br />
                    <a href="index.html">
                        Return home </a>
                    or try the search bar below.
                </p>
                <form action="#">
                    <div class="input-group input-medium">
                        <input type="text" class="form-control" placeholder="keyword...">
                        <span class="input-group-btn">
                            <button type="submit" class="btn blue"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                    <!-- /input-group -->
                </form>
            </div>
        </div>
    </div>

    <script src="<?= base_url() ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
    <script src="<?= base_url() ?>assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <script src="<?= base_url() ?>assets/global/scripts/metronic.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
    <script>
        jQuery(document).ready(function() {
            Metronic.init(); // init metronic core components
            Layout.init(); // init current layout
            Demo.init(); // init demo features
        });
    </script>
    <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->

</html>