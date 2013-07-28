<?php
namespace TYPO3\CMS\Documentation\ViewHelpers\Be\Security;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Francois Suter, <francois.suter@typo3.org>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *  A copy is found in the textfile GPL.txt and important notices to the license
 *  from the author is found in LICENSE.txt distributed with these scripts.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * This view helper checks whether a given BE user is admin or not.
 *
 * = Examples =
 *
 * <code title="Basic usage">
 * <doc:be.security.ifAdmin>
 * You see this is you're an admin.
 * </doc:be.security.ifAdmin>
 * </code>
 * <output>
 * You see this is you're an admin. (if an admin user, of course)
 * </output>
 *
 * <code title="Usage with then / else">
 * <doc:be.security.ifAdmin>
 * <f:then>
 * You see this is you're an admin.
 * </f:then>
 * <f:else>
 * You see this is you're not an admin.
 * </f:else>
 * </doc:be.security.ifAdmin>
 * </code>
 * <output>
 * Content of the "then" tag if an admin, content of the "else" tag otherwise.
 * </output>
 *
 * @api
 */
class IfAdminViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractConditionViewHelper {

	/**
	 * Renders <f:then> child if the current logged in BE user is an admin,
	 * otherwise renders <f:else> child.
	 *
	 * @return string the rendered string
	 * @api
	 */
	public function render() {
		if ($GLOBALS['BE_USER']->isAdmin()) {
			return $this->renderThenChild();
		} else {
			return $this->renderElseChild();
		}
	}
}

?>