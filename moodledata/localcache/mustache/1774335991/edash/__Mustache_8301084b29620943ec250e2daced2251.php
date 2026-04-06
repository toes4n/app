<?php

class __Mustache_8301084b29620943ec250e2daced2251 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div
';
        $buffer .= $indent . '    class="collapsable-section mb-3 ';
        $buffer .= ' ';
        $blockFunction = $context->findInBlock('extraclasses');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $buffer .= ' ';
            $buffer .= ' ';
            $value = $context->find('classes');
            $buffer .= $this->section52e09049519c3f09a23b20979bf67d85($context, $indent, $value);
            $buffer .= ' ';
            $buffer .= ' ';
        }
        $buffer .= '"
';
        $buffer .= $indent . '    id="';
        $blockFunction = $context->findInBlock('elementid');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $value = $context->find('elementid');
            $buffer .= $this->sectionF79cb82e2012dedc80bdaea2db768454($context, $indent, $value);
            $value = $context->find('elementid');
            if (empty($value)) {
                
                $buffer .= 'collapsable_section_';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            }
        }
        $buffer .= '_collapsible"
';
        $buffer .= $indent . '>
';
        $buffer .= $indent . '    <div class="d-flex">
';
        $buffer .= $indent . '        <div class="d-flex align-items-center position-relative">
';
        $buffer .= $indent . '            <a
';
        $buffer .= $indent . '                role="button"
';
        $buffer .= $indent . '                data-bs-toggle="collapse"
';
        $buffer .= $indent . '                href="#';
        $blockFunction = $context->findInBlock('elementid');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $value = $context->find('elementid');
            $buffer .= $this->section3d039fea18f6d926a5068b1c5be32e4f($context, $indent, $value);
            $value = $context->find('elementid');
            if (empty($value)) {
                
                $buffer .= 'collapsable_';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            }
        }
        $buffer .= '"
';
        $buffer .= $indent . '                ';
        $value = $context->find('open');
        $buffer .= $this->section7a57decaa40a0a948efcb49ef08cdd1c($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                ';
        $value = $context->find('open');
        if (empty($value)) {
            
            $buffer .= ' aria-expanded="false" ';
        }
        $buffer .= '
';
        $buffer .= $indent . '                aria-controls="';
        $blockFunction = $context->findInBlock('elementid');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $value = $context->find('elementid');
            $buffer .= $this->section3d039fea18f6d926a5068b1c5be32e4f($context, $indent, $value);
            $value = $context->find('elementid');
            if (empty($value)) {
                
                $buffer .= 'collapsable_';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            }
        }
        $buffer .= '"
';
        $buffer .= $indent . '                class="btn btn-icon me-3 icons-collapse-expand justify-content-center ';
        $buffer .= ' ';
        $value = $context->find('open');
        if (empty($value)) {
            
            $buffer .= ' collapsed ';
        }
        $buffer .= '"
';
        $buffer .= $indent . '            >
';
        $buffer .= $indent . '                <span
';
        $buffer .= $indent . '                    class="collapsed-icon icon-no-margin me-1"
';
        $buffer .= $indent . '                    title="';
        $blockFunction = $context->findInBlock('expandlabel');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $value = $context->find('expandlabel');
            $buffer .= $this->sectionC31ee362555b57b8e51f861240358a4c($context, $indent, $value);
            $value = $context->find('expandlabel');
            if (empty($value)) {
                
                $value = $context->find('str');
                $buffer .= $this->section8b5765485c94c190bf567731edb08c3a($context, $indent, $value);
            }
        }
        $buffer .= '"
';
        $buffer .= $indent . '                >
';
        $buffer .= $indent . '                    <span class="dir-rtl-hide">';
        $value = $context->find('pix');
        $buffer .= $this->section8a8ae941fd79f459323bea8528b0311c($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                    <span class="dir-ltr-hide">';
        $value = $context->find('pix');
        $buffer .= $this->section99c846dfb5f618178bca670626f33c8b($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                    <span class="visually-hidden">';
        $blockFunction = $context->findInBlock('expandlabel');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $value = $context->find('expandlabel');
            $buffer .= $this->sectionC31ee362555b57b8e51f861240358a4c($context, $indent, $value);
            $value = $context->find('expandlabel');
            if (empty($value)) {
                
                $value = $context->find('str');
                $buffer .= $this->section8b5765485c94c190bf567731edb08c3a($context, $indent, $value);
            }
        }
        $buffer .= '</span>
';
        $buffer .= $indent . '                </span>
';
        $buffer .= $indent . '                <span
';
        $buffer .= $indent . '                    class="expanded-icon icon-no-margin me-1"
';
        $buffer .= $indent . '                    title="';
        $blockFunction = $context->findInBlock('collapselabel');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $value = $context->find('collapselabel');
            $buffer .= $this->section040acf515dba64aebac0b5614f30ad2d($context, $indent, $value);
            $value = $context->find('collapselabel');
            if (empty($value)) {
                
                $value = $context->find('str');
                $buffer .= $this->section0ac795c23146489fad8f951c23f9a92a($context, $indent, $value);
            }
        }
        $buffer .= '"
';
        $buffer .= $indent . '                >
';
        $buffer .= $indent . '                    ';
        $value = $context->find('pix');
        $buffer .= $this->sectionEce766800de4730c5a948801df414738($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    <span class="visually-hidden">';
        $blockFunction = $context->findInBlock('collapselabel');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $value = $context->find('collapselabel');
            $buffer .= $this->section040acf515dba64aebac0b5614f30ad2d($context, $indent, $value);
            $value = $context->find('collapselabel');
            if (empty($value)) {
                
                $value = $context->find('str');
                $buffer .= $this->section0ac795c23146489fad8f951c23f9a92a($context, $indent, $value);
            }
        }
        $buffer .= '</span>
';
        $buffer .= $indent . '                </span>
';
        $buffer .= $indent . '            </a>
';
        $buffer .= $indent . '            <h3
';
        $buffer .= $indent . '                class="d-flex align-self-stretch align-items-center mb-0"
';
        $buffer .= $indent . '                id="';
        $blockFunction = $context->findInBlock('elementid');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $value = $context->find('elementid');
            $buffer .= $this->sectionF79cb82e2012dedc80bdaea2db768454($context, $indent, $value);
            $value = $context->find('elementid');
            if (empty($value)) {
                
                $buffer .= 'collapsable_section_';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            }
        }
        $buffer .= '_title"
';
        $buffer .= $indent . '            >
';
        $blockFunction = $context->findInBlock('titlecontent');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $buffer .= $indent . '                    ';
            $value = $this->resolveValue($context->find('titlecontent'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
        }
        $buffer .= $indent . '            </h3>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div
';
        $buffer .= $indent . '        id="';
        $blockFunction = $context->findInBlock('elementid');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $value = $context->find('elementid');
            $buffer .= $this->section3d039fea18f6d926a5068b1c5be32e4f($context, $indent, $value);
            $value = $context->find('elementid');
            if (empty($value)) {
                
                $buffer .= 'collapsable_';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            }
        }
        $buffer .= '"
';
        $buffer .= $indent . '        class="content collapse ';
        $value = $context->find('open');
        $buffer .= $this->section14c724f5a6859d4cc56d9befdffaeac5($context, $indent, $value);
        $buffer .= ' pt-3"
';
        $buffer .= $indent . '        data-mdl-component="core/local/collapsable_section"
';
        $blockFunction = $context->findInBlock('extras');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $value = $context->find('extras');
            $buffer .= $this->section45f51b7828851220ae25d2a23683e715($context, $indent, $value);
        }
        $buffer .= $indent . '    >
';
        $blockFunction = $context->findInBlock('sectioncontent');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $buffer .= $indent . '            ';
            $value = $this->resolveValue($context->find('sectioncontent'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->section479bf134bde7f8d8a68754b17c933b1b($context, $indent, $value);

        return $buffer;
    }

    private function section52e09049519c3f09a23b20979bf67d85(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{classes}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('classes'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF79cb82e2012dedc80bdaea2db768454(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'collapsable_section_{{elementid}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'collapsable_section_';
                $value = $this->resolveValue($context->find('elementid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3d039fea18f6d926a5068b1c5be32e4f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{elementid}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('elementid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7a57decaa40a0a948efcb49ef08cdd1c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' aria-expanded="true" ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' aria-expanded="true" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC31ee362555b57b8e51f861240358a4c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{expandlabel}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('expandlabel'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8b5765485c94c190bf567731edb08c3a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' expand, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' expand, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8a8ae941fd79f459323bea8528b0311c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/collapsedchevron, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' t/collapsedchevron, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section99c846dfb5f618178bca670626f33c8b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/collapsedchevron_rtl, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' t/collapsedchevron_rtl, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section040acf515dba64aebac0b5614f30ad2d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{collapselabel}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('collapselabel'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0ac795c23146489fad8f951c23f9a92a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' collapse, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' collapse, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEce766800de4730c5a948801df414738(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/expandedchevron, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' t/expandedchevron, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section14c724f5a6859d4cc56d9befdffaeac5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'show';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'show';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section45f51b7828851220ae25d2a23683e715(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{attribute}}="{{value}}"
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('attribute'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section479bf134bde7f8d8a68754b17c933b1b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'core/local/collapsable_section/controls\'], function(Controls) {
    Controls.init();
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'core/local/collapsable_section/controls\'], function(Controls) {
';
                $buffer .= $indent . '    Controls.init();
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
