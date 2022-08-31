<?php

namespace App\Actions;

use App\Http\Requests\UserStoreRequest;
use App\Models\User;

class StoreUserAction
{
    public function execute(UserStoreRequest $request)
    {
        return User::create($request->all());
    }
}
