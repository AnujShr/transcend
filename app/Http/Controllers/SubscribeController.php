<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscribeFormRequest;
use App\subscribe;

class SubscribeController extends Controller
{
    public function store(SubscribeFormRequest $request)
    {
        $data= $request->all();
        $email = $data['email'];
        Subscribe::create([
            'email' => $email
        ]);

        $return['success'] = true;
        return response()->json($return);
    }
}
