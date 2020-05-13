<? php 
// Este archivo es parte de Moodle - http://moodle.org/ 
// 
// Moodle es software libre: puede redistribuirlo y / o modificarlo 
// según los términos de la Licencia Pública General de GNU como publicado por 
// la Free Software Foundation, ya sea la versión 3 de la Licencia, o 
// (a su elección) cualquier versión posterior. 
// 
// Moodle se distribuye con la esperanza de que sea útil, 
// pero SIN NINGUNA GARANTÍA; sin siquiera la garantía implícita de 
// COMERCIABILIDAD o APTITUD PARA UN PROPÓSITO EN PARTICULAR. Consulte la 
// Licencia Pública General de GNU para más detalles. 
// 
// Deberías haber recibido una copia de la Licencia Pública General de GNU
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