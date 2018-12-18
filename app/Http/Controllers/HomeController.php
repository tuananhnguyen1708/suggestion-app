<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Repositories\HomeRepository;

class HomeController extends Controller
{
    protected $userRepository;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(HomeRepository $userRepository)
    {
        $this->middleware('auth');

        $this->userRepository = $userRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('home');
    }

    public function listing(Request $request){
        $start = $request->input('start');
        $length = $request->input('length');
        $draw = $request->input('draw');

        $search = $request->input('search');
        $keyword = $search['value'];

        $order = $request->input('order');
        $columns = $request->input('columns');

        $num = $order[0]['column'];
        $orderBy = $columns[$num]['data'];
        $orderType = $order[0]['dir'];

        $total = $this->userRepository->getList($keyword,true);

        $arr = array(
            'recordsTotal' => $total,
            'data' => $this->userRepository->getList(
                $keyword,
                false,
                $length,
                $start,
                $orderBy,
                $orderType
            ),
            'draw' => $draw,
            'recordsFiltered' => $total
        );

        return response()->json($arr);
    }

    public function delete(Request $request){
        $result = $this->userRepository->delete($request->input('id'));

        return response()->json($result);
    }

    public function store(Request $request){
//        $result = $this->userRepository->store($request->input(
//            'name',
//            'username',
//            'email',
//            'phone',
//            'password'
//        ));
//
//        return response()->json($result);

        $name = $request->input('name');
        $username = $request->input('username');
        $email = $request->input('email');
        $phone = $request->input('phone');
//        $password = $request->input('password');

        $result = $this->userRepository->store($name,$username,$email,$phone);

        return response()->json($result);
    }

    public function update(Request $request){
//        $result = $this->userRepository->update($request->input(
//           'name',
//           'username',
//           'email',
//           'phone',
//           'password'
//        ));

        $id = $request->input('id');
        $name = $request->input('name');
        $username = $request->input('username');
        $email = $request->input('email');
        $phone = $request->input('phone');
//        $password = $request->input('password');

        $result = $this->userRepository->update($id,$name,$username,$email,$phone);


        return response()->json($result);
    }

}
