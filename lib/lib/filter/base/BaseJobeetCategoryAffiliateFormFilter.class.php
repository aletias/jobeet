<?php

/**
 * JobeetCategoryAffiliate filter form base class.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage filter
 * @author     ##AUTHOR_NAME##
 */
abstract class BaseJobeetCategoryAffiliateFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
    ));

    $this->setValidators(array(
    ));

    $this->widgetSchema->setNameFormat('jobeet_category_affiliate_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'JobeetCategoryAffiliate';
  }

  public function getFields()
  {
    return array(
      'category_id'  => 'ForeignKey',
      'affiliate_id' => 'ForeignKey',
    );
  }
}
