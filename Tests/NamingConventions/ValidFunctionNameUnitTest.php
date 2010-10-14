<?php
/***************************************************************
 * Copyright notice
 *
 * (c) 2010 Laura Thewalt <laura.thewalt@wmdb.de>
 * All rights reserved
 *
 * This script is part of the TYPO3 project. The TYPO3 project is
 * free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * The GNU General Public License can be found at
 * http://www.gnu.org/copyleft/gpl.html.
 *
 * This script is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Unit test class for the ValidFunctionName sniff.
 *
 * PHP version 5
 * TYPO3 version 4
 *
 * @category    NamingConventions
 * @package     TYPO3_PHPCS_Pool
 * @author      Laura Thewalt <laura.thewalt@wmdb.de>
 * @copyright	Copyright (c) 2010, Laura Thewalt
 * @license		http://www.gnu.org/copyleft/gpl.html GNU Public License
 * @version		SVN: $ID$
 * @link		http://pear.typo3.org
 */

/**
 * Unit test class for the ValidFunctionName sniff.
 *
 * A sniff unit test checks a .inc file for expected violations of a single
 * coding standard. Expected errors and warnings are stored in this class.
 *
 * @category    NamingConventions
 * @package     TYPO3_PHPCS_Pool
 * @author      Laura Thewalt <laura.thewalt@wmdb.de>
 * @copyright	Copyright (c) 2010, Laura Thewalt
 * @license		http://www.gnu.org/copyleft/gpl.html GNU Public License
 * @version		@package_version@
 * @link		http://pear.typo3.org
 */
class TYPO3_Tests_NamingConventions_ValidFunctionNameUnitTest extends AbstractSniffUnitTest {
	/**
	 * Returns the lines where errors should occur.
	 *
	 * The key of the array should represent the line number and the value
	 * should represent the number of errors that should occur on that line.
	 *
	 * @return array(int => int)
	 */
	public function getErrorList() {
		return array(
					2 => 1,
					5 => 1,
					8 => 1,
					11 => 1,
					14 => 1,
					17 => 1,
					27 => 1,
					31 => 1,
					35 => 1,
					39 => 1,
					43 => 1,
					47 => 1,
			);
	}
	/**
	 * Returns the lines where warnings should occur.
	 *
	 * The key of the array should represent the line number and the value
	 * should represent the number of warnings that should occur on that line.
	 *
	 * @return array(int => int)
	 */
	public function getWarningList() {
		return array();
	}
}
?>