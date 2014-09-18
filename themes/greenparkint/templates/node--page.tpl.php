<article<?php print $attributes; ?>>
  <?php if (!empty($title_prefix) || !empty($title_suffix) || !$page): ?>
    <header>
      <?php print render($title_prefix); ?>
      <?php if (!$page): ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>" rel="bookmark"><?php print $title; ?></a></h2>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
    </header>
  <?php endif; ?>

  <?php if ($display_submitted): ?>
    <footer class="node__submitted">
      <?php print $user_picture; ?>
      <p class="submitted"><?php print $submitted; ?></p>
    </footer>
  <?php endif; ?>

  <div<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
	  print render($content['field_page_image']); ?>
	  <?php if ($content['field_page_heading']): ?>
	  <div class="highlight"><?php print render($content['field_page_heading']); ?></div>
	  <?php endif; ?>
	  <h1><?php print $title; ?></h1>
	  <?php 
	  print render($content['field_page_highlight']);
	  print render($content['body']);
	  print render($content['field_page_highlight_2']);?>
	  <?php if ($content['field_team_member']): ?>
		<div class="contacts-box">
		  <h3>Talk To Us About <?php print render($title); ?></h3>
		  <?php print render($content['field_team_members']);?>
		</div>
	  <?php endif; ?>
  </div>

  <?php print render($content['links']); ?>
  <?php print render($content['comments']); ?>
</article>