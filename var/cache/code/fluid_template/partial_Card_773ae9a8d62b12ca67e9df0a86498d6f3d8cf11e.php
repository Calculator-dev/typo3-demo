<?php

class partial_Card_773ae9a8d62b12ca67e9df0a86498d6f3d8cf11e extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'xlink' => NULL,
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '<div class="card-group">
  <div
    class="card d-flex justify-content-center position-relative align-items-center"
  >
    <div
      class="background-card-svg position-absolute d-flex justify-content-center align-items-center"
    >
      <!-- <svg
        xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink"
        version="1.1"
        x="0px"
        y="0px"
        width="350"
        height="350"
        viewBox="0 0 100 100"
        enable-background="new 0 0 100 100"
        xml:space="preserve"
        class="umbrella"
      >
        <path
          fill="#5580A9"
          d="M93.5,47.8l0-0.2c0-0.2-0.1-0.3-0.1-0.5c-4.6-19.9-21.4-34-41.3-34.9v-3c0-1.1-0.9-2-2-2s-2,0.9-2,2v3  C28,13.2,11.2,27.4,6.6,47.4c0,0,0,0,0,0l-0.1,0.4c0,0.1,0,0.3,0,0.4c0,0.9,0.6,1.7,1.6,2c0.1,0,0.3,0,0.4,0c0.9,0,1.7-0.6,2-1.6  l0,0c0.1-0.2,0.2-0.3,0.3-0.5c0.1-0.2,0.2-0.3,0.3-0.5c0.1-0.2,0.3-0.4,0.4-0.5c0.1-0.1,0.2-0.3,0.4-0.4c0.2-0.2,0.3-0.3,0.5-0.5  c0.1-0.1,0.3-0.2,0.4-0.4c0.2-0.1,0.4-0.3,0.6-0.4c0.2-0.1,0.3-0.2,0.5-0.3c0.2-0.1,0.4-0.2,0.7-0.3c0.2-0.1,0.3-0.2,0.5-0.2  c0.2-0.1,0.5-0.2,0.7-0.2c0.2-0.1,0.3-0.1,0.5-0.2c0.3-0.1,0.6-0.1,0.9-0.2c0.1,0,0.3-0.1,0.4-0.1c0.4-0.1,0.9-0.1,1.4-0.1  c3.6,0,7,1.9,8.6,4.8c0,0,0,0.1,0.1,0.1c0,0.1,0.1,0.2,0.2,0.2c0,0,0,0,0.1,0.1c0,0,0.1,0.1,0.1,0.1c0,0,0.1,0.1,0.1,0.1  c0.1,0,0.1,0.1,0.2,0.1c0,0,0.1,0,0.1,0.1c0,0,0,0,0,0c0,0,0,0,0,0c0.1,0.1,0.2,0.1,0.4,0.1c0,0,0,0,0,0c0,0,0,0,0.1,0  c0,0,0.1,0,0.1,0c0.1,0,0.1,0,0.2,0c0,0,0.1,0,0.1,0c0,0,0,0,0.1,0s0,0,0.1,0c0,0,0.1,0,0.1,0c0.1,0,0.1,0,0.2,0c0,0,0.1,0,0.1,0  c0,0,0,0,0.1,0c0,0,0,0,0,0c0.1,0,0.2-0.1,0.4-0.2c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0.1,0,0.1-0.1c0.1,0,0.1-0.1,0.2-0.1  c0,0,0.1-0.1,0.1-0.1c0,0,0.1-0.1,0.1-0.1c0,0,0,0,0.1-0.1c0.1-0.1,0.1-0.2,0.2-0.2c0,0,0-0.1,0.1-0.1c1.6-2.9,4.9-4.8,8.6-4.8  c3.5,0,6.7,1.7,8.3,4.4v36.9c0,1.9-1.6,3.5-3.5,3.5S41,87.2,41,85.2c0-1.1-0.9-2-2-2s-2,0.9-2,2c0,4.1,3.4,7.5,7.5,7.5  s7.5-3.4,7.5-7.5V48.3c1.6-2.7,4.9-4.4,8.3-4.4c3.6,0,7,1.9,8.6,4.8c0,0,0,0,0,0c0.1,0.1,0.2,0.3,0.3,0.4c0,0,0,0,0,0.1  c0,0,0,0,0.1,0.1c0.1,0.1,0.2,0.2,0.3,0.2c0,0,0,0,0.1,0.1c0,0,0,0,0,0c0,0,0,0,0,0c0.1,0.1,0.3,0.1,0.4,0.2c0,0,0,0,0,0  c0,0,0,0,0.1,0c0.1,0,0.3,0,0.4,0.1c0,0,0,0,0.1,0c0,0,0.1,0,0.1,0c0.1,0,0.2,0,0.3,0c0,0,0.1,0,0.1,0c0,0,0,0,0,0  c0.1,0,0.3-0.1,0.4-0.2c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0.1,0,0.1-0.1c0.1,0,0.1-0.1,0.2-0.1c0,0,0.1-0.1,0.1-0.1c0,0,0.1-0.1,0.1-0.1  c0,0,0,0,0.1-0.1c0.1-0.1,0.1-0.2,0.2-0.2c0,0,0-0.1,0.1-0.1c1.6-2.9,4.9-4.8,8.6-4.8c0.5,0,0.9,0,1.4,0.1c0.1,0,0.3,0.1,0.4,0.1  c0.3,0.1,0.6,0.1,0.9,0.2c0.2,0,0.3,0.1,0.5,0.2c0.3,0.1,0.5,0.2,0.7,0.2c0.2,0.1,0.3,0.2,0.5,0.2c0.2,0.1,0.5,0.2,0.7,0.3  c0.2,0.1,0.3,0.2,0.5,0.3c0.2,0.1,0.4,0.3,0.6,0.4c0.1,0.1,0.3,0.2,0.4,0.4c0.2,0.2,0.4,0.3,0.5,0.5c0.1,0.1,0.2,0.3,0.4,0.4  c0.2,0.2,0.3,0.3,0.4,0.5c0.1,0.1,0.2,0.3,0.3,0.5c0.1,0.2,0.2,0.3,0.3,0.5l0,0c0.2,0.9,1,1.6,2,1.6c0.1,0,0.3,0,0.4,0  c0.9-0.2,1.6-1,1.6-2C93.5,48.1,93.5,48,93.5,47.8z M87.2,41.3c0,0-0.1,0-0.1-0.1c-0.4-0.2-0.8-0.4-1.3-0.5c0,0-0.1,0-0.1,0  c-0.4-0.2-0.9-0.3-1.4-0.4c-0.1,0-0.2,0-0.3-0.1c-0.5-0.1-0.9-0.2-1.4-0.2c-0.1,0-0.2,0-0.2,0c-0.5,0-1-0.1-1.5-0.1  c-0.5,0-0.9,0-1.3,0.1c-0.1,0-0.2,0-0.3,0c-0.4,0-0.9,0.1-1.3,0.2c-0.1,0-0.1,0-0.2,0c-0.4,0.1-0.8,0.2-1.1,0.3  c-0.1,0-0.2,0-0.2,0.1c-0.4,0.1-0.8,0.3-1.2,0.4c-0.1,0-0.2,0.1-0.2,0.1c-0.4,0.2-0.7,0.3-1,0.5c0,0-0.1,0-0.1,0.1  c-0.4,0.2-0.7,0.4-1.1,0.7c-0.1,0.1-0.2,0.1-0.2,0.2c-0.1,0-0.1,0.1-0.2,0.1c-0.3-5.8-2.2-17.1-12-25C72.3,21,82.3,29.7,87.2,41.3z   M17.5,40c-0.1,0-0.2,0-0.2,0c-0.5,0.1-0.9,0.1-1.4,0.2c-0.1,0-0.2,0-0.3,0.1c-0.5,0.1-0.9,0.2-1.4,0.4c0,0-0.1,0-0.1,0  c-0.4,0.2-0.8,0.3-1.3,0.5c0,0-0.1,0-0.1,0c4.9-11.5,14.8-20.2,26.6-23.6c-9.7,7.9-11.6,19.1-11.9,24.9c0,0-0.1-0.1-0.1-0.1  c-0.1-0.1-0.2-0.1-0.2-0.2c-0.3-0.2-0.7-0.5-1.1-0.7c0,0-0.1-0.1-0.1-0.1c-0.3-0.2-0.7-0.4-1-0.5c-0.1,0-0.2-0.1-0.2-0.1  c-0.4-0.2-0.8-0.3-1.2-0.4c-0.1,0-0.2,0-0.2-0.1c-0.4-0.1-0.7-0.2-1.1-0.3c-0.1,0-0.1,0-0.2,0c-0.4-0.1-0.9-0.1-1.3-0.2  c-0.1,0-0.2,0-0.3,0c-0.4,0-0.9-0.1-1.3-0.1C18.5,39.9,18,39.9,17.5,40z M38.3,40c-0.1,0-0.2,0-0.3,0c-0.4,0-0.9,0.1-1.3,0.2  c-0.1,0-0.1,0-0.2,0c-0.4,0.1-0.8,0.2-1.1,0.3c-0.1,0-0.2,0-0.2,0.1c-0.4,0.1-0.8,0.3-1.2,0.4c-0.1,0-0.2,0.1-0.2,0.1  c-0.4,0.2-0.7,0.3-1,0.5c0,0-0.1,0-0.1,0.1c-0.4,0.2-0.7,0.4-1.1,0.7c0,0-0.1,0-0.1,0.1c0.4-6.2,2.8-18.9,16.6-25.4v25.5  c-0.1-0.1-0.1-0.1-0.2-0.2c-0.3-0.2-0.7-0.5-1.1-0.7c0,0-0.1-0.1-0.1-0.1c-0.3-0.2-0.7-0.4-1-0.5c-0.1,0-0.2-0.1-0.2-0.1  c-0.4-0.2-0.8-0.3-1.2-0.4c-0.1,0-0.2,0-0.2-0.1c-0.4-0.1-0.7-0.2-1.1-0.3c-0.1,0-0.1,0-0.2,0c-0.4-0.1-0.9-0.1-1.3-0.2  c-0.1,0-0.2,0-0.3,0c-0.4,0-0.9-0.1-1.3-0.1S38.8,39.9,38.3,40z M59,40c-0.1,0-0.2,0-0.3,0c-0.4,0-0.9,0.1-1.3,0.2  c-0.1,0-0.1,0-0.2,0c-0.4,0.1-0.8,0.2-1.1,0.3c-0.1,0-0.2,0-0.2,0.1c-0.4,0.1-0.8,0.3-1.2,0.4c-0.1,0-0.2,0.1-0.2,0.1  c-0.4,0.2-0.7,0.3-1,0.5c0,0-0.1,0-0.1,0.1c-0.4,0.2-0.7,0.4-1.1,0.7c-0.1,0.1-0.1,0.1-0.2,0.2V17.1c13.8,6.5,16.2,19.1,16.5,25.3  c0,0,0,0-0.1,0c-0.3-0.2-0.7-0.5-1.1-0.7c0,0-0.1-0.1-0.1-0.1c-0.3-0.2-0.7-0.4-1-0.5c-0.1,0-0.2-0.1-0.2-0.1  c-0.4-0.2-0.8-0.3-1.2-0.4c-0.1,0-0.2,0-0.2-0.1c-0.4-0.1-0.7-0.2-1.1-0.3c-0.1,0-0.1,0-0.2,0c-0.4-0.1-0.9-0.1-1.3-0.2  c-0.1,0-0.2,0-0.3,0c-0.4,0-0.9-0.1-1.3-0.1S59.4,39.9,59,40z"
        ></path>
      </svg> -->
      <img src="';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('svg', $array1)]);

$output0 .= '" style="color: aqua" alt="asdfasdf" />
    </div>

    <div class="card-body">
      <h5 class="card-title">';
$array2 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cardTitle', $array2)]);

$output0 .= '</h5>
      <p class="card-text">';
$array3 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cardText', $array3)]);

$output0 .= '</p>
      <div class="bottom-card-content">
        <hr />
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['section'] = NULL;
$arguments4['partial'] = NULL;
$arguments4['delegate'] = NULL;
$arguments4['renderable'] = NULL;
$arguments4['arguments'] = array (
);
$arguments4['optional'] = false;
$arguments4['default'] = NULL;
$arguments4['contentAs'] = NULL;
$arguments4['debug'] = true;
$arguments4['partial'] = 'OutlinedButton';
// Rendering Array
$array6 = array();
$array7 = array (
);$array6['buttonName'] = $renderingContext->getVariableProvider()->getByPath('buttonName', $array7);
$array6['style'] = 'float-right';
$arguments4['arguments'] = $array6;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '
      </div>
    </div>
  </div>
</div>
';

return $output0;
}


}
#