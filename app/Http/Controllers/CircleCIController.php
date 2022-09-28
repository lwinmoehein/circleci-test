<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\WebhookNotification;
use Illuminate\Http\{JsonResponse, Response};

class CircleCIController extends Controller
{
    //
    public function getAllNotifications()
    : JsonResponse {

        return response()->json();
    }

    public function handleNotification()
    : JsonResponse {

        return response()
            ->json(null, Response::HTTP_NO_CONTENT);
    }

    public function hello(){

    }

}
