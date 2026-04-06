<?php

class __Mustache_db134f59a07ce0bf02bc3b310575918b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="box generalbox mb-3 enrol-instance" data-enrol="';
        $value = $this->resolveValue($context->find('enrol'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-instanceid="';
        $value = $this->resolveValue($context->find('instanceid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '    <div class="card">
';
        $buffer .= $indent . '        ';
        $value = $context->find('header');
        $buffer .= $this->section2cf3370954873b5db5eadc6aaacdcf30($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        <div class="card-body">';
        $value = $this->resolveValue($context->find('body'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</div>
';
        $value = $context->find('hasbuttons');
        $buffer .= $this->section3e5320320de5033ab5b5190631c9031d($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section2cf3370954873b5db5eadc6aaacdcf30(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="card-header"><h3 class="mb-0">{{{header}}}</h3></div>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<div class="card-header"><h3 class="mb-0">';
                $value = $this->resolveValue($context->find('header'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h3></div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA7eead6bcd8d72ace05ef2d2045a1946(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{> core/single_button }}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/single_button')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3e5320320de5033ab5b5190631c9031d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="card-footer">
            {{#buttons}}
                {{> core/single_button }}
            {{/buttons}}
        </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="card-footer">
';
                $value = $context->find('buttons');
                $buffer .= $this->sectionA7eead6bcd8d72ace05ef2d2045a1946($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
