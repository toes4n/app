<?php

class __Mustache_fe1ec76bf0d2577d87675d4e8b14c216 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->findDot('output.enable_dark_nav_footer');
        $buffer .= $this->section97775b50274e8fc74efa7782a94bac8f($context, $indent, $value);
        $buffer .= $indent . ' 
';
        $value = $context->findDot('output.enable_dark_nav_footer');
        if (empty($value)) {
            
            $value = $context->findDot('output.enable_nav_footer_style2');
            $buffer .= $this->section0fc94378ea221b2822ef573f2e997677($context, $indent, $value);
            $buffer .= $indent . '
';
            $value = $context->findDot('output.enable_nav_footer_style2');
            if (empty($value)) {
                
                $value = $context->findDot('output.enable_nav_footer_style3');
                $buffer .= $this->sectionFe41beefe65c9fdf14c42aa656381075($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->findDot('output.enable_nav_footer_style3');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            <div class="footer-area">
';
                }
            }
        }
        $buffer .= $indent . '    <div class="container">
';
        $buffer .= $indent . '        <div class="row">
';
        $value = $context->find('footer_column_1');
        $buffer .= $this->section73777f86240a59c965a28bab7d6fde98($context, $indent, $value);
        $value = $context->find('footer_column_2');
        $buffer .= $this->section6438c1c735ac79006b8ff22d5820ecca($context, $indent, $value);
        $value = $context->find('footer_column_3');
        $buffer .= $this->section291bc82a21cf65a2e42da075358097ec($context, $indent, $value);
        $value = $context->find('footer_column_4');
        $buffer .= $this->sectionCe0b6d86d72c1fc5c17657338b4d37ac($context, $indent, $value);
        $value = $context->find('footer_column_5');
        $buffer .= $this->sectionFe481b74acc8c7b6fddc0e3bbf71ffbf($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $value = $context->findDot('output.enable_nav_footer_style2');
        if (empty($value)) {
            
            $value = $context->findDot('output.enable_nav_footer_style3');
            if (empty($value)) {
                
                $value = $context->find('footer_copyright');
                $buffer .= $this->section25a8f8cce35b8e225ed1712ac2c58f03($context, $indent, $value);
            }
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $value = $context->find('footer_shape_image');
        $buffer .= $this->sectionDe5d36546d04d7caad09a40502834698($context, $indent, $value);
        $buffer .= $indent . '    
';
        $value = $context->findDot('output.enable_nav_footer_style2');
        $buffer .= $this->sectionA7a808ace0a5faeeaceac793f7612293($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->findDot('output.enable_nav_footer_style3');
        $buffer .= $this->sectionA7a808ace0a5faeeaceac793f7612293($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<!-- End Footer Area -->
';
        $buffer .= $indent . '
';
        $value = $context->find('back_to_top');
        $buffer .= $this->sectionD1a21e3a983267f3f308109234c1a278($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $this->resolveValue($context->findDot('output.edit_switch'), $context);
        $buffer .= $indent . ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
        $buffer .= $indent . ($value === null ? '' : $value);

        return $buffer;
    }

    private function section97775b50274e8fc74efa7782a94bac8f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="footer-area color-with-black">
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="footer-area color-with-black">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0fc94378ea221b2822ef573f2e997677(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="footer-area footer-with-bg">
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="footer-area footer-with-bg">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFe41beefe65c9fdf14c42aa656381075(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="footer-area oa-footer">
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="footer-area oa-footer">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section06311a8a65a3ef6d057bc27a0fc91b30(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' style="{{{footer_logo_styles}}}" ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' style="';
                $value = $this->resolveValue($context->find('footer_logo_styles'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section36475e49636b49e67757d1c48c27b262(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <img src="{{main_footer_logo}}" alt="{{sitename}}"  {{#footer_logo_styles}} style="{{{footer_logo_styles}}}" {{/footer_logo_styles}}>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <img src="';
                $value = $this->resolveValue($context->find('main_footer_logo'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"  ';
                $value = $context->find('footer_logo_styles');
                $buffer .= $this->section06311a8a65a3ef6d057bc27a0fc91b30($context, $indent, $value);
                $buffer .= '>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section036481eeb0151c7446e425cac2078e43(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <a class="logo d-inline-block" href="{{{ config.wwwroot }}}/">
                                {{#main_footer_logo}}
                                    <img src="{{main_footer_logo}}" alt="{{sitename}}"  {{#footer_logo_styles}} style="{{{footer_logo_styles}}}" {{/footer_logo_styles}}>
                                {{/main_footer_logo}}

                                {{^ main_footer_logo }}
                                    <h2  {{#footer_logo_styles}} style="{{{footer_logo_styles}}}" {{/footer_logo_styles}}>{{sitename}}</h2>
                                {{/main_footer_logo}}
                            </a>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <a class="logo d-inline-block" href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '/">
';
                $value = $context->find('main_footer_logo');
                $buffer .= $this->section36475e49636b49e67757d1c48c27b262($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('main_footer_logo');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                    <h2  ';
                    $value = $context->find('footer_logo_styles');
                    $buffer .= $this->section06311a8a65a3ef6d057bc27a0fc91b30($context, $indent, $value);
                    $buffer .= '>';
                    $value = $this->resolveValue($context->find('sitename'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '</h2>
';
                }
                $buffer .= $indent . '                            </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section27bf758dcf990d276e99f12a4f6233a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <h3>{{{ footer_col_1_title }}}</h3>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <h3>';
                $value = $this->resolveValue($context->find('footer_col_1_title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h3>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section14a6a0803fb75cd49b3a4ab1b563e8f4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <p>{{{footer_col_1_body}}}</p>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <p>';
                $value = $this->resolveValue($context->find('footer_col_1_body'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section73777f86240a59c965a28bab7d6fde98(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="{{{footer_col_1_class}}}">
                    <div class="single-footer-widget">
                        {{#footer_logo_visibility}}
                            <a class="logo d-inline-block" href="{{{ config.wwwroot }}}/">
                                {{#main_footer_logo}}
                                    <img src="{{main_footer_logo}}" alt="{{sitename}}"  {{#footer_logo_styles}} style="{{{footer_logo_styles}}}" {{/footer_logo_styles}}>
                                {{/main_footer_logo}}

                                {{^ main_footer_logo }}
                                    <h2  {{#footer_logo_styles}} style="{{{footer_logo_styles}}}" {{/footer_logo_styles}}>{{sitename}}</h2>
                                {{/main_footer_logo}}
                            </a>
                        {{/footer_logo_visibility}}

                        {{#footer_col_1_title}}
                            <h3>{{{ footer_col_1_title }}}</h3>
                        {{/footer_col_1_title}}

                        {{#footer_col_1_body}}
                            <p>{{{footer_col_1_body}}}</p>
                        {{/footer_col_1_body}}

                        <ul class="social">
                            {{> theme_edash/edash_social_icons }}
                        </ul>
                    </div>
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="';
                $value = $this->resolveValue($context->find('footer_col_1_class'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <div class="single-footer-widget">
';
                $value = $context->find('footer_logo_visibility');
                $buffer .= $this->section036481eeb0151c7446e425cac2078e43($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('footer_col_1_title');
                $buffer .= $this->section27bf758dcf990d276e99f12a4f6233a3($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('footer_col_1_body');
                $buffer .= $this->section14a6a0803fb75cd49b3a4ab1b563e8f4($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '                        <ul class="social">
';
                if ($partial = $this->mustache->loadPartial('theme_edash/edash_social_icons')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                            ');
                }
                $buffer .= $indent . '                        </ul>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6438c1c735ac79006b8ff22d5820ecca(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="{{{footer_col_2_class}}}">
                    <div class="single-footer-widget pl-1-d">
                        <h3>{{{ footer_col_2_title }}}</h3>
                        {{{ footer_col_2_body }}}
                    </div>
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="';
                $value = $this->resolveValue($context->find('footer_col_2_class'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <div class="single-footer-widget pl-1-d">
';
                $buffer .= $indent . '                        <h3>';
                $value = $this->resolveValue($context->find('footer_col_2_title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h3>
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('footer_col_2_body'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section291bc82a21cf65a2e42da075358097ec(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="{{{footer_col_3_class}}}">
                    <div class="single-footer-widget pl-1-d">
                        <h3>{{{ footer_col_3_title }}}</h3>
                        {{{ footer_col_3_body }}}
                    </div>
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="';
                $value = $this->resolveValue($context->find('footer_col_3_class'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <div class="single-footer-widget pl-1-d">
';
                $buffer .= $indent . '                        <h3>';
                $value = $this->resolveValue($context->find('footer_col_3_title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h3>
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('footer_col_3_body'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCe0b6d86d72c1fc5c17657338b4d37ac(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="{{{footer_col_4_class}}}">
                    <div class="single-footer-widget">
                        <h3>{{{ footer_col_4_title }}}</h3>
                        {{{ footer_col_4_body }}}
                    </div>
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="';
                $value = $this->resolveValue($context->find('footer_col_4_class'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <div class="single-footer-widget">
';
                $buffer .= $indent . '                        <h3>';
                $value = $this->resolveValue($context->find('footer_col_4_title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h3>
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('footer_col_4_body'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFe481b74acc8c7b6fddc0e3bbf71ffbf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="{{{footer_col_5_class}}}">
                    <div class="single-footer-widget">
                        <h3>{{{ footer_col_5_title }}}</h3>
                        {{{ footer_col_5_body }}}
                    </div>
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="';
                $value = $this->resolveValue($context->find('footer_col_5_class'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <div class="single-footer-widget">
';
                $buffer .= $indent . '                        <h3>';
                $value = $this->resolveValue($context->find('footer_col_5_title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h3>
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('footer_col_5_body'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section25a8f8cce35b8e225ed1712ac2c58f03(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="copyright-area">
                        <p>{{{footer_copyright}}}</p>
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="copyright-area">
';
                $buffer .= $indent . '                        <p>';
                $value = $this->resolveValue($context->find('footer_copyright'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDe5d36546d04d7caad09a40502834698(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="shape7"><img src="{{footer_shape_image}}" alt="{{sitename}}"></div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="shape7"><img src="';
                $value = $this->resolveValue($context->find('footer_shape_image'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE8e2091a07b7a1b62dc4b862f5d079e8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="copyright-area">
                <p>{{{footer_copyright}}}</p>
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="copyright-area">
';
                $buffer .= $indent . '                <p>';
                $value = $this->resolveValue($context->find('footer_copyright'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA7a808ace0a5faeeaceac793f7612293(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#footer_copyright}}
            <div class="copyright-area">
                <p>{{{footer_copyright}}}</p>
            </div>
        {{/footer_copyright}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('footer_copyright');
                $buffer .= $this->sectionE8e2091a07b7a1b62dc4b862f5d079e8($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD1a21e3a983267f3f308109234c1a278(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
        </svg>
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="progress-wrap">
';
                $buffer .= $indent . '        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
';
                $buffer .= $indent . '            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
';
                $buffer .= $indent . '        </svg>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
