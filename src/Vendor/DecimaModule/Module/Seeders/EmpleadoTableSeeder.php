<?php
/**
 * @file
 * SEC_User Table Seeder
 *
 * All DecimaAccounting code is copyright by the original authors and released under the GNU Aferro General Public License version 3 (AGPLv3) or later.
 * See COPYRIGHT and LICENSE.
 */
namespace Vendor\DecimaModule\Module\Seeders;

use DB;
use Vendor\DecimaModule\Module\Empleado;
use Vendor\DecimaModule\Module\ExperienciaLaboral;
use Vendor\DecimaModule\Module\Puesto;
use Illuminate\Database\Seeder; //clase del frein gor

class EmpleadoTableSeeder extends Seeder {

	public function run()
	{
		Puesto::create(array('nombre' => 'Programador Senior'));
		Puesto::create(array('nombre' => 'Programador Junior'));

		Empleado::create(array('nombre' => 'Anderson ','apellido' => 'Calles', 'edad' => 22 ,'salario' => 300.20, 'descripcion'=> 'ejemplo de descripcion', 'puesto_id'=> 1));

		ExperienciaLaboral::create(array('cargo' => 'Analista Programador','descripcion' => 'ejemplo de descripcion 1', 'fecha_inicio' => '2016-01-01' , 'fecha_fin' => '2016-03-30' , 'empleado_id'=> 1));
		ExperienciaLaboral::create(array('cargo' => 'Beta Tester','descripcion' => 'ejemplo de descripcion 1', 'fecha_inicio' => '2015-01-01' , 'fecha_fin' =>'2015-03-30' , 'empleado_id'=> 1));

}


}
