<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfileRequest;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function getprofile($id){
    $profile=User::find($id)->profile;
    return response()->json($profile);
  }
  public function update(StoreProfileRequest $req,$id){
    $profile=User::find($id)->profile;
    $data=Profile::find($profile->id);
    $data->update($req->validated());
    return response()->json($data,200);
  }
}
