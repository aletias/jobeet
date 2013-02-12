<?php

/**
 * JobeetCategoryI18n filter form base class.
 *
 * @package    jobeet
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseJobeetCategoryI18nFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'slug'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'name'    => new sfValidatorPass(array('required' => false)),
      'slug'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('jobeet_category_i18n_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'JobeetCategoryI18n';
  }

  public function getFields()
  {
    return array(
      'id'      => 'ForeignKey',
      'culture' => 'Text',
      'name'    => 'Text',
      'slug'    => 'Text',
    );
  }
}
