<?php
namespace Nishal\Report;

class DemoController
{
    public function handle($inputMethod, $outputMethod)
    {
        $reporter = new Reporter();
        $reporter->generateBalanceSheet($inputMethod, $outputMethod);
    }

}