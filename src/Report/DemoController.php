<?php
namespace Nishal\Report;

class DemoController
{

    public function handle()
    {
        $reporter = new Reporter();
        $reporter->generateBalanceSheet();
    }

}