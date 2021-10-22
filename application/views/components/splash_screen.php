<style>
    * {
        color: white;
    }

    p {
        font-size: 2em;
    }


    .cogRotate {
        -webkit-animation: spin 4s linear infinite;
        -moz-animation: spin 4s linear infinite;
        animation: spin 4s linear infinite;
    }

    @-moz-keyframes spin {
        100% {
            -moz-transform: rotate(360deg);
        }
    }

    @-webkit-keyframes spin {
        100% {
            -webkit-transform: rotate(360deg);
        }
    }

    @keyframes spin {
        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }
</style>
<div style="margin-bottom: 59px;"></div>
<div class="text-center">
    <div id="typed-strings">


        <p>Initialization of package...</p>
    </div>
    <img src="<?= base_url() . "assets/img/logo.png" ?>" alt="">
    <p class="fonts"> <i class="fa fa-spinner fa-pulse" style="font-size:50px;margin-top:30%"></i>
    <h1 id="typed" style="margin-top: 50px;"></h1>

    </p>
</div>


<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<!-- do offline not cdn baka mahina yung internet sakanila -->
<script src="<?= base_url() ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>

<script>
    $(document).ready(function() {
        $('body').css("background-color", "#B3E5F0");

        var typed = new Typed('#typed', {
            stringsElement: '#typed-strings'
        });
        setTimeout(function() {
            window.location.replace("<?= base_url() . 'Dashboard' ?>");

        }, 2000);
    });
</script>