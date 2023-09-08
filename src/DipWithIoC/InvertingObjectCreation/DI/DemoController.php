<?php
namespace Nishal\DipWithIoC\InvertingObjectCreation\DI;
use Nishal\DipWithIoC\InvertingObjectCreation\DI\Constructor\Reporter;
use Nishal\DipWithIoC\InvertingObjectCreation\DI\Setter\Reporter as ReporterSetter;
use Nishal\DipWithIoC\InvertingObjectCreation\DI\Interface\Reporter as ReporterInterface;
class DemoController
{
    public function handle($inputMethod, $outputMethod)
    {
        if ($inputMethod == 'db') {
            $fetchObj = new FetchDatabase();
        } elseif ($inputMethod == 'api') {
            $fetchObj = new FetchApi();
        }

        if ($outputMethod == 'excel') {
            $exportObj = new ExportExcel();
        } elseif ($outputMethod == 'pdf') {
            $exportObj = new ExportPDF();
        }

        //constructor injection
        // $reporter = new Reporter($fetchObj, $exportObj);
        // $reporter->generateReport();

         //setter injection
        //  $reporter = new ReporterSetter();
        //  $reporter->setFetchObj($fetchObj);
        //  $reporter->setExportObj($exportObj);
        //  $reporter->generateReport();

        //interface injection
        $reporter = new ReporterInterface();
        $reporter->setFetchObj($fetchObj);
        $reporter->setExportObj($exportObj);
        $reporter->generateReport();

       
    }
}