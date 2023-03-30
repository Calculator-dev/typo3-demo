<?php

class Standard_action_index_207b085ecc60e93739040642bf6f0d00201d9235 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'be' => 
  array (
    0 => 'TYPO3\\CMS\\Backend\\ViewHelpers',
  ),
));
}

/**
 * section FormLine
 */
public function section_a479c5fabf5531581f0d03ced8ac36a55f3a5f1a(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    <div class="form-section" id="form-line-';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.index', $array1)]);

$output0 .= '">
        <div class="row">
            <div class="form-group col-xs-8">
                <label for="page_new_';
$array2 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.index', $array2)]);

$output0 .= '">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['key'] = NULL;
$arguments3['id'] = NULL;
$arguments3['default'] = NULL;
$arguments3['arguments'] = NULL;
$arguments3['extensionName'] = NULL;
$arguments3['languageKey'] = NULL;
$arguments3['alternativeLanguageKeys'] = NULL;
$arguments3['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:newPage';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext)]);

$output0 .= ' ';
$array5 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.label', $array5)]);

$output0 .= ':
                </label>
                <div class="form-control-wrap">
                    <input class="form-control" type="text" id="page_new_';
$array6 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.index', $array6)]);

$output0 .= '" name="pages[NEW';
$array7 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.index', $array7)]);

$output0 .= '][title]" placeholder="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['key'] = NULL;
$arguments8['id'] = NULL;
$arguments8['default'] = NULL;
$arguments8['arguments'] = NULL;
$arguments8['extensionName'] = NULL;
$arguments8['languageKey'] = NULL;
$arguments8['alternativeLanguageKeys'] = NULL;
$arguments8['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.title';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext)]);

$output0 .= '" />
                </div>
            </div>
            <div class="form-group col-xs-4">
                <label for="page_new_select_';
$array10 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.index', $array10)]);

$output0 .= '">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['key'] = NULL;
$arguments11['id'] = NULL;
$arguments11['default'] = NULL;
$arguments11['arguments'] = NULL;
$arguments11['extensionName'] = NULL;
$arguments11['languageKey'] = NULL;
$arguments11['alternativeLanguageKeys'] = NULL;
$arguments11['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.type';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext)]);

$output0 .= '
                </label>
                <div class="form-control-wrap">
                    <div class="input-group">
                        <div id="page_new_icon_';
$array13 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.index', $array13)]);

$output0 .= '" class="input-group-addon input-group-icon">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['table'] = NULL;
$arguments14['row'] = NULL;
$arguments14['size'] = 'small';
$arguments14['alternativeMarkupIdentifier'] = NULL;
$arguments14['table'] = 'pages';
// Rendering Array
$array16 = array();
$array16['id'] = 0;
$arguments14['row'] = $array16;

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output0 .= '
                        </div>
                        <select id="page_new_select_';
$array17 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.index', $array17)]);

$output0 .= '" class="form-control form-control-adapt t3js-newmultiplepages-select-doktype" name="pages[NEW';
$array18 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.index', $array18)]);

$output0 .= '][doktype]" data-target="#page_new_icon_';
$array19 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.index', $array19)]);

$output0 .= '">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output23 = '';

$output23 .= '
                                <optgroup label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments24 = array();
$arguments24['key'] = NULL;
$arguments24['id'] = NULL;
$arguments24['default'] = NULL;
$arguments24['arguments'] = NULL;
$arguments24['extensionName'] = NULL;
$arguments24['languageKey'] = NULL;
$arguments24['alternativeLanguageKeys'] = NULL;
$array26 = array (
);$arguments24['key'] = $renderingContext->getVariableProvider()->getByPath('group', $array26);

$output23 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext)]);

$output23 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
                                        <option data-icon=\'';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['identifier'] = NULL;
$arguments31['size'] = 'small';
$arguments31['overlay'] = NULL;
$arguments31['state'] = 'default';
$arguments31['alternativeMarkupIdentifier'] = NULL;
$array33 = array (
);$arguments31['identifier'] = $renderingContext->getVariableProvider()->getByPath('type.2', $array33);

$output30 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output30 .= '\' value="';
$array34 = array (
);
$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('type.1', $array34)]);

$output30 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments35 = array();
$arguments35['key'] = NULL;
$arguments35['id'] = NULL;
$arguments35['default'] = NULL;
$arguments35['arguments'] = NULL;
$arguments35['extensionName'] = NULL;
$arguments35['languageKey'] = NULL;
$arguments35['alternativeLanguageKeys'] = NULL;
$array37 = array (
);$arguments35['key'] = $renderingContext->getVariableProvider()->getByPath('type.0', $array37);

$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext)]);

$output30 .= '</option>
                                    ';
return $output30;
};
$arguments27 = array();
$arguments27['each'] = NULL;
$arguments27['as'] = NULL;
$arguments27['key'] = NULL;
$arguments27['reverse'] = false;
$arguments27['iteration'] = NULL;
$array29 = array (
);$arguments27['each'] = $renderingContext->getVariableProvider()->getByPath('typegroup', $array29);
$arguments27['as'] = 'type';

$output23 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output23 .= '
                                </optgroup>
                            ';
return $output23;
};
$arguments20 = array();
$arguments20['each'] = NULL;
$arguments20['as'] = NULL;
$arguments20['key'] = NULL;
$arguments20['reverse'] = false;
$arguments20['iteration'] = NULL;
$array22 = array (
);$arguments20['each'] = $renderingContext->getVariableProvider()->getByPath('line.pageTypes', $array22);
$arguments20['as'] = 'typegroup';
$arguments20['key'] = 'group';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output0 .= '
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output38 = '';

$output38 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['pageTitle'] = '';
$arguments39['includeCssFiles'] = NULL;
$arguments39['includeJsFiles'] = NULL;
$arguments39['addJsInlineLabels'] = NULL;
$arguments39['includeRequireJsModules'] = NULL;
$arguments39['addInlineSettings'] = NULL;
// Rendering Array
$array41 = array();
$array41['0'] = 'TYPO3/CMS/Backend/ContextMenu';
$array41['1'] = 'TYPO3/CMS/Backend/NewMultiplePages';
$arguments39['includeRequireJsModules'] = $array41;

$output38 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext)]);

$output38 .= '

<h1>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments42 = array();
$arguments42['key'] = NULL;
$arguments42['id'] = NULL;
$arguments42['default'] = NULL;
$arguments42['arguments'] = NULL;
$arguments42['extensionName'] = NULL;
$arguments42['languageKey'] = NULL;
$arguments42['alternativeLanguageKeys'] = NULL;
$arguments42['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:title';

$output38 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext)]);

$output38 .= '
</h1>

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$output277 = '';

$output277 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure279 = function() use ($renderingContext, $self) {
$output280 = '';

$output280 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure282 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments281 = array();
$arguments281['message'] = NULL;
$arguments281['title'] = NULL;
$arguments281['state'] = -2;
$arguments281['iconName'] = NULL;
$arguments281['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments283 = array();
$arguments283['key'] = NULL;
$arguments283['id'] = NULL;
$arguments283['default'] = NULL;
$arguments283['arguments'] = NULL;
$arguments283['extensionName'] = NULL;
$arguments283['languageKey'] = NULL;
$arguments283['alternativeLanguageKeys'] = NULL;
$arguments283['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:canNotCreateNew.title';
$arguments281['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments283, $renderChildrenClosure284, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure286 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments285 = array();
$arguments285['key'] = NULL;
$arguments285['id'] = NULL;
$arguments285['default'] = NULL;
$arguments285['arguments'] = NULL;
$arguments285['extensionName'] = NULL;
$arguments285['languageKey'] = NULL;
$arguments285['alternativeLanguageKeys'] = NULL;
$arguments285['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:canNotCreateNew.message';
$arguments281['message'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments285, $renderChildrenClosure286, $renderingContext)]);
$arguments281['state'] = -1;
$renderChildrenClosure282 = ($arguments281['message'] !== null) ? function() use ($arguments281) { return $arguments281['message']; } : $renderChildrenClosure282;
$output280 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments281, $renderChildrenClosure282, $renderingContext);

$output280 .= '
    ';
return $output280;
};
$arguments278 = array();

$output277 .= '';

$output277 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure288 = function() use ($renderingContext, $self) {
$output289 = '';

$output289 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure291 = function() use ($renderingContext, $self) {
$output400 = '';

$output400 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure402 = function() use ($renderingContext, $self) {
$output403 = '';

$output403 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure405 = function() use ($renderingContext, $self) {
$output423 = '';

$output423 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure425 = function() use ($renderingContext, $self) {
$output426 = '';

$output426 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure428 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments427 = array();
$arguments427['message'] = NULL;
$arguments427['title'] = NULL;
$arguments427['state'] = -2;
$arguments427['iconName'] = NULL;
$arguments427['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure430 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments429 = array();
$arguments429['key'] = NULL;
$arguments429['id'] = NULL;
$arguments429['default'] = NULL;
$arguments429['arguments'] = NULL;
$arguments429['extensionName'] = NULL;
$arguments429['languageKey'] = NULL;
$arguments429['alternativeLanguageKeys'] = NULL;
$arguments429['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:pagesCreated.title';
$arguments427['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments429, $renderChildrenClosure430, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure432 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments431 = array();
$arguments431['key'] = NULL;
$arguments431['id'] = NULL;
$arguments431['default'] = NULL;
$arguments431['arguments'] = NULL;
$arguments431['extensionName'] = NULL;
$arguments431['languageKey'] = NULL;
$arguments431['alternativeLanguageKeys'] = NULL;
$arguments431['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:pagesCreated.message';
$arguments427['message'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments431, $renderChildrenClosure432, $renderingContext)]);
$arguments427['state'] = -1;
$renderChildrenClosure428 = ($arguments427['message'] !== null) ? function() use ($arguments427) { return $arguments427['message']; } : $renderChildrenClosure428;
$output426 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments427, $renderChildrenClosure428, $renderingContext);

$output426 .= '
                    ';
return $output426;
};
$arguments424 = array();

$output423 .= '';

$output423 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure434 = function() use ($renderingContext, $self) {
$output435 = '';

$output435 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure437 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments436 = array();
$arguments436['message'] = NULL;
$arguments436['title'] = NULL;
$arguments436['state'] = -2;
$arguments436['iconName'] = NULL;
$arguments436['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure439 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments438 = array();
$arguments438['key'] = NULL;
$arguments438['id'] = NULL;
$arguments438['default'] = NULL;
$arguments438['arguments'] = NULL;
$arguments438['extensionName'] = NULL;
$arguments438['languageKey'] = NULL;
$arguments438['alternativeLanguageKeys'] = NULL;
$arguments438['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:noPagesCreated.title';
$arguments436['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments438, $renderChildrenClosure439, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure441 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments440 = array();
$arguments440['key'] = NULL;
$arguments440['id'] = NULL;
$arguments440['default'] = NULL;
$arguments440['arguments'] = NULL;
$arguments440['extensionName'] = NULL;
$arguments440['languageKey'] = NULL;
$arguments440['alternativeLanguageKeys'] = NULL;
$arguments440['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:noPagesCreated.message';
$arguments436['message'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments440, $renderChildrenClosure441, $renderingContext)]);
$arguments436['state'] = 1;
$renderChildrenClosure437 = ($arguments436['message'] !== null) ? function() use ($arguments436) { return $arguments436['message']; } : $renderChildrenClosure437;
$output435 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments436, $renderChildrenClosure437, $renderingContext);

$output435 .= '
                    ';
return $output435;
};
$arguments433 = array();
$arguments433['if'] = NULL;

$output423 .= '';

$output423 .= '
                ';
return $output423;
};
$arguments404 = array();
$arguments404['then'] = NULL;
$arguments404['else'] = NULL;
$arguments404['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array420 = array();
$array421 = array (
);$array420['0'] = $renderingContext->getVariableProvider()->getByPath('pagesCreated', $array421);

$expression422 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments404['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression422(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array420)
					),
					$renderingContext
				);
$arguments404['__thenClosure'] = function() use ($renderingContext, $self) {
$output406 = '';

$output406 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure408 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments407 = array();
$arguments407['message'] = NULL;
$arguments407['title'] = NULL;
$arguments407['state'] = -2;
$arguments407['iconName'] = NULL;
$arguments407['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure410 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments409 = array();
$arguments409['key'] = NULL;
$arguments409['id'] = NULL;
$arguments409['default'] = NULL;
$arguments409['arguments'] = NULL;
$arguments409['extensionName'] = NULL;
$arguments409['languageKey'] = NULL;
$arguments409['alternativeLanguageKeys'] = NULL;
$arguments409['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:pagesCreated.title';
$arguments407['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments409, $renderChildrenClosure410, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure412 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments411 = array();
$arguments411['key'] = NULL;
$arguments411['id'] = NULL;
$arguments411['default'] = NULL;
$arguments411['arguments'] = NULL;
$arguments411['extensionName'] = NULL;
$arguments411['languageKey'] = NULL;
$arguments411['alternativeLanguageKeys'] = NULL;
$arguments411['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:pagesCreated.message';
$arguments407['message'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments411, $renderChildrenClosure412, $renderingContext)]);
$arguments407['state'] = -1;
$renderChildrenClosure408 = ($arguments407['message'] !== null) ? function() use ($arguments407) { return $arguments407['message']; } : $renderChildrenClosure408;
$output406 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments407, $renderChildrenClosure408, $renderingContext);

$output406 .= '
                    ';
return $output406;
};
$arguments404['__elseClosures'][] = function() use ($renderingContext, $self) {
$output413 = '';

$output413 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure415 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments414 = array();
$arguments414['message'] = NULL;
$arguments414['title'] = NULL;
$arguments414['state'] = -2;
$arguments414['iconName'] = NULL;
$arguments414['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure417 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments416 = array();
$arguments416['key'] = NULL;
$arguments416['id'] = NULL;
$arguments416['default'] = NULL;
$arguments416['arguments'] = NULL;
$arguments416['extensionName'] = NULL;
$arguments416['languageKey'] = NULL;
$arguments416['alternativeLanguageKeys'] = NULL;
$arguments416['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:noPagesCreated.title';
$arguments414['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments416, $renderChildrenClosure417, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure419 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments418 = array();
$arguments418['key'] = NULL;
$arguments418['id'] = NULL;
$arguments418['default'] = NULL;
$arguments418['arguments'] = NULL;
$arguments418['extensionName'] = NULL;
$arguments418['languageKey'] = NULL;
$arguments418['alternativeLanguageKeys'] = NULL;
$arguments418['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:noPagesCreated.message';
$arguments414['message'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments418, $renderChildrenClosure419, $renderingContext)]);
$arguments414['state'] = 1;
$renderChildrenClosure415 = ($arguments414['message'] !== null) ? function() use ($arguments414) { return $arguments414['message']; } : $renderChildrenClosure415;
$output413 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments414, $renderChildrenClosure415, $renderingContext);

$output413 .= '
                    ';
return $output413;
};

$output403 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments404, $renderChildrenClosure405, $renderingContext);

$output403 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure443 = function() use ($renderingContext, $self) {
$output447 = '';

$output447 .= '
                    <div class="form-group">
                        <h2>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure449 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments448 = array();
$arguments448['key'] = NULL;
$arguments448['id'] = NULL;
$arguments448['default'] = NULL;
$arguments448['arguments'] = NULL;
$arguments448['extensionName'] = NULL;
$arguments448['languageKey'] = NULL;
$arguments448['alternativeLanguageKeys'] = NULL;
$arguments448['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:newSubPages';

$output447 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments448, $renderChildrenClosure449, $renderingContext)]);

$output447 .= '
                        </h2>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure451 = function() use ($renderingContext, $self) {
$output453 = '';

$output453 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure455 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments454 = array();
$arguments454['table'] = NULL;
$arguments454['row'] = NULL;
$arguments454['size'] = 'small';
$arguments454['alternativeMarkupIdentifier'] = NULL;
$arguments454['table'] = 'pages';
$array456 = array (
);$arguments454['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array456);

$output453 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments454, $renderChildrenClosure455, $renderingContext);

$output453 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure458 = function() use ($renderingContext, $self) {
$array460 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array460)]);
};
$arguments457 = array();
$arguments457['maxCharacters'] = NULL;
$arguments457['append'] = '&hellip;';
$arguments457['respectWordBoundaries'] = true;
$arguments457['respectHtml'] = true;
$array459 = array (
);$arguments457['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxTitleLength', $array459);

$output453 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments457, $renderChildrenClosure458, $renderingContext);

$output453 .= '
                            <br />
                        ';
return $output453;
};
$arguments450 = array();
$arguments450['each'] = NULL;
$arguments450['as'] = NULL;
$arguments450['key'] = NULL;
$arguments450['reverse'] = false;
$arguments450['iteration'] = NULL;
$array452 = array (
);$arguments450['each'] = $renderingContext->getVariableProvider()->getByPath('visiblePages', $array452);
$arguments450['as'] = 'page';

$output447 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments450, $renderChildrenClosure451, $renderingContext);

$output447 .= '
                    </div>
                ';
return $output447;
};
$arguments442 = array();
$arguments442['then'] = NULL;
$arguments442['else'] = NULL;
$arguments442['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array444 = array();
$array445 = array (
);$array444['0'] = $renderingContext->getVariableProvider()->getByPath('visiblePages', $array445);

$expression446 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments442['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression446(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array444)
					),
					$renderingContext
				);
$arguments442['__thenClosure'] = $renderChildrenClosure443;

$output403 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments442, $renderChildrenClosure443, $renderingContext);

$output403 .= '
            ';
return $output403;
};
$arguments401 = array();

$output400 .= '';

$output400 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure462 = function() use ($renderingContext, $self) {
$output463 = '';

$output463 .= '
                <div class="t3js-newmultiplepages-newlinetemplate" style="display:none">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure465 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments464 = array();
$arguments464['section'] = NULL;
$arguments464['partial'] = NULL;
$arguments464['delegate'] = NULL;
$arguments464['renderable'] = NULL;
$arguments464['arguments'] = array (
);
$arguments464['optional'] = false;
$arguments464['default'] = NULL;
$arguments464['contentAs'] = NULL;
$arguments464['debug'] = true;
$arguments464['section'] = 'FormLine';
// Rendering Array
$array466 = array();
// Rendering Array
$array467 = array();
$array467['index'] = '[0]';
$array467['label'] = '[1]';
$array468 = array (
);$array467['pageTypes'] = $renderingContext->getVariableProvider()->getByPath('pageTypes', $array468);
$array466['line'] = $array467;
$arguments464['arguments'] = $array466;

$output463 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments464, $renderChildrenClosure465, $renderingContext);

$output463 .= '
                </div>

                <form action="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure470 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments469 = array();
$arguments469['route'] = NULL;
$arguments469['arguments'] = array (
);
$arguments469['query'] = NULL;
$arguments469['currentUrlParameterName'] = NULL;
$arguments469['route'] = 'pages_new';
// Rendering Array
$array471 = array();
$array472 = array (
);$array471['id'] = $renderingContext->getVariableProvider()->getByPath('pageUid', $array472);
$arguments469['arguments'] = $array471;

$output463 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments469, $renderChildrenClosure470, $renderingContext)]);

$output463 .= '" method="post">
                    <div class="form-group t3js-newmultiplepages-container">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure474 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments473 = array();
$arguments473['section'] = NULL;
$arguments473['partial'] = NULL;
$arguments473['delegate'] = NULL;
$arguments473['renderable'] = NULL;
$arguments473['arguments'] = array (
);
$arguments473['optional'] = false;
$arguments473['default'] = NULL;
$arguments473['contentAs'] = NULL;
$arguments473['debug'] = true;
$arguments473['section'] = 'FormLine';
// Rendering Array
$array475 = array();
// Rendering Array
$array476 = array();
$array476['index'] = 0;
$array476['label'] = 1;
$array477 = array (
);$array476['pageTypes'] = $renderingContext->getVariableProvider()->getByPath('pageTypes', $array477);
$array475['line'] = $array476;
$arguments473['arguments'] = $array475;

$output463 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments473, $renderChildrenClosure474, $renderingContext);

$output463 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure479 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments478 = array();
$arguments478['section'] = NULL;
$arguments478['partial'] = NULL;
$arguments478['delegate'] = NULL;
$arguments478['renderable'] = NULL;
$arguments478['arguments'] = array (
);
$arguments478['optional'] = false;
$arguments478['default'] = NULL;
$arguments478['contentAs'] = NULL;
$arguments478['debug'] = true;
$arguments478['section'] = 'FormLine';
// Rendering Array
$array480 = array();
// Rendering Array
$array481 = array();
$array481['index'] = 1;
$array481['label'] = 2;
$array482 = array (
);$array481['pageTypes'] = $renderingContext->getVariableProvider()->getByPath('pageTypes', $array482);
$array480['line'] = $array481;
$arguments478['arguments'] = $array480;

$output463 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments478, $renderChildrenClosure479, $renderingContext);

$output463 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure484 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments483 = array();
$arguments483['section'] = NULL;
$arguments483['partial'] = NULL;
$arguments483['delegate'] = NULL;
$arguments483['renderable'] = NULL;
$arguments483['arguments'] = array (
);
$arguments483['optional'] = false;
$arguments483['default'] = NULL;
$arguments483['contentAs'] = NULL;
$arguments483['debug'] = true;
$arguments483['section'] = 'FormLine';
// Rendering Array
$array485 = array();
// Rendering Array
$array486 = array();
$array486['index'] = 2;
$array486['label'] = 3;
$array487 = array (
);$array486['pageTypes'] = $renderingContext->getVariableProvider()->getByPath('pageTypes', $array487);
$array485['line'] = $array486;
$arguments483['arguments'] = $array485;

$output463 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments483, $renderChildrenClosure484, $renderingContext);

$output463 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure489 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments488 = array();
$arguments488['section'] = NULL;
$arguments488['partial'] = NULL;
$arguments488['delegate'] = NULL;
$arguments488['renderable'] = NULL;
$arguments488['arguments'] = array (
);
$arguments488['optional'] = false;
$arguments488['default'] = NULL;
$arguments488['contentAs'] = NULL;
$arguments488['debug'] = true;
$arguments488['section'] = 'FormLine';
// Rendering Array
$array490 = array();
// Rendering Array
$array491 = array();
$array491['index'] = 3;
$array491['label'] = 4;
$array492 = array (
);$array491['pageTypes'] = $renderingContext->getVariableProvider()->getByPath('pageTypes', $array492);
$array490['line'] = $array491;
$arguments488['arguments'] = $array490;

$output463 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments488, $renderChildrenClosure489, $renderingContext);

$output463 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure494 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments493 = array();
$arguments493['section'] = NULL;
$arguments493['partial'] = NULL;
$arguments493['delegate'] = NULL;
$arguments493['renderable'] = NULL;
$arguments493['arguments'] = array (
);
$arguments493['optional'] = false;
$arguments493['default'] = NULL;
$arguments493['contentAs'] = NULL;
$arguments493['debug'] = true;
$arguments493['section'] = 'FormLine';
// Rendering Array
$array495 = array();
// Rendering Array
$array496 = array();
$array496['index'] = 4;
$array496['label'] = 5;
$array497 = array (
);$array496['pageTypes'] = $renderingContext->getVariableProvider()->getByPath('pageTypes', $array497);
$array495['line'] = $array496;
$arguments493['arguments'] = $array495;

$output463 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments493, $renderChildrenClosure494, $renderingContext);

$output463 .= '
                    </div>

                    <div class="form-group">
                        <input
                            class="btn btn-default t3js-newmultiplepages-createnewfields"
                            type="button"
                            value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure499 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments498 = array();
$arguments498['key'] = NULL;
$arguments498['id'] = NULL;
$arguments498['default'] = NULL;
$arguments498['arguments'] = NULL;
$arguments498['extensionName'] = NULL;
$arguments498['languageKey'] = NULL;
$arguments498['alternativeLanguageKeys'] = NULL;
$arguments498['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:addMoreLines';

$output463 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments498, $renderChildrenClosure499, $renderingContext)]);

$output463 .= '"
                        />
                    </div>

                    <div class="form-group">
                        <div class="checkbox">
                            <label for="createInListEnd">
                                <input type="checkbox" name="createInListEnd" id="createInListEnd" value="1" />
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure501 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments500 = array();
$arguments500['key'] = NULL;
$arguments500['id'] = NULL;
$arguments500['default'] = NULL;
$arguments500['arguments'] = NULL;
$arguments500['extensionName'] = NULL;
$arguments500['languageKey'] = NULL;
$arguments500['alternativeLanguageKeys'] = NULL;
$arguments500['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:listEnd';

$output463 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments500, $renderChildrenClosure501, $renderingContext)]);

$output463 .= '
                            </label>
                        </div>
                        <div class="checkbox">
                            <label for="hidePages">
                                <input type="checkbox" name="hidePages" id="hidePages" value="1" />
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure503 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments502 = array();
$arguments502['key'] = NULL;
$arguments502['id'] = NULL;
$arguments502['default'] = NULL;
$arguments502['arguments'] = NULL;
$arguments502['extensionName'] = NULL;
$arguments502['languageKey'] = NULL;
$arguments502['alternativeLanguageKeys'] = NULL;
$arguments502['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:hidePages';

$output463 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments502, $renderChildrenClosure503, $renderingContext)]);

$output463 .= '
                            </label>
                        </div>
                        <div class="checkbox">
                            <label for="hidePagesInMenus">
                                <input type="checkbox" name="hidePagesInMenus" id="hidePagesInMenus" value="1" />
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure505 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments504 = array();
$arguments504['key'] = NULL;
$arguments504['id'] = NULL;
$arguments504['default'] = NULL;
$arguments504['arguments'] = NULL;
$arguments504['extensionName'] = NULL;
$arguments504['languageKey'] = NULL;
$arguments504['alternativeLanguageKeys'] = NULL;
$arguments504['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:hidePagesInMenus';

$output463 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments504, $renderChildrenClosure505, $renderingContext)]);

$output463 .= '
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <input
                            class="btn btn-default"
                            type="submit"
                            name="create"
                            value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure507 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments506 = array();
$arguments506['key'] = NULL;
$arguments506['id'] = NULL;
$arguments506['default'] = NULL;
$arguments506['arguments'] = NULL;
$arguments506['extensionName'] = NULL;
$arguments506['languageKey'] = NULL;
$arguments506['alternativeLanguageKeys'] = NULL;
$arguments506['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:create';

$output463 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments506, $renderChildrenClosure507, $renderingContext)]);

$output463 .= '"
                        />
                        <input
                            class="btn btn-default"
                            type="reset"
                            value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure509 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments508 = array();
$arguments508['key'] = NULL;
$arguments508['id'] = NULL;
$arguments508['default'] = NULL;
$arguments508['arguments'] = NULL;
$arguments508['extensionName'] = NULL;
$arguments508['languageKey'] = NULL;
$arguments508['alternativeLanguageKeys'] = NULL;
$arguments508['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:reset';

$output463 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments508, $renderChildrenClosure509, $renderingContext)]);

$output463 .= '"
                        />
                    </div>
                </form>
            ';
return $output463;
};
$arguments461 = array();
$arguments461['if'] = NULL;

$output400 .= '';

$output400 .= '
        ';
return $output400;
};
$arguments290 = array();
$arguments290['then'] = NULL;
$arguments290['else'] = NULL;
$arguments290['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array397 = array();
$array398 = array (
);$array397['0'] = $renderingContext->getVariableProvider()->getByPath('hasNewPagesData', $array398);

$expression399 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments290['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression399(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array397)
					),
					$renderingContext
				);
$arguments290['__thenClosure'] = function() use ($renderingContext, $self) {
$output292 = '';

$output292 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure294 = function() use ($renderingContext, $self) {
$output312 = '';

$output312 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure314 = function() use ($renderingContext, $self) {
$output315 = '';

$output315 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure317 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments316 = array();
$arguments316['message'] = NULL;
$arguments316['title'] = NULL;
$arguments316['state'] = -2;
$arguments316['iconName'] = NULL;
$arguments316['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure319 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments318 = array();
$arguments318['key'] = NULL;
$arguments318['id'] = NULL;
$arguments318['default'] = NULL;
$arguments318['arguments'] = NULL;
$arguments318['extensionName'] = NULL;
$arguments318['languageKey'] = NULL;
$arguments318['alternativeLanguageKeys'] = NULL;
$arguments318['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:pagesCreated.title';
$arguments316['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments318, $renderChildrenClosure319, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure321 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments320 = array();
$arguments320['key'] = NULL;
$arguments320['id'] = NULL;
$arguments320['default'] = NULL;
$arguments320['arguments'] = NULL;
$arguments320['extensionName'] = NULL;
$arguments320['languageKey'] = NULL;
$arguments320['alternativeLanguageKeys'] = NULL;
$arguments320['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:pagesCreated.message';
$arguments316['message'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments320, $renderChildrenClosure321, $renderingContext)]);
$arguments316['state'] = -1;
$renderChildrenClosure317 = ($arguments316['message'] !== null) ? function() use ($arguments316) { return $arguments316['message']; } : $renderChildrenClosure317;
$output315 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments316, $renderChildrenClosure317, $renderingContext);

$output315 .= '
                    ';
return $output315;
};
$arguments313 = array();

$output312 .= '';

$output312 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure323 = function() use ($renderingContext, $self) {
$output324 = '';

$output324 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure326 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments325 = array();
$arguments325['message'] = NULL;
$arguments325['title'] = NULL;
$arguments325['state'] = -2;
$arguments325['iconName'] = NULL;
$arguments325['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure328 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments327 = array();
$arguments327['key'] = NULL;
$arguments327['id'] = NULL;
$arguments327['default'] = NULL;
$arguments327['arguments'] = NULL;
$arguments327['extensionName'] = NULL;
$arguments327['languageKey'] = NULL;
$arguments327['alternativeLanguageKeys'] = NULL;
$arguments327['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:noPagesCreated.title';
$arguments325['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments327, $renderChildrenClosure328, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure330 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments329 = array();
$arguments329['key'] = NULL;
$arguments329['id'] = NULL;
$arguments329['default'] = NULL;
$arguments329['arguments'] = NULL;
$arguments329['extensionName'] = NULL;
$arguments329['languageKey'] = NULL;
$arguments329['alternativeLanguageKeys'] = NULL;
$arguments329['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:noPagesCreated.message';
$arguments325['message'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments329, $renderChildrenClosure330, $renderingContext)]);
$arguments325['state'] = 1;
$renderChildrenClosure326 = ($arguments325['message'] !== null) ? function() use ($arguments325) { return $arguments325['message']; } : $renderChildrenClosure326;
$output324 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments325, $renderChildrenClosure326, $renderingContext);

$output324 .= '
                    ';
return $output324;
};
$arguments322 = array();
$arguments322['if'] = NULL;

$output312 .= '';

$output312 .= '
                ';
return $output312;
};
$arguments293 = array();
$arguments293['then'] = NULL;
$arguments293['else'] = NULL;
$arguments293['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array309 = array();
$array310 = array (
);$array309['0'] = $renderingContext->getVariableProvider()->getByPath('pagesCreated', $array310);

$expression311 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments293['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression311(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array309)
					),
					$renderingContext
				);
$arguments293['__thenClosure'] = function() use ($renderingContext, $self) {
$output295 = '';

$output295 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure297 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments296 = array();
$arguments296['message'] = NULL;
$arguments296['title'] = NULL;
$arguments296['state'] = -2;
$arguments296['iconName'] = NULL;
$arguments296['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure299 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments298 = array();
$arguments298['key'] = NULL;
$arguments298['id'] = NULL;
$arguments298['default'] = NULL;
$arguments298['arguments'] = NULL;
$arguments298['extensionName'] = NULL;
$arguments298['languageKey'] = NULL;
$arguments298['alternativeLanguageKeys'] = NULL;
$arguments298['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:pagesCreated.title';
$arguments296['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments298, $renderChildrenClosure299, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure301 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments300 = array();
$arguments300['key'] = NULL;
$arguments300['id'] = NULL;
$arguments300['default'] = NULL;
$arguments300['arguments'] = NULL;
$arguments300['extensionName'] = NULL;
$arguments300['languageKey'] = NULL;
$arguments300['alternativeLanguageKeys'] = NULL;
$arguments300['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:pagesCreated.message';
$arguments296['message'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments300, $renderChildrenClosure301, $renderingContext)]);
$arguments296['state'] = -1;
$renderChildrenClosure297 = ($arguments296['message'] !== null) ? function() use ($arguments296) { return $arguments296['message']; } : $renderChildrenClosure297;
$output295 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments296, $renderChildrenClosure297, $renderingContext);

$output295 .= '
                    ';
return $output295;
};
$arguments293['__elseClosures'][] = function() use ($renderingContext, $self) {
$output302 = '';

$output302 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure304 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments303 = array();
$arguments303['message'] = NULL;
$arguments303['title'] = NULL;
$arguments303['state'] = -2;
$arguments303['iconName'] = NULL;
$arguments303['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure306 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments305 = array();
$arguments305['key'] = NULL;
$arguments305['id'] = NULL;
$arguments305['default'] = NULL;
$arguments305['arguments'] = NULL;
$arguments305['extensionName'] = NULL;
$arguments305['languageKey'] = NULL;
$arguments305['alternativeLanguageKeys'] = NULL;
$arguments305['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:noPagesCreated.title';
$arguments303['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments305, $renderChildrenClosure306, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure308 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments307 = array();
$arguments307['key'] = NULL;
$arguments307['id'] = NULL;
$arguments307['default'] = NULL;
$arguments307['arguments'] = NULL;
$arguments307['extensionName'] = NULL;
$arguments307['languageKey'] = NULL;
$arguments307['alternativeLanguageKeys'] = NULL;
$arguments307['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:noPagesCreated.message';
$arguments303['message'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments307, $renderChildrenClosure308, $renderingContext)]);
$arguments303['state'] = 1;
$renderChildrenClosure304 = ($arguments303['message'] !== null) ? function() use ($arguments303) { return $arguments303['message']; } : $renderChildrenClosure304;
$output302 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments303, $renderChildrenClosure304, $renderingContext);

$output302 .= '
                    ';
return $output302;
};

$output292 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments293, $renderChildrenClosure294, $renderingContext);

$output292 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure332 = function() use ($renderingContext, $self) {
$output336 = '';

$output336 .= '
                    <div class="form-group">
                        <h2>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure338 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments337 = array();
$arguments337['key'] = NULL;
$arguments337['id'] = NULL;
$arguments337['default'] = NULL;
$arguments337['arguments'] = NULL;
$arguments337['extensionName'] = NULL;
$arguments337['languageKey'] = NULL;
$arguments337['alternativeLanguageKeys'] = NULL;
$arguments337['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:newSubPages';

$output336 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments337, $renderChildrenClosure338, $renderingContext)]);

$output336 .= '
                        </h2>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure340 = function() use ($renderingContext, $self) {
$output342 = '';

$output342 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure344 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments343 = array();
$arguments343['table'] = NULL;
$arguments343['row'] = NULL;
$arguments343['size'] = 'small';
$arguments343['alternativeMarkupIdentifier'] = NULL;
$arguments343['table'] = 'pages';
$array345 = array (
);$arguments343['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array345);

$output342 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments343, $renderChildrenClosure344, $renderingContext);

$output342 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure347 = function() use ($renderingContext, $self) {
$array349 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array349)]);
};
$arguments346 = array();
$arguments346['maxCharacters'] = NULL;
$arguments346['append'] = '&hellip;';
$arguments346['respectWordBoundaries'] = true;
$arguments346['respectHtml'] = true;
$array348 = array (
);$arguments346['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxTitleLength', $array348);

$output342 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments346, $renderChildrenClosure347, $renderingContext);

$output342 .= '
                            <br />
                        ';
return $output342;
};
$arguments339 = array();
$arguments339['each'] = NULL;
$arguments339['as'] = NULL;
$arguments339['key'] = NULL;
$arguments339['reverse'] = false;
$arguments339['iteration'] = NULL;
$array341 = array (
);$arguments339['each'] = $renderingContext->getVariableProvider()->getByPath('visiblePages', $array341);
$arguments339['as'] = 'page';

$output336 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments339, $renderChildrenClosure340, $renderingContext);

$output336 .= '
                    </div>
                ';
return $output336;
};
$arguments331 = array();
$arguments331['then'] = NULL;
$arguments331['else'] = NULL;
$arguments331['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array333 = array();
$array334 = array (
);$array333['0'] = $renderingContext->getVariableProvider()->getByPath('visiblePages', $array334);

$expression335 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments331['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression335(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array333)
					),
					$renderingContext
				);
$arguments331['__thenClosure'] = $renderChildrenClosure332;

$output292 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments331, $renderChildrenClosure332, $renderingContext);

$output292 .= '
            ';
return $output292;
};
$arguments290['__elseClosures'][] = function() use ($renderingContext, $self) {
$output350 = '';

$output350 .= '
                <div class="t3js-newmultiplepages-newlinetemplate" style="display:none">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure352 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments351 = array();
$arguments351['section'] = NULL;
$arguments351['partial'] = NULL;
$arguments351['delegate'] = NULL;
$arguments351['renderable'] = NULL;
$arguments351['arguments'] = array (
);
$arguments351['optional'] = false;
$arguments351['default'] = NULL;
$arguments351['contentAs'] = NULL;
$arguments351['debug'] = true;
$arguments351['section'] = 'FormLine';
// Rendering Array
$array353 = array();
// Rendering Array
$array354 = array();
$array354['index'] = '[0]';
$array354['label'] = '[1]';
$array355 = array (
);$array354['pageTypes'] = $renderingContext->getVariableProvider()->getByPath('pageTypes', $array355);
$array353['line'] = $array354;
$arguments351['arguments'] = $array353;

$output350 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments351, $renderChildrenClosure352, $renderingContext);

$output350 .= '
                </div>

                <form action="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure357 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments356 = array();
$arguments356['route'] = NULL;
$arguments356['arguments'] = array (
);
$arguments356['query'] = NULL;
$arguments356['currentUrlParameterName'] = NULL;
$arguments356['route'] = 'pages_new';
// Rendering Array
$array358 = array();
$array359 = array (
);$array358['id'] = $renderingContext->getVariableProvider()->getByPath('pageUid', $array359);
$arguments356['arguments'] = $array358;

$output350 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments356, $renderChildrenClosure357, $renderingContext)]);

$output350 .= '" method="post">
                    <div class="form-group t3js-newmultiplepages-container">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure361 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments360 = array();
$arguments360['section'] = NULL;
$arguments360['partial'] = NULL;
$arguments360['delegate'] = NULL;
$arguments360['renderable'] = NULL;
$arguments360['arguments'] = array (
);
$arguments360['optional'] = false;
$arguments360['default'] = NULL;
$arguments360['contentAs'] = NULL;
$arguments360['debug'] = true;
$arguments360['section'] = 'FormLine';
// Rendering Array
$array362 = array();
// Rendering Array
$array363 = array();
$array363['index'] = 0;
$array363['label'] = 1;
$array364 = array (
);$array363['pageTypes'] = $renderingContext->getVariableProvider()->getByPath('pageTypes', $array364);
$array362['line'] = $array363;
$arguments360['arguments'] = $array362;

$output350 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments360, $renderChildrenClosure361, $renderingContext);

$output350 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure366 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments365 = array();
$arguments365['section'] = NULL;
$arguments365['partial'] = NULL;
$arguments365['delegate'] = NULL;
$arguments365['renderable'] = NULL;
$arguments365['arguments'] = array (
);
$arguments365['optional'] = false;
$arguments365['default'] = NULL;
$arguments365['contentAs'] = NULL;
$arguments365['debug'] = true;
$arguments365['section'] = 'FormLine';
// Rendering Array
$array367 = array();
// Rendering Array
$array368 = array();
$array368['index'] = 1;
$array368['label'] = 2;
$array369 = array (
);$array368['pageTypes'] = $renderingContext->getVariableProvider()->getByPath('pageTypes', $array369);
$array367['line'] = $array368;
$arguments365['arguments'] = $array367;

$output350 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments365, $renderChildrenClosure366, $renderingContext);

$output350 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure371 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments370 = array();
$arguments370['section'] = NULL;
$arguments370['partial'] = NULL;
$arguments370['delegate'] = NULL;
$arguments370['renderable'] = NULL;
$arguments370['arguments'] = array (
);
$arguments370['optional'] = false;
$arguments370['default'] = NULL;
$arguments370['contentAs'] = NULL;
$arguments370['debug'] = true;
$arguments370['section'] = 'FormLine';
// Rendering Array
$array372 = array();
// Rendering Array
$array373 = array();
$array373['index'] = 2;
$array373['label'] = 3;
$array374 = array (
);$array373['pageTypes'] = $renderingContext->getVariableProvider()->getByPath('pageTypes', $array374);
$array372['line'] = $array373;
$arguments370['arguments'] = $array372;

$output350 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments370, $renderChildrenClosure371, $renderingContext);

$output350 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure376 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments375 = array();
$arguments375['section'] = NULL;
$arguments375['partial'] = NULL;
$arguments375['delegate'] = NULL;
$arguments375['renderable'] = NULL;
$arguments375['arguments'] = array (
);
$arguments375['optional'] = false;
$arguments375['default'] = NULL;
$arguments375['contentAs'] = NULL;
$arguments375['debug'] = true;
$arguments375['section'] = 'FormLine';
// Rendering Array
$array377 = array();
// Rendering Array
$array378 = array();
$array378['index'] = 3;
$array378['label'] = 4;
$array379 = array (
);$array378['pageTypes'] = $renderingContext->getVariableProvider()->getByPath('pageTypes', $array379);
$array377['line'] = $array378;
$arguments375['arguments'] = $array377;

$output350 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments375, $renderChildrenClosure376, $renderingContext);

$output350 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure381 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments380 = array();
$arguments380['section'] = NULL;
$arguments380['partial'] = NULL;
$arguments380['delegate'] = NULL;
$arguments380['renderable'] = NULL;
$arguments380['arguments'] = array (
);
$arguments380['optional'] = false;
$arguments380['default'] = NULL;
$arguments380['contentAs'] = NULL;
$arguments380['debug'] = true;
$arguments380['section'] = 'FormLine';
// Rendering Array
$array382 = array();
// Rendering Array
$array383 = array();
$array383['index'] = 4;
$array383['label'] = 5;
$array384 = array (
);$array383['pageTypes'] = $renderingContext->getVariableProvider()->getByPath('pageTypes', $array384);
$array382['line'] = $array383;
$arguments380['arguments'] = $array382;

$output350 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments380, $renderChildrenClosure381, $renderingContext);

$output350 .= '
                    </div>

                    <div class="form-group">
                        <input
                            class="btn btn-default t3js-newmultiplepages-createnewfields"
                            type="button"
                            value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure386 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments385 = array();
$arguments385['key'] = NULL;
$arguments385['id'] = NULL;
$arguments385['default'] = NULL;
$arguments385['arguments'] = NULL;
$arguments385['extensionName'] = NULL;
$arguments385['languageKey'] = NULL;
$arguments385['alternativeLanguageKeys'] = NULL;
$arguments385['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:addMoreLines';

$output350 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments385, $renderChildrenClosure386, $renderingContext)]);

$output350 .= '"
                        />
                    </div>

                    <div class="form-group">
                        <div class="checkbox">
                            <label for="createInListEnd">
                                <input type="checkbox" name="createInListEnd" id="createInListEnd" value="1" />
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure388 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments387 = array();
$arguments387['key'] = NULL;
$arguments387['id'] = NULL;
$arguments387['default'] = NULL;
$arguments387['arguments'] = NULL;
$arguments387['extensionName'] = NULL;
$arguments387['languageKey'] = NULL;
$arguments387['alternativeLanguageKeys'] = NULL;
$arguments387['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:listEnd';

$output350 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments387, $renderChildrenClosure388, $renderingContext)]);

$output350 .= '
                            </label>
                        </div>
                        <div class="checkbox">
                            <label for="hidePages">
                                <input type="checkbox" name="hidePages" id="hidePages" value="1" />
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure390 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments389 = array();
$arguments389['key'] = NULL;
$arguments389['id'] = NULL;
$arguments389['default'] = NULL;
$arguments389['arguments'] = NULL;
$arguments389['extensionName'] = NULL;
$arguments389['languageKey'] = NULL;
$arguments389['alternativeLanguageKeys'] = NULL;
$arguments389['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:hidePages';

$output350 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments389, $renderChildrenClosure390, $renderingContext)]);

$output350 .= '
                            </label>
                        </div>
                        <div class="checkbox">
                            <label for="hidePagesInMenus">
                                <input type="checkbox" name="hidePagesInMenus" id="hidePagesInMenus" value="1" />
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure392 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments391 = array();
$arguments391['key'] = NULL;
$arguments391['id'] = NULL;
$arguments391['default'] = NULL;
$arguments391['arguments'] = NULL;
$arguments391['extensionName'] = NULL;
$arguments391['languageKey'] = NULL;
$arguments391['alternativeLanguageKeys'] = NULL;
$arguments391['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:hidePagesInMenus';

$output350 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments391, $renderChildrenClosure392, $renderingContext)]);

$output350 .= '
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <input
                            class="btn btn-default"
                            type="submit"
                            name="create"
                            value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure394 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments393 = array();
$arguments393['key'] = NULL;
$arguments393['id'] = NULL;
$arguments393['default'] = NULL;
$arguments393['arguments'] = NULL;
$arguments393['extensionName'] = NULL;
$arguments393['languageKey'] = NULL;
$arguments393['alternativeLanguageKeys'] = NULL;
$arguments393['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:create';

$output350 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments393, $renderChildrenClosure394, $renderingContext)]);

$output350 .= '"
                        />
                        <input
                            class="btn btn-default"
                            type="reset"
                            value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure396 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments395 = array();
$arguments395['key'] = NULL;
$arguments395['id'] = NULL;
$arguments395['default'] = NULL;
$arguments395['arguments'] = NULL;
$arguments395['extensionName'] = NULL;
$arguments395['languageKey'] = NULL;
$arguments395['alternativeLanguageKeys'] = NULL;
$arguments395['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:reset';

$output350 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments395, $renderChildrenClosure396, $renderingContext)]);

$output350 .= '"
                        />
                    </div>
                </form>
            ';
return $output350;
};

$output289 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments290, $renderChildrenClosure291, $renderingContext);

$output289 .= '
    ';
return $output289;
};
$arguments287 = array();
$arguments287['if'] = NULL;

$output277 .= '';

$output277 .= '
';
return $output277;
};
$arguments44 = array();
$arguments44['then'] = NULL;
$arguments44['else'] = NULL;
$arguments44['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array274 = array();
$array274['0'] = '!';
$array275 = array (
);$array274['1'] = $renderingContext->getVariableProvider()->getByPath('canCreateNew', $array275);

$expression276 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments44['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression276(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array274)
					),
					$renderingContext
				);
$arguments44['__thenClosure'] = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['message'] = NULL;
$arguments47['title'] = NULL;
$arguments47['state'] = -2;
$arguments47['iconName'] = NULL;
$arguments47['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments49 = array();
$arguments49['key'] = NULL;
$arguments49['id'] = NULL;
$arguments49['default'] = NULL;
$arguments49['arguments'] = NULL;
$arguments49['extensionName'] = NULL;
$arguments49['languageKey'] = NULL;
$arguments49['alternativeLanguageKeys'] = NULL;
$arguments49['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:canNotCreateNew.title';
$arguments47['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments51 = array();
$arguments51['key'] = NULL;
$arguments51['id'] = NULL;
$arguments51['default'] = NULL;
$arguments51['arguments'] = NULL;
$arguments51['extensionName'] = NULL;
$arguments51['languageKey'] = NULL;
$arguments51['alternativeLanguageKeys'] = NULL;
$arguments51['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:canNotCreateNew.message';
$arguments47['message'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext)]);
$arguments47['state'] = -1;
$renderChildrenClosure48 = ($arguments47['message'] !== null) ? function() use ($arguments47) { return $arguments47['message']; } : $renderChildrenClosure48;
$output46 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output46 .= '
    ';
return $output46;
};
$arguments44['__elseClosures'][] = function() use ($renderingContext, $self) {
$output53 = '';

$output53 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$output164 = '';

$output164 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
$output167 = '';

$output167 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
$output187 = '';

$output187 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
$output190 = '';

$output190 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments191 = array();
$arguments191['message'] = NULL;
$arguments191['title'] = NULL;
$arguments191['state'] = -2;
$arguments191['iconName'] = NULL;
$arguments191['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments193 = array();
$arguments193['key'] = NULL;
$arguments193['id'] = NULL;
$arguments193['default'] = NULL;
$arguments193['arguments'] = NULL;
$arguments193['extensionName'] = NULL;
$arguments193['languageKey'] = NULL;
$arguments193['alternativeLanguageKeys'] = NULL;
$arguments193['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:pagesCreated.title';
$arguments191['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments195 = array();
$arguments195['key'] = NULL;
$arguments195['id'] = NULL;
$arguments195['default'] = NULL;
$arguments195['arguments'] = NULL;
$arguments195['extensionName'] = NULL;
$arguments195['languageKey'] = NULL;
$arguments195['alternativeLanguageKeys'] = NULL;
$arguments195['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:pagesCreated.message';
$arguments191['message'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext)]);
$arguments191['state'] = -1;
$renderChildrenClosure192 = ($arguments191['message'] !== null) ? function() use ($arguments191) { return $arguments191['message']; } : $renderChildrenClosure192;
$output190 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext);

$output190 .= '
                    ';
return $output190;
};
$arguments188 = array();

$output187 .= '';

$output187 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
$output199 = '';

$output199 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure201 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments200 = array();
$arguments200['message'] = NULL;
$arguments200['title'] = NULL;
$arguments200['state'] = -2;
$arguments200['iconName'] = NULL;
$arguments200['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure203 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments202 = array();
$arguments202['key'] = NULL;
$arguments202['id'] = NULL;
$arguments202['default'] = NULL;
$arguments202['arguments'] = NULL;
$arguments202['extensionName'] = NULL;
$arguments202['languageKey'] = NULL;
$arguments202['alternativeLanguageKeys'] = NULL;
$arguments202['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:noPagesCreated.title';
$arguments200['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments204 = array();
$arguments204['key'] = NULL;
$arguments204['id'] = NULL;
$arguments204['default'] = NULL;
$arguments204['arguments'] = NULL;
$arguments204['extensionName'] = NULL;
$arguments204['languageKey'] = NULL;
$arguments204['alternativeLanguageKeys'] = NULL;
$arguments204['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:noPagesCreated.message';
$arguments200['message'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments204, $renderChildrenClosure205, $renderingContext)]);
$arguments200['state'] = 1;
$renderChildrenClosure201 = ($arguments200['message'] !== null) ? function() use ($arguments200) { return $arguments200['message']; } : $renderChildrenClosure201;
$output199 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments200, $renderChildrenClosure201, $renderingContext);

$output199 .= '
                    ';
return $output199;
};
$arguments197 = array();
$arguments197['if'] = NULL;

$output187 .= '';

$output187 .= '
                ';
return $output187;
};
$arguments168 = array();
$arguments168['then'] = NULL;
$arguments168['else'] = NULL;
$arguments168['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array184 = array();
$array185 = array (
);$array184['0'] = $renderingContext->getVariableProvider()->getByPath('pagesCreated', $array185);

$expression186 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments168['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression186(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array184)
					),
					$renderingContext
				);
$arguments168['__thenClosure'] = function() use ($renderingContext, $self) {
$output170 = '';

$output170 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments171 = array();
$arguments171['message'] = NULL;
$arguments171['title'] = NULL;
$arguments171['state'] = -2;
$arguments171['iconName'] = NULL;
$arguments171['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments173 = array();
$arguments173['key'] = NULL;
$arguments173['id'] = NULL;
$arguments173['default'] = NULL;
$arguments173['arguments'] = NULL;
$arguments173['extensionName'] = NULL;
$arguments173['languageKey'] = NULL;
$arguments173['alternativeLanguageKeys'] = NULL;
$arguments173['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:pagesCreated.title';
$arguments171['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments173, $renderChildrenClosure174, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments175 = array();
$arguments175['key'] = NULL;
$arguments175['id'] = NULL;
$arguments175['default'] = NULL;
$arguments175['arguments'] = NULL;
$arguments175['extensionName'] = NULL;
$arguments175['languageKey'] = NULL;
$arguments175['alternativeLanguageKeys'] = NULL;
$arguments175['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:pagesCreated.message';
$arguments171['message'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments175, $renderChildrenClosure176, $renderingContext)]);
$arguments171['state'] = -1;
$renderChildrenClosure172 = ($arguments171['message'] !== null) ? function() use ($arguments171) { return $arguments171['message']; } : $renderChildrenClosure172;
$output170 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext);

$output170 .= '
                    ';
return $output170;
};
$arguments168['__elseClosures'][] = function() use ($renderingContext, $self) {
$output177 = '';

$output177 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure179 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments178 = array();
$arguments178['message'] = NULL;
$arguments178['title'] = NULL;
$arguments178['state'] = -2;
$arguments178['iconName'] = NULL;
$arguments178['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments180 = array();
$arguments180['key'] = NULL;
$arguments180['id'] = NULL;
$arguments180['default'] = NULL;
$arguments180['arguments'] = NULL;
$arguments180['extensionName'] = NULL;
$arguments180['languageKey'] = NULL;
$arguments180['alternativeLanguageKeys'] = NULL;
$arguments180['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:noPagesCreated.title';
$arguments178['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments182 = array();
$arguments182['key'] = NULL;
$arguments182['id'] = NULL;
$arguments182['default'] = NULL;
$arguments182['arguments'] = NULL;
$arguments182['extensionName'] = NULL;
$arguments182['languageKey'] = NULL;
$arguments182['alternativeLanguageKeys'] = NULL;
$arguments182['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:noPagesCreated.message';
$arguments178['message'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext)]);
$arguments178['state'] = 1;
$renderChildrenClosure179 = ($arguments178['message'] !== null) ? function() use ($arguments178) { return $arguments178['message']; } : $renderChildrenClosure179;
$output177 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments178, $renderChildrenClosure179, $renderingContext);

$output177 .= '
                    ';
return $output177;
};

$output167 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext);

$output167 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
$output211 = '';

$output211 .= '
                    <div class="form-group">
                        <h2>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments212 = array();
$arguments212['key'] = NULL;
$arguments212['id'] = NULL;
$arguments212['default'] = NULL;
$arguments212['arguments'] = NULL;
$arguments212['extensionName'] = NULL;
$arguments212['languageKey'] = NULL;
$arguments212['alternativeLanguageKeys'] = NULL;
$arguments212['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:newSubPages';

$output211 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments212, $renderChildrenClosure213, $renderingContext)]);

$output211 .= '
                        </h2>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure215 = function() use ($renderingContext, $self) {
$output217 = '';

$output217 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments218 = array();
$arguments218['table'] = NULL;
$arguments218['row'] = NULL;
$arguments218['size'] = 'small';
$arguments218['alternativeMarkupIdentifier'] = NULL;
$arguments218['table'] = 'pages';
$array220 = array (
);$arguments218['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array220);

$output217 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments218, $renderChildrenClosure219, $renderingContext);

$output217 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
$array224 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array224)]);
};
$arguments221 = array();
$arguments221['maxCharacters'] = NULL;
$arguments221['append'] = '&hellip;';
$arguments221['respectWordBoundaries'] = true;
$arguments221['respectHtml'] = true;
$array223 = array (
);$arguments221['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxTitleLength', $array223);

$output217 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext);

$output217 .= '
                            <br />
                        ';
return $output217;
};
$arguments214 = array();
$arguments214['each'] = NULL;
$arguments214['as'] = NULL;
$arguments214['key'] = NULL;
$arguments214['reverse'] = false;
$arguments214['iteration'] = NULL;
$array216 = array (
);$arguments214['each'] = $renderingContext->getVariableProvider()->getByPath('visiblePages', $array216);
$arguments214['as'] = 'page';

$output211 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments214, $renderChildrenClosure215, $renderingContext);

$output211 .= '
                    </div>
                ';
return $output211;
};
$arguments206 = array();
$arguments206['then'] = NULL;
$arguments206['else'] = NULL;
$arguments206['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array208 = array();
$array209 = array (
);$array208['0'] = $renderingContext->getVariableProvider()->getByPath('visiblePages', $array209);

$expression210 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments206['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression210(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array208)
					),
					$renderingContext
				);
$arguments206['__thenClosure'] = $renderChildrenClosure207;

$output167 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext);

$output167 .= '
            ';
return $output167;
};
$arguments165 = array();

$output164 .= '';

$output164 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure226 = function() use ($renderingContext, $self) {
$output227 = '';

$output227 .= '
                <div class="t3js-newmultiplepages-newlinetemplate" style="display:none">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure229 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments228 = array();
$arguments228['section'] = NULL;
$arguments228['partial'] = NULL;
$arguments228['delegate'] = NULL;
$arguments228['renderable'] = NULL;
$arguments228['arguments'] = array (
);
$arguments228['optional'] = false;
$arguments228['default'] = NULL;
$arguments228['contentAs'] = NULL;
$arguments228['debug'] = true;
$arguments228['section'] = 'FormLine';
// Rendering Array
$array230 = array();
// Rendering Array
$array231 = array();
$array231['index'] = '[0]';
$array231['label'] = '[1]';
$array232 = array (
);$array231['pageTypes'] = $renderingContext->getVariableProvider()->getByPath('pageTypes', $array232);
$array230['line'] = $array231;
$arguments228['arguments'] = $array230;

$output227 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments228, $renderChildrenClosure229, $renderingContext);

$output227 .= '
                </div>

                <form action="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments233 = array();
$arguments233['route'] = NULL;
$arguments233['arguments'] = array (
);
$arguments233['query'] = NULL;
$arguments233['currentUrlParameterName'] = NULL;
$arguments233['route'] = 'pages_new';
// Rendering Array
$array235 = array();
$array236 = array (
);$array235['id'] = $renderingContext->getVariableProvider()->getByPath('pageUid', $array236);
$arguments233['arguments'] = $array235;

$output227 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext)]);

$output227 .= '" method="post">
                    <div class="form-group t3js-newmultiplepages-container">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments237 = array();
$arguments237['section'] = NULL;
$arguments237['partial'] = NULL;
$arguments237['delegate'] = NULL;
$arguments237['renderable'] = NULL;
$arguments237['arguments'] = array (
);
$arguments237['optional'] = false;
$arguments237['default'] = NULL;
$arguments237['contentAs'] = NULL;
$arguments237['debug'] = true;
$arguments237['section'] = 'FormLine';
// Rendering Array
$array239 = array();
// Rendering Array
$array240 = array();
$array240['index'] = 0;
$array240['label'] = 1;
$array241 = array (
);$array240['pageTypes'] = $renderingContext->getVariableProvider()->getByPath('pageTypes', $array241);
$array239['line'] = $array240;
$arguments237['arguments'] = $array239;

$output227 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext);

$output227 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure243 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments242 = array();
$arguments242['section'] = NULL;
$arguments242['partial'] = NULL;
$arguments242['delegate'] = NULL;
$arguments242['renderable'] = NULL;
$arguments242['arguments'] = array (
);
$arguments242['optional'] = false;
$arguments242['default'] = NULL;
$arguments242['contentAs'] = NULL;
$arguments242['debug'] = true;
$arguments242['section'] = 'FormLine';
// Rendering Array
$array244 = array();
// Rendering Array
$array245 = array();
$array245['index'] = 1;
$array245['label'] = 2;
$array246 = array (
);$array245['pageTypes'] = $renderingContext->getVariableProvider()->getByPath('pageTypes', $array246);
$array244['line'] = $array245;
$arguments242['arguments'] = $array244;

$output227 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments242, $renderChildrenClosure243, $renderingContext);

$output227 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure248 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments247 = array();
$arguments247['section'] = NULL;
$arguments247['partial'] = NULL;
$arguments247['delegate'] = NULL;
$arguments247['renderable'] = NULL;
$arguments247['arguments'] = array (
);
$arguments247['optional'] = false;
$arguments247['default'] = NULL;
$arguments247['contentAs'] = NULL;
$arguments247['debug'] = true;
$arguments247['section'] = 'FormLine';
// Rendering Array
$array249 = array();
// Rendering Array
$array250 = array();
$array250['index'] = 2;
$array250['label'] = 3;
$array251 = array (
);$array250['pageTypes'] = $renderingContext->getVariableProvider()->getByPath('pageTypes', $array251);
$array249['line'] = $array250;
$arguments247['arguments'] = $array249;

$output227 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments247, $renderChildrenClosure248, $renderingContext);

$output227 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure253 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments252 = array();
$arguments252['section'] = NULL;
$arguments252['partial'] = NULL;
$arguments252['delegate'] = NULL;
$arguments252['renderable'] = NULL;
$arguments252['arguments'] = array (
);
$arguments252['optional'] = false;
$arguments252['default'] = NULL;
$arguments252['contentAs'] = NULL;
$arguments252['debug'] = true;
$arguments252['section'] = 'FormLine';
// Rendering Array
$array254 = array();
// Rendering Array
$array255 = array();
$array255['index'] = 3;
$array255['label'] = 4;
$array256 = array (
);$array255['pageTypes'] = $renderingContext->getVariableProvider()->getByPath('pageTypes', $array256);
$array254['line'] = $array255;
$arguments252['arguments'] = $array254;

$output227 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments252, $renderChildrenClosure253, $renderingContext);

$output227 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure258 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments257 = array();
$arguments257['section'] = NULL;
$arguments257['partial'] = NULL;
$arguments257['delegate'] = NULL;
$arguments257['renderable'] = NULL;
$arguments257['arguments'] = array (
);
$arguments257['optional'] = false;
$arguments257['default'] = NULL;
$arguments257['contentAs'] = NULL;
$arguments257['debug'] = true;
$arguments257['section'] = 'FormLine';
// Rendering Array
$array259 = array();
// Rendering Array
$array260 = array();
$array260['index'] = 4;
$array260['label'] = 5;
$array261 = array (
);$array260['pageTypes'] = $renderingContext->getVariableProvider()->getByPath('pageTypes', $array261);
$array259['line'] = $array260;
$arguments257['arguments'] = $array259;

$output227 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments257, $renderChildrenClosure258, $renderingContext);

$output227 .= '
                    </div>

                    <div class="form-group">
                        <input
                            class="btn btn-default t3js-newmultiplepages-createnewfields"
                            type="button"
                            value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure263 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments262 = array();
$arguments262['key'] = NULL;
$arguments262['id'] = NULL;
$arguments262['default'] = NULL;
$arguments262['arguments'] = NULL;
$arguments262['extensionName'] = NULL;
$arguments262['languageKey'] = NULL;
$arguments262['alternativeLanguageKeys'] = NULL;
$arguments262['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:addMoreLines';

$output227 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments262, $renderChildrenClosure263, $renderingContext)]);

$output227 .= '"
                        />
                    </div>

                    <div class="form-group">
                        <div class="checkbox">
                            <label for="createInListEnd">
                                <input type="checkbox" name="createInListEnd" id="createInListEnd" value="1" />
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure265 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments264 = array();
$arguments264['key'] = NULL;
$arguments264['id'] = NULL;
$arguments264['default'] = NULL;
$arguments264['arguments'] = NULL;
$arguments264['extensionName'] = NULL;
$arguments264['languageKey'] = NULL;
$arguments264['alternativeLanguageKeys'] = NULL;
$arguments264['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:listEnd';

$output227 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments264, $renderChildrenClosure265, $renderingContext)]);

$output227 .= '
                            </label>
                        </div>
                        <div class="checkbox">
                            <label for="hidePages">
                                <input type="checkbox" name="hidePages" id="hidePages" value="1" />
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure267 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments266 = array();
$arguments266['key'] = NULL;
$arguments266['id'] = NULL;
$arguments266['default'] = NULL;
$arguments266['arguments'] = NULL;
$arguments266['extensionName'] = NULL;
$arguments266['languageKey'] = NULL;
$arguments266['alternativeLanguageKeys'] = NULL;
$arguments266['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:hidePages';

$output227 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments266, $renderChildrenClosure267, $renderingContext)]);

$output227 .= '
                            </label>
                        </div>
                        <div class="checkbox">
                            <label for="hidePagesInMenus">
                                <input type="checkbox" name="hidePagesInMenus" id="hidePagesInMenus" value="1" />
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure269 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments268 = array();
$arguments268['key'] = NULL;
$arguments268['id'] = NULL;
$arguments268['default'] = NULL;
$arguments268['arguments'] = NULL;
$arguments268['extensionName'] = NULL;
$arguments268['languageKey'] = NULL;
$arguments268['alternativeLanguageKeys'] = NULL;
$arguments268['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:hidePagesInMenus';

$output227 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments268, $renderChildrenClosure269, $renderingContext)]);

$output227 .= '
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <input
                            class="btn btn-default"
                            type="submit"
                            name="create"
                            value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure271 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments270 = array();
$arguments270['key'] = NULL;
$arguments270['id'] = NULL;
$arguments270['default'] = NULL;
$arguments270['arguments'] = NULL;
$arguments270['extensionName'] = NULL;
$arguments270['languageKey'] = NULL;
$arguments270['alternativeLanguageKeys'] = NULL;
$arguments270['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:create';

$output227 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments270, $renderChildrenClosure271, $renderingContext)]);

$output227 .= '"
                        />
                        <input
                            class="btn btn-default"
                            type="reset"
                            value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure273 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments272 = array();
$arguments272['key'] = NULL;
$arguments272['id'] = NULL;
$arguments272['default'] = NULL;
$arguments272['arguments'] = NULL;
$arguments272['extensionName'] = NULL;
$arguments272['languageKey'] = NULL;
$arguments272['alternativeLanguageKeys'] = NULL;
$arguments272['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:reset';

$output227 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments272, $renderChildrenClosure273, $renderingContext)]);

$output227 .= '"
                        />
                    </div>
                </form>
            ';
return $output227;
};
$arguments225 = array();
$arguments225['if'] = NULL;

$output164 .= '';

$output164 .= '
        ';
return $output164;
};
$arguments54 = array();
$arguments54['then'] = NULL;
$arguments54['else'] = NULL;
$arguments54['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array161 = array();
$array162 = array (
);$array161['0'] = $renderingContext->getVariableProvider()->getByPath('hasNewPagesData', $array162);

$expression163 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments54['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression163(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array161)
					),
					$renderingContext
				);
$arguments54['__thenClosure'] = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$output76 = '';

$output76 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$output79 = '';

$output79 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments80 = array();
$arguments80['message'] = NULL;
$arguments80['title'] = NULL;
$arguments80['state'] = -2;
$arguments80['iconName'] = NULL;
$arguments80['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments82 = array();
$arguments82['key'] = NULL;
$arguments82['id'] = NULL;
$arguments82['default'] = NULL;
$arguments82['arguments'] = NULL;
$arguments82['extensionName'] = NULL;
$arguments82['languageKey'] = NULL;
$arguments82['alternativeLanguageKeys'] = NULL;
$arguments82['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:pagesCreated.title';
$arguments80['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments84 = array();
$arguments84['key'] = NULL;
$arguments84['id'] = NULL;
$arguments84['default'] = NULL;
$arguments84['arguments'] = NULL;
$arguments84['extensionName'] = NULL;
$arguments84['languageKey'] = NULL;
$arguments84['alternativeLanguageKeys'] = NULL;
$arguments84['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:pagesCreated.message';
$arguments80['message'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext)]);
$arguments80['state'] = -1;
$renderChildrenClosure81 = ($arguments80['message'] !== null) ? function() use ($arguments80) { return $arguments80['message']; } : $renderChildrenClosure81;
$output79 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output79 .= '
                    ';
return $output79;
};
$arguments77 = array();

$output76 .= '';

$output76 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
$output88 = '';

$output88 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments89 = array();
$arguments89['message'] = NULL;
$arguments89['title'] = NULL;
$arguments89['state'] = -2;
$arguments89['iconName'] = NULL;
$arguments89['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments91 = array();
$arguments91['key'] = NULL;
$arguments91['id'] = NULL;
$arguments91['default'] = NULL;
$arguments91['arguments'] = NULL;
$arguments91['extensionName'] = NULL;
$arguments91['languageKey'] = NULL;
$arguments91['alternativeLanguageKeys'] = NULL;
$arguments91['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:noPagesCreated.title';
$arguments89['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments93 = array();
$arguments93['key'] = NULL;
$arguments93['id'] = NULL;
$arguments93['default'] = NULL;
$arguments93['arguments'] = NULL;
$arguments93['extensionName'] = NULL;
$arguments93['languageKey'] = NULL;
$arguments93['alternativeLanguageKeys'] = NULL;
$arguments93['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:noPagesCreated.message';
$arguments89['message'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext)]);
$arguments89['state'] = 1;
$renderChildrenClosure90 = ($arguments89['message'] !== null) ? function() use ($arguments89) { return $arguments89['message']; } : $renderChildrenClosure90;
$output88 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);

$output88 .= '
                    ';
return $output88;
};
$arguments86 = array();
$arguments86['if'] = NULL;

$output76 .= '';

$output76 .= '
                ';
return $output76;
};
$arguments57 = array();
$arguments57['then'] = NULL;
$arguments57['else'] = NULL;
$arguments57['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array73 = array();
$array74 = array (
);$array73['0'] = $renderingContext->getVariableProvider()->getByPath('pagesCreated', $array74);

$expression75 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments57['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression75(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array73)
					),
					$renderingContext
				);
$arguments57['__thenClosure'] = function() use ($renderingContext, $self) {
$output59 = '';

$output59 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments60 = array();
$arguments60['message'] = NULL;
$arguments60['title'] = NULL;
$arguments60['state'] = -2;
$arguments60['iconName'] = NULL;
$arguments60['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments62 = array();
$arguments62['key'] = NULL;
$arguments62['id'] = NULL;
$arguments62['default'] = NULL;
$arguments62['arguments'] = NULL;
$arguments62['extensionName'] = NULL;
$arguments62['languageKey'] = NULL;
$arguments62['alternativeLanguageKeys'] = NULL;
$arguments62['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:pagesCreated.title';
$arguments60['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments64 = array();
$arguments64['key'] = NULL;
$arguments64['id'] = NULL;
$arguments64['default'] = NULL;
$arguments64['arguments'] = NULL;
$arguments64['extensionName'] = NULL;
$arguments64['languageKey'] = NULL;
$arguments64['alternativeLanguageKeys'] = NULL;
$arguments64['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:pagesCreated.message';
$arguments60['message'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext)]);
$arguments60['state'] = -1;
$renderChildrenClosure61 = ($arguments60['message'] !== null) ? function() use ($arguments60) { return $arguments60['message']; } : $renderChildrenClosure61;
$output59 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output59 .= '
                    ';
return $output59;
};
$arguments57['__elseClosures'][] = function() use ($renderingContext, $self) {
$output66 = '';

$output66 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments67 = array();
$arguments67['message'] = NULL;
$arguments67['title'] = NULL;
$arguments67['state'] = -2;
$arguments67['iconName'] = NULL;
$arguments67['disableIcon'] = false;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments69 = array();
$arguments69['key'] = NULL;
$arguments69['id'] = NULL;
$arguments69['default'] = NULL;
$arguments69['arguments'] = NULL;
$arguments69['extensionName'] = NULL;
$arguments69['languageKey'] = NULL;
$arguments69['alternativeLanguageKeys'] = NULL;
$arguments69['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:noPagesCreated.title';
$arguments67['title'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments71 = array();
$arguments71['key'] = NULL;
$arguments71['id'] = NULL;
$arguments71['default'] = NULL;
$arguments71['arguments'] = NULL;
$arguments71['extensionName'] = NULL;
$arguments71['languageKey'] = NULL;
$arguments71['alternativeLanguageKeys'] = NULL;
$arguments71['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:noPagesCreated.message';
$arguments67['message'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext)]);
$arguments67['state'] = 1;
$renderChildrenClosure68 = ($arguments67['message'] !== null) ? function() use ($arguments67) { return $arguments67['message']; } : $renderChildrenClosure68;
$output66 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output66 .= '
                    ';
return $output66;
};

$output56 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output56 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$output100 = '';

$output100 .= '
                    <div class="form-group">
                        <h2>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments101 = array();
$arguments101['key'] = NULL;
$arguments101['id'] = NULL;
$arguments101['default'] = NULL;
$arguments101['arguments'] = NULL;
$arguments101['extensionName'] = NULL;
$arguments101['languageKey'] = NULL;
$arguments101['alternativeLanguageKeys'] = NULL;
$arguments101['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:newSubPages';

$output100 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext)]);

$output100 .= '
                        </h2>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments107 = array();
$arguments107['table'] = NULL;
$arguments107['row'] = NULL;
$arguments107['size'] = 'small';
$arguments107['alternativeMarkupIdentifier'] = NULL;
$arguments107['table'] = 'pages';
$array109 = array (
);$arguments107['row'] = $renderingContext->getVariableProvider()->getByPath('page', $array109);

$output106 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output106 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$array113 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title', $array113)]);
};
$arguments110 = array();
$arguments110['maxCharacters'] = NULL;
$arguments110['append'] = '&hellip;';
$arguments110['respectWordBoundaries'] = true;
$arguments110['respectHtml'] = true;
$array112 = array (
);$arguments110['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('maxTitleLength', $array112);

$output106 .= TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output106 .= '
                            <br />
                        ';
return $output106;
};
$arguments103 = array();
$arguments103['each'] = NULL;
$arguments103['as'] = NULL;
$arguments103['key'] = NULL;
$arguments103['reverse'] = false;
$arguments103['iteration'] = NULL;
$array105 = array (
);$arguments103['each'] = $renderingContext->getVariableProvider()->getByPath('visiblePages', $array105);
$arguments103['as'] = 'page';

$output100 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output100 .= '
                    </div>
                ';
return $output100;
};
$arguments95 = array();
$arguments95['then'] = NULL;
$arguments95['else'] = NULL;
$arguments95['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array97 = array();
$array98 = array (
);$array97['0'] = $renderingContext->getVariableProvider()->getByPath('visiblePages', $array98);

$expression99 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments95['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression99(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array97)
					),
					$renderingContext
				);
$arguments95['__thenClosure'] = $renderChildrenClosure96;

$output56 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output56 .= '
            ';
return $output56;
};
$arguments54['__elseClosures'][] = function() use ($renderingContext, $self) {
$output114 = '';

$output114 .= '
                <div class="t3js-newmultiplepages-newlinetemplate" style="display:none">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments115 = array();
$arguments115['section'] = NULL;
$arguments115['partial'] = NULL;
$arguments115['delegate'] = NULL;
$arguments115['renderable'] = NULL;
$arguments115['arguments'] = array (
);
$arguments115['optional'] = false;
$arguments115['default'] = NULL;
$arguments115['contentAs'] = NULL;
$arguments115['debug'] = true;
$arguments115['section'] = 'FormLine';
// Rendering Array
$array117 = array();
// Rendering Array
$array118 = array();
$array118['index'] = '[0]';
$array118['label'] = '[1]';
$array119 = array (
);$array118['pageTypes'] = $renderingContext->getVariableProvider()->getByPath('pageTypes', $array119);
$array117['line'] = $array118;
$arguments115['arguments'] = $array117;

$output114 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output114 .= '
                </div>

                <form action="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments120 = array();
$arguments120['route'] = NULL;
$arguments120['arguments'] = array (
);
$arguments120['query'] = NULL;
$arguments120['currentUrlParameterName'] = NULL;
$arguments120['route'] = 'pages_new';
// Rendering Array
$array122 = array();
$array123 = array (
);$array122['id'] = $renderingContext->getVariableProvider()->getByPath('pageUid', $array123);
$arguments120['arguments'] = $array122;

$output114 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext)]);

$output114 .= '" method="post">
                    <div class="form-group t3js-newmultiplepages-container">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments124 = array();
$arguments124['section'] = NULL;
$arguments124['partial'] = NULL;
$arguments124['delegate'] = NULL;
$arguments124['renderable'] = NULL;
$arguments124['arguments'] = array (
);
$arguments124['optional'] = false;
$arguments124['default'] = NULL;
$arguments124['contentAs'] = NULL;
$arguments124['debug'] = true;
$arguments124['section'] = 'FormLine';
// Rendering Array
$array126 = array();
// Rendering Array
$array127 = array();
$array127['index'] = 0;
$array127['label'] = 1;
$array128 = array (
);$array127['pageTypes'] = $renderingContext->getVariableProvider()->getByPath('pageTypes', $array128);
$array126['line'] = $array127;
$arguments124['arguments'] = $array126;

$output114 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);

$output114 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments129 = array();
$arguments129['section'] = NULL;
$arguments129['partial'] = NULL;
$arguments129['delegate'] = NULL;
$arguments129['renderable'] = NULL;
$arguments129['arguments'] = array (
);
$arguments129['optional'] = false;
$arguments129['default'] = NULL;
$arguments129['contentAs'] = NULL;
$arguments129['debug'] = true;
$arguments129['section'] = 'FormLine';
// Rendering Array
$array131 = array();
// Rendering Array
$array132 = array();
$array132['index'] = 1;
$array132['label'] = 2;
$array133 = array (
);$array132['pageTypes'] = $renderingContext->getVariableProvider()->getByPath('pageTypes', $array133);
$array131['line'] = $array132;
$arguments129['arguments'] = $array131;

$output114 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output114 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments134 = array();
$arguments134['section'] = NULL;
$arguments134['partial'] = NULL;
$arguments134['delegate'] = NULL;
$arguments134['renderable'] = NULL;
$arguments134['arguments'] = array (
);
$arguments134['optional'] = false;
$arguments134['default'] = NULL;
$arguments134['contentAs'] = NULL;
$arguments134['debug'] = true;
$arguments134['section'] = 'FormLine';
// Rendering Array
$array136 = array();
// Rendering Array
$array137 = array();
$array137['index'] = 2;
$array137['label'] = 3;
$array138 = array (
);$array137['pageTypes'] = $renderingContext->getVariableProvider()->getByPath('pageTypes', $array138);
$array136['line'] = $array137;
$arguments134['arguments'] = $array136;

$output114 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext);

$output114 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments139 = array();
$arguments139['section'] = NULL;
$arguments139['partial'] = NULL;
$arguments139['delegate'] = NULL;
$arguments139['renderable'] = NULL;
$arguments139['arguments'] = array (
);
$arguments139['optional'] = false;
$arguments139['default'] = NULL;
$arguments139['contentAs'] = NULL;
$arguments139['debug'] = true;
$arguments139['section'] = 'FormLine';
// Rendering Array
$array141 = array();
// Rendering Array
$array142 = array();
$array142['index'] = 3;
$array142['label'] = 4;
$array143 = array (
);$array142['pageTypes'] = $renderingContext->getVariableProvider()->getByPath('pageTypes', $array143);
$array141['line'] = $array142;
$arguments139['arguments'] = $array141;

$output114 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output114 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments144 = array();
$arguments144['section'] = NULL;
$arguments144['partial'] = NULL;
$arguments144['delegate'] = NULL;
$arguments144['renderable'] = NULL;
$arguments144['arguments'] = array (
);
$arguments144['optional'] = false;
$arguments144['default'] = NULL;
$arguments144['contentAs'] = NULL;
$arguments144['debug'] = true;
$arguments144['section'] = 'FormLine';
// Rendering Array
$array146 = array();
// Rendering Array
$array147 = array();
$array147['index'] = 4;
$array147['label'] = 5;
$array148 = array (
);$array147['pageTypes'] = $renderingContext->getVariableProvider()->getByPath('pageTypes', $array148);
$array146['line'] = $array147;
$arguments144['arguments'] = $array146;

$output114 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext);

$output114 .= '
                    </div>

                    <div class="form-group">
                        <input
                            class="btn btn-default t3js-newmultiplepages-createnewfields"
                            type="button"
                            value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments149 = array();
$arguments149['key'] = NULL;
$arguments149['id'] = NULL;
$arguments149['default'] = NULL;
$arguments149['arguments'] = NULL;
$arguments149['extensionName'] = NULL;
$arguments149['languageKey'] = NULL;
$arguments149['alternativeLanguageKeys'] = NULL;
$arguments149['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:addMoreLines';

$output114 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext)]);

$output114 .= '"
                        />
                    </div>

                    <div class="form-group">
                        <div class="checkbox">
                            <label for="createInListEnd">
                                <input type="checkbox" name="createInListEnd" id="createInListEnd" value="1" />
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments151 = array();
$arguments151['key'] = NULL;
$arguments151['id'] = NULL;
$arguments151['default'] = NULL;
$arguments151['arguments'] = NULL;
$arguments151['extensionName'] = NULL;
$arguments151['languageKey'] = NULL;
$arguments151['alternativeLanguageKeys'] = NULL;
$arguments151['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:listEnd';

$output114 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext)]);

$output114 .= '
                            </label>
                        </div>
                        <div class="checkbox">
                            <label for="hidePages">
                                <input type="checkbox" name="hidePages" id="hidePages" value="1" />
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments153 = array();
$arguments153['key'] = NULL;
$arguments153['id'] = NULL;
$arguments153['default'] = NULL;
$arguments153['arguments'] = NULL;
$arguments153['extensionName'] = NULL;
$arguments153['languageKey'] = NULL;
$arguments153['alternativeLanguageKeys'] = NULL;
$arguments153['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:hidePages';

$output114 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext)]);

$output114 .= '
                            </label>
                        </div>
                        <div class="checkbox">
                            <label for="hidePagesInMenus">
                                <input type="checkbox" name="hidePagesInMenus" id="hidePagesInMenus" value="1" />
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments155 = array();
$arguments155['key'] = NULL;
$arguments155['id'] = NULL;
$arguments155['default'] = NULL;
$arguments155['arguments'] = NULL;
$arguments155['extensionName'] = NULL;
$arguments155['languageKey'] = NULL;
$arguments155['alternativeLanguageKeys'] = NULL;
$arguments155['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:hidePagesInMenus';

$output114 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext)]);

$output114 .= '
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <input
                            class="btn btn-default"
                            type="submit"
                            name="create"
                            value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments157 = array();
$arguments157['key'] = NULL;
$arguments157['id'] = NULL;
$arguments157['default'] = NULL;
$arguments157['arguments'] = NULL;
$arguments157['extensionName'] = NULL;
$arguments157['languageKey'] = NULL;
$arguments157['alternativeLanguageKeys'] = NULL;
$arguments157['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:create';

$output114 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext)]);

$output114 .= '"
                        />
                        <input
                            class="btn btn-default"
                            type="reset"
                            value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments159 = array();
$arguments159['key'] = NULL;
$arguments159['id'] = NULL;
$arguments159['default'] = NULL;
$arguments159['arguments'] = NULL;
$arguments159['extensionName'] = NULL;
$arguments159['languageKey'] = NULL;
$arguments159['alternativeLanguageKeys'] = NULL;
$arguments159['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:reset';

$output114 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext)]);

$output114 .= '"
                        />
                    </div>
                </form>
            ';
return $output114;
};

$output53 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output53 .= '
    ';
return $output53;
};

$output38 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output38 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure511 = function() use ($renderingContext, $self) {
$output512 = '';

$output512 .= '
    <div class="form-section" id="form-line-';
$array513 = array (
);
$output512 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.index', $array513)]);

$output512 .= '">
        <div class="row">
            <div class="form-group col-xs-8">
                <label for="page_new_';
$array514 = array (
);
$output512 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.index', $array514)]);

$output512 .= '">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure516 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments515 = array();
$arguments515['key'] = NULL;
$arguments515['id'] = NULL;
$arguments515['default'] = NULL;
$arguments515['arguments'] = NULL;
$arguments515['extensionName'] = NULL;
$arguments515['languageKey'] = NULL;
$arguments515['alternativeLanguageKeys'] = NULL;
$arguments515['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_pages_new:newPage';

$output512 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments515, $renderChildrenClosure516, $renderingContext)]);

$output512 .= ' ';
$array517 = array (
);
$output512 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.label', $array517)]);

$output512 .= ':
                </label>
                <div class="form-control-wrap">
                    <input class="form-control" type="text" id="page_new_';
$array518 = array (
);
$output512 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.index', $array518)]);

$output512 .= '" name="pages[NEW';
$array519 = array (
);
$output512 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.index', $array519)]);

$output512 .= '][title]" placeholder="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure521 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments520 = array();
$arguments520['key'] = NULL;
$arguments520['id'] = NULL;
$arguments520['default'] = NULL;
$arguments520['arguments'] = NULL;
$arguments520['extensionName'] = NULL;
$arguments520['languageKey'] = NULL;
$arguments520['alternativeLanguageKeys'] = NULL;
$arguments520['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.title';

$output512 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments520, $renderChildrenClosure521, $renderingContext)]);

$output512 .= '" />
                </div>
            </div>
            <div class="form-group col-xs-4">
                <label for="page_new_select_';
$array522 = array (
);
$output512 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.index', $array522)]);

$output512 .= '">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure524 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments523 = array();
$arguments523['key'] = NULL;
$arguments523['id'] = NULL;
$arguments523['default'] = NULL;
$arguments523['arguments'] = NULL;
$arguments523['extensionName'] = NULL;
$arguments523['languageKey'] = NULL;
$arguments523['alternativeLanguageKeys'] = NULL;
$arguments523['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.type';

$output512 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments523, $renderChildrenClosure524, $renderingContext)]);

$output512 .= '
                </label>
                <div class="form-control-wrap">
                    <div class="input-group">
                        <div id="page_new_icon_';
$array525 = array (
);
$output512 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.index', $array525)]);

$output512 .= '" class="input-group-addon input-group-icon">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure527 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments526 = array();
$arguments526['table'] = NULL;
$arguments526['row'] = NULL;
$arguments526['size'] = 'small';
$arguments526['alternativeMarkupIdentifier'] = NULL;
$arguments526['table'] = 'pages';
// Rendering Array
$array528 = array();
$array528['id'] = 0;
$arguments526['row'] = $array528;

$output512 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments526, $renderChildrenClosure527, $renderingContext);

$output512 .= '
                        </div>
                        <select id="page_new_select_';
$array529 = array (
);
$output512 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.index', $array529)]);

$output512 .= '" class="form-control form-control-adapt t3js-newmultiplepages-select-doktype" name="pages[NEW';
$array530 = array (
);
$output512 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.index', $array530)]);

$output512 .= '][doktype]" data-target="#page_new_icon_';
$array531 = array (
);
$output512 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('line.index', $array531)]);

$output512 .= '">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure533 = function() use ($renderingContext, $self) {
$output535 = '';

$output535 .= '
                                <optgroup label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure537 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments536 = array();
$arguments536['key'] = NULL;
$arguments536['id'] = NULL;
$arguments536['default'] = NULL;
$arguments536['arguments'] = NULL;
$arguments536['extensionName'] = NULL;
$arguments536['languageKey'] = NULL;
$arguments536['alternativeLanguageKeys'] = NULL;
$array538 = array (
);$arguments536['key'] = $renderingContext->getVariableProvider()->getByPath('group', $array538);

$output535 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments536, $renderChildrenClosure537, $renderingContext)]);

$output535 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure540 = function() use ($renderingContext, $self) {
$output542 = '';

$output542 .= '
                                        <option data-icon=\'';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure544 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments543 = array();
$arguments543['identifier'] = NULL;
$arguments543['size'] = 'small';
$arguments543['overlay'] = NULL;
$arguments543['state'] = 'default';
$arguments543['alternativeMarkupIdentifier'] = NULL;
$array545 = array (
);$arguments543['identifier'] = $renderingContext->getVariableProvider()->getByPath('type.2', $array545);

$output542 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments543, $renderChildrenClosure544, $renderingContext);

$output542 .= '\' value="';
$array546 = array (
);
$output542 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('type.1', $array546)]);

$output542 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure548 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments547 = array();
$arguments547['key'] = NULL;
$arguments547['id'] = NULL;
$arguments547['default'] = NULL;
$arguments547['arguments'] = NULL;
$arguments547['extensionName'] = NULL;
$arguments547['languageKey'] = NULL;
$arguments547['alternativeLanguageKeys'] = NULL;
$array549 = array (
);$arguments547['key'] = $renderingContext->getVariableProvider()->getByPath('type.0', $array549);

$output542 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments547, $renderChildrenClosure548, $renderingContext)]);

$output542 .= '</option>
                                    ';
return $output542;
};
$arguments539 = array();
$arguments539['each'] = NULL;
$arguments539['as'] = NULL;
$arguments539['key'] = NULL;
$arguments539['reverse'] = false;
$arguments539['iteration'] = NULL;
$array541 = array (
);$arguments539['each'] = $renderingContext->getVariableProvider()->getByPath('typegroup', $array541);
$arguments539['as'] = 'type';

$output535 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments539, $renderChildrenClosure540, $renderingContext);

$output535 .= '
                                </optgroup>
                            ';
return $output535;
};
$arguments532 = array();
$arguments532['each'] = NULL;
$arguments532['as'] = NULL;
$arguments532['key'] = NULL;
$arguments532['reverse'] = false;
$arguments532['iteration'] = NULL;
$array534 = array (
);$arguments532['each'] = $renderingContext->getVariableProvider()->getByPath('line.pageTypes', $array534);
$arguments532['as'] = 'typegroup';
$arguments532['key'] = 'group';

$output512 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments532, $renderChildrenClosure533, $renderingContext);

$output512 .= '
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
';
return $output512;
};
$arguments510 = array();
$arguments510['name'] = NULL;
$arguments510['name'] = 'FormLine';

$output38 .= '';

$output38 .= '
';

return $output38;
}


}
#