<?php 
if (drupal_is_front_page()):
	$get_image = field_get_items('node', $node, 'field_hp_carousel');
	$get_highlight = field_get_items('node', $node, 'field_page_heading');
	$highlight = field_view_value('node', $node, 'field_page_heading', $get_highlight[0]);
	$image = field_view_value('node', $node, 'field_hp_carousel', $get_image[0],
		array (
			'type' => 'image',
			'settings' => array(
			'image_style' => 'hp_image',
		),
	)); 
endif;
if ($node->type=='page') :
	$get_image = field_get_items('node', $node, 'field_page_image');
	$image = field_view_value('node', $node, 'field_page_image', $get_image[0],
		array (
			'type' => 'image',
			'settings' => array(
			'image_style' => 'page_image',
		),
	)); 
endif;
?>

<div class="l-page">
  <header class="l-header-wrapper" role="banner">
	<div class="l-header">
		<div class="l-branding">
		  <?php if ($logo): ?>
			<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="site-logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
		  <?php endif; ?>

		  <?php if ($site_name || $site_slogan): ?>
			<?php if ($site_name): ?>
			  <h1 class="site-name">
				<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
			  </h1>
			<?php endif; ?>

			<?php if ($site_slogan): ?>
			  <h2 class="site-slogan"><?php print $site_slogan; ?></h2>
			<?php endif; ?>
		  <?php endif; ?>
		</div>
    <?php print render($page['header']); ?>
	</div>
  </header>
  <div class="l-main">
	<?php print render($page['navigation']); ?>
	<?php if (drupal_is_front_page()): ?>
		<?php if ($image && $highlight) : ?>
			<div class="page-image hp-image"><?php print render($image); ?></div>
			<div class="hp-highlight">
				<h1>Green Park Worldwide:</h1>
				<div class="hp-highlight-text"><?php print render($highlight); ?></div>
			</div>
		<?php endif; ?>
	<?php endif; ?>
	<?php if ($node->type=='page'): ?>
		<?php if ($image) : ?>
			<div class="page-image hp-image"><?php print render($image); ?></div>
		<?php endif; ?>
	<?php endif; ?>
    <div class="l-content" role="main">
      <?php print render($page['highlighted']); ?>
      <a id="main-content"></a>
	  <?php if ($node->type =='page'): ?>
	  <?php hide($title); ?>
	  <?php else: ?>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
	  <?php endif; ?>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </div>

    <?php print render($page['sidebar_first']); ?>
    <?php print render($page['sidebar_second']); ?>
  </div>

  <footer class="l-footer" role="contentinfo">
	<div class="l-footer-inner">
		<?php print render($page['footer']); ?>
	</div>
	<?php print render($page['footer_base']); ?>
  </footer>
</div>
