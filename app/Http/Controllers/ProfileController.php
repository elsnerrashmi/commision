<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Repositories\ProfileRepository;
use Auth;

/**
 * Class ProfileController
 * @package App\Http\Controllers\Profile
 */
class ProfileController extends Controller
{
    /**
     * @var \App\Repositories\ProfileRepository
     */
    protected $profile_repository;

    /**
     * ProfileController constructor.
     * @param \App\Repositories\ProfileRepository $profileRepository
     */
    public function __construct(ProfileRepository $profileRepository)
    {
        $this->profile_repository = $profileRepository;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('profile.edit');
    }


    /**
     * @param \App\Http\Requests\ProfileRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileRequest $request)
    {
        $this->profile_repository->update($request);

        flash(config('messages.profile.update'));

        return redirect()->back();
    }


}
