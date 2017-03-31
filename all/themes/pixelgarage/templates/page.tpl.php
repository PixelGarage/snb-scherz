<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup templates
 */
$files_url = file_create_url('sites/all/themes/pixelgarage/_snb_files');

$nid = 21;
$node = node_load($nid);
$render_item = node_view($node, 'default');
?>
<!--[if lt IE 8]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
  your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to
  improve your experience.
</p>
<![endif]-->
<div id="container">
  <div id="top">
    <div id="header">
      <div id="logo">
        <a href="/"><span>SNB BNS+</span></a>
        <img class="clearfix" id="logoimg" src="<?php print $files_url . "/snb_logo_50mm_k_pos_150dpi-bae4c0b373a27ade78dc0ddb72fbe51e.png" ?>">
      </div>
      <?php if (!empty($page['navigation'])): ?>
        <?php print render($page['navigation']); ?>
      <?php endif; ?>
      <nav id="metanav">
        <ul id="servicenav" class="inline">
          <li><a href="http://snb.ch/de/srv/id/contact">Kontakt</a></li>
          <li><a href="http://snb.ch/de/srv/id/sitemap">Übersicht</a></li>
          <li><a href="http://snb.ch/de/srv/id/glossary">Glossar</a></li>
        </ul>
        <ul id="languageswitcher" class="inline">
          <li><b>DE</b></li>
          <li><a href="http://snb.ch/fr/switchLocale/">FR</a></li>
          <li><a href="http://snb.ch/en/switchLocale/">EN</a></li>
          <li><a href="http://snb.ch/it/">IT</a></li>
        </ul>
        <div id="navsearch" class="clearfix">
          <form method="GET" id="metasearchform" action="http://snb.ch/de/system/search">
            <input type="search" name="searchInput" placeholder="Suche">
            <button type="submit">Search</button>
          </form>
        </div>
      </nav>
    </div>
    <div id="breadcrumb">
      <nav>
      </nav>
      <br>
      <span id="rendertime">08.03.2017 12:42</span>
    </div>
  </div>
  <div id="mainrow">
    <nav id="navbar">
      <ul class="l0">
        <li class="active">
          <span class="divider-narrow"></span>
          <h3><a class="parent" href="http://snb.ch/de/iabout/snb"><span>Informationen über</span></a></h3>
          <ul class="l1">
            <li class="leaf">
              <a href="http://snb.ch/de/iabout/snb"><span>Die SNB</span></a>
            </li>
            <li class="leaf">
              <a href="http://snb.ch/de/iabout/monpol"><span>Geldpolitik</span></a>
            </li>
            <li class="leaf">
              <a href="http://snb.ch/de/iabout/assets"><span>Anlage der Aktiven</span></a>
            </li>
            <li class="leaf">
              <a href="http://snb.ch/de/iabout/finstab"><span>Finanzstabilität</span></a>
            </li>
            <li class="leaf">
              <a href="http://snb.ch/de/iabout/paytrans"><span>Zahlungsverkehr</span></a>
            </li>
            <li class="leaf">
              <a href="http://snb.ch/de/iabout/cash"><span>Bargeld</span></a>
            </li>
            <li class="leaf">
              <a href="http://snb.ch/de/iabout/stat"><span>Statistiken</span></a>
            </li>
            <li class="leaf">
              <a href="http://snb.ch/de/iabout/pub"><span>Publikationen</span></a>
            </li>
            <li class="leaf">
              <a href="http://snb.ch/de/iabout/internat"><span>Internationales</span></a>
            </li>
          </ul>
        </li>
        <li class="active">
          <span class="divider-narrow"></span>
          <h3><a class="parent" href="http://snb.ch/de/ifor/media"><span>Informationen für</span></a></h3>
          <ul class="l1">
            <li class="leaf">
              <a href="http://snb.ch/de/ifor/media"><span>Medien</span></a>
            </li>
            <li class="leaf">
              <a href="http://snb.ch/de/ifor/finmkt"><span>Finanzmärkte</span></a>
            </li>
            <li class="leaf">
              <a href="http://snb.ch/de/ifor/research"><span>Forschung</span></a>
            </li>
            <li class="leaf">
              <a href="http://snb.ch/de/ifor/job"><span>Karriere</span></a>
            </li>
            <li class="leaf">
              <a href="http://snb.ch/de/ifor/shares"><span>Aktionäre</span></a>
            </li>
            <li class="leaf">
              <a href="http://snb.ch/de/ifor/public"><span>Publikum</span></a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <div id="main" class="narrow">
      <?php print $messages; ?>
      <?php if ($is_front): ?>
        <a href="http://snb.ch/de/#" id="printOperator">Drucken</a>
        <div class="content">
          <h1>Die Schweizerische Nationalbank führt als unabhängige Zentralbank die Geld- und Währungspolitik des Landes</h1>
          <div class="clearfix">
            <p><span class="imgwrapper"><img src="<?php print $files_url . "/topic1_img0001.png"?>" alt="Startseite-01" width="492" height="103"></span></p>
            <div class="columnwrapper" style="visibility: visible;">
              <div class="column100">
                <div>
                  <section class="list 2x2list">
                    <hgroup>
                      <h2>Neues auf der Website</h2>
                      <h4 class="rss-href">
                        <a href="http://snb.ch/selector/de/mmr/news/rss">RSS</a>
                      </h4>
                      <h4 class="all-href">
                        <a href="http://snb.ch/de/ifor/media/id/media_news_all">Alle</a>
                      </h4>
                    </hgroup>
                    <ul>
                      <li>
                        <article itemscope="itemscope" itemtype="http://schema.org/Article" class="clearfix">
                          <div itemprop="datePublished" class="col" content="2017-03-30T11:00">
                            <span class="date">30.03.2017</span>
                          </div>
                          <div itemprop="name" class="col">
                            <b>Geldmarkt-Buchforderungen</b>
                            <br>
                            <a href="http://snb.ch/de/mmr/reference/claims_new/source/claims_new.de.pdf">Ankündigungen und Konditionen von neuen Geldmarkt-Buchforderungen (in Schweizer Franken)</a>
                          </div>
                        </article>
                      </li>
                      <li>
                        <article itemscope="itemscope" itemtype="http://schema.org/Article" class="clearfix">
                          <div itemprop="datePublished" class="col" content="2017-03-28T11:30">
                            <span class="date">28.03.2017</span>
                          </div>
                          <div itemprop="name" class="col">
                            <b>Geldmarkt-Buchforderungen</b>
                            <br>
                            <a href="http://snb.ch/de/mmr/reference/claims_res/source/claims_res.de.pdf">Geldmarkt-Buchforderungen der Schweizerischen Eidgenossenschaft: Zeichnungsergebnisse</a>
                          </div>
                        </article>
                      </li>
                      <li>
                        <article itemscope="itemscope" itemtype="http://schema.org/Article" class="clearfix">
                          <div itemprop="datePublished" class="col" content="2017-03-27T10:00">
                            <span class="date">27.03.2017</span>
                          </div>
                          <div itemprop="name" class="col">
                            <b>Medienmitteilung</b>
                            <br>
                            <a href="http://snb.ch/de/mmr/reference/gwd_20170327/source/gwd_20170327.de.pdf">Geldpolitisch wichtige Daten für die Woche zum 24. März 2017</a>
                          </div>
                        </article>
                      </li>
                      <li>
                        <article itemscope="itemscope" itemtype="http://schema.org/Article" class="clearfix">
                          <div itemprop="datePublished" class="col" content="2017-03-24T09:00:01">
                            <span class="date">24.03.2017</span>
                          </div>
                          <div itemprop="name" class="col">
                            <b>Medienmitteilung</b>
                            <br>
                            <a href="http://snb.ch/de/mmr/reference/pre_20170324/source/pre_20170324.de.pdf">Zahlungsbilanz und Auslandvermögen der Schweiz: 4. Quartal 2016 und Jahr 2016</a>
                          </div>
                        </article>
                      </li>
                      <li>
                        <article itemscope="itemscope" itemtype="http://schema.org/Article" class="clearfix">
                          <div itemprop="datePublished" class="col" content="2017-03-24T09:00">
                            <span class="date">24.03.2017</span>
                          </div>
                          <div itemprop="name" class="col">
                            <b>Datenportal der SNB</b>
                            <br>
                            <a href="https://data.snb.ch/de/publishingSet/BOPIIP">Zahlungsbilanz und Auslandvermögen der Schweiz, 4. Quartal 2016</a>
                          </div>
                        </article>
                      </li>
                    </ul>
                    <nav class="paging">
                    </nav>
                  </section>
                </div>
              </div>
            </div>
            <div class="columnwrapper" style="visibility: visible;">
              <div class="column50">
                <div>
                  <section class="list eventlist">
                    <hgroup>
                      <h2>Terminkalender</h2>
                      <h4 class="rss-href">
                        <a href="http://snb.ch/selector/de/mmr/events/rss">RSS</a>
                      </h4>
                      <h4 class="all-href">
                        <a href="http://snb.ch/de/ifor/media/id/media_events">Alle</a>
                      </h4>
                    </hgroup>
                    <ul>
                      <li>
                        <article itemscope="itemscope" itemtype="http://schema.org/BusinessEvent" class="clearfix">
                          <div itemprop="startdate" class="col" content="2017-04-07T09:00">
                            <span class="date">07.04.2017</span>
                            <br>
                            <span>09:00</span>
                          </div>
                          <div itemprop="name" class="col">
                            <a class="summary" href="http://snb.ch/de/mmr/event/evt_20170407.de.ics">IMF SDDS (SNB Data): International Reserves and Foreign Currency Liquidity</a>
                          </div>
                        </article>
                      </li>
                      <li>
                        <article itemscope="itemscope" itemtype="http://schema.org/BusinessEvent" class="clearfix">
                          <div itemprop="startdate" class="col" content="2017-04-11T08:00">
                            <span class="date">11.04.2017</span>
                            <br>
                            <span>08:00</span>
                          </div>
                          <div itemprop="name" class="col">
                            <a class="summary" href="http://snb.ch/de/mmr/event/evt_20170411.de.ics">Eidgenössische Anleihe - Ankündigung</a>
                          </div>
                        </article>
                      </li>
                      <li>
                        <article itemscope="itemscope" itemtype="http://schema.org/BusinessEvent" class="clearfix">
                          <div itemprop="startdate" class="col" content="2017-04-12T11:00">
                            <span class="date">12.04.2017</span>
                            <br>
                            <span>11:00</span>
                          </div>
                          <div itemprop="name" class="col">
                            <a class="summary" href="http://snb.ch/de/mmr/event/evt_20170412.de.ics">Eidgenössische Anleihe - Ergebnis</a>
                          </div>
                        </article>
                      </li>
                      <li>
                        <article itemscope="itemscope" itemtype="http://schema.org/BusinessEvent" class="clearfix">
                          <div itemprop="startdate" class="col" content="2017-04-21T09:00">
                            <span class="date">21.04.2017</span>
                            <br>
                            <span>09:00</span>
                          </div>
                          <div itemprop="name" class="col">
                            <a class="summary" href="http://snb.ch/de/mmr/event/evt_20170421_1.de.ics">Volkswirtschaftliche Daten, April 2017 (Datenportal der SNB)</a>
                          </div>
                        </article>
                      </li>
                      <li>
                        <article itemscope="itemscope" itemtype="http://schema.org/BusinessEvent" class="clearfix">
                          <div itemprop="startdate" class="col" content="2017-04-21T09:00">
                            <span class="date">21.04.2017</span>
                            <br>
                            <span>09:00</span>
                          </div>
                          <div itemprop="name" class="col">
                            <a class="summary" href="http://snb.ch/de/mmr/event/evt_20170421_2.de.ics">Monatliche Bankenstatistik, April 2017 (Datenportal der SNB)</a>
                          </div>
                        </article>
                      </li>
                    </ul>
                    <nav class="paging">
                    </nav>
                  </section>
                </div>
              </div>
              <div class="column50">
                <h2>Empfohlene Seiten</h2>
                <ul class="linklist">
                  <li><a href="http://snb.ch/de/ifor/media/id/media_releases" class="link-internal">Medienmitteilungen</a></li>
                  <li><a href="http://snb.ch/de/iabout/cash/id/cash_instr_overview" title="Merkblätter Banknoten und Münzen " class="link-internal">Merkblätter Banknoten und Münzen</a></li>
                  <li><a href="http://snb.ch/de/iabout/stat/statpub/id/statpub_overview" class="link-internal">Statistische Publikationen (Übersicht)</a></li>
                  <li><a href="http://snb.ch/de/ifor/media/id/media_speeches" class="link-internal">Referate</a></li>
                  <li><a href="http://snb.ch/de/ifor/job/id/job_openings" class="link-internal">Offene Stellen</a></li>
                  <li><a href="http://snb.ch/de/ifor/public/qas/id/qas_noten" title="http://www.snb.ch/de/ifor/public/qas/id/qas_noten" class="link-internal">Fragen und Antworten</a></li>
                  <li><a href="http://snb.ch/de/ifor/research/id/karl_brunner" title="Karl Brunner Distinguished Lecture Series" class="link-internal">Karl Brunner Distinguished Lecture Series</a>&nbsp;</li>
                  <li><a href="http://snb.ch/de/ifor/media/id/news_alert" class="link-internal">News Alert: Mail-Service der SNB</a></li>
                  <li><a href="http://snb.ch/de/ifor/media/id/media_rss" class="link-internal">RSS-Feeds (Übersicht)</a></li>
                  <li><a href="https://twitter.com/SNB_BNS_de" class="link-external" target="_blank">Die SNB auf Twitter</a></li>
                  <li><a href="http://snb.ch/de/ifor/media/webtv/id/webtv" class="link-internal">Web-TV: SNB-Anlässe</a></li>
                  <li><a href="https://www.youtube.com/channel/UC4vQTVEqtj2orppzBkdGmyg" class="link-external" target="_blank">YouTube-Kanal der SNB</a></li>
                  <li><a href="http://snb.ch/de/iabout/cash/series9/id/cash_series9_downloads/3" class="link-internal">SNB-App "50 Franken"</a></li>
                  <li><a href="http://snb.ch/de/iabout/pub/pub_snb/id/pub_snb_film" title="SNB-Film" class="link-internal">SNB-Film</a><span class="hyperlink">&nbsp;</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      <?php else: ?>
        <?php print render($page['content']); ?>
      <?php endif; ?>
    </div>
    <div id="main-hook" class="narrow">&nbsp;</div>
    <div id="sidebar">
      <div class="content">
        <aside>
          <h2>Aktuelle Devisenkurse</h2>
          <nav>
            <div>
              <div class="exchangeRateTeaser">
                <div class="valuta">31.03.2017</div>
                <div class="rate"><span class="currency">EUR / CHF</span><span class="trend down">&nbsp;</span><span class="value">1.0698</span></div>
                <div class="rate"><span class="currency">USD / CHF</span><span class="trend up">&nbsp;</span><span class="value">0.9963</span></div>
                <div class="rate"><span class="currency">JPY / CHF</span><span class="trend up">&nbsp;</span><span class="value">0.8975</span></div>
                <div class="rate"><span class="currency">GBP / CHF</span><span class="trend up">&nbsp;</span><span class="value">1.2366</span></div>
              </div>
            </div>
            <a href="http://snb.ch/selector/de/mmr/exfeed/rss" class="rss link-internal">RSS</a>
            <a href="http://snb.ch/de/iabout/stat/statrep/id/current_interest_exchange_rates/3" class="link-internal">weiter</a>
          </nav>
        </aside>
        <aside>
          <h2>Aktuelle Zinssätze</h2>
          <img class="large" src="<?php print $files_url . "/interestrate.jpg"?>" width="180" height="150">
          <nav>
            <a href="http://snb.ch/selector/de/mmr/intfeed/rss" class="rss link-internal">RSS</a>
            <a href="http://snb.ch/de/iabout/stat/statrep/id/current_interest_exchange_rates/2" class="link-internal">weiter</a>
          </nav>
        </aside>
        <aside>
          <h2>Bargeld</h2>
          <img class="medium" src="<?php print $files_url . "/teaser_pic_cash_series9.jpg"?>">
          <nav>
            <a href="http://snb.ch/de/iabout/cash/series9/id/cash_series9" class="link-internal">Entdecken Sie die neue Banknotenserie</a>
          </nav>
        </aside>
        <aside>
          <h2>Publikum</h2>
          <img class="medium" src="<?php print $files_url . "/teaser_pic_our_snb.jpg"?>">
          <nav>
            <a href="http://snb.ch/de/iabout/pub/pub_snb/id/pub_our_snb" class="link-internal">"Unsere Nationalbank": Eine App, eine Website und eine Broschüre</a>
          </nav>
        </aside>
      </div>
    </div>
    <div id="sidebar-hook">&nbsp;</div>
  </div>
  <footer>
    <a class="no-print" href="http://snb.ch/de/srv/id/disclaimer">Rechtliches</a>
    <span class="no-print">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
    ©
    <span>Schweizerische Nationalbank, Zürich (Schweiz)</span>&nbsp;<span>2017</span>
  </footer>
  <script type="text/javascript" data-lazyload="lazyload">
    (function(l) {
      l.jQueryPath('<?php print $files_url . '/jquery-d726dbb8a89a5ec1293b1cdddbc2da62.js'?>');
      l.zeptoPath('<?php print $files_url . '/zepto-b371d1e5f3e497b67294ff5b113a13a8.js'?>');
      l.additionalLibraries('<?php print $files_url . '/postload-97d4d822b25b3e772481369dd589b8a1.js'?>');
      l.requireDomLibrary();
    })(window.SNB.loader);
  </script>
</div>

