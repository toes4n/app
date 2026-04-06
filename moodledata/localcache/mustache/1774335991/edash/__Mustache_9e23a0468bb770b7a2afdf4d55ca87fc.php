<?php

class __Mustache_9e23a0468bb770b7a2afdf4d55ca87fc extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="d-flex justify-content-between">
';
        $buffer .= $indent . '    <div>';
        $value = $context->find('str');
        $buffer .= $this->section96af6a509ca30f6a1c113d8da6de8f6c($context, $indent, $value);
        $buffer .= ': ';
        $value = $this->resolveValue($context->find('currency'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' ';
        $value = $this->resolveValue($context->find('cost'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</div>
';
        $buffer .= $indent . '    <div>
';
        $buffer .= $indent . '        <img alt=';
        $value = $context->find('quote');
        $buffer .= $this->sectionEc5c9c4c540aa19ae449c0bf00b8b78a($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            src="https://www.paypalobjects.com/webstatic/mktg/Logo/pp-logo-100px.png" >
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section96af6a509ca30f6a1c113d8da6de8f6c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'cost';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'cost';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0050c71c2b167b8adf7e76b3446a624e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'paypalaccepted, enrol_paypal';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'paypalaccepted, enrol_paypal';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEc5c9c4c540aa19ae449c0bf00b8b78a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}}paypalaccepted, enrol_paypal{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('str');
                $buffer .= $this->section0050c71c2b167b8adf7e76b3446a624e($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
