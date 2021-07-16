<?php

namespace App\Http\Controllers;

use App\Enums\User_status;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function list(Request $request)
    {
        //        $users = User::query()->where('status','=',User_status::ACTIVE)->paginate(1);
        $users = User::all();
        $limit = $request->query('limit') ? $request->query('limit') : 2;
        $role = $request->query('role') ? $request->query('role') : "";
        $search = $request->query('search');
        $query_builder = User::query();
        if ($search && strlen($search) > 0) {
            $query_builder = $query_builder->where('user_name', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%')
                ->orWhere('phone', 'like', '%' . $search . '%')
                ->orWhere('address', 'like', '%' . $search . '%');
        }
        if ($role != "") {
            $query_builder = $query_builder->where('role','=', $role);
        }
        $users = $query_builder->where('status','=',User_status::ACTIVE)->paginate($limit)->appends(['search'=>$search,'role'=>$role]);

        return view('Admin.users', [
            'users' => $users,
            'role' => $role,
            'search' => $search
            ]);
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->fill($request->all());
        $user->password = Hash::make($request->password);
        $user->save();
        return back();
    }
}
