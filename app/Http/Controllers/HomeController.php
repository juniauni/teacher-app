<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Teacher::all();
        return view('teacher', compact('data'));
    }
    // public function toTeacher()
    // {
    //     $data = Teacher::all();
    //     return view('teacher', compact('data'));
    // }
    public function addTeacher()
    {
        return view('add-teacher');
    }

    public function createDataTeacher(Request $request)
    {
        Teacher::create($request->all());
        return redirect()->route('home')->with('sucess', 'Data Berhasil Ditambah!');
    }
    public function updateTeacher($id)
    {
        $data = Teacher::find($id);
        return view('edit-teacher', compact('data'));
    }
    public function updateDataTeacher(Request $request, $id)
    {
        $data = Teacher::find($id);
        $data->update($request->all());
        return redirect()->route('home')->with('sucess', 'Data Berhasil Diupdate!');
    }

    public function deleteDataTeacher($id)
    {
        $data = Teacher::find($id);
        $data->delete();
        return redirect()->route('home')->with('sucess', 'Data Berhasil Dihapus!');
    }
}
