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

  <div <?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
	  hide($content);
    ?>
	<div class="highlight"><?php print render($content['field_page_heading']); ?></div>
  <div class="group-box-1 field-group-div">
	<a href="<?php print $node->field_hp_box_1_link['und'][0]['url'];?>">
	<div class="field field--name-field-hp-box-1-image field--type-image field--label-hidden">
	<?='<img src="'.image_style_url('homepage_boxes', $node->field_hp_box_1_image['und'][0]['uri']).'" />'?></div>
	<div class="group-box-1-txt field-group-txt">
		<h2 class="field field--name-field-hp-box-1-title field--type-text field--label-hidden">
		<?php print $node->field_hp_box_1_title['und'][0]['value'];?></h2>
		<div class="field field--name-field-hp-box-1-text field--type-text-long field--label-hidden">
		<?php print $node->field_hp_box_1_text['und'][0]['value'];?></div>
		<div class="field field--name-field-hp-box-1-link field--type-link-field field--label-hidden">
		<a href="<?php print $node->field_hp_box_1_link['und'][0]['url'];?>"><?php print $node->field_hp_box_1_link['und'][0]['title'];?>></a></div>
	</div>
	</a>
  </div>
  
  <div class="group-box-2 field-group-div">
	<a href="<?php print $node->field_hp_box_2_link['und'][0]['url'];?>">
	<div class="field field--name-field-hp-box-2-image field--type-image field--label-hidden">
	<?='<img src="'.image_style_url('homepage_boxes', $node->field_hp_box_2_image['und'][0]['uri']).'" />'?></div>
	<div class="group-box-2-txt field-group-txt">
		<h2 class="field field--name-field-hp-box-2-title field--type-text field--label-hidden">
		<?php print $node->field_hp_box_2_title['und'][0]['value'];?></h2>
		<div class="field field--name-field-hp-box-2-text field--type-text-long field--label-hidden">
		<?php print $node->field_hp_box_2_text['und'][0]['value'];?></div>
		<div class="field field--name-field-hp-box-2-link field--type-link-field field--label-hidden">
		<a href="<?php print $node->field_hp_box_2_link['und'][0]['url'];?>"><?php print $node->field_hp_box_2_link['und'][0]['title'];?>></a></div>
	</div>
	</a>
  </div>
  
   <div class="group-box-3 field-group-div">
	<a href="<?php print $node->field_hp_box_3_link['und'][0]['url'];?>">
	<div class="field field--name-field-hp-box-3-image field--type-image field--label-hidden">
	<?='<img src="'.image_style_url('homepage_boxes', $node->field_hp_box_3_image['und'][0]['uri']).'" />'?></div>
	<div class="group-box-3-txt field-group-txt">
		<h2 class="field field--name-field-hp-box-3-title field--type-text field--label-hidden">
		<?php print $node->field_hp_box_3_title['und'][0]['value'];?></h2>
		<div class="field field--name-field-hp-box-3-text field--type-text-long field--label-hidden">
		<?php print $node->field_hp_box_3_text['und'][0]['value'];?></div>
		<div class="field field--name-field-hp-box-3-link field--type-link-field field--label-hidden">
		<a href="<?php print $node->field_hp_box_3_link['und'][0]['url'];?>"><?php print $node->field_hp_box_3_link['und'][0]['title'];?>></a></div>
	</div>
	</a>
  </div>
  
  <div class="group-box-4 field-group-div">
	<a href="<?php print $node->field_hp_box_4_link['und'][0]['url'];?>">
	<div class="field field--name-field-hp-box-4-image field--type-image field--label-hidden">
	<?='<img src="'.image_style_url('homepage_boxes', $node->field_hp_box_4_image['und'][0]['uri']).'" />'?></div>
	<div class="group-box-4-txt field-group-txt">
		<h2 class="field field--name-field-hp-box-4-title field--type-text field--label-hidden">
		<?php print $node->field_hp_box_4_title['und'][0]['value'];?></h2>
		<div class="field field--name-field-hp-box-4-text field--type-text-long field--label-hidden">
		<?php print $node->field_hp_box_4_text['und'][0]['value'];?></div>
		<div class="field field--name-field-hp-box-4-link field--type-link-field field--label-hidden">
		<a href="<?php print $node->field_hp_box_4_link['und'][0]['url'];?>"><?php print $node->field_hp_box_4_link['und'][0]['title'];?>></a></div>
	</div>
	</a>
  </div>
  <?php print render($content['field_page_body']); ?>
  <?php print render($content['field_page_highlight']); ?>
  

  <?php print render($content['links']); ?>
  <?php print render($content['comments']); ?>
</article>