<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;
use App\Benefactor;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BenefactorRequest;
use App\Http\Resources\Benefactor\AllBenefactorResourceCollection;

class SeteingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getToken()
    {
        
        $mont=Carbon::now('libya')->format('m');
        $year=Carbon::now('libya')->format('Y')-2000;
        $token=Str::uuid(10).$year.$mont;
        $data=['token'=>$token];
        return response()->json($data, 200);
        
    }


}
