<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\MarketingUser;

class MarketingUserController extends Controller
{
  public function create(Request $request)
  {
      $data_object = json_decode($request->getContent());
      $validated = $this->validate($request,[
        'email'=>'required|max:192',
        'first_name'=>'required|max:192',
        'last_name'=>'required|max:192'
        ]);
    try{
        return MarketingUser::create($validated);
    }catch(\Exeption $e){
        return response($e->getMessage(),500);
    }

  }

  public function opt_out(int $user_id)
  {
    $User = MarketingUser::find($user_id);
    if($User){
        try{
            $User->delete();
            return response('User deleted');
        }catch(\Exception $e){
            return response($e->getMessage(),500);
        }
    }else{
        return response('User not found',404);
    }
  }

}
