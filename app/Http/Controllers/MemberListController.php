<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Illuminate\Http\Request;

class MemberListController extends Controller
{
    public function index()
    {
        $data = Members::all();
        return view('user.commitee.commitee', compact('data'));
    }
}
