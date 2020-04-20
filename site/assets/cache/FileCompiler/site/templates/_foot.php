    <div>
        <div class="container" style="min-height: 200px; padding-top: 20px;">
            <footer>
                <div class="row">
                    <div class="col-md-9">
                        <!-- <i class="fa fa-facebook-official" style="font-size: 1.5em;" aria-hidden="true"></i>&nbsp;&nbsp;
                        <i class="fa fa-twitter" style="font-size: 1.5em;" aria-hidden="true"></i>&nbsp;&nbsp;
                        <i class="fa fa-linkedin" style="font-size: 1.5em;" aria-hidden="true"></i> -->

                        <div style="height: 150px; display: flex; align-items: flex-end; color: #000;">
                            <address style="padding-top: 20px;">
                                UNITAR, International Environment House,<br />
                                Chemin des Anémones 11-13,<br />
                                CH-1219 Châtelaine, Geneva, Switzerland
                            </address>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div style="height: 150px; display: flex; align-items: flex-end; color: #fff;">
                            <img src="<?php echo $config->urls->assets ?>/images/logo-foen.png" class="img-responsive"  style="max-height: 120px;" />
                        </div>
                    </div>
                </div>
            </footer>
        </div> <!-- /container -->
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo $config->urls->templates ?>scripts/bootstrap.min.js"></script>
    <script src="<?php echo $config->urls->templates ?>scripts/parallax.min.js"></script>

    <?php if (!is_null(getenv("ENV")) && getenv("ENV") == "production"): ?>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113866272-1"></script>    
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-113866272-1');
        </script>
    <?php endif; ?>
    
    <?php if (isset($additional_scripts)): ?>
        <?php echo $additional_scripts; ?>
    <?php endif ?>
</body>
</html>
