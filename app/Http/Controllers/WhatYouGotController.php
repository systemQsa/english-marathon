<?php

namespace App\Http\Controllers;

use App\Models\WhatYouGot;
use Illuminate\Http\Request;

class WhatYouGotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getters = WhatYouGot::all();
        return view('admin.whatYouGot.index',['getters' => $getters ]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WhatYouGot  $whatYouGot
     * @return \Illuminate\Http\Response
     */
    public function show(WhatYouGot $whatYouGot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WhatYouGot  $whatYouGot
     * @return \Illuminate\Http\Response
     */
    public function edit(WhatYouGot $whatYouGot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WhatYouGot  $whatYouGot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WhatYouGot $whatYouGot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WhatYouGot  $whatYouGot
     * @return \Illuminate\Http\Response
     */
    public function destroy(WhatYouGot $whatYouGot)
    {
        //
    }
}
