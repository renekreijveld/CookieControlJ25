<?php

/**
 * @version 1.0.0 stable
 * @package RKR Cookie Control
 * @copyright Copyright (C) 2012 ReneKreijveld.nl, All rights reserved.
 * @license http://www.gnu.org/licenses GNU/GPL
 * @author url: http://www.renekreijveld.nl
 * @author email email@renekreijveld.nl
 * @developer René Kreijveld
 *
 * RKR Cookie Control is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version. See <http://www.gnu.org/licenses/>.
 *
 * RKR Cookie Control is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 */

// No direct access.
defined('_JEXEC') or die;

if ($params->get('ccjQuery') == '1') {
	$document =& JFactory::getDocument();
	$document->addScript(JURI::root(true).'/modules/mod_rkr_cookiecontrol/assets/jquery.min.js');
}

?>
<script type="text/javascript"><?php echo $script;?></script>
<script type="text/javascript">//<![CDATA[
  cookieControl({
      introText:'<?php echo $intro;?>',
      fullText:'<?php echo $vervolg;?>',
      position:'<?php echo $positie;?>',
      shape:'<?php echo $vorm;?>', // triangle or diamond
      theme:'<?php echo $thema;?>', // light or dark
      startOpen:true,
      autoHide:<?php echo $hide;?>,
      subdomains:true,
      protectedCookies: [], //list the cookies you do not want deleted ['analytics', 'twitter']
      onAccept:function(){},
      onReady:function(){},
      onCookiesAllowed:function(){},
      onCookiesNotAllowed:function(){},
      countries:'' // Or supply a list ['United Kingdom', 'Greece']
      });

      function ccAddAnalytics() {
        jQuery.getScript("http://www.google-analytics.com/ga.js", function() {
          var GATracker = _gat._createTracker('UAXXXXXX');
          GATracker._trackPageview();
        });
      }
   //]]>
</script>
