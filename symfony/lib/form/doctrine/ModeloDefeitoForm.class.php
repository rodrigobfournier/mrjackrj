<?php

/**
 * ModeloDefeito form.
 *
 * @package    mrjackrj
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ModeloDefeitoForm extends BaseModeloDefeitoForm
{
  public function configure()
  {
    $this->widgetSchema['preco_dinheiro'] = new sfWidgetFormInputText(array(), array('class'=>'real input-block-level'));
    $this->widgetSchema['preco_cartao'] = new sfWidgetFormInputText(array(), array('class'=>'real input-block-level'));
  }
}
