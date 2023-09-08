<?php
namespace Nishal\DipWithIoC\InvertingWithInterface;

class DemoController
{
    public function handle($inputMethod, $outputMethod)
    {
        $reporter = new Reporter();
        $reporter->generateBalanceSheet($inputMethod, $outputMethod);
    }

}