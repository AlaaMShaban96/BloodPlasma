<?php

namespace App\Http\Controllers\Api;

use App\Benefactor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BenefactorRequest;
use App\Http\Resources\Benefactor\AllBenefactorResourceCollection;

class BenefactorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $benefactors=Benefactor::filter($request->all())->get();
        // dd($request->all());
        return new AllBenefactorResourceCollection($benefactors);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BenefactorRequest $request)
    {
        Benefactor::create($request->all());
        $data=['response'=>'تم إضافة المتبرع'];
        return response()->json($data, 200); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Benefactor  $benefactor
     * @return \Illuminate\Http\Response
     */
    public function show(Benefactor $benefactor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Benefactor  $benefactor
     * @return \Illuminate\Http\Response
     */
    public function edit(Benefactor $benefactor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Benefactor  $benefactor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Benefactor $benefactor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Benefactor  $benefactor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Benefactor $benefactor)
    {
        $remember_token=$benefactor->benefactor;
        $benefactor->delete();
        $data=['response'=>'تم حذف المتبرع'];
        return response()->json($data, 200); 
    }

    public function destroyAll( $remember_token)
    {
        Benefactor::where('remember_token',$remember_token)->delete();    
        $data=['response'=>'تم حذف المتبرعين الخاص بجهازك'];
        return response()->json($data, 200); 
    }
}
