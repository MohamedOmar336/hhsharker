<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Uses Laravel's built-in trait to handle user authentication logic.
    use AuthenticatesUsers;

    // Redirect users after login to the admin home page.
    protected $redirectTo = '/admin/home';

    /**
     * Create a new controller instance.
     * Apply guest middleware to all methods except 'logout',
     * preventing logged-in users from accessing auth methods.
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Validate the user login request.
     *
     * This method adds additional validation rules to the login request,
     * specifically checking for the username, password, and CAPTCHA response.
     *
     * @param  Request  $request
     */
    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string', // Validate username is required and of type string
            'password' => 'required|string', // Validate password is required and of type string
            // 'g-recaptcha-response' => 'required|captcha' // Validate the Google reCAPTCHA response
        ]);
    }

    /**
     * The user has been authenticated.
     *
     * This method is called after the user is authenticated.
     * Check if the user account is active, if not, log out and redirect to the login page.
     * If active, redirect to the home page.
     *
     * @param  Request  $request
     * @param  mixed  $user  Authenticated user object.
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function authenticated(Request $request, $user)
    {
        if (!$user->active) {
            auth()->logout(); // Log out from the application
            return redirect()->route('admin.login')->with('error', 'Your account is inactive.');
        }
        return redirect()->route('home')->with('success', 'login successful'); // Redirect to home if active
    }


    public function logout(Request $request)
    {
        Auth::logout(); // Log the user out
        $request->session()->invalidate(); // Invalidate the session
        $request->session()->regenerateToken(); // Regenerate the CSRF token

        // Redirect to your desired page after logout
        return redirect('/login')->with('success', 'You have been logged out.');
    }
}
