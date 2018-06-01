<?php
/**
 * Created by PhpStorm.
 * User: Rashmi Dholakiya
 * Date: 5/7/17
 * Time: 4:01 PM
 */

namespace App\Repositories;

use App\User;
use Illuminate\Support\Facades\Auth;

/**
 * Class ProfileRepository
 * @package App\Repositories
 */
class ProfileRepository
{

    /**
     * ProfileRepository constructor.
     * @param \App\User $user
     */
    function __construct(User $user)
    {
        $this->model = $user;
    }

    /**
     * @param $request
     */
    public function update($request)
    {
        $id = Auth::id();
        $user = $this->model->find($id);
        $user->fill($request->except('_token', 'password', 'profile_pic', 'confirm_password'));
        if ($request->password != '') {
            $user->password = bcrypt($request->password);
        }
        if ($request->hasFile('profile_pic')) {
            $destinationPath = public_path() . '/user/profile/';
            $extension = $request->file('profile_pic')->getClientOriginalName();
            $fileName = rand(11111, 99999) . strtotime(date('Y-m-d H:i:s')) . $extension;
            $request->file('profile_pic')->move($destinationPath, $fileName);
            $user->profile_pic = $fileName;
        }
        $user->save();
    }


}