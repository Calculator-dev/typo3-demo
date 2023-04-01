<?php

class partial_Card_946f541bb12c6edc7e5467515c74799725760b81 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '<div class="card-group">
  <div class="card d-flex justify-content-center align-items-center">
    ';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('arguments.svg', $array1)]);

$output0 .= '
    <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                class="svg-background"
              >
                <path
                  fill="#0070AE"
                  d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"
                />
              </svg>
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2 = array();
$arguments2['src'] = '';
$arguments2['treatIdAsReference'] = false;
$arguments2['image'] = NULL;
$arguments2['crop'] = NULL;
$arguments2['cropVariant'] = 'default';
$arguments2['fileExtension'] = NULL;
$arguments2['width'] = NULL;
$arguments2['height'] = NULL;
$arguments2['minWidth'] = NULL;
$arguments2['minHeight'] = NULL;
$arguments2['maxWidth'] = NULL;
$arguments2['maxHeight'] = NULL;
$arguments2['absolute'] = false;
$array4 = array (
);$arguments2['image'] = $renderingContext->getVariableProvider()->getByPath('svg', $array4);

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext)]);

$output0 .= '
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">
        This is a wider card with supporting text below as a natural lead-in to
        additional content. This content is a little bit longer.
      </p>
      <p class="card-text">
        <small class="text-muted">Last updated 3 mins ago</small>
      </p>
    </div>
  </div>
</div>
';

return $output0;
}


}
#