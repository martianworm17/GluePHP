<?php

namespace Andaniel05\GluePHP\Tests\Unit\Extend\VueJS;

use PHPUnit\Framework\TestCase;
use Andaniel05\GluePHP\Extend\VueJS\VueComponent;
use Andaniel05\GluePHP\Extend\VueJS\VueProcessor;
use Andaniel05\GluePHP\Processor\ShortEventsProcessor;

/**
 * @author Andy Daniel Navarro Taño <andaniel05@gmail.com>
 */
class VueComponentTest extends TestCase
{
    public function setUp()
    {
        $this->component = new VueComponent('component');
    }

    public function testDependsOfVueProcessor()
    {
        $this->assertContains(
            VueProcessor::class,
            $this->component->processors()
        );
    }

    public function testDependsOfShortEventsProcessor()
    {
        $this->assertContains(
            ShortEventsProcessor::class,
            $this->component->processors()
        );
    }
}
