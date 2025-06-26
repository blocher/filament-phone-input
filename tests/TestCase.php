<?php

namespace Ysfkaya\FilamentPhoneInput\Tests;

use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    use TestSuite;

    protected function setUp(): void
    {
        parent::setUp();

        // Ensure the session always has a valid error bag
        session()->put('errors', new \Illuminate\Support\ViewErrorBag);
    }
}
