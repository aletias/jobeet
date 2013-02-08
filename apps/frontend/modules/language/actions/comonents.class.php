<?php
class languageComponents extends sfComponents
{
  public function executeLanguage(sfWebRequest $request)
  {
    //$language = $request->getPreferredCulture(array('en', 'fr'));
     
    $this->form = new sfFormLanguage(
      $this->getUser(),
      array('languages' => array('en', 'fr'))
    );
    echo $language;
  }
}
?>
