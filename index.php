<?php
namespace TymFrontiers;
require_once "app.init.php";
require_once APP_BASE_INC;
$gen = new Generic;
$params = $gen->requestParam([
  "request" => ["request","text",3,0],
  "message" => ["message","text",3,0]
],'get',[]);
if (!empty($params['message'])) $params['message'] = \urldecode($params['message']);
$page_name = "404";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr" manifest="<?php echo WHOST; ?>/site.webmanifest">
  <head>
    <meta charset="utf-8">
    <title>404 - Not Found</title>
    <?php include PRJ_INC_ICONSET; ?>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
    <meta name="description" content="<?php echo PRJ_DESCRIPTION; ?>">
    <meta name="author" content="<?php echo PRJ_AUTHOR; ?>">
    <meta name="creator" content="<?php echo PRJ_CREATOR; ?>">
    <meta name="publisher" content="<?php echo PRJ_PUBLISHER; ?>">
    <meta name="robots" content='nofollow'>
    <!-- Theming styles -->
    <link rel="stylesheet" href="<?php echo WHOST; ?>/7os/theme-soswapp/css/theme.min.css">
    <link rel="stylesheet" href="<?php echo WHOST; ?>/7os/theme-soswapp/css/theme-<?php echo PRJ_THEME; ?>.min.css">
    <!-- optional plugin -->
    <link rel="stylesheet" href="<?php echo WHOST; ?>/7os/font-awesome-soswapp/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo WHOST; ?>/7os/plugin-soswapp/css/plugin.min.css">
    <link rel="stylesheet" href="<?php echo WHOST; ?>/7os/dnav-soswapp/css/dnav.min.css">
    <link rel="stylesheet" href="<?php echo WHOST; ?>/7os/faderbox-soswapp/css/faderbox.min.css">
    <!-- Project styling -->
    <link rel="stylesheet" href="<?php echo \html_style("base.css"); ?>">
  </head>
  <body>
    <?php \setup_page('404','base', true, PRJ_HEADER_HEIGHT); ?>
    <?php include PRJ_INC_HEADER; ?>
    <br class="c-f">
    <section id="main-content">
      <div class="view-space">
        <div class="sec-div padding -p20">
          <h1> <i class="fas fa-unlink fa-2x"></i> Resource not found</h1>
          <?php if (!empty($params['request'])): ?>
            <blockquote>
              <p><?php echo $params['request']; ?></p>
            </blockquote>
          <?php endif; ?>
          <p>
            <?php if (!empty($params["message"])){
              echo $params['message'];
            } else {
              echo "Sorry, We could not find what you are looking for on the server.";
            } ?>
          </p>
          <p> <i class="fas fa-asterisk"></i> Try <a href="<?php echo WHOST . "/about/sitemap" ?>"><b>the Site map</b></a> to see if you will find what you are looking for.</p>
          <br class="c-f">
        </div>

      </div>
    </section>
    <?php include PRJ_INC_FOOTER; ?>
    <!-- Required scripts -->
    <script src="<?php echo WHOST; ?>/7os/jquery-soswapp/js/jquery.min.js">  </script>
    <script src="<?php echo WHOST; ?>/7os/js-generic-soswapp/js/js-generic.min.js">  </script>
    <script src="<?php echo WHOST; ?>/7os/theme-soswapp/js/theme.min.js" ></script>
    <!-- optional plugins -->
    <script src="<?php echo WHOST; ?>/7os/plugin-soswapp/js/plugin.min.js" ></script>
    <script src="<?php echo WHOST; ?>/7os/dnav-soswapp/js/dnav.min.js" ></script>
    <script src="<?php echo WHOST; ?>/7os/faderbox-soswapp/js/faderbox.min.js" ></script>
    <!-- project scripts -->
    <script src="<?php echo \html_script ("base.min.js"); ?>" ></script>
  </body>
</html>
