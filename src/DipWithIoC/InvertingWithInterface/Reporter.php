<?php
namespace Nishal\DipWithIoC\InvertingWithInterface;

class Reporter 
{
    private ExportData $exportObj;
    private FetchData $fetchObj;

    public function generateReport($inputMethod, $outputMethod):void
    {
        //this is still a problem as this method is proned to change when the Export type and Fetch type added up
        // to fix it, we will use Inverting Object Creation
        if ($inputMethod == 'db') {
            $this->fetchObj = new FetchDatabase();
        } elseif ($inputMethod == 'api') {
            $this->fetchObj = new FetchApi();
        }

        if ($outputMethod == 'excel') {
            $this->exportObj = new ExportExcel();
        } elseif ($outputMethod == 'pdf') {
            $this->exportObj = new ExportPDF();
        }

        echo $this->exportObj->export($this->fetchObj->fetch());


    }
}
