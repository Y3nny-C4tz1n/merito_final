<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
//login
$route['errorCsrf'] = 'login/errorCsrf';
$route['ajax/errorCsrf2'] = 'login/errorCsrf2';
$route['loggin'] = 'login/loginUser';
$route['salir'] = 'login/logoutUser';
$route['default_controller'] = 'login';

#INICIO

$route['inicio'] = 'InicioController';
$route['ajax/listadoVoto'] = 'InicioController/listVoto';

#individual
$route['individual'] = 'IndividualController';
$route['ajax/guardarVoto'] = 'IndividualController/guardarVoto';
$route['ajax/cargarFormularioDajedrez'] = 'IndividualController/loadFormularioDajedrez';
$route['ajax/cargarFormularioDatletismo'] = 'IndividualController/loadFormularioDatletismo';
$route['ajax/cargarFormularioDboliche'] = 'IndividualController/loadFormularioDboliche';
$route['ajax/cargarFormularioDesgrima'] = 'IndividualController/loadFormularioDesgrima';
$route['ajax/cargarFormularioDfisico'] = 'IndividualController/loadFormularioDfisico';
$route['ajax/cargarFormularioDgimnasia'] = 'IndividualController/loadFormularioDgimnasia';
$route['ajax/cargarFormularioDjudo'] = 'IndividualController/loadFormularioDjudo';
$route['ajax/cargarFormularioDkarate'] = 'IndividualController/loadFormularioDkarate';
$route['ajax/cargarFormularioDpesas'] = 'IndividualController/loadFormularioDpesas';
$route['ajax/cargarFormularioDpatines'] = 'IndividualController/loadFormularioDpatines';
$route['ajax/cargarFormularioDremo'] = 'IndividualController/loadFormularioDremo';
$route['ajax/cargarFormularioDtriatlon'] = 'IndividualController/loadFormularioDtriatlon';

#DCONJUNTO
$route['ajax/guardarVotoDconjunto'] = 'InicioController/guardarVotoDconjunto';
$route['ajax/cargarFormularioDconjunto'] = 'InicioController/loadFormularioDconjunto';

#DPARALIMOPICO
$route['ajax/guardarVotoDparalimpico'] = 'InicioController/guardarVotoDparalimpico';
$route['ajax/cargarFormularioDparalimpico'] = 'InicioController/loadFormularioDparalimpico';




#PERFIL
$route['perfil'] = 'PerfilController';
$route['ajax/listadoPerfil'] = 'PerfilController/listPerfil';
$route['ajax/guardarPerfil'] = 'PerfilController/guardarPerfil';
$route['ajax/cargarFormularioPerfil'] = 'PerfilController/loadFormulario';

#USUARIOS
$route['usuario'] = 'UsuarioController';
$route['ajax/listadoUsuario'] = 'UsuarioController/listUsuario';
$route['ajax/guardarUsuario'] = 'UsuarioController/guardarUsuario';
$route['ajax/cargarFormularioUsuarios'] = 'UsuarioController/loadFormulario';

#ESTATUS
$route['estatus'] = 'EstatusController';
$route['ajax/listadoEstatus'] = 'EstatusController/listEstatus';
$route['ajax/guardarEstatus'] = 'EstatusController/guardarEstatus';
$route['ajax/cargarFormularioEstatus'] = 'EstatusController/loadFormulario';

#ASOCIACIONES
$route['asociacion'] = 'AsociacionController';
$route['ajax/listadoAsociacion'] = 'AsociacionController/listAsociacion';
$route['ajax/guardarAsociacion'] = 'AsociacionController/guardarAsociacion';
$route['ajax/cargarFormularioAsociacion'] = 'AsociacionController/loadFormulario';



#MODALIDAD
$route['modalidad'] = 'ModalidadController';
$route['ajax/listadoModalidad'] = 'ModalidadController/listModalidad';
$route['ajax/guardarModalidad'] = 'ModalidadController/guardarModalidad';
$route['ajax/cargarFormularioModalidad'] = 'ModalidadController/loadFormulario';



 #NOMINADO
$route['nominado'] = 'NominadoController';
$route['ajax/listadoNominado'] = 'NominadoController/listNominado';
$route['ajax/guardarNominado'] = 'NominadoController/guardarNominado';
$route['ajax/cargarFormularioNominado'] = 'NominadoController/loadFormulario';

#RESULTADOS
$route['rdeportista'] = 'ResultadodController';
$route['rdconjunto'] = 'ResultadodcController';
$route['rdparalimpico'] = 'ResultadodpController';
$route['ajax/listadoRdeportista'] = 'ResultadodController/listRdeportista';
$route['ajax/listadoRdconjunto'] = 'ResultadodcController/listRdconjunto';
$route['ajax/listadoRdparalimpico'] = 'ResultadodpController/listRdparalimpico';



#CONTRASE??A
$route['contrasena'] = 'login/vistaContrasena';
$route['ajax/guardarContrasena'] = 'login/guardarContrasena';

#VOTO
 $route['voto'] = 'VotoController';
 $route['ajax/listadoVoto'] = 'VotoController/listVoto';

 $route['generarReporte'] = 'ResultadodpController/downReportePDF';




$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
