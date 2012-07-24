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

// no direct access
defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once dirname(__FILE__).'/helper.php';

$script	= modRKRCookieControlHelper::getScript($params);

if($script) {
	if ($params->get('ccSoort') == 'informerend') {
		$intro = $params->get('introInformerend');
		$vervolg = $params->get('vervolgInformerend');
	}
	if ($params->get('ccSoort') == 'impliciet') {
		$intro = $params->get('introImpliciet');
		$vervolg = $params->get('vervolgImpliciet');
	}
	$positie = $params->get('ccPositie');
	$vorm = $params->get('ccVorm');
	$thema = $params->get('ccTheme');
	$hide = $params->get('ccHide');
	require JModuleHelper::getLayoutPath('mod_rkr_cookiecontrol', 'default');
}
