<?php
namespace Nishal\IocContainer;

class DemoController
{
    public function handle():void
    {
        $container = container();
        $reporter = $container->resolve(Reporter::class);
        $reporter->generateReport();
    }
}