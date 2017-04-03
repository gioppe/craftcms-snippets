// insert into main Plugin class 

// overrides default routing behaviour
public function getElementRoute(BaseElementModel $element)
{
  $percorso = craft()->templates->getTemplatesPath() . 'myPath/';
  craft()->templates->setTemplatesPath($alternative_path);
}
