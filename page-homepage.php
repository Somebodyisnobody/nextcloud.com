<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/home.css" rel="stylesheet">
<?php if(CONTRIBOOK) { require(dirname(__FILE__).'/../../../contribook/main/contribook/lib_contribook.php'); } ?>
<script>
	require(["require.config"], function() {
		require(["pages/home", "modules/slideshow"])
	});
</script>
</head>
<div class="jumbotron">
	<img class="jumbotron__pattern" src="<?php echo get_template_directory_uri(); ?>/assets/img/pattern.png" alt="">
	<div class="container">
		<div class="row">
			<div class="col-md-6 toptext ">
				<a class="announcement" href="https://nextcloud.com/blog/nextcloud-13-brings-secure-file-sync-and-collaboration-to-the-next-level">
				<span class="type">News</span>
				<span class="message"><strong>Nextcloud 13 is out</strong>: The best gets even better!</span>
				<?php echo file_get_contents(get_template_directory_uri()."/assets/img/next.svg"); ?>
				</a>
				<h1 class="jumbotron--heading-1"><?php echo $l->t('Nextcloud - Protecting your data');?></h1>
				<h2 class="jumbotron--lead"><?php echo $l->t('Building products that allow you to be productive without losing control');?></h2>
				<a class="button button--large button--arrow--down" href="#why-nextcloud" role="button" id="get-nextcloud-button"><?php echo $l->t('Learn more');?></a>
			</div>
			<div class="col-md-6 topbanner">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/empty.png"> <!--empty image to ensure the viewport is big enough-->
			</div>
		</div>
	</div>
</div>

<a name="why-nextcloud"></a>
<section id="why-nextcloud">
	<div class="container">
		<h2 class=" section--heading-1 text-center revealOnScroll"><?php echo $l->t('Why Nextcloud?');?></h2>
		<div class="highlights">
			<div class="highlights_align ">
				<div class="privacy-icon" data-animation-path="img/home/privacy/" data-anim-loop="false" data-name="privacy"></div>
				<h4 class="revealOnScroll"><?php echo $l->t('Control');?></h4>
				<p class="section--paragraph revealOnScroll"><?php echo $l->t('Protect, control and monitor data and communication in your company. Guarantee compliance with business and legal requirements.');?></p>
			</div>
			<div class="highlights_align">
				<div class="flexibility-icon" data-animation-path="img/home/flexibility/" data-anim-loop="false" data-name="flexibility"></div>
				<h4 class="revealOnScroll"><?php echo $l->t('Productivity');?></h4>
				<p class="section--paragraph revealOnScroll"><?php echo $l->t('Make data available on any platform to your teams. Let them share, collaborate and communicate within and across organizational boundaries.');?></p>
			</div>
			<div class="highlights_align">
				<div class="community-icon" data-animation-path="img/home/community/" data-anim-loop="false" data-name="community"></div>
				<h4 class="revealOnScroll"><?php echo $l->t('Community');?></h4>
				<p class="section--paragraph revealOnScroll"><?php echo $l->t('Enjoy constant improvements from a thriving and transparent, all open-source community development model, free of lockins or paywalls.');?></p>
			</div>
		</div>
	</div>
</section>


<section class="section--compliance">
<div class="container-fluid banner">
    <div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2 class="revealOnScroll"><?php echo $l->t('Compliant by design');?></h2>
            <h3 class="revealOnScroll"><?php echo $l->t('HIPAA, GDPR and more');?></h3>
            <p class="section--paragraph revealOnScroll"><?php echo $l->t('Nextcloud products are designed with compliance in mind, providing extensive data policy enforcement, encryption, user management and auditing capabilities.');?></p>
            <div class="row learnmore">
            <h3 class="text-center revealOnScroll"><?php echo $l->t('Learn more');?></h3>
                <div class="col-sm-6 revealOnScroll">
                    <div class="featureblock">
                        <a class="hyperlink" href="<?php echo home_url('healthcare') ?>"><div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/tools.svg" /></div>
                        <p class="section--paragraph text-center"><?php echo $l->t('Healthcare and HIPAA');?></p></a>
                    </div>
                </div>
                <div class="col-sm-6 revealOnScroll">
                    <div class="featureblock">
                        <a class="hyperlink" href="https://nextcloud.com/blog/bring-enterprise-data-back-under-control-with-nextcloud/"><div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/securitypolicies.svg" /></div>
                        <p class="section--paragraph text-center"><?php echo $l->t('GDPR compliance');?></p></a>
                    </div>
                </div>
                <div class="col-sm-6 revealOnScroll">
                    <div class="featureblock">
                        <a class="hyperlink" href="<?php echo home_url('monitoring') ?>"><div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/ldap.svg" /></div>
                        <p class="section--paragraph text-center"><?php echo $l->t('Auditing capabilities');?></p></a>
                    </div>
                </div>
                <div class="col-sm-6 revealOnScroll">
                    <div class="featureblock">
                        <a class="hyperlink" href="<?php echo home_url('workflow') ?>"><div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/firewall.svg" /></div>
                        <p class="section--paragraph text-center"><?php echo $l->t('File Access Control');?></p></a>
                    </div>
                </div>
            </div>
        </div>
        <img class="big-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/headers/medicaldevices.jpeg">
        <img class="small-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/headers/medicaldevices-small.jpeg">
    </div>
    </div>
</div>
</section>

<section class="section--customers">
	<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class=" section--heading-1 text-center revealOnScroll"><?php echo $l->t('Powering collaboration');?></h2>
                <p class="section--paragraph text-center revealOnScroll"><?php echo $l->t('<span class="avoidwrap">for millions of users</span> <span class="avoidwrap">at thousands of organizations</span> <span class="avoidwrap">across the globe</span>');?></p>
            </div>
        </div>
        <div class="row revealOnScroll">
            <div class="col-sm-4 col-lg-2 customer">
                <div class="customer-logo">
                    <a href="https://nextcloud.com/blog/9-german-educational-and-research-institutions-move-to-nextcloud-as-part-of-tu-berlin-migration-more-coming/"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/tuberlin.png" /></a>
                </div>
            </div>
            <div class="col-sm-4 col-lg-2 customer">
                <div class="customer-logo">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/mmecmannesmann.png" />
                </div>
            </div>
            <div class="col-sm-4 col-lg-2 customer">
                <div class="customer-logo">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/siemens.png" /></a>
                </div>
            </div>
            <div class="col-sm-4 col-lg-2 customer">
                <div class="customer-logo">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/randv.png" /></a>
                </div>
            </div>
            <div class="col-sm-4 col-lg-2 customer">
                <div class="customer-logo">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/raiffeisen.png" /></a>
                </div>
            </div>
            <div class="col-sm-4 col-lg-2 customer">
                <div class="customer-logo">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/actu.png" /></a>
                </div>
            </div>
        </div>
<!--        <div class="row">
            <div class="col-sm-4 col-lg-2 customer">
                <div class="customer-logo">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/hivos.png" /></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-lg-2 customer">
                <div class="customer-logo">
                    <a href="https://nextcloud.com/blog/3000-users-at-ucloud4schools-migrated-to-nextcloud-11-by-regio-it/"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/regioit.png" /></a>
                </div>
            </div>
            <div class="col-sm-4 col-lg-2 customer">
                <div class="customer-logo">
                    <a href="https://nextcloud.com/blog/the-danish-research-and-education-network-moves-from-owncloud-to-nextcloud/"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/deic.png" /></a>
                </div>
            </div>
            <div class="col-sm-4 col-lg-2 customer">
                <div class="customer-logo">
                    <a href="http://my.engineering.queensu.ca/"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/queens.png" /></a>
                </div>
            </div>
            <div class="col-sm-4 col-lg-2 customer">
                <div class="customer-logo">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/elkb.png" /></a>
                </div>
            </div>
            <div class="col-sm-4 col-lg-2 customer">
                <div class="customer-logo">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/vrbzo.png" /></a>
                </div>
            </div>
        </div>-->
	</div>
</section>
<section class="underyourcontrol">
<div class="container-fluid" id="perfect-for-home-and-business">
		<div class="container">
		<h2 class="section--heading-1 revealOnScroll"><?php echo $l->t('Under your control');?></h2>
		<p class="section--paragraph revealOnScroll"><?php echo $l->t('Your teams are using email attachments, public chat apps, consumer file sharing tools and telephone to communicate and collaborate. Nextcloud puts enterprises back in control over their IT.');?></p>
		<p class="section--paragraph revealOnScroll"><?php echo $l->t('We offer modern organizations the tools they need to host their own productivity enhancing replacements for cloud solutions.');?></p>
		<li class="revealOnScroll"><?php echo $l->t('Protect your IT investment by re-using existing infrastructure');?></li>
		<li class="revealOnScroll"><?php echo $l->t('Ensure compliance, security and flexibility');?></li>
		<li class="revealOnScroll"><?php echo $l->t('Know where your data is, who has access and how it is used');?></li>
		<li class="revealOnScroll"><?php echo $l->t('Facilitate secure collaboration and communication');?></li>
 		<p><a class="button button--blue button--arrow button--large revealOnScroll" href="<?php echo home_url('files') ?>" role="button"><?php echo $l->t('Nextcloud Files</a>');?></p>
		</div>
</div>
</section>

<?php require get_template_directory().'/verticals.php';?>

<section class="slideshow" id="slideshow">
    <h2 class="text-center section--heading-1 revealOnScroll"><?php echo $l->t('Introducing Nextcloud 13');?></h2>
	<div class="indicators">
		<ul class="carousel_dots"></ul>
		<li class="btn_carousel"><a href="#feature-1"></a></li>
		<li class="btn_carousel"><a href="#feature-2"></a></li>
		<li class="btn_carousel"><a href="#feature-3"></a></li>
		<li class="btn_carousel"><a href="#feature-4"></a></li>
	</div>
    <div class="container">
        <div class="col-md-6 ">
        	<div class="container-image-center" id="imageTrigger">
	            <img class="image-back" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/introducing-nc-10.png">
	            <div class="image-top-container">
	            	<img class="img-responsive image-top image__desktop" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/sprite_screen_13.jpg">
	            	<img class="img-responsive image-top image__mobile" src="<?php echo get_template_directory_uri(); ?>/assets/img/home/sprite_screen_mobile_13.jpg">
	            </div>
            </div>
        </div>
        <div class="texts-wrapper col-md-6">
	        <div class="right-text-grey" data-slide="1">
	            <h5 class="textTrigger" id="feature-1"><?php echo $l->t('The Next Generation of Secure Collaboration');?></h5>
	            <p class="section--paragraph"><?php echo $l->t('Nextcloud 13 delivers next-gen security with a tech preview of our ground breaking End-to-end Encryption in the clients for the ultimate protection of your data.');?></p>
	            <br/>
	            <p>
	                <a class="btn-primary" href="https://nextcloud.com/blog/encryption-in-nextcloud/" role="button"><?php echo $l->t('Learn more');?></a>
	            </p>
	        </div>

	         <div class="right-text-grey" data-slide="2">
	            <h5 class="textTrigger" id="feature-2"><?php echo $l->t('Collaboration and communication');?></h5>
	            <p class="section--paragraph"><?php echo $l->t('Nextcloud 13 optimizes your workflow, making collaboration with colleagues seamless. Mention others in comments, start a chat or video call with one click or find your files with our improved full-text search.');?></p>
	            <br/>
	            <p>
	                <a class="btn-primary" href="https://www.youtube.com/watch?v=Yoks3XS4jcg" role="button"><?php echo $l->t('Watch video');?></a>
	            </p>
	        </div>

	        <div class="right-text-grey" data-slide="3">
	            <h5 class="textTrigger" id="feature-3"><?php echo $l->t('Faster than ever');?></h5>
	            <p class="section--paragraph"><?php echo $l->t('Waiting is a waste. Nextcloud 13 brings faster performance everywhere, with 85% quicker LDAP queries, up to 5x storage throughput and more');?></p>
	            <br/>
	            <p>
	                <a class="btn-primary" href="https://nextcloud.com/blog/85-faster-ldap-10x-readwrite-speed-of-windows-network-drive-welcome-to-nextcloud-13-beta/" role="button"><?php echo $l->t('Learn more');?></a>
	            </p>
	        </div>

	        <div class="right-text-grey" data-slide="4">
	            <h5 class="textTrigger" id="feature-4"><?php echo $l->t('Plan and schedule');?></h5>
	            <p class="section--paragraph"><?php echo $l->t('Nextcloud Groupware in 13 brings better Calendar invitation handling, automatic user provisioning in Mail and support for setting up a mail address which stores attachments directly in Nextcloud.');?></p>
	            <br/>
	            <p>
	                <a class="btn-primary" href="<?php echo home_url('groupware') ?>" role="button"><?php echo $l->t('Learn more');?></a>
	            </p>
	        </div>
        </div>
    </div>
</section>

<section class="section--compare">
<div class="calltoaction revealOnScroll">
	<h1 class="section--heading-2 section--text--center"><?php echo $l->t('See how we stack up');?></h1>
	<p class="section--paragraph section--text--center">
	<a href="<?php echo home_url('compare') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Compare Nextcloud to other solutions');?></a></p>
</div>
</section>

<!--<section class="news-section">
	<div class="container-fluid news" id="social-media">
		<div class="container">
			<h1 class="section--heading-1 revealOnScroll"><?php echo $l->t('Latest news');?></h1>
			<div class="row">
				<div class="col-md-4">
					<h3 class="section--heading-1 revealOnScroll"><?php echo $l->t('Nextcloud News</a>');?></h3>
					<p><span class="social-feed"><?php if(CONTRIBOOK) { CONTRIBOOK_NEWS::show(0,4); } ?></span></p>
					<a class="revealOnScroll" href="<?php echo home_url('news') ?>">more</a>
				</div>
				<div class="col-md-4">
					<h3 class="revealOnScroll"><?php echo $l->t('Latest Tweets');?></h3>
					<p><span class="social-feed"><?php if(CONTRIBOOK) { CONTRIBOOK_MICROBLOG::show(0,2); } ?></span></p>
					<a class="revealOnScroll" href="https://twitter.com/nextclouders">more</a>
				</div>
				<div class="col-md-4">
					<h3 class="revealOnScroll"><?php echo $l->t('Latest from the forum');?></h3>
					<p><span class="social-feed"><?php if(CONTRIBOOK) { CONTRIBOOK_FORUM::show(0,4); }?></span></p>
					<a class="revealOnScroll" href="https://help.nextcloud.com">more</a>
				</div>
			</div>
		</div>
	</div>
</section>-->

<section class="stay-up-to-date">
	<div class="container text-center">
		<h5 class="section--heading-2 revealOnScroll"><?php echo $l->t('Stay up to date with latest enhancements');?></h5>
		<p class="section--paragraph"><?php echo $l->t('Subscribe to our newsletter and never miss anything');?></p>
		<a class="button button--blue button--arrow button--large" href="https://newsletter.nextcloud.com/?p=subscribe&id=1" role="button"><?php echo $l->t('Subscribe');?></a>
	</div>
</section>
