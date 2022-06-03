<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Http;

class YoutubeController extends Controller
{
    /**
     * @return JsonResponse
     */
    public function getTanks(): JsonResponse
    {
        $url = 'https://www.googleapis.com/youtube/v3/search?&part=snippet&channelId=UCrNQ0nuum9rkXKiNCBK67yQ&maxResults=2&key=AIzaSyDUnszq28_UHEI5Bu43NMb6RAB0JMHcqQ8';

        $response = Http::get($url);

        return response()->json($response->json()['items']);
    }
}
