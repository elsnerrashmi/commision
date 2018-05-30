<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SettingsRequest;
use App\Repositories\Admin\SettingsRepository;
use Session;

/**
 * Class SettingController
 * @package App\Http\Controllers\Backend\Settings
 */
class SettingController extends Controller
{
    protected $setting_repo;

    public function __construct(SettingsRepository $settingsRepository)
    {
        $this->middleware('auth');
        $this->setting_repo = $settingsRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $setting = $this->setting_repo->getAll();
        if (isset($setting)) {
            $setting['site_logo'] = isset($setting['site_logo']) ? $setting['site_logo'] : config('constants.site_logo');
            $setting['site_name'] = isset($setting['site_name']) ? $setting['site_name'] : config('constants.site_name');
            $setting['site_favicon'] = isset($setting['site_favicon']) ? $setting['site_favicon'] : config('constants.site_favicon');
            $setting['footer_text'] = isset($setting['footer_text']) ? $setting['footer_text'] : config('constants.footer_text');
        }
        return view('admin.setting.edit', compact('setting'));
    }


    /**
     * @param SettingsRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(SettingsRequest $request)
    {
        $this->setting_repo->update($request);

        flash(config('messages.settings.update'));

        return redirect('admin/settings');
    }


}
