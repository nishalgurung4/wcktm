<?php
namespace Nishal\DipWithIoC\InvertingObjectCreation\DI\Constructor;
use Nishal\DipWithIoC\InvertingObjectCreation\DI\FetchData;
use Nishal\DipWithIoC\InvertingObjectCreation\DI\ExportData;

class Reporter
{
    private $exportObj;
    private $fetchObj;

    public function __construct(FetchData $fetchObj, ExportData $exportObj)
    {
        $this->fetchObj = $fetchObj;
        $this->exportObj = $exportObj;
    }

    public function generateReport() 
    {
        echo $this->exportObj->export($this->fetchObj->fetch());
    }
}