<?php

use Tests\Support\DatabaseTestCase;
use CodeIgniter\Test\FeatureTestTrait;

class BasicPagesTest extends DatabaseTestCase
{
	use FeatureTestTrait;

    public function testCanViewHome()
    {
        $result = $this->get('/');

        $result->assertStatus(200);
        $result->assertSee('The small framework with powerful features');
    }

    public function testCanViewDiscuss()
    {
        $result = $this->get('/discuss');

        $result->assertStatus(200);
        $result->assertSee('Security issues should be reported');
    }

    public function testCanViewContribute()
    {
        $result = $this->get('/contribute');

        $result->assertStatus(200);
        $result->assertSee('Contribute to CodeIgniter');
    }

    public function testCanViewDownload()
    {
        $result = $this->get('/download');

        $result->assertStatus(200);
        $result->assertSee('Download');
    }

    public function testCanViewPolicies()
    {
        $result = $this->get('/policies');

        $result->assertStatus(200);
        $result->assertSee('Terms of Service');
    }

    public function testCanViewFinePrint()
    {
        $result = $this->get('/the-fine-print');

        $result->assertStatus(200);
        $result->assertSee('Trademarks');
    }
}
