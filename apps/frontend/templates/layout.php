<!-- apps/frontend/templates/layout.php -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title><?php include_slot('title', 'open BRD plus - branch, rank and discuss plus many things more ...') ?></title>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_javascripts() ?>
    <?php include_stylesheets() ?>
  </head>
  <body>
    <div id="container">
      <div id="header">
        <div class="content">
          <h1><a href="<?php echo url_for('content/index') ?>">
            <img src="/images/logo.jpg" alt="openBRD+" />
          </a></h1>
 
          <div id="sub_header">
            <div class="post">
              <h2>Ask for people</h2>
              <div>
                <a href="<?php echo url_for('user/new') ?>">Register to openBRD+</a>
              </div>
            </div>
		
	    <?php if ($sf_user->isAuthenticated()): ?>
            <div id="menu">
            <ul>
            <li><?php echo link_to('Inhalte', 'content') ?></li>
            <li><?php echo link_to('Forum', 'topic') ?></li>
	    <?php if ($sf_user->isSuperAdmin()): ?>
	      <li><?php echo link_to('Users', '@sf_guard_user') ?></li>
              <li><?php echo link_to('Groups', '@sf_guard_group') ?></li>
	      <li><?php echo link_to('Permissions', '@sf_guard_permission') ?></li>            
            <?php endif; ?>            
            <li><?php echo link_to('Logout', '@sf_guard_signout') ?></li>
            <li><a href="<?php echo url_for('profile/call?user_id='.$sf_user->getGuardUser()->getProfile()->getId()) ?>"> [Show Profile] </a></li>
            <li><?php echo "(".$sf_user.")" ?></li>
	    </ul>
	    </div>
            <?php endif; ?>
 
            <div class="search">
              <h2>Search for Content / Discussions</h2>
              <form action="" method="get">
                <input type="text" name="keywords"
                  id="search_keywords" />
                <input type="submit" value="search" />
                <div class="help">
                  Enter some keywords (city, country, position, ...)
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div id="content">
        <?php if ($sf_user->hasFlash('notice')): ?>
          <div class="flash_notice">
            <?php echo $sf_user->getFlash('notice') ?>
          </div>
        <?php endif; ?>
 
        <?php if ($sf_user->hasFlash('error')): ?>
          <div class="flash_error">
            <?php echo $sf_user->getFlash('error') ?>
          </div>
        <?php endif; ?>
 
        <div class="content">
          <?php echo $sf_content ?>
        </div>
      </div>
 
      <div id="footer">
        <div class="content">
          <ul>
            <li><a href="">about openBRD plus</a></li>
            <li class="feed"><a href="">Full feed</a></li>
            <li><a href="">openBRD API</a></li>
            <li class="last"><a href="">Affiliates</a></li>
          </ul>
        </div>
      </div>
    </div>
  </body>
</html>
