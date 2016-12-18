<?php /* Smarty version 2.6.25, created on 2015-02-11 12:23:55
         compiled from /var/www/html/drupal/forum-embed/themes/apptastic/views/default.master.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'asset', '/var/www/html/drupal/forum-embed/themes/apptastic/views/default.master.tpl', 4, false),array('function', 'searchbox', '/var/www/html/drupal/forum-embed/themes/apptastic/views/default.master.tpl', 36, false),array('function', 'dashboard_link', '/var/www/html/drupal/forum-embed/themes/apptastic/views/default.master.tpl', 38, false),array('function', 'discussions_link', '/var/www/html/drupal/forum-embed/themes/apptastic/views/default.master.tpl', 39, false),array('function', 'activity_link', '/var/www/html/drupal/forum-embed/themes/apptastic/views/default.master.tpl', 40, false),array('function', 'inbox_link', '/var/www/html/drupal/forum-embed/themes/apptastic/views/default.master.tpl', 41, false),array('function', 'custom_menu', '/var/www/html/drupal/forum-embed/themes/apptastic/views/default.master.tpl', 42, false),array('function', 'profile_link', '/var/www/html/drupal/forum-embed/themes/apptastic/views/default.master.tpl', 43, false),array('function', 'signinout_link', '/var/www/html/drupal/forum-embed/themes/apptastic/views/default.master.tpl', 44, false),array('function', 'module', '/var/www/html/drupal/forum-embed/themes/apptastic/views/default.master.tpl', 49, false),array('function', 'link', '/var/www/html/drupal/forum-embed/themes/apptastic/views/default.master.tpl', 52, false),array('function', 'breadcrumbs', '/var/www/html/drupal/forum-embed/themes/apptastic/views/default.master.tpl', 76, false),array('function', 'event', '/var/www/html/drupal/forum-embed/themes/apptastic/views/default.master.tpl', 102, false),)), $this); ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<?php echo smarty_function_asset(array('name' => 'Head'), $this);?>

</head>
<body id="<?php echo $this->_tpl_vars['BodyID']; ?>
" class="<?php echo $this->_tpl_vars['BodyClass']; ?>
">
	
	<noscript>
		
		<table height="100%" width="100%">
			<tbody><tr>
				<td align="center" valign="middle" style="vertical-align: middle;">
					<h1 id="l10n_title">Whooooops!</h1>
					<div class="sorry" style="width:300px;">
						<p id="l10n_line_1">
							Looks like you've disabled Javascript in your browser.
						</p>
						<p id="l10n_line_2">
							<a href="https://support.google.com/adsense/bin/answer.py?hl=en&answer=12654">
								Please enable it again!
							</a>
						</p>
					</div>
				</td>
			</tr>
		</tbody></table>
	
	</noscript>
	
	<div id="Frame">
		<header id="header">
			<div class="navbar">
				<div class="navbar-inner">
					<div class="container">
					
						<?php echo smarty_function_searchbox(array('placeholder' => 'enter your search terms'), $this);?>

						<ul class="nav">
							<!-- <?php echo smarty_function_dashboard_link(array(), $this);?>
 -->
							<?php echo smarty_function_discussions_link(array(), $this);?>

							<?php echo smarty_function_activity_link(array(), $this);?>

							<!-- <?php echo smarty_function_inbox_link(array(), $this);?>
 -->
							<?php echo smarty_function_custom_menu(array(), $this);?>

							<!-- <?php echo smarty_function_profile_link(array(), $this);?>

							<?php echo smarty_function_signinout_link(array(), $this);?>
  -->
						</ul>
						<ul class="nav pull-right">
							<?php if ($this->_tpl_vars['User']['SignedIn']): ?>
							<li class="MeBoxWrap">
								<?php echo smarty_function_module(array('name' => 'MeModule'), $this);?>

							</li>
							<li>
								<?php echo smarty_function_link(array('path' => 'signinout'), $this);?>

							</li>
							</li>
							<?php endif; ?>
							<?php if (! $this->_tpl_vars['User']['SignedIn']): ?>
							<li>
								<a href="<?php echo smarty_function_link(array('path' => "/entry/register"), $this);?>
"> 
									<i class="icon-edit"></i> Sign up
								</a>
							</li>
							<li>
								<a class="SignInPopup" href="<?php echo smarty_function_link(array('path' => "/entry/signin"), $this);?>
">
									<i class="icon-share-alt"></i> Sign in
								</a>
							</li>
							<?php endif; ?>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<section id="page-header" class="toolbar">
			<!--<a href="/account/projects/new/" class="btn pull-right btn-primary">Create a new project</a>-->
			<ul class="breadcrumb">
				<?php echo smarty_function_breadcrumbs(array(), $this);?>

			</ul>
		</section>
		<section id="content" class="with-left-sidebar">
			<div class="container">
				<div class="content">
					<div id="messages"></div>
					<div class="main">
						<h1 class="page-header"></h1>
						<h2 class="page-subheader"></h2>
						<section class="body">
							<?php echo smarty_function_asset(array('name' => 'Content'), $this);?>

						</section>
					</div>
					<div class="sidebar">
						<?php echo smarty_function_asset(array('name' => 'Panel'), $this);?>

					</div>
				</div>
			</div>
		</section>
		<footer>
			<div class="container">
				Freedomfone Support Forum. &copy; 2010				<?php echo smarty_function_asset(array('name' => 'Foot'), $this);?>

			</div>
		</footer>
	</div>
	<?php echo smarty_function_event(array('name' => 'AfterBody'), $this);?>

</body>
</html>