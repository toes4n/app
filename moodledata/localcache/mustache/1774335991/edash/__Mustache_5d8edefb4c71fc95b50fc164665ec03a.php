<?php

class __Mustache_5d8edefb4c71fc95b50fc164665ec03a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div id="course-overview-page">
';
        $value = $context->find('elements');
        $buffer .= $this->sectionCfc1c4a297f64881d764c0d7a8d8d3b5($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->section4cb87206c7d269949736e1618672518a($context, $indent, $value);

        return $buffer;
    }

    private function section1877ec06c3d30ec0d4d1ee308f082e79(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{{preloadedcontent}}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('preloadedcontent'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC2fcd2f00f3bd7c983a072c9a4fd16d4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#preloadedcontent}} {{{preloadedcontent}}} {{/preloadedcontent}}
                {{^preloadedcontent}}
                <div
                    data-region="loading-icon-container"
                    data-courseid="{{courseid}}"
                    data-contextid="{{contextid}}"
                    data-modname="{{shortname}}"
                >
                    {{> core/loading }}
                </div>
                {{/preloadedcontent}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '                ';
                $value = $context->find('preloadedcontent');
                $buffer .= $this->section1877ec06c3d30ec0d4d1ee308f082e79($context, $indent, $value);
                $buffer .= '
';
                $value = $context->find('preloadedcontent');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                <div
';
                    $buffer .= $indent . '                    data-region="loading-icon-container"
';
                    $buffer .= $indent . '                    data-courseid="';
                    $value = $this->resolveValue($context->find('courseid'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '"
';
                    $buffer .= $indent . '                    data-contextid="';
                    $value = $this->resolveValue($context->find('contextid'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '"
';
                    $buffer .= $indent . '                    data-modname="';
                    $value = $this->resolveValue($context->find('shortname'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '"
';
                    $buffer .= $indent . '                >
';
                    if ($partial = $this->mustache->loadPartial('core/loading')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                    ');
                    }
                    $buffer .= $indent . '                </div>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCfc1c4a297f64881d764c0d7a8d8d3b5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{<core/local/collapsable_section}}
        {{$titlecontent}}{{{icon}}} {{name}}{{/titlecontent}}
        {{$elementid}}{{shortname}}_overview{{/elementid}}
        {{$extraclasses}}border border-1 rounded-3 p-3{{/extraclasses}}
        {{$sectioncontent}}
            {{#fragment}}
                {{#preloadedcontent}} {{{preloadedcontent}}} {{/preloadedcontent}}
                {{^preloadedcontent}}
                <div
                    data-region="loading-icon-container"
                    data-courseid="{{courseid}}"
                    data-contextid="{{contextid}}"
                    data-modname="{{shortname}}"
                >
                    {{> core/loading }}
                </div>
                {{/preloadedcontent}}
            {{/fragment}}
        {{/sectioncontent}}
    {{/core/local/collapsable_section}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    ';
                if ($parent = $this->mustache->loadPartial('core/local/collapsable_section')) {
                    $context->pushBlockContext(array(
                        'titlecontent' => array($this, 'block7c6d117c4dc1ffa5d756441460480788'),
                        'elementid' => array($this, 'blockEabc08a27c04525bef83e5fa9c4ccf5e'),
                        'extraclasses' => array($this, 'blockA0e60b41f57b4b6063db71828c2dd0d3'),
                        'sectioncontent' => array($this, 'block57f4371fd46d3d1f7377031d077686bb'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4cb87206c7d269949736e1618672518a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'core_course/local/overview/overviewpage\'], function(overviewpage) {
    overviewpage.init(\'#course-overview-page\');
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'core_course/local/overview/overviewpage\'], function(overviewpage) {
';
                $buffer .= $indent . '    overviewpage.init(\'#course-overview-page\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block7c6d117c4dc1ffa5d756441460480788($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->find('icon'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= ' ';
        $value = $this->resolveValue($context->find('name'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
    
        return $buffer;
    }

    public function blockEabc08a27c04525bef83e5fa9c4ccf5e($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->find('shortname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '_overview';
    
        return $buffer;
    }

    public function blockA0e60b41f57b4b6063db71828c2dd0d3($context)
    {
        $indent = $buffer = '';
        $buffer .= 'border border-1 rounded-3 p-3';
    
        return $buffer;
    }

    public function block57f4371fd46d3d1f7377031d077686bb($context)
    {
        $indent = $buffer = '';
        $value = $context->find('fragment');
        $buffer .= $this->sectionC2fcd2f00f3bd7c983a072c9a4fd16d4($context, $indent, $value);
    
        return $buffer;
    }
}
