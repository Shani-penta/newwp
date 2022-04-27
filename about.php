<?php 
/*
 Template name:About us Template
 */
 get_header(); ?>
<div id="container">
	<div id="pop_sec" class="pop_dimmed "></div>
	<div id="content" class="subContents">
		<div class="par parsys">
			<div class="global-title parbase section">
				<div class="content_title">
					<div class="con_navi">
						<ol typeof="BreadcrumbList">
							<li property="itemListElement" typeof="ListItem" style="display:inline"> <a href="<?php echo site_url(); ?>" property="item" typeof="WebPage"><span class="cmm_spr spr_home" property="name">Home</span><span class="gt">&gt;</span></a>
								<meta property="position" content="1">
							</li>
							<li property="itemListElement" typeof="ListItem" style="display:inline"> <span class="depth" property="name">shopping tools</span><span class="gt">&gt;</span>
								<meta property="position" content="2">
							</li>
							<li property="itemListElement" typeof="ListItem" style="display:inline"> <a href="/sa/en/shopping-tools/request-a-quote.html" property="item" typeof="WebPage"><strong class="depth current" property="name">Request a quote</strong></a>
								<meta property="position" content="3">
							</li>
						</ol>
					</div>
					<h1 class="con_tit">

                                <p><?php the_title(); ?></p>

                            </h1>
				</div>
			</div>
			<div class="request-a-quote contentpage section">
				<div id="dynamicElement_conv"></div>
				<div class="content_detail ng-scope">
					<div class="inner request_quote">
						<div class="outer_penta">
							<div class="wrapper center-block defaultnew"> 
                                <?php  while ( have_posts() ) : the_post();
                                        the_content();
                                        endwhile;wp_reset_query();  ?>
                            </div>
                            <?php if (has_post_thumbnail() ) 
                            $feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() ); ?>
                            <img src="<?php echo $feat_image_url; ?>" style="width:100%;">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>