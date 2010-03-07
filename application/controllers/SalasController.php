<?php
/**
 * @filesource  07/03/2010
 * @author      PHPDF <http://www.phpdf.org.br>
 * @package     <<application>>
 * @subpackage  <<application>>.application.controllers
 * @version     $Id$
 */
class SalasController extends Zend_Controller_Action
{
	
	public function indexAction()
	{
		$sala = new Sala();
		$rowSetSalas = $sala->fetchAll();
		$this->view->salas = $rowSetSalas;
	}
	
	public function formularioAction()
	{
	    $id = $this->_getParam('id', null);
	    $sala = new Sala();
	    if($id) {
	        $rowSala = $sala->find($id)->current();
	    } else {
    	    $rowSala = $sala->createRow();
	    }
	    
	    $this->view->sala = $rowSala;
	}
	
	public function gravarAction()
	{
	    $id = $this->_getParam('id', null);
	    $sala = new Sala();
	    
	    if($id) {
	        $rowSala = $sala->find($id)->current();
	    } else {
    	    $rowSala = $sala->createRow();
	    }
	    
	    $rowSala->setFromArray($this->_getAllParams());
	    $rowSala->save();
	    $this->_redirect('salas/index');
	}
}
