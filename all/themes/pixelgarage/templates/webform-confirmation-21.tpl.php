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

<div class="shariff" data-services="[&quot;twitter&quot;,&quot;facebook&quot;,&quot;mail&quot;]" data-theme="white" data-orientation="horizontal" data-mail-url="mailto:" data-lang="de" data-url="http://schweizernationalbank.ch/snb-studie/anmeldung">
  <ul class="theme-white orientation-horizontal col-3">
    <li class="shariff-button twitter">
      <a href="https://twitter.com/intent/tweet?text=Schweizerische%20Nationalbank%20(SNB)%20-%20Die%20Schweizerische%20Nationalbank%20f%C3%BChrt%20als%20unabh%C3%A4ngige%20Zentralbank%20die%20Geld-%20und%E2%80%A6&amp;url=http%3A%2F%2Fschweizernationalbank.ch%2Fsnb-studie%2Fanmeldung" data-rel="popup" title="Share on Twitter" role="button" aria-label="Share on Twitter">
        <span class="fa fa-twitter"></span>
        <span class="share_text">tweet</span>
      </a>
    </li>
    <li class="shariff-button facebook">
      <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fschweizernationalbank.ch%2Fsnb-studie%2Fanmeldung" data-rel="popup" title="Share on Facebook" role="button" aria-label="Share on Facebook">
        <span class="fa fa-facebook"></span>
        <span class="share_text">share</span>
      </a>
    </li>
    <li class="shariff-button mail"><a href="mailto:?subject=Schweizerische%20Nationalbank%20(SNB)%20-%20Die%20Schweizerische%20Nationalbank%20f%C3%BChrt%20als%20unabh%C3%A4ngige%20Zentralbank%20die%20Geld-%20und%20W%C3%A4hrungspolitik%20des%20Landes&amp;body=http%3A%2F%2Fschweizernationalbank.ch%2Fsnb-studie%2Fanmeldung" title="Send by email" role="button" aria-label="Send by email">
        <span class="fa fa-envelope"></span>
        <span class="share_text">mail</span>
      </a>
    </li>
  </ul>
</div>


<div class="links">
  <a href="/"><?php print t('Zurück zur Startseite') ?></a>
</div>
