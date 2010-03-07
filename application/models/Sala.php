<?php
// Sala.php
/**
 * Model de Sala
 * @filesource  07/03/2010
 * @package     <<application>>
 * @subpackage  <<application>>.application.models
 * @version     $Id$
 */
class Sala extends Zend_Db_Table {
    protected $_name = 'sala';
    //protected $_dependentTables  = array( 'Atividade' );
    protected $_primary = array('id');

}
