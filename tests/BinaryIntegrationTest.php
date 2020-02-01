<?php
namespace Test\GollumSF\MJMLBinary;

use NotFloran\MjmlBundle\Renderer\BinaryRenderer;
use PHPUnit\Framework\TestCase;

class BinaryIntegrationTest extends TestCase {
	
	private $mjml = '
<mjml>
	<mj-body>
		<mj-section>
			<mj-column>
				<mj-divider border-color="#F45E43"></mj-divider>
				<mj-text font-size="20px" color="#F45E43" font-family="helvetica">Hello World</mj-text>
			</mj-column>
		</mj-section>
	</mj-body>
</mjml>
	';
	
	public function testIntegration() {

		$binaryRenderer = new BinaryRenderer(__DIR__.'/../dist/mjml-linux', false, 'strict');
		$result = $binaryRenderer->render($this->mjml);
		$this->assertStringContainsString('<div style="font-family:helvetica;font-size:20px;line-height:1;text-align:left;color:#F45E43;">Hello World</div>', $result);
	}

}