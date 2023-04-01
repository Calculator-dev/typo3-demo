<?php

class partial_TwitterShare_4151228afa23d2b4fe96d0a5d05e050be3a286d6 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

return '<div
  class="price position-absolute d-flex flex-row justify-content-center gap-10 align-items-center"
>
  <div class="price-header position-absolute btn-orange d-inline-block">
    Nur Für Kurze Zeit
  </div>
  <div class="old-price-container d-inline-flex flex-column text-white">
    <p class="m-0">statt</p>
    <p class="old-price-tag m-0">14,90 €</p>
  </div>
  <div class="text-white position-relative d-inline-flex flex-row">
    <?php if ($price): ?>
    <p class="m-0 lg-letter font-weight-bold"><?php echo $price ?>,</p>
    <div class="d-inline-flex position-absolute flex-column secondary-price">
      <span class="md-letter font-weight-bold">90</span>
      <p class="m-0 sm-letter">€ mb</p>
    </div>
    <?php else: ?>
    <p class="m-0 lg-letter font-weight-bold">9,</p>
    <div class="d-inline-flex position-absolute flex-column secondary-price">
      <span class="md-letter font-weight-bold">00</span>
      <p class="m-0 sm-letter">€ mb</p>
    </div>
    <?php endif; ?>
  </div>
</div>
';
}


}
#