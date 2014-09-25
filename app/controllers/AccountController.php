<?php

class AccountController extends BaseController{
    public function getLogin(){
        return View::make('page.login');
    }
    public function postLogin(){
        $userdata = array(
            'email' 	=> Input::get('email'),
            'password' 	=> Input::get('password')
	);
        try{
            Sentry::authenticate($userdata, false);
            return Redirect::intended('/')->with('message', 'You have been loggedin.');
        }catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
        {
            return Redirect::to('account/login')->with('message', 'Login field is required');
        }
        catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
        {
            return Redirect::to('account/login')->with('message', 'Password field is required');
        }
        catch (Cartalyst\Sentry\Users\WrongPasswordException $e)
        {
            return Redirect::to('account/login')->with('message', 'Username or password incorrect.');
        }
        catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
        {
            return Redirect::to('account/login')->with('message', 'Username or password incorrect.');
        }
        catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
        {
            return Redirect::to('account/login')->with('message', 'User is not activated.');
        }
        
        // The following is only required if the throttling is enabled
        catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e)
        {
            return Redirect::to('account/login')->with('message', 'User is suspended.');
        }
        catch (Cartalyst\Sentry\Throttling\UserBannedException $e)
        {
            return Redirect::to('account/login')->with('message', 'User is banned.');
        }
    }
    public function getLogout(){
        Sentry::logout(); // log the user out of our application
        return Redirect::to('account/login')->with('message', 'You have been logout succesfull.');
    }
    
    public function getReset(){
	return View::make('account.reset');
    }
    public function postReset(){
	$email = Input::get('email');
	try
	{
	    // Find the user using the user email address
	    $user = Sentry::findUserByLogin($email);
	
	    // Get the password reset code
	    $resetCode = $user->getResetPasswordCode();
	    $data = array(
		'url' => Link_to("/account/pwreset/$resetCode", 'Reset password.'),
	    );
	    Mail::send('emails.Reset', $data, function($message)
	    {
		$message->from('account@rovox.nl', 'Rovox Media');
		$message->to(Input::get('email'));
	    });
	    // Now you can send this code to your user via email for example.
	    return Redirect::to('account/reset')->with('message', 'Your reset email has been sent');
	}
	catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
	{
	    return Redirect::to('account/reset')->with('message', 'User does not exist.');
	}
    }
    public function getDemo(){
	return View::make('emails.reset');
    }
}
