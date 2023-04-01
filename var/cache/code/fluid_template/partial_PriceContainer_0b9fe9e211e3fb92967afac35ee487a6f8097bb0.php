<?php

class partial_PriceContainer_0b9fe9e211e3fb92967afac35ee487a6f8097bb0 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<div
      class="price position-absolute d-flex flex-row justify-content-center gap-10 align-items-center"
    >
      <div class="price-header position-absolute btn-orange d-inline-block">
        Nur Für Kurze Zeit
      </div>
      <div class="old-price-container d-inline-flex flex-column text-white">
        <p class="m-0">statt</p>
        <p class="old-price-tag m-0">';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('oldPrice', $array1)]);

$output0 .= ',90 €</p>
      </div>
      <div class="text-white position-relative d-inline-flex flex-row">
        <p class="m-0 lg-letter font-weight-bold">';
$array2 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('price', $array2)]);

$output0 .= ',</p>
        <div
          class="d-inline-flex position-absolute flex-column secondary-price"
        >
          <span class="md-letter font-weight-bold">90</span>
          <p class="m-0 sm-letter">€ mb</p>
        </div>
      </div>
    </div>
  </div>';

return $output0;
}


}
#