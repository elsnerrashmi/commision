<?php
/**
 * Created by PhpStorm.
 * User: Rashmi Dholakiya
 * Date: 31/5/18
 * Time: 5:23 PM
 */

namespace App\Repositories;


class SyncRepository
{
    protected $username, $password, $url;

    public function __construct()
    {
        $this->username = config('constants.api_username');
        $this->password = config('constants.api_password');
        $this->url = config('constants.api_url');
    }

    public function syncData()
    {
        $this->callApi('api1');
    }

    public function callApi($api)
    {
        $data = file_get_contents($this->url . '/endpoints/' . $api);
    }

    public function saveData($data)
    {

    }
}