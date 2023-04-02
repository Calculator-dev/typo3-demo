<?php

class layout_Default_html_3935b81a263cf650ee6a0a9df4d746355cff1826 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '

<div class="container-fluid bg-hero-gradient">
  <div class="left-container">
    <div class="header position-absolute text-white">
      <h1 class="header2">
        Unvergessliche <br />
        Momente - Beginnen <br />mit eined Klick
      </h1>
    </div>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['section'] = NULL;
$arguments1['partial'] = NULL;
$arguments1['delegate'] = NULL;
$arguments1['renderable'] = NULL;
$arguments1['arguments'] = array (
);
$arguments1['optional'] = false;
$arguments1['default'] = NULL;
$arguments1['contentAs'] = NULL;
$arguments1['debug'] = true;
$arguments1['partial'] = 'PriceContainer';
// Rendering Array
$array3 = array();
$array3['price'] = 9;
$array3['pricePenny'] = 90;
$array3['oldPrice'] = 14;
$array3['oldPricePenny'] = 90;
$array3['position'] = 'position-absolute';
$arguments1['arguments'] = $array3;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
    <div class="right-container"></div>
  </div>
</div>

  <div class="surfen-und-telefonieren-container container-fluid">
    <div class="surfen-und-telefonieren-content d-flex justify-content-between">
      <div class="surfen-und-telefonieren-left-continer d-flex flex-column">
        <h1>Surfen und Telefonieren <br />mit M-net</h1>
        <p>
          Sichern Sie sich unser Top-Angebot noch heute. Wir von M-net<br />
          haben es uns zur Aufgabe gemacht, bester Anbieter für Internet <br />
          und Telefonie zu werden. Deshalb setzen wir auf superschnelle
          <br />Glasfaserverbindungen. Dadurch erreichen Sie nicht nur hohe
          <br />
          Downloadraten, sondern auch eine sehr konsistente Verbindung
        </p>
        <h3>
          Die Vorteile unserer günstigen Internet & <br />
          Festnetz Angebote auf einen Blick
        </h3>
        <div class="d-flex flex-column justify-content-between">
          <div class="d-flex flex-row align-items-center border-bottom mb-2">
            <div class="d-flex flex-row align-items-center mb-3">
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
              <h5 class="m-0">Top Uploadraten bis zu 300 M</h5>
            </div>
          </div>
          <div class="d-flex flex-row align-items-center border-bottom mb-2">
            <div class="d-flex flex-row align-items-center mb-3 mt-3">
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
              <h5 class="m-0">Top Uploadraten bis zu 300 M</h5>
            </div>
          </div>
          <div class="d-flex flex-row align-items-center border-bottom mb-2">
            <div class="d-flex flex-row align-items-center mb-3 mt-3">
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
              <h5 class="m-0">Top Uploadraten bis zu 300 M</h5>
            </div>
          </div>
          <div class="d-flex flex-row align-items-center">
            <div class="d-flex flex-row align-items-center mb-3 mt-3">
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
              <h5 class="m-0">Top Uploadraten bis zu 300 M</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="surfen-und-telefonieren-right-continer"></div>
    </div>
  </div>

  <div class="unsere-zusatzoptionen">
    <div class="content-layout">
      <h1 class="mb-4">Unsere Zusatzoptionen</h1>
      <div class="d-flex justify-content-between h-100 card-container">
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
$arguments4['partial'] = 'Card';
// Rendering Array
$array6 = array();
$array6['svg'] = 'https://upload.wikimedia.org/wikipedia/commons/5/5f/TV_-_The_Noun_Project.svg';
$array6['cardTitle'] = 'Fernsehen';
$array6['buttonName'] = 'Mehr erfahren';
$array6['cardText'] = 'Lorem Ipsum Dolor set amin Lorem Ipsum Dolor
        set amin, Lorem Ipsum Dolor set amin.';
$arguments4['arguments'] = $array6;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['section'] = NULL;
$arguments7['partial'] = NULL;
$arguments7['delegate'] = NULL;
$arguments7['renderable'] = NULL;
$arguments7['arguments'] = array (
);
$arguments7['optional'] = false;
$arguments7['default'] = NULL;
$arguments7['contentAs'] = NULL;
$arguments7['debug'] = true;
$arguments7['partial'] = 'Card';
// Rendering Array
$array9 = array();
$array9['svg'] = 'https://upload.wikimedia.org/wikipedia/commons/e/ea/Umbrella_%2880433%29_-_The_Noun_Project.svg';
$array9['cardTitle'] = 'Sicherheitspaket';
$array9['buttonName'] = 'Mehr erfahren';
$array9['cardText'] = 'Lorem Ipsum Dolor set amin Lorem Ipsum Dolor
        set amin, Lorem Ipsum Dolor set amin.';
$arguments7['arguments'] = $array9;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['section'] = NULL;
$arguments10['partial'] = NULL;
$arguments10['delegate'] = NULL;
$arguments10['renderable'] = NULL;
$arguments10['arguments'] = array (
);
$arguments10['optional'] = false;
$arguments10['default'] = NULL;
$arguments10['contentAs'] = NULL;
$arguments10['debug'] = true;
$arguments10['partial'] = 'Card';
// Rendering Array
$array12 = array();
$array12['svg'] = 'https://upload.wikimedia.org/wikipedia/commons/5/51/Electric.svg';
$array12['cardTitle'] = 'Komplettinstallation';
$array12['buttonName'] = 'Mehr erfahren';
$array12['cardText'] = 'Lorem Ipsum Dolor set amin Lorem Ipsum Dolor
        set amin, Lorem Ipsum Dolor set amin.';
$arguments10['arguments'] = $array12;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '
      </div>
    </div>
  </div>

  <div class="content-layout d-flex justify-content-between bottom-section-container" style="gap: 20px">
    <div class="d-flex flex-column w-50 bottom-section-content-queries" >
      <div class="bottom-section-left-img position-relative">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['section'] = NULL;
$arguments13['partial'] = NULL;
$arguments13['delegate'] = NULL;
$arguments13['renderable'] = NULL;
$arguments13['arguments'] = array (
);
$arguments13['optional'] = false;
$arguments13['default'] = NULL;
$arguments13['contentAs'] = NULL;
$arguments13['debug'] = true;
$arguments13['partial'] = 'PriceContainer';
// Rendering Array
$array15 = array();
$array15['price'] = 19;
$array15['pricePenny'] = 90;
$array15['position'] = 'position-absolute';
$array15['left'] = '65%';
$array15['top'] = '85%';
$array15['className'] = 'price-container-bottom-section';
$arguments13['arguments'] = $array15;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output0 .= '
      </div>
      <h1 class="font-weight-bold">Für Junge Leute</h1>
      <p class="w-75">
        Lorem Ipsum Dolor set amin Lorem Ipsum Dolor set amin, Lorem Ipsum Dolor
        set amin
      </p>
      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['section'] = NULL;
$arguments16['partial'] = NULL;
$arguments16['delegate'] = NULL;
$arguments16['renderable'] = NULL;
$arguments16['arguments'] = array (
);
$arguments16['optional'] = false;
$arguments16['default'] = NULL;
$arguments16['contentAs'] = NULL;
$arguments16['debug'] = true;
$arguments16['partial'] = 'OutlinedButton';
// Rendering Array
$array18 = array();
$array18['buttonName'] = 'Mehr erfahren';
$array18['style'] = 'w-25';
$array18['queries'] = 'button-bottom-section';
$arguments16['arguments'] = $array18;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output0 .= '
    </div>
    <div class="d-flex flex-column w-50  bottom-section-content-queries">
      <div class="bottom-section-right-img position-relative">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['section'] = NULL;
$arguments19['partial'] = NULL;
$arguments19['delegate'] = NULL;
$arguments19['renderable'] = NULL;
$arguments19['arguments'] = array (
);
$arguments19['optional'] = false;
$arguments19['default'] = NULL;
$arguments19['contentAs'] = NULL;
$arguments19['debug'] = true;
$arguments19['partial'] = 'PriceContainer';
// Rendering Array
$array21 = array();
$array21['price'] = 10;
$array21['pricePenny'] = 90;
$array21['position'] = 'position-absolute';
$array21['left'] = '65%';
$array21['top'] = '85%';
$array21['className'] = 'price-container-bottom-section';
$arguments19['arguments'] = $array21;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output0 .= '
      </div>
      <h1 class="font-weight-bold">Gamer Tarife</h1>
      <p class="w-75">
        Lorem Ipsum Dolor set amin Lorem Ipsum Dolor set amin, Lorem Ipsum Dolor
        set amin
      </p>
      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments22 = array();
$arguments22['section'] = NULL;
$arguments22['partial'] = NULL;
$arguments22['delegate'] = NULL;
$arguments22['renderable'] = NULL;
$arguments22['arguments'] = array (
);
$arguments22['optional'] = false;
$arguments22['default'] = NULL;
$arguments22['contentAs'] = NULL;
$arguments22['debug'] = true;
$arguments22['partial'] = 'OutlinedButton';
// Rendering Array
$array24 = array();
$array24['buttonName'] = 'Mehr erfahren';
$array24['style'] = 'w-25';
$array24['queries'] = 'button-bottom-section';
$arguments22['arguments'] = $array24;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output0 .= '
    </div>
  </div>
</div>
';

return $output0;
}


}
#