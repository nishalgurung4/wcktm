<?php
namespace Nishal\DipWithIoC\InvertingObjectCreation;

class DemoController
{
    public function handle($inputMethod, $outputMethod):void
    {
        $reporter = new Reporter();
        $reporter->configureFetchData($inputMethod);
        $reporter->configureExport($outputMethod);
        $reporter->generateReport();
    }

}