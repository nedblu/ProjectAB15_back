<?php

namespace AlphaBeta;

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

    /* 
    *   framework/src/Illuminate/Database/Query/Builder.php Line 1244: 
    *   Change this: $this->addBinding($query->bindings, 'union');
    *   By this: $this->addBinding($query->getBindings(), 'union');
    */

    static public function getUsersWhereRoleIs($roles = 'admin', $except = null)
    {

        $selfUserModel = new self();

        $roles = explode('|', $roles);

        if (!$selfUserModel instanceof Model) {
            throw new InvalidArgumentException('[users] must be an instance of \Illuminate\Database\Eloquent\Model');
        }

        if (!is_null($except)) {
            
            $users = $selfUserModel::join('role_user', 'users.id', '=', 'role_user.user_id')
                ->join('roles', 'roles.id', '=', 'role_user.role_id')
                ->select('users.id','users.first_name','users.last_name','users.email','users.username','users.active','users.ip_address','users.last_login','roles.name as role','roles.slug', 'roles.description')
                ->where('roles.slug','=',$roles[0])
                ->where('users.id', '<>', $except);

            $count = 0;

            foreach($roles as $role){

                if ($count > 0) {
                    $users_for_union = $selfUserModel::join('role_user', 'users.id', '=', 'role_user.user_id')
                                    ->join('roles', 'roles.id', '=', 'role_user.role_id')
                                    ->select('users.id','users.first_name','users.last_name','users.email','users.username','users.active','users.ip_address','users.last_login','roles.name as role','roles.slug', 'roles.description')
                                    ->where('roles.slug','=',$role)
                                    ->where('users.id', '<>', $except);

                    $users = $users->unionAll($users_for_union);
                }
                ++$count;
        
            }

            return $users->get();

        }
        else {

            $users = $selfUserModel::join('role_user', 'users.id', '=', 'role_user.user_id')
                ->join('roles', 'roles.id', '=', 'role_user.role_id')
                ->select('users.id','users.first_name','users.last_name','users.email','users.username','users.active','users.ip_address','users.last_login','roles.name as role','roles.slug', 'roles.description')
                ->where('roles.slug','=',$roles[0]);

            $count = 0;

            foreach($roles as $role){

                if ($count > 0) {
                    $users_for_union = $selfUserModel::join('role_user', 'users.id', '=', 'role_user.user_id')
                                        ->join('roles', 'roles.id', '=', 'role_user.role_id')
                                        ->select('users.id','users.first_name','users.last_name','users.email','users.username','users.active','users.ip_address','users.last_login','roles.name as role','roles.slug', 'roles.description')
                                        ->where('roles.slug','=',$role);

                    $users = $users->unionAll($users_for_union);
                }
                ++$count;
        
            }

            return $users->get();

        }

        
    }

    static public function getUsersExceptRole($roles = 'admin', $except = null)
    {

        $selfUserModel = new self();

        if (!$selfUserModel instanceof Model) {
            throw new InvalidArgumentException('[users] must be an instance of \Illuminate\Database\Eloquent\Model');
        }

        if (!is_null($except)) {

            return $selfUserModel::select('users.id','users.first_name','users.last_name','users.email','users.username','users.active','users.ip_address','users.last_login','roles.name as role','roles.slug', 'roles.description')
                ->join('role_user', 'users.id', '=', 'role_user.user_id')
                ->join('roles', 'roles.id', '=', 'role_user.role_id')
                ->where('roles.slug','<>',$roles)
                ->where('users.id', '<>', $except)
                ->get();

        }
        else {

            return $selfUserModel::select('users.id','users.first_name','users.last_name','users.email','users.username','users.active','users.ip_address','users.last_login','roles.name as role','roles.slug', 'roles.description')
                ->join('role_user', 'users.id', '=', 'role_user.user_id')
                ->join('roles', 'roles.id', '=', 'role_user.role_id')
                ->where('roles.slug','<>',$roles)
                ->get();

        }

        
    }

}
