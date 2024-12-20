<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    public static function getpermissionGroup()
    {
        $permission_groups = DB::table('permissions')->select('guard_name')->groupBy('guard_name')->get();
        return $permission_groups;
        # code...
    }
    public static function getpermissionByGroupName($guard_name)
    {
        $permissions = DB::table('permissions')->select('name','id')->where('guard_name', $guard_name)->get();
        return $permissions;
        # code...
    }

    public static function roleHasPermissions($role, $permissions)
    {
        $haspermission = true;
        foreach ($permissions as  $permission) {
            if (!$role->hasPermissionTo($permission->name)){
                $haspermission = false;
            }    
            return $haspermission;   
        # code...
        }
    }
}
