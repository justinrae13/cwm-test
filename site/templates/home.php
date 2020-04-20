<?php include('./_head.php'); // include header markup ?>
    <style>
        a{
            cursor: pointer
        }
    </style>
    <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo $config->urls->assets ?>images/home-01.jpg" 
        style="display: flex; justify-content: center; align-items: center; color: #fff; height: 500px;">
        
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center" style="text-shadow: 2px 2px 3px #1d3549">
                    <span style="font-size: 60px;">CHEMICALS AND WASTE PLATFORM</span>
                    <h3 style="display: none;">This site will help you reconnect with your former classmates, colleagues and UNITAR experts and trainers.</h3>
                </div>
            </div>
        </div>

    </div>

    <div class="container buffer">

        <div class="row">
	    <div class="col-sm-6">
		<div class="row">
		    <div class="col-xs-3">
			    <img src="<?php echo $config->urls->assets ?>images/logo-unitar.png" class="img-responsive" style="max-height: 100px;"></img>
		    </div>
            <div class="col-xs-3">
                <img src="<?php echo $config->urls->assets ?>images/logo-unep.png" class="img-responsive" style="max-height: 95px; padding-top: 15px;"/>
            </div>
            <div class="col-xs-3">
                <img src="<?php echo $config->urls->assets ?>images/logo-basel.png" class="img-responsive"  style="max-height: 85px;" />
            </div>
            <div class="col-xs-3">
                <img src="<?php echo $config->urls->assets ?>images/logo-rotterdam.png" class="img-responsive"  style="max-height: 85px;" />
            </div>
		</div>
	    </div>
	    <div class="col-sm-6">
		<div class="row">
		    <div class="col-xs-3">
                <img src="<?php echo $config->urls->assets ?>images/logo-stockholm.png" class="img-responsive" style="max-height: 85px;">
            </div>
            <div class="col-xs-6">
                <img src="<?php echo $config->urls->assets ?>images/logo-minamata.png" class="img-responsive"  style="max-height: 85px; padding-top: 10px;" />
            </div>
		    <div class="col-xs-3">
			    <img src="<?php echo $config->urls->assets ?>images/logo-fao.png" class="img-responsive" style="max-height: 85px;"></img>
		    </div>

		</div>
   	    </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h4 style="padding: 20px 0px;" class="text-center">
                    The purpose of this platform is to assist countries in the ratification and implementation of Basel, Rotterdam, Stockholm and Minamata Conventions in a synergetic and efficient way.
                </h4>

                <hr />
            </div>
        </div>

	<h1 style="padding-bottom: 30px;" class="text-center">Learn</h1>

        
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body" style="box-shadow: 0px 2px 27px -5px rgba(99,99,99,1); border-bottom: 2px solid #3e8ede">
                        <div style="margin: -15px -15px 20px -15px; border-bottom: 1px solid #ddd">
                            <a onclick='goToModule("module-1")'><img src="<?php echo $config->urls->assets ?>images/snap-module-01.PNG" class="img-responsive" /></a>
                        </div>
                        <h3>
                            <a onclick='goToModule("module-1")'>Module 1</a>
                        </h3>
                        <h4 class="text-muted">
                            Chemicals and Conventions
                        </h4>
                        <h5>
                            Why do we need chemicals and related global environment agreements?
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body" style="box-shadow: 0px 2px 27px -5px rgba(99,99,99,1); border-bottom: 2px solid #3e8ede">
                        <div style="margin: -15px -15px 20px -15px; border-bottom: 1px solid #ddd">
                            <a onclick='goToModule("module-2")'><img src="<?php echo $config->urls->assets ?>images/snap-module-02.PNG" class="img-responsive"/></a>
                        </div>
                        <h3>
                            <a onclick='goToModule("module-2")'>Module 2</a>
                        </h3>
                        <h4 class="text-muted">
                            Chemicals, Wastes and Conventions: The Life-Cycle Approach
                        </h4>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body" style="box-shadow: 0px 2px 27px -5px rgba(99,99,99,1); border-bottom: 2px solid #3e8ede">
                        <div style="margin: -15px -15px 20px -15px; border-bottom: 1px solid #ddd">
                            <a href="/module-3"><img src="<?php echo $config->urls->assets ?>images/snap-module-03.JPG" class="img-responsive"/></a>
                        </div>
                        <h3>
                            <a href="/module-3">Module 3</a>
                        </h3>
                        <h4 class="text-muted">
                            Inventories and Common Approaches
                        </h4>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body" style="box-shadow: 0px 2px 27px -5px rgba(99,99,99,1); border-bottom: 2px solid #3e8ede">
                        <div style="margin: -15px -15px 20px -15px; border-bottom: 1px solid #ddd">
                            <a href="/module-1"><img src="<?php echo $config->urls->assets ?>images/snap-module-01.PNG" class="img-responsive" /></a>
                        </div>
                        <h3>
                            <a href="/module-1">Module 4</a>
                        </h3>
                        <h4 class="text-muted">
                            Chemicals and Conventions
                        </h4>
                        <h5>
                            Why do we need chemicals and related global environment agreements?
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body" style="box-shadow: 0px 2px 27px -5px rgba(99,99,99,1); border-bottom: 2px solid #3e8ede">
                        <div style="margin: -15px -15px 20px -15px; border-bottom: 1px solid #ddd">
                            <a href="/module-2"><img src="<?php echo $config->urls->assets ?>images/snap-module-02.PNG" class="img-responsive"/></a>
                        </div>
                        <h3>
                            <a href="/module-2">Module 5</a>
                        </h3>
                        <h4 class="text-muted">
                            Chemicals, Wastes and Conventions: The Life-Cycle Approach
                        </h4>
                    </div>
                </div>
            </div>

        </div>
        
    </div> <!-- /container -->

    <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo $config->urls->assets ?>images/208819.jpg" style="height: 225px; display: none;"></div>

    <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo $config->urls->assets ?>images/home-02.jpg" style="height: 225px;"></div>

    <!--<div class="container buffer">

        <h1 style="padding-bottom: 30px;" class="text-center">Other Resources</h1>

        <div class="row">

            <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-body" style="box-shadow: 0px 2px 27px -5px rgba(99,99,99,1);">
                            <div style="margin: -15px -15px 20px -15px;">
                                <img src="/site/assets/images/snap-mercurylearn.PNG" class="img-responsive">
                            </div>
                            <h3 class="text-center">
                                <a href="http://mercurylearn.unitar.org" target="_blank">MercuryLearn</a>
                            </h3>
                        </div>
                    </div>
                </div>

            <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-body" style="box-shadow: 0px 2px 27px -5px rgba(99,99,99,1);">
                            <div style="margin: -15px -15px 20px -15px;">
                                <img src="/site/assets/images/snap-informea.PNG" class="img-responsive">
                            </div>
                            <h3 class="text-center">
                                <a href="https://www.informea.org/en" target="_blank">InforMEA</a>
                            </h3>
                        </div>
                    </div>
                </div>

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body" style="box-shadow: 0px 2px 27px -5px rgba(99,99,99,1);">
                        <div style="margin: -15px -15px 20px -15px;">
                            <img src="/site/assets/images/snap-brs.PNG" class="img-responsive">
                        </div>
                        <a class="text-center" href="http://www.brsmeas.org/Implementation/Publications/ScientificandTechnicalPublications/tabid/3790/language/en-US/Default.aspx" target="_blank">
                                        <h4>Synergies among the Basel, Rotterdam and Stockholm conventions</h4>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        
    </div>-->
<script>
    function goToModule(module){
        window.open(window.location.href+module, '_blank');
    }
</script>
<?php include('./_foot.php'); ?>
