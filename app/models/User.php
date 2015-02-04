<?php
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {
	protected $table = "users";
	protected $fillable = array('username', 'email', 'password');
	public static $rules = array(
		'username' => 'required|unique:users',
		'email' => 'required|unique:users|email',
		'password1' => 'required',
		'password2' => 'required|same:password1'
	);

	public function getAuthIdentifier() {
		return $this->getKey();
	}

	public function getAuthPassword() {
		return $this->password;
	}

	public function getRememberToken()
	{
	    return $this->remember_token;
	}

	public function setRememberToken($value)
	{
	    $this->remember_token = $value;
	}

	public function getRememberTokenName()
	{
	    return 'remember_token';
	}
 	public function getReminderEmail()
    {
        return $this->email;
    }
	public static function validate($data){
		return Validator::make($data, static::$rules);
	}

}
