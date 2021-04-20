<?php
namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;

use App\Models\Onboarded;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OnboardedController extends Controller
{

    public function store(Request $request)
    {
        $onboarded = Onboarded::firstorcreate($request->all());

        return new JsonResource($onboarded);
    }

}
