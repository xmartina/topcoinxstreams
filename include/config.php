<?php
include $_SERVER['DOCUMENT_ROOT'] . '/include/db.php';
$smartsuppKey = getenv('SMARTSUPP_KEY');
$support_plugin = <<<HTML
<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = '{$smartsuppKey}';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>
<noscript> Powered by <a href="https://www.smartsupp.com" target="_blank">Smartsupp</a></noscript>
HTML;


$siteLink = 'https://topcoinxstreams.com';
$accountLink = 'https://account.topcoinxstreams.com';
$siteName  = 'Topcoin Xstreams';
$siteEmail = 'contact@topcoinxstreams.com';
$siteEmails = array('contact@topcoinxstreams.com', 'support@topcoinxstreams.com');
$sitePhones = array('+175712451212', '+175712451212');

