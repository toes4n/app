<?php

class __Mustache_6ac79ecba5f3a651a30bb8d8b10213a5 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="tool_courserating-widget pt-2 pt-0 ';
        $value = $this->resolveValue($context->find('extraclasses'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '    <div data-for="tool_courserating-cfield-wrapper" data-courseid="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="rating-summary">
';
        if ($partial = $this->mustache->loadPartial('tool_courserating/summary_for_cfield')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '    </div>
';
        $value = $context->find('canrate');
        $buffer .= $this->section6c9e257a94390ac19666f4dea1b583bf($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $value = $context->find('parentelement');
        $buffer .= $this->section635fa7b65ef0b93b853ca811419a86af($context, $indent, $value);

        return $buffer;
    }

    private function section911fcb7c25e24614a275d4b0876cf734(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'editrating, tool_courserating';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'editrating, tool_courserating';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2f134b18205412e94a4afede170f1cf9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{#str}}editrating, tool_courserating{{/str}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    ';
                $value = $context->find('str');
                $buffer .= $this->section911fcb7c25e24614a275d4b0876cf734($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4af1a1fe20f480c860db2821448de585(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'addrating, tool_courserating';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'addrating, tool_courserating';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6c9e257a94390ac19666f4dea1b583bf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="add-rating-link">
            <a href="#" data-action="tool_courserating-addrating" data-courseid="{{courseid}}">
                {{#hasrating}}
                    {{#str}}editrating, tool_courserating{{/str}}
                {{/hasrating}}
                {{^hasrating}}
                    {{#str}}addrating, tool_courserating{{/str}}
                {{/hasrating}}
            </a>
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="add-rating-link">
';
                $buffer .= $indent . '            <a href="#" data-action="tool_courserating-addrating" data-courseid="';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $value = $context->find('hasrating');
                $buffer .= $this->section2f134b18205412e94a4afede170f1cf9($context, $indent, $value);
                $value = $context->find('hasrating');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    ';
                    $value = $context->find('str');
                    $buffer .= $this->section4af1a1fe20f480c860db2821448de585($context, $indent, $value);
                    $buffer .= '
';
                }
                $buffer .= $indent . '            </a>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFb1d6fa5614f9c3c0280b0b2fdbcc1cd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        /* Move the widget to the header area */
        const widget = document.querySelector(".tool_courserating-widget");
        const parents = "{{parentelement}}".split(\',\');
        for (let i in parents) {
            const header = document.querySelector(parents[i]);
            if (header) {
                header.appendChild(widget);
                break;
            }
        }
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        /* Move the widget to the header area */
';
                $buffer .= $indent . '        const widget = document.querySelector(".tool_courserating-widget");
';
                $buffer .= $indent . '        const parents = "';
                $value = $this->resolveValue($context->find('parentelement'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '".split(\',\');
';
                $buffer .= $indent . '        for (let i in parents) {
';
                $buffer .= $indent . '            const header = document.querySelector(parents[i]);
';
                $buffer .= $indent . '            if (header) {
';
                $buffer .= $indent . '                header.appendChild(widget);
';
                $buffer .= $indent . '                break;
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '        }
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section635fa7b65ef0b93b853ca811419a86af(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#js}}
        /* Move the widget to the header area */
        const widget = document.querySelector(".tool_courserating-widget");
        const parents = "{{parentelement}}".split(\',\');
        for (let i in parents) {
            const header = document.querySelector(parents[i]);
            if (header) {
                header.appendChild(widget);
                break;
            }
        }
    {{/js}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('js');
                $buffer .= $this->sectionFb1d6fa5614f9c3c0280b0b2fdbcc1cd($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
