<?php

class __Mustache_79ef269b0ff613e49947ae41b6e1c234 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('uservisible');
        $buffer .= $this->section2aca1430a970f334fbc98169b11d7e83($context, $indent, $value);

        return $buffer;
    }

    private function sectionB4d533f216f9622c64afd5d00c909083(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'completionrequirements, core_course, {{activityname}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'completionrequirements, core_course, ';
                $value = $this->resolveValue($context->find('activityname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section59598768c753c574fa13502f85125aff(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div
                data-region="completionrequirements"
                aria-label="{{#str}}completionrequirements, core_course, {{activityname}}{{/str}}"
            >
                {{> core/local/dropdown/dialog }}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div
';
                $buffer .= $indent . '                data-region="completionrequirements"
';
                $buffer .= $indent . '                aria-label="';
                $value = $context->find('str');
                $buffer .= $this->sectionB4d533f216f9622c64afd5d00c909083($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '            >
';
                if ($partial = $this->mustache->loadPartial('core/local/dropdown/dialog')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB8258e2a1ed238c10c8cd1d2cc985408(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{$ core_course/completion_manual }}
                    {{> core_course/completion_manual }}
                {{/ core_course/completion_manual }}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $blockFunction = $context->findInBlock('core_course/completion_manual');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('core_course/completion_manual')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                    ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section69e94b41be5b35b51ebc8ed450e3c438(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#istrackeduser}}
                {{$ core_course/completion_manual }}
                    {{> core_course/completion_manual }}
                {{/ core_course/completion_manual }}
            {{/istrackeduser}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('istrackeduser');
                $buffer .= $this->sectionB8258e2a1ed238c10c8cd1d2cc985408($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2aca1430a970f334fbc98169b11d7e83(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div data-region="completion-info">
        {{! Completion dropdown dialog }}
        {{#completiondialog}}
            <div
                data-region="completionrequirements"
                aria-label="{{#str}}completionrequirements, core_course, {{activityname}}{{/str}}"
            >
                {{> core/local/dropdown/dialog }}
            </div>
        {{/completiondialog}}

        {{! Manual completion button }}
        {{#showmanualcompletion}}
            {{#istrackeduser}}
                {{$ core_course/completion_manual }}
                    {{> core_course/completion_manual }}
                {{/ core_course/completion_manual }}
            {{/istrackeduser}}
        {{/showmanualcompletion}}
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div data-region="completion-info">
';
                $value = $context->find('completiondialog');
                $buffer .= $this->section59598768c753c574fa13502f85125aff($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('showmanualcompletion');
                $buffer .= $this->section69e94b41be5b35b51ebc8ed450e3c438($context, $indent, $value);
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
