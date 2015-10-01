<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Bican\Roles\Traits\HasRoleAndPermission;
use Bican\Roles\Contracts\HasRoleAndPermission as HasRoleAndPermissionContract;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword, HasRoleAndPermission, SoftDeletes;

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
    protected $fillable = ['first_name','last_name','email','code','username','active','password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * Take all users of determined role or roles
     *
     * @param array
     *
     * @return array
     */
    public static function belongsToRoles(array $roles = ['admin'])
    {

        if (is_array($roles))
        {

            $users = \DB::table('users')->join('role_user', 'users.id','=', 'role_user.user_id')
                        ->join('roles', 'roles.id', '=', 'role_user.role_id')
                        ->where('users.id', '<>', \Auth::id())
                        ->where('roles.slug', '=', $roles[0])
                        ->select('users.*', 'roles.name as role', 'roles.slug', 'roles.level');

            $iterator = 1;

            foreach ($roles as $role) {

                if ($iterator > 1) {
                    
                    $new_instance = \DB::table('users')->join('role_user', 'users.id','=', 'role_user.user_id')
                        ->join('roles', 'roles.id', '=', 'role_user.role_id')
                        ->where('users.id', '<>', \Auth::id())
                        ->where('roles.slug', '=', $role)
                        ->select('users.*', 'roles.name as role', 'roles.slug', 'roles.level');

                    $users = $users->unionAll($new_instance);

                }

                $iterator++;
                
            }

            return $users->orderBy('first_name', 'asc')->get();

        } 
        
    }

    /**
     * Take all users that no belongs to determined roles or role
     *
     * @param array
     *
     * @return array
     */
    public static function noBelongsToRoles(array $roles = ['support'])
    {

        if (is_array($roles))
        {

            $users = \DB::table('users')->join('role_user', 'users.id','=', 'role_user.user_id')
                        ->join('roles', 'roles.id', '=', 'role_user.role_id')
                        ->where('users.id', '<>', \Auth::id())
                        ->where('roles.slug', '<>', $roles[0])
                        ->select('users.*', 'roles.name as role', 'roles.slug', 'roles.level');

            $iterator = 1;

            foreach ($roles as $role) {

                if ($iterator > 1) {
                    
                    $new_instance = \DB::table('users')->join('role_user', 'users.id','=', 'role_user.user_id')
                        ->join('roles', 'roles.id', '=', 'role_user.role_id')
                        ->where('users.id', '<>', \Auth::id())
                        ->where('roles.slug', '<>', $role)
                        ->select('users.*', 'roles.name as role', 'roles.slug', 'roles.level');

                    $users = $users->unionAll($new_instance);

                }

                $iterator++;
                
            }

            return $users->orderBy('first_name', 'asc')->get();

        }
        
    }

    /**
     * Take all users with roles
     *
     * @return array
     */
    public static function getUsersWithRoles()
    {

        $users = \DB::table('users')->join('role_user', 'users.id','=', 'role_user.user_id')
                    ->join('roles', 'roles.id', '=', 'role_user.role_id')
                    ->where('users.id', '<>', \Auth::id())
                    ->select('users.*', 'roles.name as role', 'roles.slug', 'roles.level');

        return $users->orderBy('first_name', 'asc')->get();
        
    }

}
