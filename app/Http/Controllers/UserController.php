<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * fungsi untuk menampilkan data dari database kedalam datatables
     */

    public function UserJson(Request $request)
    {
        $user = User::all();
        return datatables($user)
                ->editColumn('created_at', function ($data) {
                return $data->created_at ? with(new Carbon($data->created_at))->isoFormat('D MMMM Y') : '';
                })->make(true);
    }
}
