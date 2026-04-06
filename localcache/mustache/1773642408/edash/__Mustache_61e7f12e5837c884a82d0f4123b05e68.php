<?php

class __Mustache_61e7f12e5837c884a82d0f4123b05e68 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<header id="page-header" class="edash-container-fluid">
';
        $buffer .= $indent . '    <div class="d-flex flex-wrap">
';
        $buffer .= $indent . '        <div class="ml-auto-d d-flex">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('pageheadingbutton'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div id="course-header">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('courseheader'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="d-sm-flex align-items-center">
';
        $value = $context->find('welcomemessage');
        if (empty($value)) {
            
            $value = $context->find('contextheader');
            $buffer .= $this->section91d7a86231926a49a5e646d657d6fe39($context, $indent, $value);
        }
        if ($partial = $this->mustache->loadPartial('core/welcome')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '        <div class="header-actions-container ml-auto-d" data-region="header-actions-container">
';
        $value = $context->find('headeractions');
        $buffer .= $this->sectionB9bd2fe0b8d39cf7ccacaa3d55b977a0($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $value = $context->find('hasnavbar');
        $buffer .= $this->section1244d369947de73e443e54fb688af9c2($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</header>';

        return $buffer;
    }

    private function section91d7a86231926a49a5e646d657d6fe39(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="mr-auto-d">
                    {{{contextheader}}}
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="mr-auto-d">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('contextheader'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB9bd2fe0b8d39cf7ccacaa3d55b977a0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="header-action ml-2-d">{{{.}}}</div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="header-action ml-2-d">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1244d369947de73e443e54fb688af9c2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="d-none" id="page-navbar">
                {{{navbar}}}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="d-none" id="page-navbar">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('navbar'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
