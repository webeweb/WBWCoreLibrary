<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Form\Renderer;

use PHPUnit_Framework_TestCase;
use WBW\Library\Core\Form\Renderer\FormRenderer;
use WBW\Library\Core\Form\Renderer\FormRendererInterface;
use WBW\Library\Core\Form\Renderer\TranslateFormRendererInterface;

/**
 * Form renderer test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Form\Renderer
 * @final
 */
final class FormRendererTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the render() method.
	 *
	 * @return void
	 */
	public function testRender() {

		$obj = [
			null,
			$this->getMockBuilder(FormRendererInterface::class)->getMock(),
			$this->getMockBuilder(TranslateFormRendererInterface::class)->getMock(),
			$this,
		];

		// Set the mocks.
		$obj[1]->expects($this->any())->method("getChoiceLabel")->willReturn("choiceLabel");
		$obj[2]->expects($this->any())->method("getChoiceLabel")->willReturn("translatedChoiceLabel");

		$this->assertEquals("label.empty_selection", FormRenderer::render($obj[0]));
		$this->assertEquals("choiceLabel", FormRenderer::render($obj[1]));
		$this->assertEquals("translatedChoiceLabel", FormRenderer::render($obj[2]));
		$this->assertEquals("FormRendererInterface not implemented by this object", FormRenderer::render($obj[3]));
	}

}