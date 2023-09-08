<?php
namespace Nishal\DipWithIoC\InvertingWithInterface;

class ExportPDF implements ExportData
{
    public function export($dataList):string
    {
        $output = "<table>
                        <caption>Export PDF</caption>
                        <tr>
                            <td>ID</td>
                            <td>Name</td>
                            <td>District</td>
                            <td>Province</td>
                        </tr>";

        foreach ($dataList as $data) {
            $output .= "<tr>
                <td>{$data['id']}</td>
                <td>{$data['name']}</td>
                <td>{$data['district']}</td>
                <td>{$data['province']}</td>
            </tr>";
        }

        $output .= "</table>";

        return $output;
    }
}
