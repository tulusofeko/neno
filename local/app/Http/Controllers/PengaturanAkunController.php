<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Validator;
use Response;

class PengaturanAkunController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth');
    //     $this->middleware('admin');
    // }
    /**
    * @var array
    */
    protected $rules =
    [
        'nama' => 'required|string',
        'email' => 'required|string|unique:users,email',
        'password' => 'required',
        'level' => 'required',
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_list = User::orderBy('nama', 'asc')->get();
        $jumlah_data = $data_list->count();
        return view('pengaturan_akun.index', compact('data_list','jumlah_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), $this->rules);
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $input = $request->all();
            $input['referensi']=hash('md5',$request->email);
            $input['nama'] = strtoupper($request->nama);
            $input['password'] = bcrypt($request->password);
            $tingkat = User::create($input);
            return response()->json($tingkat);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = User::findOrFail($id);
        return view('pengaturan_akun.show',compact('show'));
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
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|unique:users,email,'.$id,
            'nama' => 'required|string',
            'password' => 'required',
            'level' => 'required',
        ]);

        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $post = User::findOrFail($id);
            $post->nama = strtoupper($request->nama);
            $post->email = $request->email;
            $post->referensi = hash('md5',$request->email);
            $post->level = $request->level;
            $post->password = bcrypt($request->password);
            $post->save();
            return response()->json($post);
        } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = User::findOrFail($id);
        $hapus->delete();

        return response()->json($hapus);
    }
}
