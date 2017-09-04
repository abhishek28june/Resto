<?php
/**
 * Template Name: Contact Us
 */
get_header(); 
$pid = get_the_ID();
$page_all = get_post($pid);

// $im = get_the_post_thumbnail($pid);
//echo "<pre>"; print_r($page_all);
?> 
<style type="text/css">
	.wpcf7-not-valid-tip {
    	color: #ef2d0a;
	}
</style>
<div id="main-container" class="row">
    <div about="/new-york-new-york/per-se/make-reservation" typeof="foaf:Document" class="node node--page view-mode-text_left_img_right_1_3_2_3_  node--text-left-img-right-1-3-2-3- node--page--text-left-img-right-1-3-2-3- clearfix row">
        <!-- Needed to activate contextual links -->
        <div class="alpha columns one-third">
            <div class="scroll-pane jspScrollable" tabindex="0" style="overflow: hidden; padding: 0px; width: 263px;">
                <div class="jspContainer" style="width: 263px; height: 380px;">
                    <div class="jspPane" style="padding: 0px; top: 0px; width: 257px;">
                        <div class="field field-name-body">
                            <h2><?php echo $page_all->post_title; ?></h2>
                            <?php echo do_shortcode('[contact-form-7 id="35" title="Contact form 1"]'); ?>
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
            <div id="googleMap" class="field field-name-field-image" style="width:100%;height:388px;">
            	<? //get_the_post_thumbnail($pid) ?>
            </div>
        </div>
    </div>
    <!-- Needed to activate display suite support on forms -->
</div>

<script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBL4AAhm7oP36U5kyUPQ2b_Zsv9UeEQbxs&callback=myMap"></script>

<?php get_footer();