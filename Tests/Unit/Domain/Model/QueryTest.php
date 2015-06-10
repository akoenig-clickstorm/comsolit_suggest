<?php

namespace TYPO3\ComsolitSuggest\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2015 Andres Lobacovs <info@comsolit.com>, comsolit AG
 *
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
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Test case for class \TYPO3\ComsolitSuggest\Domain\Model\Query.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Andres Lobacovs <info@comsolit.com>
 */
class QueryTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \TYPO3\ComsolitSuggest\Domain\Model\Query
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \TYPO3\ComsolitSuggest\Domain\Model\Query();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getBasewordReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getBaseword()
		);
	}

	/**
	 * @test
	 */
	public function setBasewordForStringSetsBaseword() {
		$this->subject->setBaseword('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'baseword',
			$this->subject
		);
	}
}
