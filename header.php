<!doctype html>
<html <?php language_attributes(); ?> class="no-js" ⚡>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <link rel="canonical" href="<?php the_permalink(); ?>">
    
    <title>
        <?php wp_title(''); ?>
        <?php if(wp_title('', false)) { echo ' :'; } ?>
        <?php bloginfo('name'); ?>
    </title>
    
    <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
    <script async custom-element="amp-youtube" src="https://cdn.ampproject.org/v0/amp-youtube-0.1.js"></script>
    
    <script type="application/ld+json">
	{
  	"@context": "http://schema.org",
  	"@type": "ProfessionalService",
  	"address": {
        "@type": "PostalAddress",
        "addressLocality": "Dallas",
        "addressRegion": "TX",
        "postalCode":"75204",
        "streetAddress": "2855 Howell St."
  	},
    "logo": {
        "@type": "ImageObject",
        "url": "https:\/\/matthewtrader.com\/wp-content\/uploads\/2015\/11\/Weddings-Logo-720px1.png",
        "width": 712,
        "height": 172
    },
  	"description": "<?php the_title(); ?>",
  	"name": "Matthew T Rader | Dallas Wedding Photographer",
  	"telephone": "072-345-8089",
    "email": "matthew@matthewtrader.com",
    "url": "<?php the_permalink(); ?>",
    "priceRange" : "$2,500 - $5,000",
  	"openingHours": "Mo,Tu,We,Th,Fr,Sa 08:00-20:00",
    "image": {
            "@type": "ImageObject",
            "url": "<?php the_post_thumbnail_url(); ?>",
            "width": 1200,
            "height": 800
        },
  	"geo": {
        "@type": "GeoCoordinates",
        "latitude": "32.8000926",
        "longitude": "-96.8034232"
 		}, 
        "hasMap": "https://goo.gl/maps/Mxt2fHbNyyA2",
        "aggregateRating": {
            "@type": "AggregateRating",
                "ratingValue": "5",
                "reviewCount": "31",
                "bestRating": "5",
                "worstRating": "5"
              },

  	"sameAs" : [ "https://www.facebook.com/MatthewTRader.Photography",
    "https://www.instagram.com/cherish.loves.story",
    "https://twitter.com/Matthew_T_Rader",
    "https://www.youtube.com/user/MatthewThomasRader/videos"]
	}
    </script>
   
    <style amp-custom>
        <?php include 'style.css';?>
    </style>

    <style amp-boilerplate>
        body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}
    </style>
    
    <noscript>
        <style amp-boilerplate>
            body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}
        </style>
    </noscript>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
   
   <amp-analytics type="googleanalytics" id="anayltics1">
    <script type="application/json">
        {
            "vars": {
                "account": "UA-19917703-7"
            },
            "triggers": {
                "outboundLinks": {
                    "on": "click",
                    "selector": "a",
                    "request": "event",
                    "vars": {
                        "eventCategory": "outbound",
                        "eventAction": "click",
                        "eventLabel": "${outboundLink}"
                    }
                },
                "trackPageview": {
                      "on": "visible",
                      "request": "pageview"
                }
            }   

        }
    </script>
</amp-analytics>
   
    <header>
        <div class="logo">
            <a href="<?php echo home_url(); ?>"><amp-img src="<?php echo get_theme_mod_img( 'ultraPhoto_logo' ) ?>" width="<?php echo get_theme_mod( 'ultraPhoto_number_setting_w' ) ?>" height="<?php echo get_theme_mod( 'ultraPhoto_number_setting_h' ) ?>" layout="responsive"></amp-img></a>
            <div class="slogan"><?php bloginfo( 'description' ); ?></div>
        </div>
        <nav>
            <?php wp_nav_menu( array('menu' => 'main' )); ?>
        </nav>
        <div class="contact-info">
            <p class="phoneNo"><a href="tel:972-345-8089">972.345.8089</a></p>
            <!-- copyright -->
            <p class="copyright">
                &copy;
                <?php echo date('Y'); ?> Copyright Matthew T Rader</a>.
            </p>
            <!-- /copyright -->
        </div>
    </header>
    <!-- /header -->
    <main role="main">