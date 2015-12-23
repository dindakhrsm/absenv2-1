<?php

namespace App\HTTP\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\RedirectsUsers;

trait RegistersUsers
{
    use RedirectsUsers;

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRegister()
    {
        return view('auth.register');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postRegister(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        //we do not want to login directly but bring it to the new page
        $registration_data=$request->all();
        //Auth::login($this->create($request->all()));

        //return redirect($this->redirectPath());
        $path='auth/register';
        /* Modification*/
        $data = array('path'=>$path,'reg_data'=>$registration_data);
        //TODO obfuscating passing parameter, at the moment plain text being passed
        //We can implement crypto here
        return redirect()->action('Auth\AuthController@getStudentRegistrationForm', $data);

    }
}

