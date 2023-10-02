<?php

namespace App\Http\Controllers;

use App\Models\DonationInfo;
use App\Http\Requests\StoreDonationInfoRequest;
use App\Http\Requests\UpdateDonationInfoRequest;

class DonationInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreDonationInfoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDonationInfoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DonationInfo  $donationInfo
     * @return \Illuminate\Http\Response
     */
    public function show(DonationInfo $donationInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DonationInfo  $donationInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(DonationInfo $donationInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDonationInfoRequest  $request
     * @param  \App\Models\DonationInfo  $donationInfo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDonationInfoRequest $request, DonationInfo $donationInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DonationInfo  $donationInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(DonationInfo $donationInfo)
    {
        //
    }
}
