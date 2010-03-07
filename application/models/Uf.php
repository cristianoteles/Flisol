<?php
// Uf.php
/**
 * Model de Uf
 * @filesource  07/03/2010
 * @package     <<application>>
 * @subpackage  <<application>>.application.models
 * @version     $Id$
 */
class Uf extends Zend_Db_Table {
    protected $_name = 'uf';
    protected $_dependentTables  = array( 'Usuario' );
    protected $_primary = array('id');
    

}
