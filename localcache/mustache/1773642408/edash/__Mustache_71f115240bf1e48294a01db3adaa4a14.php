<?php

class __Mustache_71f115240bf1e48294a01db3adaa4a14 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<ul class="edash-header-user-sec pull-right" id=\'usernavigation\'>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.navbar_plugin_output'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    
';
        $value = $context->findDot('output.edash_if_admin');
        $buffer .= $this->section5899eb4d8ec9927aa0777ed597c4dcc1($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <li>
';
        $value = $context->find('usermenu');
        $buffer .= $this->sectionBe5a8703afa084c5e12db04ef9f3a403($context, $indent, $value);
        $buffer .= $indent . '    </li>
';
        $buffer .= $indent . '</ul>';

        return $buffer;
    }

    private function section1d6dadd7ac7524251355b8dccdc23d4b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <li class="user_setting edash-settings-nav">
                <div class="dropdown">
                    <a class="notification-icon" href="{{{ config.wwwroot }}}/admin/search.php"><i class=\'icon bx bx-cog\'></i></a>
                </div>
            </li>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <li class="user_setting edash-settings-nav">
';
                $buffer .= $indent . '                <div class="dropdown">
';
                $buffer .= $indent . '                    <a class="notification-icon" href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '/admin/search.php"><i class=\'icon bx bx-cog\'></i></a>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5899eb4d8ec9927aa0777ed597c4dcc1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#primarymoremenu}}
            <li class="user_setting edash-settings-nav">
                <div class="dropdown">
                    <a class="notification-icon" href="{{{ config.wwwroot }}}/admin/search.php"><i class=\'icon bx bx-cog\'></i></a>
                </div>
            </li>
        {{/primarymoremenu}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('primarymoremenu');
                $buffer .= $this->section1d6dadd7ac7524251355b8dccdc23d4b($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBe5a8703afa084c5e12db04ef9f3a403(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{> core/user_menu }}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/user_menu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
