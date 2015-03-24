<?php
    include(dirname(__FILE__).'/header.php');

    $flag = true;
    if ($pageTitle == 'Contact')
    {
        $flag = false;
    }


    if ($flag)
    {
?>
	<section id="portfolio">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <!-- <h2 class="bold"><span class="label label-info"><?php echo $pageTitle; ?></span></h2> -->
                        <h2><span class="label label-info"><?php echo $pageTitle; ?></span></h2>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php
    }
                    $page = '_content.php';
                    if (isset($contentPage)) $page = $contentPage;

                    include(dirname(__FILE__).'/'.$contentPath.'/'.$page);

    if ($flag)
    {
                ?>

            </div>
        </div>
    </section>

<?php
    }
    
    include(dirname(__FILE__).'/footer.php');
?>
