{"filter":false,"title":"archive.php","tooltip":"/wp/wordpress/wp-content/themes/Instituto/archive.php","undoManager":{"mark":3,"position":3,"stack":[[{"start":{"row":0,"column":0},"end":{"row":109,"column":2},"action":"insert","lines":["<?php","get_header();","?>","        ","<?php","    ","","?>","<div class=\"imagen_post\" style=\"background-image: url('<?php echo get_template_directory_uri();?>/img/artsfon.com-73234.jpg')\">","    <?php get_template_part('inc/nav2'); ?>","    <br><br>","    <center>","        <span class='tituloPostDestacado'>","            <?php","                $count = $wp_the_query->post_count;","                if($count == 1){","                   echo '<center>1 Post Found</center>'; ","                }else{","                   echo '<center>'. $count .' Posts Found</center>';  ","                }","        ?>","        </span>","    </center>","</div>","<div class=\"breadcrumbs\"><?php custom_breadcrumbs() ?></div>","    <?php","        echo '<br><center>';","        if(is_category()){","            //echo 'Category Archives: ' . single_cat_title();","            printf(__('<span class=\"titulillo\">... Category Archives: %s </span>', 'shape'),'<span>' . single_cat_title ('', false) . ' ... </span>');","        }elseif(is_tag()){","            //echo 'Tag Archives';","            printf(__('<span class=\"titulillo\"> ... Tag Archives: %s </span>', 'shape'),'<span>' . single_tag_title ('', false) . '... </span>');","        }elseif(is_author()){","            //echo 'Author Archives';","            the_post();","            printf(__('<span class=\"titulillo\"> ... Author Archives: %s </span>' , 'shape'), '<span class=\"vcard\"><a class=\"url fn n\" href=\"' . get_author_posts_url(get_the_author_meta(\"ID\")) . '\" title=\"' . esc_attr(get_the_author()) . '\" rel=\"me\">' . get_the_author() . '</a> ... </span>');","            rewind_posts();","        }elseif(is_day()){","            //echo 'Day Archives';","            printf(__('<span class=\"titulillo\"> ... Daily Archives: %s </span>' , 'shape'),'<span>' . get_the_date() . '...</span>');","        }elseif(is_month()){","            //echo 'Month Archives';","            printf(__('<span class=\"titulillo\"> ... Daily Archives: %s </span>' , 'shape'),'<span>' . get_the_date('F Y') . '...</span>');","        }elseif(is_year()){","            //echo 'Year Archives';","            printf(__('<span class=\"titulillo\"> ... Daily Archives: %s </span>' , 'shape'),'<span>' . get_the_date('Y') . '...</span>');","        }else{","            //echo 'Archives';","            _e('<span class=\"titulillo\"> ... Archives ... </span>' , 'shape');","        }","        echo '</center>';","        echo '<br>';","    ?>    ","<div class=\"container\"> ","    <div class=\"row\">","        <div class=\"col-lg-8 col-xs-8 col-sm-8 col-md-8\">","            ","                <?php    ","               ","                if( have_posts() ) : while (have_posts()) : the_post();","                    ?>","                    <div class=\"card\">","                        <div class=\"row\">","                        <?php","                    switch(get_post_format()){","                        case 'image':","                            get_template_part('template_parts/content' , 'postimage');","                            break;","                        case 'gallery':","                            get_template_part('template_parts/content' , 'postgallery');","                            break;","                        case 'video':","                            get_template_part('template_parts/content' , 'postvideo');","                            break;","                        case 'audio':","                            get_template_part('template_parts/content' , 'postaudio');","                            break;","                        case 'link':","                            get_template_part('template_parts/content' , 'postlink');","                            break;","                        case 'quote':","                            get_template_part('template_parts/content' , 'postquote');","                            break;","                        default:","                            get_template_part('template_parts/content' , 'post');","                    }","                        ?>","                    </div>","                    <div class=\"clearfix\"></div>","                </div>","                <?php","                endwhile; ","                ","                else:","                    echo 'No hay post';","                endif;","           ","                ?>","            ","        </div>","        <div class=\"col-lg-4 col-xs-4 col-sm-4 col-md-4\">","            <?php get_sidebar();?>","        </div>","    </div>","</div>","","<?php","get_footer();","?>"],"id":1}],[{"start":{"row":89,"column":0},"end":{"row":89,"column":48},"action":"remove","lines":["                    <div class=\"clearfix\"></div>"],"id":2}],[{"start":{"row":88,"column":26},"end":{"row":89,"column":0},"action":"remove","lines":["",""],"id":3}],[{"start":{"row":105,"column":0},"end":{"row":105,"column":29},"action":"insert","lines":["<div class=\"separador\"></div>"],"id":4}],[{"start":{"row":105,"column":0},"end":{"row":106,"column":0},"action":"remove","lines":["<div class=\"separador\"></div>",""],"id":5}]]},"ace":{"folds":[],"scrolltop":1500,"scrollleft":0,"selection":{"start":{"row":102,"column":14},"end":{"row":102,"column":14},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":853,"mode":"ace/mode/php"}},"timestamp":1487762490999,"hash":"b9f165390ad31f7b9f15df2782a88772e89787f0"}