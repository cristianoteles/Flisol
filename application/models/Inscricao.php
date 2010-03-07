<?php
// Inscricao.php
/**
 * Model de Inscricao
 * @filesource  07/03/2010
 * @package     <<application>>
 * @subpackage  <<application>>.application.models
 * @version     $Id$
 */
class Inscricao extends Zend_Db_Table {
    protected $_name = 'inscricao';
	protected $_referenceMap = array(
					'Atividade' => array( 
							'columns'       => 'id_atividade',
							'refTableClass' => 'Atividade',
							'refColumns'    => 'id',
						 ),
					'Usuario' => array( 
							'columns'       => 'id_usuario',
							'refTableClass' => 'Usuario',
							'refColumns'    => 'id',
						 ));
}
