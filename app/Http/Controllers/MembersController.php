<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Members;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Members::all();

        return view('admin.home', compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $data = Members::all();
        return view('admin.add_member');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request;
        DB::beginTransaction();
        try {
            $data = [
                'full_name' => $request->input('full_name'),
                'phone' => $request->input('phone'),
                'email' => $request->input('email'),
                'blood_group' => $request->input('blood_group'),
                'group' => $request->input('group'),
                'council_no' => $request->input('council_no'),
                'date_of_enrollment' => $request->input('date_of_enrollment'),
                'date_of_itba' => $request->input('date_of_itba'),
                'dob' => $request->input('dob'),
                'sprouse_name' => $request->input('sprouse_name'),
                // 'profile_picture' => $request->input('profile_picture'),
            ];
            //return $data;
            $member = Members::create($data);
            if ($member) {

                if ($request->has('profile_picture')) {
                    $file = $request->file('profile_picture');
                    $extention = $file->getClientOriginalExtension();
                    $filename = "members" . $member->id . '.' . $extention;
                    $file->move('upload_images/member/', $filename);
                    Members::where('id', $member->id)->update(["profile_picture" => $filename]);
                }
            }
            DB::commit();
            return redirect()->back()->with("Data Added Successfully");
        } catch (Exception $e) {
            DB::rollBack();
            echo $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Members  $members
     * @return \Illuminate\Http\Response
     */
    public function show(Members $members)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Members  $members
     * @return \Illuminate\Http\Response
     */
    public function edit(Members $members)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Members  $members
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Members $members)
    {
        DB::beginTransaction();
        try {
            $edit_id = $request->input('update_id');
            $data = [
                'full_name' => $request->input('full_name'),
                'phone' => $request->input('phone'),
                'email' => $request->input('email'),
                'blood_group' => $request->input('blood_group'),
                'group' => $request->input('group'),
                'council_no' => $request->input('council_no'),
                'date_of_enrollment' => $request->input('date_of_enrollment'),
                'date_of_itba' => $request->input('date_of_itba'),
                'dob' => $request->input('dob'),
                'sprouse_name' => $request->input('sprouse_name'),
                // 'profile_picture' => $request->input('profile_picture'),
            ];
            //return $data;
            Members::where('id', $edit_id)->update($data);
            if ($request->has('profile_picture')) {

                if ($request->has('profile_picture')) {
                    $file = $request->file('profile_picture');
                    $extention = $file->getClientOriginalExtension();
                    $filename = "members" . $edit_id . '.' . $extention;
                    $file->move('upload_images/member/', $filename);
                    Members::where('id', $edit_id)->update(["profile_picture" => $filename]);
                }
            }
            DB::commit();
            return redirect()->back()->with("Data Added Successfully");
        } catch (Exception $e) {
            DB::rollBack();
            echo $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Members  $members
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = Members::find($id);
        if ($member->image != NULL) {
            unlink(public_path() . '/upload_images/member/' . $member->profile_picture);
        }
        $member->delete();
        return back()->with('success', 'Member deleted successfully.');
    }
    public function members()
    {
        $data = Members::all();

        return view('user.members.members', compact('data'));
    }
}
