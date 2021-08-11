<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
Use Redirect;
use Input;
class UsersController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $you = auth()->user();
        $users = User::all();
        return view('dashboard.admin.usersList', compact('users', 'you'));
    }
    public function create(){
        return view('dashboard.admin.userAdd');
    }
    public function store(Request $request ){
        $validator = Validator::make($request->all(), [
            'company_name' => 'required|string|max:255',
            'company_reg_year' => 'required|digits:4|integer|min:1900|max:'.(date('Y')+1),
            'company_reg_num' => 'required|string|max:50',
            'company_phone' => 'required|digits_between:9,15',
            'company_reg_doc' => 'required|mimes:jpg,bmp,png',
            'company_nu_molding_machines' => 'required|digits:15',
            'company_nu_sites' => 'required|digits:15',
            //address
            'company_address_line_1' => 'required|string|max:255',
            'company_address_line_2' => 'string|max:255',
            'company_address_zip' => 'required|string|max:8',
            'company_address_city' => 'required|string|max:15',
            'company_address_state' => 'required|string|max:20',
            'company_address_contry' => 'required|string|max:50',
            //personal
            'first_name' => 'required|string|max:50',
            'middle_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'designation' => 'required|string|max:50',
            'phone_nu' => 'required|digits_between:9,15',
            'email' => 'required|string|email|max:255|unique:users',
        ]);
        if ($validator->fails()) {
            return Redirect::to('users/create')
                ->withErrors($validator);
        }
        // Its in process, right now its incompleted. 
   
      
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('dashboard.admin.userShow', compact( 'user' ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('dashboard.admin.userEditForm', compact('user'));
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
        $validatedData = $request->validate([
            'name'       => 'required|min:1|max:256',
            'email'      => 'required|email|max:256'
        ]);
        $user = User::find($id);
        $user->name       = $request->input('name');
        $user->email      = $request->input('email');
        $user->save();
        $request->session()->flash('message', 'Successfully updated user');
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if($user){
            $user->delete();
        }
        return redirect()->route('users.index');
    }
}
