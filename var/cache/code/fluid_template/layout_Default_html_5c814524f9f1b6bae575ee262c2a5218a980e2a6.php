<?php

class layout_Default_html_5c814524f9f1b6bae575ee262c2a5218a980e2a6 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<nav
  class="navbar navbar-expand-lg navbar-light bg-light"
  style="padding: 0 10%"
>
  <a class="navbar-brand" href="/">
    <img
      src="https://upload.wikimedia.org/wikipedia/commons/e/e6/M-Net.svg"
      width="50"
      height="50"
      alt=""
    />
  </a>

  <button
    class="navbar-toggler"
    type="button"
    data-toggle="collapse"
    data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent"
    aria-expanded="false"
    aria-label="Toggle navigation"
  >
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output4 = '';

$output4 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$output48 = '';

$output48 .= '
          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$output51 = '';

$output51 .= '
            <li
              class="nav-item dropdown ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments52 = array();
$arguments52['then'] = NULL;
$arguments52['else'] = NULL;
$arguments52['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array54 = array();
$array55 = array (
);$array54['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.active', $array55);

$expression56 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments52['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression56(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array54)
					),
					$renderingContext
				);
$arguments52['then'] = 'active';

$output51 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output51 .= '"
            >
              <a
                class="nav-link ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments57 = array();
$arguments57['then'] = NULL;
$arguments57['else'] = NULL;
$arguments57['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array59 = array();
$array60 = array (
);$array59['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.active', $array60);

$expression61 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments57['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression61(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array59)
					),
					$renderingContext
				);
$arguments57['then'] = 'borderBottom';
$arguments57['else'] = 'dropdown-toggle';

$output51 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output51 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments62 = array();
$arguments62['then'] = NULL;
$arguments62['else'] = NULL;
$arguments62['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array64 = array();
$array65 = array (
);$array64['0'] = $renderingContext->getVariableProvider()->getByPath('collapse', $array65);

$expression66 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments62['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression66(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array64)
					),
					$renderingContext
				);
$arguments62['then'] = 'active';

$output51 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output51 .= '"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                ';
$array67 = array (
);
$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.title', $array67)]);

$output51 .= '
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$output71 = '';

$output71 .= '
                  <a
                    class="dropdown-item"
                    href="';
$array72 = array (
);
$output71 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array72)]);

$output71 .= '"
                    target="';
$array73 = array (
);
$output71 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array73)]);

$output71 .= '"
                    title="';
$array74 = array (
);
$output71 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array74)]);

$output71 .= '"
                  >
                    ';
$array75 = array (
);
$output71 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array75)]);

$output71 .= '
                  </a>
                ';
return $output71;
};
$arguments68 = array();
$arguments68['each'] = NULL;
$arguments68['as'] = NULL;
$arguments68['key'] = NULL;
$arguments68['reverse'] = false;
$arguments68['iteration'] = NULL;
$array70 = array (
);$arguments68['each'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.children', $array70);
$arguments68['as'] = 'child';

$output51 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output51 .= '
              </div>
            </li>
          ';
return $output51;
};
$arguments49 = array();

$output48 .= '';

$output48 .= '
          ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$output78 = '';

$output78 .= '
            <li
              class="nav-item ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments79 = array();
$arguments79['then'] = NULL;
$arguments79['else'] = NULL;
$arguments79['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array81 = array();
$array82 = array (
);$array81['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.active', $array82);

$expression83 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments79['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression83(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array81)
					),
					$renderingContext
				);
$arguments79['then'] = 'active';

$output78 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output78 .= '"
            >
              <a
                class="nav-link ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments84 = array();
$arguments84['then'] = NULL;
$arguments84['else'] = NULL;
$arguments84['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array86 = array();
$array87 = array (
);$array86['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.active', $array87);

$expression88 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments84['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression88(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array86)
					),
					$renderingContext
				);
$arguments84['then'] = 'borderBottom';

$output78 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output78 .= '"
                href="';
$array89 = array (
);
$output78 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.link', $array89)]);

$output78 .= '"
              >
                ';
$array90 = array (
);
$output78 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.title', $array90)]);

$output78 .= '
                <span class="sr-only">(current)</span>
              </a>
            </li>
          ';
return $output78;
};
$arguments76 = array();
$arguments76['if'] = NULL;

$output48 .= '';

$output48 .= '
        ';
return $output48;
};
$arguments5 = array();
$arguments5['then'] = NULL;
$arguments5['else'] = NULL;
$arguments5['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array45 = array();
$array46 = array (
);$array45['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.children', $array46);

$expression47 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments5['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression47(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array45)
					),
					$renderingContext
				);
$arguments5['__thenClosure'] = function() use ($renderingContext, $self) {
$output7 = '';

$output7 .= '
            <li
              class="nav-item dropdown ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['then'] = NULL;
$arguments8['else'] = NULL;
$arguments8['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array10 = array();
$array11 = array (
);$array10['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.active', $array11);

$expression12 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments8['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression12(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array10)
					),
					$renderingContext
				);
$arguments8['then'] = 'active';

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output7 .= '"
            >
              <a
                class="nav-link ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['then'] = NULL;
$arguments13['else'] = NULL;
$arguments13['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array15 = array();
$array16 = array (
);$array15['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.active', $array16);

$expression17 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments13['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression17(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array15)
					),
					$renderingContext
				);
$arguments13['then'] = 'borderBottom';
$arguments13['else'] = 'dropdown-toggle';

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output7 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['then'] = NULL;
$arguments18['else'] = NULL;
$arguments18['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array20 = array();
$array21 = array (
);$array20['0'] = $renderingContext->getVariableProvider()->getByPath('collapse', $array21);

$expression22 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments18['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression22(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array20)
					),
					$renderingContext
				);
$arguments18['then'] = 'active';

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output7 .= '"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                ';
$array23 = array (
);
$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.title', $array23)]);

$output7 .= '
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
                  <a
                    class="dropdown-item"
                    href="';
$array28 = array (
);
$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array28)]);

$output27 .= '"
                    target="';
$array29 = array (
);
$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array29)]);

$output27 .= '"
                    title="';
$array30 = array (
);
$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array30)]);

$output27 .= '"
                  >
                    ';
$array31 = array (
);
$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array31)]);

$output27 .= '
                  </a>
                ';
return $output27;
};
$arguments24 = array();
$arguments24['each'] = NULL;
$arguments24['as'] = NULL;
$arguments24['key'] = NULL;
$arguments24['reverse'] = false;
$arguments24['iteration'] = NULL;
$array26 = array (
);$arguments24['each'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.children', $array26);
$arguments24['as'] = 'child';

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output7 .= '
              </div>
            </li>
          ';
return $output7;
};
$arguments5['__elseClosures'][] = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
            <li
              class="nav-item ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['then'] = NULL;
$arguments33['else'] = NULL;
$arguments33['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array35 = array();
$array36 = array (
);$array35['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.active', $array36);

$expression37 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments33['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression37(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array35)
					),
					$renderingContext
				);
$arguments33['then'] = 'active';

$output32 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output32 .= '"
            >
              <a
                class="nav-link ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['then'] = NULL;
$arguments38['else'] = NULL;
$arguments38['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array40 = array();
$array41 = array (
);$array40['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigationItem.active', $array41);

$expression42 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments38['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression42(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array40)
					),
					$renderingContext
				);
$arguments38['then'] = 'borderBottom';

$output32 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output32 .= '"
                href="';
$array43 = array (
);
$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.link', $array43)]);

$output32 .= '"
              >
                ';
$array44 = array (
);
$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('mainnavigationItem.title', $array44)]);

$output32 .= '
                <span class="sr-only">(current)</span>
              </a>
            </li>
          ';
return $output32;
};

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
      ';
return $output4;
};
$arguments1 = array();
$arguments1['each'] = NULL;
$arguments1['as'] = NULL;
$arguments1['key'] = NULL;
$arguments1['reverse'] = false;
$arguments1['iteration'] = NULL;
$array3 = array (
);$arguments1['each'] = $renderingContext->getVariableProvider()->getByPath('mainnavigation', $array3);
$arguments1['as'] = 'mainnavigationItem';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <button type="button" class="btn btn-orange rounded-lg">
        Verfügbarkeit prüfen
      </button>
    </form>
  </div>
</nav>

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
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments91 = array();
$arguments91['section'] = NULL;
$arguments91['partial'] = NULL;
$arguments91['delegate'] = NULL;
$arguments91['renderable'] = NULL;
$arguments91['arguments'] = array (
);
$arguments91['optional'] = false;
$arguments91['default'] = NULL;
$arguments91['contentAs'] = NULL;
$arguments91['debug'] = true;
$arguments91['partial'] = 'PriceContainer';
// Rendering Array
$array93 = array();
$array93['price'] = 9;
$array93['pricePenny'] = 90;
$array93['oldPrice'] = 14;
$array93['oldPricePenny'] = 90;
$arguments91['arguments'] = $array93;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output0 .= '
    <div class="right-container"></div>
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
</div>

<div class="unsere-zusatzoptionen">
  <div class="content-layout">
    <div class="d-flex justify-content-between h-100 card-container">
      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments94 = array();
$arguments94['section'] = NULL;
$arguments94['partial'] = NULL;
$arguments94['delegate'] = NULL;
$arguments94['renderable'] = NULL;
$arguments94['arguments'] = array (
);
$arguments94['optional'] = false;
$arguments94['default'] = NULL;
$arguments94['contentAs'] = NULL;
$arguments94['debug'] = true;
$arguments94['partial'] = 'Card';
// Rendering Array
$array96 = array();
$array97 = array (
);$array96['svg'] = $renderingContext->getVariableProvider()->getByPath('test', $array97);
$arguments94['arguments'] = $array96;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output0 .= '
      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
return ' ';
};
$arguments98 = array();
$arguments98['section'] = NULL;
$arguments98['partial'] = NULL;
$arguments98['delegate'] = NULL;
$arguments98['renderable'] = NULL;
$arguments98['arguments'] = array (
);
$arguments98['optional'] = false;
$arguments98['default'] = NULL;
$arguments98['contentAs'] = NULL;
$arguments98['debug'] = true;
$arguments98['partial'] = 'Card';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output0 .= '
      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments100 = array();
$arguments100['section'] = NULL;
$arguments100['partial'] = NULL;
$arguments100['delegate'] = NULL;
$arguments100['renderable'] = NULL;
$arguments100['arguments'] = array (
);
$arguments100['optional'] = false;
$arguments100['default'] = NULL;
$arguments100['contentAs'] = NULL;
$arguments100['debug'] = true;
$arguments100['partial'] = 'Card';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output0 .= '
    </div>
  </div>
</div>
';

return $output0;
}


}
#