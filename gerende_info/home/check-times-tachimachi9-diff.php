header('Content-Type: text/html; charset=UTF-8');
$html = file_get_contents("https://times-info.net/search/?freewords=%E3%82%BF%E3%82%A4%E3%83%A0%E3%82%BA%E7%AB%8B%E7%94%BA%E7%AC%AC%EF%BC%99);
$DOM = new DOMDocument();
$DOM->loadHTML($html);
$finder = new DomXPath($DOM);
$classname = 'crow';
$nodes = $finder->query("//*[contains(@class, '$classname')]");
foreach ($nodes as $node) {
  echo $node->nodeValue;
}
