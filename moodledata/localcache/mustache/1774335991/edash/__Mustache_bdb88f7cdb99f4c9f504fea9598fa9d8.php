<?php

class __Mustache_bdb88f7cdb99f4c9f504fea9598fa9d8 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->findDot('output.enable_dark_nav_footer');
        $buffer .= $this->section66f32603ec3453ec3946f8b17b60f6f3($context, $indent, $value);
        $buffer .= $indent . ' 
';
        $value = $context->findDot('output.enable_dark_nav_footer');
        if (empty($value)) {
            
            $value = $context->findDot('output.enable_nav_footer_style2');
            $buffer .= $this->section3384e1013746fb6829c6d344b9561e3f($context, $indent, $value);
            $buffer .= $indent . '
';
            $value = $context->findDot('output.enable_nav_footer_style2');
            if (empty($value)) {
                
                $value = $context->findDot('output.enable_nav_footer_style3');
                $buffer .= $this->sectionB473351e4d4d4aa7fe49c3ab8cb9dde2($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->findDot('output.enable_nav_footer_style3');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            <div class="navbar-area ';
                    $value = $this->resolveValue($context->findDot('output.edash_is_siteadmin'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '">
';
                }
            }
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="edash-responsive-nav">
';
        $buffer .= $indent . '        <div class="container">
';
        $buffer .= $indent . '            <div class="edash-responsive-menu">
';
        $value = $context->find('logo_visibility');
        $buffer .= $this->section156f8b4c1c69f777e24b5f7c364618eb($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="edash-nav">
';
        $buffer .= $indent . '        <div class="container-fluid">
';
        $buffer .= $indent . '            <nav class="navbar navbar-expand-lg navbar-light bg-light">
';
        $value = $context->find('logo_visibility');
        $buffer .= $this->section5b2158bc7afddd88cd5c237ae0890935($context, $indent, $value);
        $buffer .= $indent . '                <div class="collapse navbar-collapse mean-menu">
';
        $buffer .= $indent . '
';
        $value = $context->find('header_search_bar');
        $buffer .= $this->section55da42a5c56c8b665d3ca0dcc7152113($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    <ul id="menu-primary-menu" class="navbar-nav">
';
        $buffer .= $indent . '                        <!-- custom_menu -->
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->findDot('output.custom_menu'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </ul>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->findDot('output.if_edash_guest_user'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '
';
        $buffer .= $indent . '
';
        $value = $context->find('isloggedin');
        if (empty($value)) {
            
            $value = $context->find('header_btn_text');
            $buffer .= $this->sectionC9c52bbad8b1addf85af21cc49cb3204($context, $indent, $value);
            $buffer .= $indent . '
';
        }
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '
';
        $value = $context->find('isloggedin');
        $buffer .= $this->sectionCd979b107afca2bdd12d9393c6095f16($context, $indent, $value);
        $buffer .= $indent . '            </nav>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="others-option-for-responsive">
';
        $buffer .= $indent . '        <div class="container">
';
        $buffer .= $indent . '            <div class="dot-menu">
';
        $buffer .= $indent . '                <div class="inner">
';
        $buffer .= $indent . '                    <div class="circle circle-one"></div>
';
        $buffer .= $indent . '                    <div class="circle circle-two"></div>
';
        $buffer .= $indent . '                    <div class="circle circle-three"></div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="container">
';
        $buffer .= $indent . '                <div class="option-inner">
';
        $value = $context->find('header_search_bar');
        $buffer .= $this->section5fe0dde98afd7dbc7c4b7167113b4a4c($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('isloggedin');
        if (empty($value)) {
            
            $value = $context->find('header_btn_text');
            $buffer .= $this->section7caf6c5ac0640d736edffa43eb11ecd8($context, $indent, $value);
        }
        $buffer .= $indent . '
';
        $value = $context->find('isloggedin');
        $buffer .= $this->sectionFa4c5b548c66ef99367cbdc12d8ee6fe($context, $indent, $value);
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_boost/primary-drawer-mobile')) {
            $buffer .= $partial->renderInternal($context);
        }

        return $buffer;
    }

    private function section66f32603ec3453ec3946f8b17b60f6f3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="navbar-area navbar-area-with-black-color {{output.edash_is_siteadmin}}">
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="navbar-area navbar-area-with-black-color ';
                $value = $this->resolveValue($context->findDot('output.edash_is_siteadmin'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3384e1013746fb6829c6d344b9561e3f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="navbar-area remote-training-navbar-area {{output.edash_is_siteadmin}}">
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="navbar-area remote-training-navbar-area ';
                $value = $this->resolveValue($context->findDot('output.edash_is_siteadmin'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB473351e4d4d4aa7fe49c3ab8cb9dde2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="navbar-area navbar-area-with-position-relative {{output.edash_is_siteadmin}}">
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="navbar-area navbar-area-with-position-relative ';
                $value = $this->resolveValue($context->findDot('output.edash_is_siteadmin'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0b244634ba412b72293c92cb88afb0f3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' style="{{{mobile_logo_styles}}}" ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' style="';
                $value = $this->resolveValue($context->find('mobile_logo_styles'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF833055db258e466fc8a863e59c08f4a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <img src="{{mobile_logo}}" alt="{{sitename}}"  {{#mobile_logo_styles}} style="{{{mobile_logo_styles}}}" {{/mobile_logo_styles}}>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <img src="';
                $value = $this->resolveValue($context->find('mobile_logo'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"  ';
                $value = $context->find('mobile_logo_styles');
                $buffer .= $this->section0b244634ba412b72293c92cb88afb0f3($context, $indent, $value);
                $buffer .= '>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section156f8b4c1c69f777e24b5f7c364618eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="logo">
                        <a href="{{{ config.wwwroot }}}/">
                            {{#mobile_logo}}
                                <img src="{{mobile_logo}}" alt="{{sitename}}"  {{#mobile_logo_styles}} style="{{{mobile_logo_styles}}}" {{/mobile_logo_styles}}>
                            {{/mobile_logo}}

                            {{^ mobile_logo }}
                                <h2 {{#mobile_logo_styles}} style="{{{mobile_logo_styles}}}" {{/mobile_logo_styles}}>{{sitename}}</h2>
                            {{/mobile_logo}}
                        </a>
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="logo">
';
                $buffer .= $indent . '                        <a href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '/">
';
                $value = $context->find('mobile_logo');
                $buffer .= $this->sectionF833055db258e466fc8a863e59c08f4a($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('mobile_logo');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                <h2 ';
                    $value = $context->find('mobile_logo_styles');
                    $buffer .= $this->section0b244634ba412b72293c92cb88afb0f3($context, $indent, $value);
                    $buffer .= '>';
                    $value = $this->resolveValue($context->find('sitename'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '</h2>
';
                }
                $buffer .= $indent . '                        </a>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF4ae517f1e51da61f377c3a37c32b2b7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' style="{{{logo_styles}}}" ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' style="';
                $value = $this->resolveValue($context->find('logo_styles'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section90e29cfd260bea9ef48e93a71741741c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <img src="{{main_logo}}" alt="{{sitename}}"  {{#logo_styles}} style="{{{logo_styles}}}" {{/logo_styles}}>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <img src="';
                $value = $this->resolveValue($context->find('main_logo'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"  ';
                $value = $context->find('logo_styles');
                $buffer .= $this->sectionF4ae517f1e51da61f377c3a37c32b2b7($context, $indent, $value);
                $buffer .= '>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5b2158bc7afddd88cd5c237ae0890935(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <a class="navbar-brand" href="{{{ config.wwwroot }}}/">
                        {{#main_logo}}
                            <img src="{{main_logo}}" alt="{{sitename}}"  {{#logo_styles}} style="{{{logo_styles}}}" {{/logo_styles}}>
                        {{/main_logo}}

                        {{^ main_logo }}
                            <h2  {{#logo_styles}} style="{{{logo_styles}}}" {{/logo_styles}}>{{sitename}}</h2>
                        {{/main_logo}}
                    </a>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <a class="navbar-brand" href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '/">
';
                $value = $context->find('main_logo');
                $buffer .= $this->section90e29cfd260bea9ef48e93a71741741c($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('main_logo');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                            <h2  ';
                    $value = $context->find('logo_styles');
                    $buffer .= $this->sectionF4ae517f1e51da61f377c3a37c32b2b7($context, $indent, $value);
                    $buffer .= '>';
                    $value = $this->resolveValue($context->find('sitename'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '</h2>
';
                }
                $buffer .= $indent . '                    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section55da42a5c56c8b665d3ca0dcc7152113(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{{edash_globalsearch_navbar}}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('edash_globalsearch_navbar'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2086ecf1203e42fe91d1c36a8676131d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <a href="{{header_btn_url}}" class="default-btn">
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <a href="';
                $value = $this->resolveValue($context->find('header_btn_url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="default-btn">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC9c52bbad8b1addf85af21cc49cb3204(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="others-option d-flex align-items-center">
                            
                                <div class="option-item">
                                {{#header_btn_url}}
                                    <a href="{{header_btn_url}}" class="default-btn">
                                {{/header_btn_url}}
                                {{^ header_btn_url }}
                                    <a href="{{ login_url }}" class="default-btn">
                                {{/header_btn_url}}

                                    <i class="{{header_btn_icon}}"></i>
                                    {{header_btn_text}}<span></span>
                                    </a>
                                </div>
                            </div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div class="others-option d-flex align-items-center">
';
                $buffer .= $indent . '                            
';
                $buffer .= $indent . '                                <div class="option-item">
';
                $value = $context->find('header_btn_url');
                $buffer .= $this->section2086ecf1203e42fe91d1c36a8676131d($context, $indent, $value);
                $value = $context->find('header_btn_url');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                    <a href="';
                    $value = $this->resolveValue($context->find('login_url'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" class="default-btn">
';
                }
                $buffer .= $indent . '
';
                $buffer .= $indent . '                                    <i class="';
                $value = $this->resolveValue($context->find('header_btn_icon'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"></i>
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('header_btn_text'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '<span></span>
';
                $buffer .= $indent . '                                    </a>
';
                $buffer .= $indent . '                                </div>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCd979b107afca2bdd12d9393c6095f16(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{> theme_edash/edash_navbar_user }}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_edash/edash_navbar_user')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5fe0dde98afd7dbc7c4b7167113b4a4c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="option-item">
                            {{{edash_globalsearch_navbar}}}                        
                        </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="option-item">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('edash_globalsearch_navbar'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '                        
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section659b10cd647caf08fa031402331d4627(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <a href="{{header_btn_url}}" class="default-btn">
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <a href="';
                $value = $this->resolveValue($context->find('header_btn_url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="default-btn">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7caf6c5ac0640d736edffa43eb11ecd8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="option-item">
                            {{#header_btn_url}}
                                <a href="{{header_btn_url}}" class="default-btn">
                            {{/header_btn_url}}
                            {{^ header_btn_url }}
                                <a href="{{ login_url }}" class="default-btn">
                            {{/header_btn_url}}

                                <i class="{{header_btn_icon}}"></i>
                                {{header_btn_text}}<span></span>
                                </a>
                            </div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div class="option-item">
';
                $value = $context->find('header_btn_url');
                $buffer .= $this->section659b10cd647caf08fa031402331d4627($context, $indent, $value);
                $value = $context->find('header_btn_url');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                <a href="';
                    $value = $this->resolveValue($context->find('login_url'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" class="default-btn">
';
                }
                $buffer .= $indent . '
';
                $buffer .= $indent . '                                <i class="';
                $value = $this->resolveValue($context->find('header_btn_icon'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"></i>
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('header_btn_text'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '<span></span>
';
                $buffer .= $indent . '                                </a>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFa4c5b548c66ef99367cbdc12d8ee6fe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="option-item">
                            {{> theme_edash/edash_navbar_user_mobile }}
                        </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="option-item">
';
                if ($partial = $this->mustache->loadPartial('theme_edash/edash_navbar_user_mobile')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                            ');
                }
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
