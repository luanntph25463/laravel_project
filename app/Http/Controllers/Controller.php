<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Stripe\Stripe;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    // public function index(){
    //       Stripe::setApiKey('222');
    //       $token = \Stripe\Token::create([
    //         'card' => [
    //             'number' => $request->input('card_number'),
    //             'exp_month' => $request->input('expiration_month'),
    //             'exp_year' => $request->input('expiration_year'),
    //             'cvc' => $request->input('cvc'),
    //         ],
    //     ]);
    // }
}
