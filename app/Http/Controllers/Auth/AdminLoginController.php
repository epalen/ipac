<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;

class AdminLoginController extends Controller
{
	public function __contruct ()
	{
		$this->middleware('guest:admin');
	}

    public function showLoginForm()
    {
			$male = DB::table('users')
            ->where('gender', '=', 'Masculino')
            ->count();
        
			$female = DB::table('users')
					->where('gender', '=', 'Femenino')
					->count();
			
			$datacount = DB::table('topics')
					->leftJoin('proposals_topics', 'topics.id', '=', 'proposals_topics.topic_id')
					->select('topics.name as tpname', 'proposals_topics.topic_id', \DB::raw('count(topic_id) as total'))
					->groupBy('topics.name', 'proposals_topics.topic_id')
					->orderBy('topic_id', 'desc')
					->get();

    	return view('auth.admin-login', compact('male', json_encode($male,JSON_NUMERIC_CHECK), 'female', json_encode($female,JSON_NUMERIC_CHECK), 'datacount', json_encode($datacount,JSON_NUMERIC_CHECK)));
    }

    /*public function login()
    {
    	return true;
    }*/

    public function login(Request $request)
    {
		// Valida los datos del formulario
		$this->validate($request, [
			'email'   => 'required|email',
			'password' => 'required|min:6'
		]);

		// Intentos de inicio de sesión del usuario
		if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
			// Si tiene éxito, entonces redirige a la ubicación siguiente
			return redirect()->intended(route('admin.dashboard'));
		}

		// Si no tiene éxito, redirige de nuevo al inicio de sesión con los datos del formulario
		return redirect()->back()->withInput($request->only('email', 'remember'))->with('alert-danger', 'Sus credenciales no coinciden con nuestros registros.');
    }
}
