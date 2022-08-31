<?php

namespace App\Http\Controllers;

use App\Actions\StoreUserAction;
use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function store(UserStoreRequest $request, StoreUserAction $storeUser)
    {
        $user = $storeUser->execute($request);

        return response()->json($user);
    }
}
