<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TinController extends Controller
{
    function tintrongloai($loaitin_id = 0) {
        $loaitin = DB::table('loaitin')->where('id', $loaitin_id)->first();
        if (!$loaitin) {
            abort(404, 'Loại tin không tồn tại.');
        }
        $listtin = DB::table('tin')
            ->join('users', 'tin.user_id', '=', 'users.id')
            ->join('loaitin', 'tin.loaitin_id', '=', 'loaitin.id')
            ->where('tin.loaitin_id', $loaitin_id)
            ->select('tin.*', 'users.name as user_name', 'loaitin.name as loaitin_name')
            ->paginate(5);
        $data = [
            'loaitin_id' => $loaitin_id,
            'listtin' => $listtin,
            'loaitin_name' => $loaitin->name
        ];
        return view('clients.result', $data);
    }

    public function chitiet($id = 0)
    {
        $tin = DB::table('tin')
            ->join('users', 'tin.user_id', '=', 'users.id')
            ->join('loaitin', 'tin.loaitin_id', '=', 'loaitin.id')
            ->where('tin.id', $id)
            ->select('tin.*', 'users.name as user_name', 'loaitin.name as loaitin_name')
            ->first();

        if (!$tin) {                                                                                                                                                                             
            abort(404, 'Tin không tồn tại.');
        }

        $topPosts = DB::table('tin')
            ->orderBy('luotxem', 'desc') // Giả sử bạn có trường 'views' trong bảng tin
            ->limit(5)
            ->get();

        $data = ['id' => $id, 'tin' => $tin, 'topPosts' => $topPosts];
        return view('clients.detail', $data);
    }
}
