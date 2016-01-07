<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['first_name', 'last_name','email', 'password','created_by', 'modified_by'];

	/**
	 * The attributes excluded from the model's JSON form.
	 * A user can have many articles
	 * @var array
	 */

    protected $hidden = ['password', 'remember_token', 'created_by', 'modified_by'];

    public function setPasswordAttribute($value) {
        $this->attributes['password'] = bcrypt($value);
    }

    public function permissions()
    {
        return $this->belongsToMany('App\Permission')->withTimestamps();
    }

//
    public function getPermissionListAttribute(){

        return $this->permissions->lists('id');
    }

    public function articles(){

        return $this->hasMany('App\Article', 'user_id');
    }

    public function pages(){

        return $this->hasMany('App\Page', 'user_id');
    }

    public function contentAreas(){

        return $this->hasMany('App\ContentArea', 'user_id');
    }

    public function cssTemplates(){

        return $this->hasMany('App\CSSTemplate', 'user_id');
    }

    public function is_admin(){
        foreach($this->permissions as $permission) {
            if ($permission->alias == 'admin') {
                return true;
            }
        }
    }

    public function is_editor(){
        foreach($this->permissions as $permission) {
            if ($permission->alias == 'editor') {
                return true;
            }
        }
    }

    public function is_author(){
        foreach($this->permissions as $permission) {
            if ($permission->alias == 'author') {
                return true;
            }
        }
    }





}
