<?php
/**
 * Created by PhpStorm.
 * User: Rashmi Dholakiya
 * Date: 5/7/17
 * Time: 4:01 PM
 */

namespace App\Repositories\Admin;


use App\Models\Setting;

/**
 * Class SettingsRepository
 * @package App\Repositories\Backend
 */
class SettingsRepository
{
    /**
     * SettingsRepository constructor.
     * @param \App\Models\Backend\Setting $setting
     */
    function __construct(Setting $setting)
    {
        $this->model = $setting;
    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        return $this->model->pluck('value', 'key');
    }

    /**
     * @param $request
     */
    public function update($request)
    {
        $requestData = null;
        if ($request->hasFile('site_logo')) {

            $uploadPath = public_path('general');
            $extension = $request->file('site_logo')->getClientOriginalExtension();
            $fileName = rand(11111, 99999) . '.' . $extension;
            $request->file('site_logo')->move($uploadPath, $fileName);
            $where['key'] = "site_logo";
            $requestData['value'] = $fileName;
            $setting = $this->isExist($where);

            if ($setting)
                $setting->update($requestData);
            else {
                $requestData['key'] = "site_logo";
                $requestData['value'] = $fileName;
                $this->store($requestData);
            }
        }
        $requestData = null;
        if ($request->hasFile('site_favicon')) {
            $uploadPath = public_path('general');
            $extension = $request->file('site_favicon')->getClientOriginalExtension();
            $fileName = rand(11111, 99999) . '.' . $extension;
            $request->file('site_favicon')->move($uploadPath, $fileName);
            $where['key'] = "site_favicon";
            $requestData['value'] = $fileName;
            $setting = $this->isExist($where);
            if ($setting)
                $setting->update($requestData);
            else {
                $requestData['key'] = "site_favicon";
                $requestData['value'] = $fileName;
                $this->store($requestData);
            }
        }
        $requestData = null;
        $where['key'] = "site_name";
        $requestData['value'] = $request->site_name;
        $setting = $this->isExist($where);
        if ($setting)
            $setting->update($requestData);
        else {
            $requestData['key'] = "site_name";
            $requestData['value'] = $request->site_name;
            $this->store($requestData);
        }
        $requestData = null;
        $where['key'] = "footer_text";
        $requestData['value'] = $request->footer_text;
        $setting = $this->isExist($where);
        if ($setting) {
            $setting->update($requestData);
        } else {
            $requestData['key'] = "footer_text";
            $requestData['value'] = $request->footer_text;
            $this->store($requestData);
        }
    }

    /**
     * @param $where
     * @return mixed
     */
    public function isExist($where)
    {
        return $this->model->where($where)->first();
    }

    /**
     * @param $data
     */
    public function store($data)
    {
        $this->model->create($data);
    }
}