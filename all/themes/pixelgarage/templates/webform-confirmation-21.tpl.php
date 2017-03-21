<?php

/**
 * @file
 * Customize confirmation screen after successful submission.
 *
 * This file may be renamed "webform-confirmation-[nid].tpl.php" to target a
 * specific webform e-mail on your site. Or you can leave it
 * "webform-confirmation.tpl.php" to affect all webform confirmations on your
 * site.
 *
 * Available variables:
 * - $node: The node object for this webform.
 * - $progressbar: The progress bar 100% filled (if configured). This may not
 *   print out anything if a progress bar is not enabled for this node.
 * - $confirmation_message: The confirmation message input by the webform
 *   author.
 * - $sid: The unique submission ID of this submission.
 * - $url: The URL of the form (or for in-block confirmations, the same page).
 */

$shariff_block = module_exists('shariff') ? shariff_block_view('shariff_block') : null;

?>
<?php print $progressbar; ?>

<div class="webform-confirmation">
  <?php if ($confirmation_message): ?>
    <?php print $confirmation_message; ?>
  <?php else: ?>
    <p class="pxl-title">Vielen Dank für Ihr Interesse an unserer Studie.</p>
    <p><?php print t('Sobald wir Ihre Angaben überprüft haben, werden wir Ihnen per E-Mail mitteilen, ob Sie an der Studie teilnehmen können.'); ?></p>
  <?php endif; ?>
</div>

<div><?php print render($shariff_block); ?></div>

<div class="links">
  <a href="/"><?php print t('Zurück zur Startseite') ?></a>
</div>
