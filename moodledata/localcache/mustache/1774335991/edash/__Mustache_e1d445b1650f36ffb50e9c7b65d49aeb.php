<?php

class __Mustache_e1d445b1650f36ffb50e9c7b65d49aeb extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('cntall');
        $buffer .= $this->section24a127dab34c71cbe8e604c88f813503($context, $indent, $value);
        $value = $context->find('displayempty');
        $buffer .= $this->section7c81ffe10227c85c7f6ca48c7ea52d73($context, $indent, $value);

        return $buffer;
    }

    private function sectionFef2667d9ea63a63200e1621d3a4d868(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'pluginname, tool_courserating';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'pluginname, tool_courserating';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section38be276d04b2fc6dc77f98c2997be686(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{> tool_courserating/stars }}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('tool_courserating/stars')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section24a127dab34c71cbe8e604c88f813503(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<span class="tool_courserating-cfield"><a
        class="tool_courserating-ratings tool_courserating-ratings-courseid-{{courseid}}"
        title="{{#str}}pluginname, tool_courserating{{/str}}"
        href="#">{{#stars}}{{> tool_courserating/stars }}{{/stars}}<span
        class="course-average-value tool_courserating-ratingcolor ml-2">{{avgrating}}</span><span
    class="ml-2 course-rating-cntall">({{cntall}})</span></a></span>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<span class="tool_courserating-cfield"><a
';
                $buffer .= $indent . '        class="tool_courserating-ratings tool_courserating-ratings-courseid-';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '        title="';
                $value = $context->find('str');
                $buffer .= $this->sectionFef2667d9ea63a63200e1621d3a4d868($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '        href="#">';
                $value = $context->find('stars');
                $buffer .= $this->section38be276d04b2fc6dc77f98c2997be686($context, $indent, $value);
                $buffer .= '<span
';
                $buffer .= $indent . '        class="course-average-value tool_courserating-ratingcolor ml-2">';
                $value = $this->resolveValue($context->find('avgrating'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span><span
';
                $buffer .= $indent . '    class="ml-2 course-rating-cntall">(';
                $value = $this->resolveValue($context->find('cntall'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ')</span></a></span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7c81ffe10227c85c7f6ca48c7ea52d73(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{^cntall}}
        <span class="tool_courserating-cfield"><a
                class="tool_courserating-ratings tool_courserating-ratings-courseid-{{courseid}} tool_courserating-norating"
                href="#">{{#stars}}{{> tool_courserating/stars }}{{/stars}}</a></span>
    {{/cntall}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('cntall');
                if (empty($value)) {
                    
                    $buffer .= $indent . '        <span class="tool_courserating-cfield"><a
';
                    $buffer .= $indent . '                class="tool_courserating-ratings tool_courserating-ratings-courseid-';
                    $value = $this->resolveValue($context->find('courseid'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= ' tool_courserating-norating"
';
                    $buffer .= $indent . '                href="#">';
                    $value = $context->find('stars');
                    $buffer .= $this->section38be276d04b2fc6dc77f98c2997be686($context, $indent, $value);
                    $buffer .= '</a></span>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
