<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{

  use WithoutMiddleware;


  /**
  * Funcion para validar el CRUD de usuario
  * [testUserCreate description]
  * @return [type] [description]
  */
  // public function testUserCreate()
  // {
  //   $data = $this->getData();
  //   // Creamos un nuevo usuario y verificamos la respuesta
  //   $this->post('/user', $data)
  //   ->seeJsonEquals(['created' => true]);
  //
  //   $data = $this->getData(['name' => 'Alexander']);
  //   // Actualizamos al usuario que ha sifo creado (id = 1)
  //   $this->put('/user/1', $data)
  //   ->seeJsonEquals(['updated' => true]);
  //
  //   // Obtenemos los datos de dicho usuario modificado y verificamos que el nombre sea el correcto
  //   $this->get('user/1')->seeJson(['name' => 'Alexander']);
  //
  //   // Eliminamos al usuario
  //   $this->delete('user/1')->seeJson(['deleted' => true]);
  // }


  /**
  * Funcion para validar cuando falten datos requeridos
  * [testValidationErrorOnCreateUser description]
  * @return [type] [description]
  */
  // public function testValidationErrorOnCreateUser()
  // {
  //   $data = $this->getData(['name' => '', 'email' => 'alexlondon07']);
  //   $this->post('/user', $data)->dump();
  // }

  /**
  * Funcion para validar cuando no encuentre un registro de usuario
  * [testNotFoundUser description]
  * @return [type] [description]
  */
  public function testNotFoundUser()
  {
    $this->get('user/10')->seeJsonEquals(['error' => 'Model not found']);
  }


  /**
  * Funcion para obtener la informacion basica del usuario
  * [getData description]
  * @param  array  $custom [description]
  * @return [type]         [description]
  */
  public function getData($custom = array())
  {
    $data = [
      'name'      => 'Alexander',
      'email'     => 'alexlondon07@gmail.com',
      'password'  => '3122195522'
    ];
    $data = array_merge($data, $custom);
    return $data;
  }
}
