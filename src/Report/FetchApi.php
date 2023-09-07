<?php
namespace Nishal\Report;

class FetchApi
{
    public function fetchDataFromApi():array
    {
        // Logic to call the api and fetch the data
        // mocking the data
        return [
            [
                'id' => "W1",
                'name' => 'Bharatpur',
                'district' => 'Chitwan',
                'province' => 'Bagmati'
            ],
            [
                'id' => "W2",
                'name' => 'Butwal',
                'district' => 'Rupandehi',
                'province' => 'Lumbini'

            ]
        ];
    }
    
}