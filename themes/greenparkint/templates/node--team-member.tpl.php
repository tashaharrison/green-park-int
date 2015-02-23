<article<?php print $attributes; ?>>
  <?php if (!empty($title_prefix) || !empty($title_suffix) || !$page): ?>
    <header>
      <?php print render($title_prefix); ?>
      <?php if (!$page): ?>
        <?php hide($title); ?>
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
      hide($content['links']); ?>
	  <?php print render($content['field_team_profile_pic']); ?>
	  <div class="team-details">
		  <h4 class="team-name"><?php print $node->title ?></h4>
		  <?php print render($content['field_team_job_title']); ?>
		  <?php print render($content['field_team_phone_no']); ?>
		  <?php if ($content['field_team_email']): ?>
		  <div class="field--name-field-team-email field--name-field-team-email-label field field--type-email">
		  <a href="mailto:<?php print $node->field_team_email['und'][0]['email']; ?>"><?php print $node->field_team_email_label['und'][0]['value']; ?></a></div>
		  <?php endif; ?>
	  </div>
	  <?php print render($content['field_team_bio']); ?>
  </div>

  <?php print render($content['links']); ?>
  <?php print render($content['comments']); ?>
</article>