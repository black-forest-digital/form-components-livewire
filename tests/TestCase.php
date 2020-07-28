<?php

namespace Bfd\FormComonentLivewire\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Bfd\FormComonentLivewire\FormComonentLivewireServiceProvider;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();

        $this->withFactories(__DIR__.'/database/factories');
    }

    protected function getPackageProviders($app)
    {
        return [
            FormComonentLivewireServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'sqlite');
        $app['config']->set('database.connections.sqlite', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);

        /*
        include_once __DIR__.'/../database/migrations/create_FormComonentsLivewire_table.php.stub';
        (new \CreatePackageTable())->up();
        */
    }
}
