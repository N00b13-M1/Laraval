<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'roles';

    public function users()
    {
        return $this->hasMany(User::class);
    }
}

// 1) Define foreignId("role_id") in relation child, not parent table (migration)
// 2) Add contrained("roles", "id");
// 3) Add singular function in child (e.g. users), with: return $this->belongsTo(Role::class);
// 4) Add plural function in parent (e.g. roles), with: return $this->hasMany(User::class);
// 5) Add "role_id" to factory or seeder with numberBetweem(1,4)
// 6) Add extra property line  "role_id" to childcontroller
// 7) Add line to table list in main blade <td>{{ $user->role->last_name }}</td>
// You invoke the "role" function which contains an object thru wich you can call "last_name"
// 7) Attention you need to pass role variables via compact of users edit function in controller
// public function edit($id)
// {
//     $user = User::find($id);
//     $roles = Role::all();
//     return view("back.pages.users.edit", compact('user',"roles" ));
// }
// 8) Add select dropdown in edit or create blade 
//<div>
// <select name="role_id" class="form-control">
// <option>Select Role</option>
// <!--selected by default-->
// @foreach ($roles as $role)
//     <option value="{{ $role->id }}">
//         {{ $role->last_name }}
//     </option>
// @endforeach
// </select>
// </div>
