<?php

namespace Mhabib555\LaravelPanther;

class LaravelPanther
{
    public function justDoIt() {
        $response = Http::get('https://inspiration.goprogram.ai/');

        return $response['quote'] . ' -' . $response['author'];
    }
}
