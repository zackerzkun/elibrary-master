<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoggingTest extends TestCase
{
    public function testLogging(){
        log::info("Hello Info");
        log::warning("Hello Warning");
        log::error("Hello Error");
        log::critical("Hello Critical");

        self::assertTrue(true);
    }
    
}
