<?php
namespace Nishal\Report;

class DemoController
{
    public function handle($inputMethod, $outputMethod):void
    {
        $reporter = new Reporter();
        $reporter->generateReport($inputMethod, $outputMethod);
    }

}