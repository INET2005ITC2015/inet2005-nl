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
	protected $fillable = ['first_name', 'last_name','email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 * A user can have many articles
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

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

        return $this->hasMany('App\Article');
    }

    /**
     * Assign a role to the user
     *
     * @param $role
     * @return mixed
     */
    public function assignPermission($permission)
    {
        return $this->permissions()->attach($permission);
    }
    /**
     * Remove a role from a user
     *
     * @param $role
     * @return mixed
     */
    public function removePermission($Permission)
    {
        return $this->Permissions()->detach($Permission);
    }


    public function hasPermission($name){
        foreach ($this->permissions as $permission){
            if($permission->alias == $name || $permission->alias == $name){
                return true;
            }
            return false;
        }

    }

//    public function isBoth()
//    {
//        $permission = $this->permissions;
//        if($permission->alias == 'editor' || $permission->alias == 'admin')
//        {
//            return true;
//        }
//        return false;
//    }


}
