<?php
namespace Nishal\Report;

class Reporter 
{
    private $exportExcelObj;
    private $fetchDatabaseObj;

    public function __construct() 
    {
        $this->exportExcelObj = new ExportExcel();
        $this->fetchDatabaseObj = new FetchDatabase();
    }

    public function generateBalanceSheet():void 
    {
        $dataFromDB = $this->fetchDatabaseObj->fetchDataFromDatabase();
        echo ($this->exportExcelObj->exportToExcel($dataFromDB));
    }
}
