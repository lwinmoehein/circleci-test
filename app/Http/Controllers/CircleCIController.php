<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\WebhookNotification;
use Illuminate\Http\{JsonResponse, Response};
use App\Helpers\CircleCINotificationHelper;

class CircleCIController extends Controller
{
    //
    public function getAllNotifications()
    : JsonResponse {

        return response()->json(WebhookNotification::all());
    }

    public function handleNotification(Request $request)
    : JsonResponse {

        CircleCINotificationHelper::handle($request);

        return response()
            ->json(null, Response::HTTP_NO_CONTENT);
    }

}
