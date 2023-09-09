<?php
namespace Nishal\IocContainer;
use Nishal\IocContainer\ExportData;
use Nishal\IocContainer\FetchData;

class Reporter 
{
    private $exportObj;
    private $fetchObj;

    public function __construct(FetchData $fetchObj, ExportData $exportObj)
    {
        $this->exportObj = $exportObj;
        $this->fetchObj = $fetchObj;
    }

    public function generateReport():void 
    {
        echo $this->exportObj->export($this->fetchObj->fetch());
    }
}
