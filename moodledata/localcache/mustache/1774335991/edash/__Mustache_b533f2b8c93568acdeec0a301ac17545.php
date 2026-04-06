<?php

class __Mustache_b533f2b8c93568acdeec0a301ac17545 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('theme_boost/head')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<body ';
        $value = $this->resolveValue($context->find('bodyattributes'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '>
';
        if ($partial = $this->mustache->loadPartial('core/local/toast/wrapper')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="wrapper page-wrapper" class="edash-page-wrapper ';
        $value = $context->findDot('output.if_edash_guest');
        $buffer .= $this->sectionC38d4a8ef708db1b6d987a44f687a472($context, $indent, $value);
        $buffer .= ' edash-guest-is-active-main-';
        $value = $this->resolveValue($context->findDot('output.edash_is_current_user_enrolled'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' body-';
        $value = $this->resolveValue($context->findDot('output.edash_is_siteadmin'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_boost/navbar')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '
';
        $value = $context->find('courseindex');
        $buffer .= $this->section2ea462af77924166b6a954286652c7ce($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    <div id="page" data-region="mainpage" data-usertour="scroller" class="edash-page-drawers drawers ';
        $value = $context->find('courseindexopen');
        $buffer .= $this->section6b40e2748488de16028fd4032111cc9b($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->find('blockdraweropen');
        $buffer .= $this->section05ab28b93094b30436e1224de5468efa($context, $indent, $value);
        $buffer .= ' drag-container">
';
        $buffer .= $indent . '        <div class="';
        $value = $context->find('courseindexopen');
        $buffer .= $this->section6b40e2748488de16028fd4032111cc9b($context, $indent, $value);
        $buffer .= ' drag-container">
';
        $buffer .= $indent . '            <div class="drawer-toggles d-flex">
';
        $value = $context->find('courseindex');
        $buffer .= $this->section6931d3702960d0e864f6b9f67f4f887a($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        $value = $context->findDot('output.if_home_pages');
        if (empty($value)) {
            
            $buffer .= $indent . '                <div class="page-title-area">
';
            $buffer .= $indent . '                    <div class="container">
';
            $buffer .= $indent . '                        <div class="page-title-content">
';
            $buffer .= $indent . '                            ';
            $value = $this->resolveValue($context->findDot('output.if_home_pages'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '
';
            $buffer .= $indent . '
';
            $buffer .= $indent . '                            ';
            $value = $this->resolveValue($context->findDot('output.navbar'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '                            <h1>';
            $value = $this->resolveValue($context->find('pageheading'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '</h1>
';
            $buffer .= $indent . '                        </div>
';
            $buffer .= $indent . '                    </div>
';
            $buffer .= $indent . '                </div>
';
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div class="edash-fullwidth-top" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->sectionC14df02445cdd505a0208e8a56a5f32e($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('blocks_fullwidth_top'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div id="edashs-settings-menu-container" class="edashs-settings-menu-container">
';
        $buffer .= $indent . '                <div id="edash-settings-menu-inner">
';
        $value = $context->find('hasregionmainsettingsmenu');
        $buffer .= $this->sectionF5b388f7b66545715e794b59ab4f2161($context, $indent, $value);
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.standard_top_of_body_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div>
';
        $value = $context->findDot('output.if_hide_page_bottom_content');
        $buffer .= $this->section2cf38d20bebe26014c406fbbc1ca02bb($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    <div id="page" class="container d-print-block bottom-region-main-box">
';
        $buffer .= $indent . '                        <div id="page-content" class="d-print-block">
';
        $buffer .= $indent . '                            <div id="region-main-box">
';
        $buffer .= $indent . '                                <div class="row">
';
        $buffer .= $indent . '                                
';
        $value = $context->find('hasblocks');
        $buffer .= $this->section7ee72b3aa168ca3247dc3c67c57fae96($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('hasblocks');
        if (empty($value)) {
            
            $buffer .= $indent . '                                        <div class="col-lg-12">
';
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                        ';
        $value = $this->resolveValue($context->find('addblockbutton'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                                        <div id="region-main" ';
        $value = $context->find('hasblocks');
        $buffer .= $this->sectionE5ee358e6e0ee21e8b847930c661ad5b($context, $indent, $value);
        $buffer .= ' aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section6b403a6a78537640b9e04a931aeb6463($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                            <div class="edash-full-header">
';
        $buffer .= $indent . '                                                ';
        $value = $this->resolveValue($context->findDot('output.full_header'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                                            </div>
';
        $buffer .= $indent . '
';
        $value = $context->find('secondarymoremenu');
        $buffer .= $this->section8666231839bcd6ed52485078ae0489fa($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('hasregionmainsettingsmenu');
        $buffer .= $this->section0617104257ad896ce582907fbcefb17b($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('has_blocks_above_content');
        $buffer .= $this->section1dd88b43a30269ba81d9a9b65aa6a853($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                            <div class="edash-main">
';
        $buffer .= $indent . '                                                ';
        $value = $this->resolveValue($context->findDot('output.course_content_header'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $value = $context->find('headercontent');
        $buffer .= $this->sectionDeb53f35cdd5b70927334768e6781cf2($context, $indent, $value);
        $value = $context->find('overflow');
        $buffer .= $this->section66edf06244e8212ca0fc71ebe0c94424($context, $indent, $value);
        $buffer .= $indent . '                                                
';
        $value = $context->findDot('output.if_blog');
        $buffer .= $this->section3fd5d89f0a4240d3617f9ad70e4cac0b($context, $indent, $value);
        $value = $context->findDot('output.if_blog');
        if (empty($value)) {
            
            $buffer .= $indent . '                                                    ';
            $value = $this->resolveValue($context->findDot('output.main_content'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                                ';
        $value = $this->resolveValue($context->findDot('output.activity_navigation'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                                                ';
        $value = $this->resolveValue($context->findDot('output.course_content_footer'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                                            </div>
';
        $buffer .= $indent . '
';
        $value = $context->find('has_blocks_below_content');
        $buffer .= $this->section943258b19d0b0ac1c1d56ee41e33a356($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                        </div>
';
        $buffer .= $indent . '                                    </div>
';
        $value = $context->find('hasblocks');
        $buffer .= $this->section578918d3a4e408c0ae7f61de998bc3b0($context, $indent, $value);
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                ';
        $value = $context->findDot('output.if_hide_page_bottom_content');
        $buffer .= $this->section9c8015515e366bc886d44cbfc72bd0fd($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('blocks_fullwidth_bottom'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        if ($partial = $this->mustache->loadPartial('theme_boost/footer')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $value = $this->resolveValue($context->findDot('output.standard_after_main_region_html'), $context);
        $buffer .= $indent . ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</body>
';
        $buffer .= $indent . '</html>
';
        $value = $context->find('js');
        $buffer .= $this->sectionAee007c3eed31b6d23d54a610493adb1($context, $indent, $value);

        return $buffer;
    }

    private function sectionC38d4a8ef708db1b6d987a44f687a472(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'edash-guest-is-active-main';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'edash-guest-is-active-main';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section14c724f5a6859d4cc56d9befdffaeac5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'show';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'show';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD8c059d8e564034fcd5a4fcfed7ed8eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'closecourseindex, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'closecourseindex, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2ea462af77924166b6a954286652c7ce(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{< theme_boost/drawer }}
            {{$id}}theme_boost-drawers-courseindex{{/id}}
            {{$drawerclasses}}drawer drawer-left {{#courseindexopen}}show{{/courseindexopen}}{{/drawerclasses}}
            {{$drawercontent}}
                {{{courseindex}}}
            {{/drawercontent}}
            {{$drawerpreferencename}}drawer-open-index{{/drawerpreferencename}}
            {{$drawerstate}}show-drawer-left{{/drawerstate}}
            {{$tooltipplacement}}right{{/tooltipplacement}}
            {{$closebuttontext}}{{#str}}closecourseindex, core{{/str}}{{/closebuttontext}}
        {{/ theme_boost/drawer}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        ';
                if ($parent = $this->mustache->loadPartial('theme_boost/drawer')) {
                    $context->pushBlockContext(array(
                        'id' => array($this, 'blockEfc32b531594d5d62ec9c68e35a53dc3'),
                        'drawerclasses' => array($this, 'block0dcbcdb48783bd0043cc25a3ecb99947'),
                        'drawercontent' => array($this, 'block59db78b85db7c3f36bff517a3643ec5b'),
                        'drawerpreferencename' => array($this, 'block24fc4cc7410bc884a3b9fba5f26dc7b9'),
                        'drawerstate' => array($this, 'blockBd5099c9b82bf8a4037bbd56bb374a89'),
                        'tooltipplacement' => array($this, 'block2a81b037a416792e91b78e41049f49f9'),
                        'closebuttontext' => array($this, 'block9ac4e5859f44816b862545bc2c6e6a46'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6b40e2748488de16028fd4032111cc9b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'show-drawer-left';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'show-drawer-left';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section05ab28b93094b30436e1224de5468efa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'show-drawer-right';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'show-drawer-right';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAfaaa3dab86fd46a075d917e3ce891f0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'opendrawerindex, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'opendrawerindex, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3feaf801d4aa0a811fe41c3427e53335(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/index_drawer, moodle ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' t/index_drawer, moodle ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6931d3702960d0e864f6b9f67f4f887a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="drawer-toggler drawer-left-toggle open-nav d-print-none">
                        <button
                            class="btn icon-no-margin"
                            data-toggler="drawers"
                            data-action="toggle"
                            data-target="theme_boost-drawers-courseindex"
                            data-toggle="tooltip"
                            data-placement="right"
                            title="{{#str}}opendrawerindex, core{{/str}}"
                        >
                            <span class="sr-only">{{#str}}opendrawerindex, core{{/str}}</span>
                            {{#pix}} t/index_drawer, moodle {{/pix}}
                        </button>
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="drawer-toggler drawer-left-toggle open-nav d-print-none">
';
                $buffer .= $indent . '                        <button
';
                $buffer .= $indent . '                            class="btn icon-no-margin"
';
                $buffer .= $indent . '                            data-toggler="drawers"
';
                $buffer .= $indent . '                            data-action="toggle"
';
                $buffer .= $indent . '                            data-target="theme_boost-drawers-courseindex"
';
                $buffer .= $indent . '                            data-toggle="tooltip"
';
                $buffer .= $indent . '                            data-placement="right"
';
                $buffer .= $indent . '                            title="';
                $value = $context->find('str');
                $buffer .= $this->sectionAfaaa3dab86fd46a075d917e3ce891f0($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                        >
';
                $buffer .= $indent . '                            <span class="sr-only">';
                $value = $context->find('str');
                $buffer .= $this->sectionAfaaa3dab86fd46a075d917e3ce891f0($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                            ';
                $value = $context->find('pix');
                $buffer .= $this->section3feaf801d4aa0a811fe41c3427e53335($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </button>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC14df02445cdd505a0208e8a56a5f32e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'blocks';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'blocks';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8ae768dbd9f60a7f7df4aaf3cee7aa89(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'has-blocks';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'has-blocks';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF5b388f7b66545715e794b59ab4f2161(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div id="region-main-settings-menu" class="d-print-none {{#hasblocks}}has-blocks{{/hasblocks}}">
                            <div> {{{ output.region_main_settings_menu }}} </div>
                        </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div id="region-main-settings-menu" class="d-print-none ';
                $value = $context->find('hasblocks');
                $buffer .= $this->section8ae768dbd9f60a7f7df4aaf3cee7aa89($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                            <div> ';
                $value = $this->resolveValue($context->findDot('output.region_main_settings_menu'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' </div>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2cf38d20bebe26014c406fbbc1ca02bb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="if_hide_page_bottom_content d-none">';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="if_hide_page_bottom_content d-none">';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7ee72b3aa168ca3247dc3c67c57fae96(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <div class="col-lg-8">
                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                        <div class="col-lg-8">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAcd91cb49607db805a71f451103962ce(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'edash-guest-is-active';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'edash-guest-is-active';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE5ee358e6e0ee21e8b847930c661ad5b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'class="edmo-has-blocks  {{#output.if_edash_guest}}edash-guest-is-active{{/output.if_edash_guest}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'class="edmo-has-blocks  ';
                $value = $context->findDot('output.if_edash_guest');
                $buffer .= $this->sectionAcd91cb49607db805a71f451103962ce($context, $indent, $value);
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6b403a6a78537640b9e04a931aeb6463(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'content';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'content';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8666231839bcd6ed52485078ae0489fa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <div class="secondary-navigation d-print-none">
                                                    {{> core/moremenu}}
                                                </div>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <div class="secondary-navigation d-print-none">
';
                if ($partial = $this->mustache->loadPartial('core/moremenu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                                    ');
                }
                $buffer .= $indent . '                                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0617104257ad896ce582907fbcefb17b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <div class="region_main_settings_menu_proxy"></div>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <div class="region_main_settings_menu_proxy"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1dd88b43a30269ba81d9a9b65aa6a853(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                {{{ blocks_above_content }}}
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                ';
                $value = $this->resolveValue($context->find('blocks_above_content'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDeb53f35cdd5b70927334768e6781cf2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                    {{> core/activity_header }}
                                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/activity_header')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section66edf06244e8212ca0fc71ebe0c94424(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                    <div class="container-fluid tertiary-navigation">
                                                        <div class="navitem">
                                                            {{> core/url_select}}
                                                        </div>
                                                    </div>
                                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                    <div class="container-fluid tertiary-navigation">
';
                $buffer .= $indent . '                                                        <div class="navitem">
';
                if ($partial = $this->mustache->loadPartial('core/url_select')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                                            ');
                }
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3fd5d89f0a4240d3617f9ad70e4cac0b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                    <div class="blog-area">
                                                        <div class="row">
                                                            {{{ output.main_content }}}
                                                        </div>
                                                    </div>
                                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                    <div class="blog-area">
';
                $buffer .= $indent . '                                                        <div class="row">
';
                $buffer .= $indent . '                                                            ';
                $value = $this->resolveValue($context->findDot('output.main_content'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                                        </div>
';
                $buffer .= $indent . '                                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section943258b19d0b0ac1c1d56ee41e33a356(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                {{{ blocks_below_content }}}
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                ';
                $value = $this->resolveValue($context->find('blocks_below_content'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section578918d3a4e408c0ae7f61de998bc3b0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <div class="col-lg-4">
                                            <div data-region="blocks-column edash-sidebar-region" class="d-print-none" aria-label="{{#str}}blocks{{/str}}">
                                                {{{ sidepreblocks }}}
                                            </div>
                                        </div>
                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                        <div class="col-lg-4">
';
                $buffer .= $indent . '                                            <div data-region="blocks-column edash-sidebar-region" class="d-print-none" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->sectionC14df02445cdd505a0208e8a56a5f32e($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                                ';
                $value = $this->resolveValue($context->find('sidepreblocks'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                            </div>
';
                $buffer .= $indent . '                                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9c8015515e366bc886d44cbfc72bd0fd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '</div>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAee007c3eed31b6d23d54a610493adb1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  M.util.js_pending(\'theme_boost/loader\');
  require([\'theme_boost/loader\'], function() {
  M.util.js_complete(\'theme_boost/loader\');
  });
  M.util.js_pending(\'theme_boost/drawer\');
  require([\'theme_boost/drawer\'], function(mod) {
  mod.init();
  M.util.js_complete(\'theme_boost/drawer\');
  });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  M.util.js_pending(\'theme_boost/loader\');
';
                $buffer .= $indent . '  require([\'theme_boost/loader\'], function() {
';
                $buffer .= $indent . '  M.util.js_complete(\'theme_boost/loader\');
';
                $buffer .= $indent . '  });
';
                $buffer .= $indent . '  M.util.js_pending(\'theme_boost/drawer\');
';
                $buffer .= $indent . '  require([\'theme_boost/drawer\'], function(mod) {
';
                $buffer .= $indent . '  mod.init();
';
                $buffer .= $indent . '  M.util.js_complete(\'theme_boost/drawer\');
';
                $buffer .= $indent . '  });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function blockEfc32b531594d5d62ec9c68e35a53dc3($context)
    {
        $indent = $buffer = '';
        $buffer .= 'theme_boost-drawers-courseindex';
    
        return $buffer;
    }

    public function block0dcbcdb48783bd0043cc25a3ecb99947($context)
    {
        $indent = $buffer = '';
        $buffer .= 'drawer drawer-left ';
        $value = $context->find('courseindexopen');
        $buffer .= $this->section14c724f5a6859d4cc56d9befdffaeac5($context, $indent, $value);
    
        return $buffer;
    }

    public function block59db78b85db7c3f36bff517a3643ec5b($context)
    {
        $indent = $buffer = '';
        $buffer .= '                ';
        $value = $this->resolveValue($context->find('courseindex'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
    
        return $buffer;
    }

    public function block24fc4cc7410bc884a3b9fba5f26dc7b9($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'drawer-open-index';
    
        return $buffer;
    }

    public function blockBd5099c9b82bf8a4037bbd56bb374a89($context)
    {
        $indent = $buffer = '';
        $buffer .= 'show-drawer-left';
    
        return $buffer;
    }

    public function block2a81b037a416792e91b78e41049f49f9($context)
    {
        $indent = $buffer = '';
        $buffer .= 'right';
    
        return $buffer;
    }

    public function block9ac4e5859f44816b862545bc2c6e6a46($context)
    {
        $indent = $buffer = '';
        $value = $context->find('str');
        $buffer .= $this->sectionD8c059d8e564034fcd5a4fcfed7ed8eb($context, $indent, $value);
    
        return $buffer;
    }
}
