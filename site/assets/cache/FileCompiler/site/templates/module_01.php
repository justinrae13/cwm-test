<?php 

$query_uri = 'http://informea.pops.int/mfilesInformea/MFilesMea.svc/Documents?$top=20&$filter=titles/any(x:%20x/language%20eq%20%27en%27)%20and%20files/any(x:%20x/brsExtension%20eq%20%27pdf%27)%20and%20titles/any(x:%20substringof(%27convention%27,%20x/value)%20eq%20true)%20and%20titles/any(x:%20substringof(%27introduction%27,%20x/value)%20eq%20true)&$select=updated,authors,authors/value,files,files/url,files/language,tags,tags/value,types,types/value,titles,titles/value&$expand=authors,files,tags,types,titles';
$build_entries = new CWPlatform\InformeaData\BuildEntryData("module_1", $query_uri);
$build_entries->execute();

 include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/_head.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); // include header markup

?>

<div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo $config->urls->assets ?>images/banner-03.jpg" 
        style="height: 150px; display: flex; align-items: flex-end; color: #fff;">
        
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="text-shadow: 3px 3px 3px #1d3549">
                <span style="font-size: 60px;">Module 1</span>
            </div>
        </div>
    </div>

</div>

<div class="container buffer">
    <div class="row">
        <div class="col-md-12">
            <p class="text-center iframeWrapper" style="padding-top: 0%; padding-bottom: 56.25%;">
                <iframe scrolling="no" allowTransparency="true" allowfullscreen frameborder="0" src="https://goanimate.com/player/embed/0erbqmETFHsM"></iframe>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-1 col-md-10">
            <h2><?php echo $page->title ?></h2>
            <hr />
            <?php if (count($build_entries->getEntries()) > 0): ?>
                <h3>Useful information and tools</h3>
                <div class="list-group">
                    <?php foreach ($build_entries->getEntries() as $entry): ?>
                        <a href="<?php echo $entry->file_url ?>" class="list-group-item" target="_blank">
                            <?php echo $entry->title ?><br />
                            <small class="text-muted"><?php echo $entry->author ?></small>
                        </a>
                    <?php endforeach ?>
                </div>
            <?php endif ?>
        </div>
    </div>
</div>

<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/_foot.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); ?>