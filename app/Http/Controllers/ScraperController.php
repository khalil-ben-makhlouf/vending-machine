<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ScraperController extends Controller
{
    public function scrapeData()
    {
        // Initialize Guzzle client
        $client = new Client();
        $url = 'https://www.nayax.com/blog/best-selling-vending-machine-items/';

    
        try {
            $response = $client->get($url);
    
            if ($response->getStatusCode() == 200) {
                $jsonData = $this->cleanJsonData($response->getBody()->getContents());
    
                $data = json_decode($jsonData);
    
                return response()->json($data);
            } else {
                return response()->json(['error' => 'Failed to fetch the page'], 500);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    
    private function cleanJsonData($jsonData)
    {
        $jsonData = str_replace(["\n", "\t", "\r"], '', $jsonData);
        $jsonData = stripslashes($jsonData);
    
        $jsonData = preg_replace('/^.*?\[/', '[', $jsonData);
        $jsonData = preg_replace('/\].*?$/', ']', $jsonData);
    
        return $jsonData;
    }
    }
