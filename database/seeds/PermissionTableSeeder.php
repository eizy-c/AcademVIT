<?php
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Permission;
use App\Models\Role;
use App\User;

class PermissionTableSeeder extends Seeder
{
    public function run()
    {
    	# LIMPIAR TABLAS
    	DB::statement('SET foreign_key_checks=0');
	    	DB::table('role_user')->truncate();
	    	DB::table('permission_role')->truncate();
	    	Permission::truncate();
	    	Role::truncate();
    	DB::statement('SET foreign_key_checks=1');

    	# USUARIOS
    	$usuario = User::where('email','admin@admin.com')->first();

    	if($usuario){ 
    		$usuario->delete(); 
    	}

        $usuario = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'remember_token' => Str::random(10),
        ]);

        # ROLES 
    	$Admin = Role::create([
        	'name'		=> 'Admin',
        	'slug'  	=> 'admin',
        	'description'  	=> 'administrador',
        	'full-access' 	=> 'yes'
        ]);
        $Profesor = Role::create([
        	'name'		=> 'Profesor',
        	'slug'  	=> 'profesor',
        	'description'  	=> 'Profesor',
        	'full-access' 	=> 'no'
        ]);
        $Estudiante = Role::create([
        	'name'		=> 'Estudiante',
        	'slug'  	=> 'estudiante',
        	'description'  	=> 'estudiante',
        	'full-access' 	=> 'no'
        ]);

    	# ASIGNAR ROL A USUARIO 
        $usuario->roles()->sync([$Admin->id]);


    	# PERMISOS
    	$permission_all = [] ;

# ---------------------- ----------------- ------------------------	#
#	        	         Permisos roles 		    				#
# ---------------------- ----------------- ------------------------	#
	$permission = Permission::create([
	        'name'          => 'Navegar roles',
	        'slug'          => 'role.index',
	        'description'   => 'Puede listar y navegar roles',
	    ]);


	    $permission = Permission::create([
	        'name'          => 'Crear roles',
	        'slug'          => 'role.create',
	        'description'   => 'Puede crear nuevos roles',
	    ]);

	    $permission = Permission::create([
	        'name'          => 'Ver detalles de roles',
	        'slug'          => 'role.show',
	        'description'   => 'Puede ver detalles de roles',
	    ]);

	    $permission = Permission::create([
	        'name'          => 'Editar roles',
	        'slug'          => 'role.edit',
	        'description'   => 'Puede editar roles',
	    ]);

	    $permission = Permission::create([
	        'name'          => 'Eliminar roles',
	        'slug'          => 'role.destroy',
	        'description'   => 'Puede eliminar roles',
	    ]);

# ---------------------- ----------------- ------------------------	#
#	        	         Permisos Usuarios		    				#
# ---------------------- ----------------- ------------------------	#
    	$permission = Permission::create([
            'name'          => 'Navegar usuarios',
            'slug'          => 'user.index',
            'description'   => 'Puede listar y navegar usuarios',
        ]);

        $permission = Permission::create([
            'name'          => 'Ver detalles de usuarios',
            'slug'          => 'user.show',
            'description'   => 'Puede ver detalles de usuarios',
        ]);

        $permission = Permission::create([
            'name'          => 'Editar usuarios',
            'slug'          => 'user.edit',
            'description'   => 'Puede editar usuarios',
        ]);

        $permission = Permission::create([
            'name'          => 'Eliminar usuarios',
            'slug'          => 'user.destroy',
            'description'   => 'Puede eliminar usuarios',
        ]);

	    $permission = Permission::create([
            'name'          => 'Ver detalles de su propio usuario',
            'slug'          => 'userown.show',
            'description'   => 'Puede ver detalles de su propio usuario',
        ]);

        $permission_profesor[] = $permission->id ;
        $permission_estudiante[] = $permission->id ;

        $permission = Permission::create([
            'name'          => 'Editar su propio usuarios',
            'slug'          => 'userown.edit',
            'description'   => 'Puede editar su propio usuario',
        ]);

        $permission_profesor[] = $permission->id ;
        $permission_estudiante[] = $permission->id ;

# ---------------------- ----------------- ------------------------	#
#	        	         Permisos aulas 		    				#
# ---------------------- ----------------- ------------------------	#
    	$permission = Permission::create([
            'name'          => 'Navegar aulas',
            'slug'          => 'aula.index',
            'description'   => 'Puede listar y navegar aulas',
        ]);

        $permission_profesor[] = $permission->id ;
        $permission_estudiante[] = $permission->id ;

        $permission = Permission::create([
            'name'          => 'Crear aulas',
            'slug'          => 'aula.create',
            'description'   => 'Puede crear nuevos aulas',
        ]);

        $permission_profesor[] = $permission->id ;

        $permission = Permission::create([
            'name'          => 'Ver detalles de aulas',
            'slug'          => 'aula.show',
            'description'   => 'Puede ver detalles de aulas',
        ]);

        $permission_profesor[] = $permission->id ;
        $permission_estudiante[] = $permission->id ;

        $permission = Permission::create([
            'name'          => 'Editar aulas',
            'slug'          => 'aula.edit',
            'description'   => 'Puede editar aulas',
        ]);

        $permission_profesor[] = $permission->id ;

        $permission = Permission::create([
            'name'          => 'Eliminar aulas',
            'slug'          => 'aula.destroy',
            'description'   => 'Puede eliminar aulas',
        ]);

        $permission_profesor[] = $permission->id ;
# ---------------------- ----------------- ------------------------	#
#	        	         Permisos cursos		    				#
# ---------------------- ----------------- ------------------------	#
    	$permission = Permission::create([
            'name'          => 'Navegar cursos',
            'slug'          => 'curso.index',
            'description'   => 'Puede listar y navegar cursos',
        ]);

        $permission_profesor[] = $permission->id ;
        $permission_estudiante[] = $permission->id ;

        $permission = Permission::create([
            'name'          => 'Crear cursos',
            'slug'          => 'curso.create',
            'description'   => 'Puede crear nuevos cursos',
        ]);

        $permission_profesor[] = $permission->id ;

        $permission = Permission::create([
            'name'          => 'Ver detalles de cursos',
            'slug'          => 'curso.show',
            'description'   => 'Puede ver detalles de cursos',
        ]);

        $permission_profesor[] = $permission->id ;
        $permission_estudiante[] = $permission->id ;

        $permission = Permission::create([
            'name'          => 'Editar cursos',
            'slug'          => 'curso.edit',
            'description'   => 'Puede editar cursos',
        ]);

        $permission_profesor[] = $permission->id ;

        $permission = Permission::create([
            'name'          => 'Eliminar cursos',
            'slug'          => 'curso.destroy',
            'description'   => 'Puede eliminar cursos',
        ]);

        $permission_profesor[] = $permission->id ;

        # ASIGNAR PERMISOS A ROLES 
        $Profesor->permissions()->sync( $permission_profesor );
        $Estudiante->permissions()->sync( $permission_estudiante );

    }
}
