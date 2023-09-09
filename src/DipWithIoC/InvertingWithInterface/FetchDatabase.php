<?php
namespace Nishal\DipWithIoC\InvertingWithInterface;

class FetchDatabase implements FetchData
{
    public function fetch():array
    {
        // Logic to connect to the database, execute a query, and fetch the data
        return [
            [
                'id' => 1,
                'name' => 'Pokhara',
                'district' => 'Kaski',
                'province' => 'Gandaki'
            ],
            [
                'id' => 2,
                'name' => 'Kathmandu',
                'district' => 'Kathmandu',
                'province' => 'Bagmati'

            ]
        ];
    }
    
}