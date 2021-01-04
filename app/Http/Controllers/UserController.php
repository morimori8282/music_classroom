<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Services\ChangeValue;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all()->where('deleted_at', null);
        // dd($users);
        foreach ($users as $user){

            // 性別名称
            $user->gender_name = ChangeValue::getIdToName('gender', $user->gender);

        }

        return view('users.index', ['users' => $users] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $user = new User;
        
        $user->name = $request->input('name');
        $user->password = $request->input('password');
        $user->official_name = $request->input('official_name');
        $user->phonetic_name = $request->input('phonetic_name');
        $user->gender = $request->input('gender');
        $user->birthday = $request->input('birthday');
        $user->tel = $request->input('tel');
        $user->email = $request->input('email');
        $user->zip = $request->input('zip');
        $user->pref = $request->input('pref');
        $user->address = $request->input('address');
        $user->building = $request->input('building');
        $user->remark = $request->input('remark');

        $user->save();

        // return redirect('users/index');
        // return redirect('user/index');
        return redirect('users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // dd('show');
        $user = User::find($id);
        return view('users.show', ['user' => $user] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::find($id);
        return view('users.edit', ['user' => $user] );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $user = User::find($id);
        
        $user->name = $request->input('name');
        // $user->password = $request->input('password');
        $user->official_name = $request->input('official_name');
        $user->phonetic_name = $request->input('phonetic_name');
        $user->gender = $request->input('gender');
        $user->birthday = $request->input('birthday');
        $user->tel = $request->input('tel');
        $user->email = $request->input('email');
        $user->zip = $request->input('zip');
        $user->pref = $request->input('pref');
        $user->address = $request->input('address');
        $user->building = $request->input('building');
        $user->remark = $request->input('remark');

        $user->save();

        // return redirect('users/index');
        // return redirect('user/index');
        return redirect('users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 論理削除
        $user = User::find($id);
        
        $user->deleted_at = date("Y-m-d H:i:s");

        $user->save();

        return redirect('users');
    }
}
