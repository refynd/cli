<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Refynd\Cli\Application;

class ApplicationTest extends TestCase
{
    public function test_application_has_correct_name_and_version(): void
    {
        $app = new Application();
        
        $this->assertEquals('Refynd CLI', $app->getName());
        $this->assertEquals('2.0.0', $app->getVersion());
    }
    
    public function test_application_has_required_commands(): void
    {
        $app = new Application();
        
        $this->assertTrue($app->has('new'));
        $this->assertTrue($app->has('make:controller'));
        $this->assertTrue($app->has('make:model'));
        $this->assertTrue($app->has('make:middleware'));
        $this->assertTrue($app->has('serve'));
        $this->assertTrue($app->has('test'));
    }
}
