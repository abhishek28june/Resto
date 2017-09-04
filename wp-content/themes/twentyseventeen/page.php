<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); 
$pid = get_the_ID();
$page_all = get_post($pid);

// $im = get_the_post_thumbnail($pid);
//echo "<pre>"; print_r($page_all);
?> 
<div id="main-container" class="row">
    <div about="/new-york-new-york/per-se/make-reservation" typeof="foaf:Document" class="node node--page view-mode-text_left_img_right_1_3_2_3_  node--text-left-img-right-1-3-2-3- node--page--text-left-img-right-1-3-2-3- clearfix row">
        <!-- Needed to activate contextual links -->
        <div class="alpha columns one-third">
            <div class="scroll-pane jspScrollable" tabindex="0" style="overflow: hidden; padding: 0px; width: 263px;">
                <div class="jspContainer" style="width: 263px; height: 380px;">
                    <div class="jspPane" style="padding: 0px; top: 0px; width: 257px;">
                        <div class="field field-name-body">
                            <h2><?php echo $page_all->post_title; ?></h2>
                            <?php echo $page_all->post_content; ?>
                        </div>
                    </div>
                    <div class="jspVerticalBar">
                        <div class="jspCap jspCapTop"></div>
                        <div class="jspTrack" style="height: 380px;">
                            <div class="jspDrag" style="height: 303px; top: 0px;">
                                <div class="jspDragTop"></div>
                                <div class="jspDragBottom"></div>
                            </div>
                        </div>
                        <div class="jspCap jspCapBottom"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="omega columns two-thirds">
            <div class="field field-name-field-image">
            	<?= get_the_post_thumbnail($pid) ?>
            </div>
        </div>
    </div>
    <!-- Needed to activate display suite support on forms -->
</div>

<?php get_footer();
