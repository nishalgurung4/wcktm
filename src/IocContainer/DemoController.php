<?php
namespace Nishal\IocContainer;

class DemoController
{
    public function handle()
    {
        $container = container();
        $reporter = $container->resolve(Reporter::class);
        $reporter->generateReport();
    }
}