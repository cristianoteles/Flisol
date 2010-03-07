<?php
// Atividade.php
/**
 * Model de Atividade
 * @filesource  07/03/2010
 * @author      Estrada Virtual <http://estradavirtual.com.br>
 * @copyright   Copyright <2010> Estrada Virtual
 * @package     <<application>>
 * @subpackage  <<application>>.application.models
 * @version     $Id$
 */
class Atividade extends Ev_Db_Table {
    protected $_name = 'atividade';
    protected $_dependentTables  = array( 'Inscricao' );
    protected $_primary = array('id');
    
	protected $_referenceMap = array(
					'Usuario' => array( 
							'columns'       => 'id_palestrante',
							'refTableClass' => 'Usuario',
							'refColumns'    => 'id',
						 ),
					'Sala' => array( 
							'columns'       => 'id_sala',
							'refTableClass' => 'Sala',
							'refColumns'    => 'id',
						 ));
}
