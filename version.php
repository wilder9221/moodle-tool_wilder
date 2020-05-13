<? php 
// Este archivo es parte de Moodle - http://moodle.org/ 
// 
// Moodle es software libre: puede redistribuirlo y / o modificarlo 
// seg�n los t�rminos de la Licencia P�blica General de GNU como publicado por 
// la Free Software Foundation, ya sea la versi�n 3 de la Licencia, o 
// (a su elecci�n) cualquier versi�n posterior. 
// 
// Moodle se distribuye con la esperanza de que sea �til, 
// pero SIN NINGUNA GARANT�A; sin siquiera la garant�a impl�cita de 
// COMERCIABILIDAD o APTITUD PARA UN PROP�SITO EN PARTICULAR. Consulte la 
// Licencia P�blica General de GNU para m�s detalles. 
// 
// Deber�as haber recibido una copia de la Licencia P�blica General de GNU
// junto con Moodle. Si no, vea <http://www.gnu.org/licenses/>.
 
/ **
 * @package plugintype_pluginname
 * @copyright 2020, You Name <your@email.address>
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 o posterior
 * /
 
definido ( 'MOODLE_INTERNAL' )  ||  morir ( ) ;
 
$ plugin -> version  = TODO ; 
$ plugin -> requiere  = TODO ; 
$ plugin -> soportado  = TODO ;    // Disponible a partir de Moodle 3.9.0 o posterior. 
$ plugin -> incompatible  = TODO ;    // Disponible a partir de Moodle 3.9.0 o posterior. 
$ plugin -> componente  =  'TODO_FRANKENSTYLE' ; 
$ plugin -> madurez  = MATURITY_STABLE ; 
$ plugin -> release  =  'TODO' ;
 
$ plugin -> dependencias  =  [ 
    'mod_forum'  => ANY_VERSION , 
    'mod_data'  => TODO
 ] ;