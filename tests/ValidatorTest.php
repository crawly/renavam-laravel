<?php


namespace Crawly\RenavamLaravel\Tests;

use Crawly\RenavamLaravel\RenavamValidatorProvider;
use Illuminate\Support\Facades\Validator;
use Orchestra\Testbench\TestCase;

class ValidatorTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();

        $this->app->register(RenavamValidatorProvider::class);
    }

    public function testValid()
    {
        $renavam = Validator::make(
            ['26550941286'],
            ['renavam']
        );

        $this->assertTrue($renavam->passes());
    }

    public function testInvalid1()
    {
        $renavam = Validator::make(
            ['16550941286'],
            ['renavam']
        );

        $this->assertTrue($renavam->fails());
    }

    public function testInvalid2()
    {
        $renavam = Validator::make(
            ['a1a2a3a4a5a6a7a8'],
            ['renavam']
        );

        $this->assertTrue($renavam->fails());
    }
}