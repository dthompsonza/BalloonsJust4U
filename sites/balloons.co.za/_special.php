
<?php
        

    $category_id = get_cat_ID('Special');

    if ($category_id > 0)
    {

        $args = array(
        'posts_per_page'   => 1,
        'category'         => $category_id,
        'orderby'          => 'post_date',
        'order'            => 'DESC',
        'post_status'      => 'publish',
        'suppress_filters' => true );

        $myposts = get_posts( $args );

        //echo "<h1>".count($myposts)."-". $category_id ."</h1>";

        if (count($myposts) > 0)    
        {
?>

        
        <div class="row">

                <div class="col-lg-12">
                    <div class="specialsticker">
                        <img src="<?php bloginfo('template_directory'); ?>/img/limitedtimeoffer.png"  />
                    </div>  
                    <div class="panel">
                        
                        <?php the_content(''); ?>
                        <br style="clear: left;" />
                    </div>
                </div>
            </div>
            
        </div>
            
        

<?php
        }
    }
    ?>