<?php
// Usuario.php
/**
 * Model de Usuario
 * @filesource  07/03/2010
 * @package     <<application>>
 * @subpackage  <<application>>.application.models
 * @version     $Id$
 */
class Usuario extends Zend_Db_Table {
    protected $_name = 'usuario';
    protected $_dependentTables  = array( 'Atividade', 'Inscricao' );
    protected $_primary = array('id');
    
	protected $_referenceMap = array(
					'Perfil' => array( 
							'columns'       => 'perfil_id',
							'refTableClass' => 'Perfil',
							'refColumns'    => 'id',
						 ),
					'Uf' => array( 
							'columns'       => 'uf_id',
							'refTableClass' => 'Uf',
							'refColumns'    => 'id',
						 ));
}
