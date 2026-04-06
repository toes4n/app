<?php

class __Mustache_670dd29fe6e42169b8756d5795c103e8 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('edash_facebook_url');
        $buffer .= $this->sectionCa338ab7149d73994c2f26e25be40a03($context, $indent, $value);
        $value = $context->find('edash_twitter_url');
        $buffer .= $this->section5efaf97326a1d6df24f67fb1e4ab2134($context, $indent, $value);
        $value = $context->find('edash_instagram_url');
        $buffer .= $this->sectionAea2fc65cc051139cdaac229904f2cf1($context, $indent, $value);
        $value = $context->find('edash_pinterest_url');
        $buffer .= $this->sectionCc4f7361350019185f9e5ac008a524e8($context, $indent, $value);
        $value = $context->find('edash_dribbble_url');
        $buffer .= $this->section89add5faddf671f3480dda95c5b68d60($context, $indent, $value);
        $value = $context->find('edash_google_url');
        $buffer .= $this->sectionC1280c772b09cedd83d45340868b30f7($context, $indent, $value);
        $value = $context->find('edash_youtube_url');
        $buffer .= $this->sectionDad8d0265e484c6ed7304fd5b57d444b($context, $indent, $value);
        $value = $context->find('edash_vk_url');
        $buffer .= $this->sectionAac49a1b69cac5a3b227c0d6f09f2554($context, $indent, $value);
        $value = $context->find('edash_500px_url');
        $buffer .= $this->sectionBd6492908710c09181849bd90723b8e1($context, $indent, $value);
        $value = $context->find('edash_behance_url');
        $buffer .= $this->section007691edb8888d544915c84736a01ca2($context, $indent, $value);
        $value = $context->find('edash_digg_url');
        $buffer .= $this->sectionB50591dec36a841691e33d593d2bed77($context, $indent, $value);
        $value = $context->find('edash_flickr_url');
        $buffer .= $this->section2dfa011a13b52a8ec386172a97409c2a($context, $indent, $value);
        $value = $context->find('edash_foursquare_url');
        $buffer .= $this->sectionFb53e0ccea893fb40600aa372f2492f5($context, $indent, $value);
        $value = $context->find('edash_linkedin_url');
        $buffer .= $this->sectionC6cd668bcf9e9563ce96ffc32f3afca9($context, $indent, $value);
        $value = $context->find('edash_medium_url');
        $buffer .= $this->section3106d3a6943182d24c2a94e4e6c5a1b5($context, $indent, $value);
        $value = $context->find('edash_meetup_url');
        $buffer .= $this->section1a9e3ff8953e959b54da9b32f2f6ba4b($context, $indent, $value);
        $value = $context->find('edash_snapchat_url');
        $buffer .= $this->section4c1732f551a8ebf87fe0fe3b0d8b0e5d($context, $indent, $value);
        $value = $context->find('edash_tumblr_url');
        $buffer .= $this->sectionBb121b7c98818be810317b76ea74169a($context, $indent, $value);
        $value = $context->find('edash_vimeo_url');
        $buffer .= $this->section76938978f9d47628b674983e607da68b($context, $indent, $value);
        $value = $context->find('edash_wechat_url');
        $buffer .= $this->section1fe8347c9bd25361c414f770518529c3($context, $indent, $value);
        $value = $context->find('edash_whatsapp_url');
        $buffer .= $this->section3a5e7423baa1a28974b39fcf624e2d6c($context, $indent, $value);
        $value = $context->find('edash_wordpress_url');
        $buffer .= $this->sectionAba3ae1aa7a5341759fe8304295ee334($context, $indent, $value);
        $value = $context->find('edash_weibo_url');
        $buffer .= $this->section0edf10d981710d12b9c204923a410cee($context, $indent, $value);
        $value = $context->find('edash_telegram_url');
        $buffer .= $this->section44fd8d2f9689441978bb6f46ceaf7835($context, $indent, $value);
        $value = $context->find('edash_moodle_url');
        $buffer .= $this->sectionEd37a6fbb77de44f492f34133ee41131($context, $indent, $value);
        $value = $context->find('edash_amazon_url');
        $buffer .= $this->section4bc4d12d9985375c7beecb60ed75c4cc($context, $indent, $value);
        $value = $context->find('edash_slideshare_url');
        $buffer .= $this->sectionC91443f70d6413f1b4acd3913c1365d4($context, $indent, $value);
        $value = $context->find('edash_soundcloud_url');
        $buffer .= $this->section4079c0df7af5523c085aaa3f1f30eb7c($context, $indent, $value);
        $value = $context->find('edash_leanpub_url');
        $buffer .= $this->section6f9240191a617d0877378df0e4c99adb($context, $indent, $value);
        $value = $context->find('edash_xing_url');
        $buffer .= $this->section6847d0ce190c9ae69f3d7f397954f6f9($context, $indent, $value);
        $value = $context->find('edash_bitcoin_url');
        $buffer .= $this->section86d64c067c0f725afd0003a969d30db9($context, $indent, $value);
        $value = $context->find('edash_twitch_url');
        $buffer .= $this->sectionCc7ce0048e29969d76f28c5b2dc29b9b($context, $indent, $value);
        $value = $context->find('edash_github_url');
        $buffer .= $this->section8e8f8ba669c12474b725cf0e9e60c806($context, $indent, $value);
        $value = $context->find('edash_gitlab_url');
        $buffer .= $this->section1251b7e90babb156cce998cf6a7971b9($context, $indent, $value);
        $value = $context->find('edash_forumbee_url');
        $buffer .= $this->section0ca2a80f690938e3cc77e760699c5da8($context, $indent, $value);
        $value = $context->find('edash_trello_url');
        $buffer .= $this->sectionE8910cff1c6e0482e9c64e5172c47ad2($context, $indent, $value);
        $value = $context->find('edash_weixin_url');
        $buffer .= $this->sectionA68a6813c968abeec81ffb914a4d83f4($context, $indent, $value);

        return $buffer;
    }

    private function section0eab6084e945dfe0b2e0627b4cd4caa8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{{ social_target_href }}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('social_target_href'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCa338ab7149d73994c2f26e25be40a03(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <li class="list-inline-item"><a {{#social_target_href}} {{{ social_target_href }}} {{/social_target_href}} href="{{{ edash_facebook_url }}}"><i class="fa fa-facebook"></i></a></li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <li class="list-inline-item"><a ';
                $value = $context->find('social_target_href');
                $buffer .= $this->section0eab6084e945dfe0b2e0627b4cd4caa8($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('edash_facebook_url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><i class="fa fa-facebook"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5efaf97326a1d6df24f67fb1e4ab2134(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <li class="list-inline-item"><a {{#social_target_href}} {{{ social_target_href }}} {{/social_target_href}} href="{{{ edash_twitter_url }}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg></a></li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <li class="list-inline-item"><a ';
                $value = $context->find('social_target_href');
                $buffer .= $this->section0eab6084e945dfe0b2e0627b4cd4caa8($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('edash_twitter_url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAea2fc65cc051139cdaac229904f2cf1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <li class="list-inline-item"><a {{#social_target_href}} {{{ social_target_href }}} {{/social_target_href}} href="{{{ edash_instagram_url }}}"><i class="fa fa-instagram"></i></a></li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <li class="list-inline-item"><a ';
                $value = $context->find('social_target_href');
                $buffer .= $this->section0eab6084e945dfe0b2e0627b4cd4caa8($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('edash_instagram_url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><i class="fa fa-instagram"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCc4f7361350019185f9e5ac008a524e8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <li class="list-inline-item"><a {{#social_target_href}} {{{ social_target_href }}} {{/social_target_href}} href="{{{ edash_pinterest_url }}}"><i class="fa fa-pinterest"></i></a></li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <li class="list-inline-item"><a ';
                $value = $context->find('social_target_href');
                $buffer .= $this->section0eab6084e945dfe0b2e0627b4cd4caa8($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('edash_pinterest_url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><i class="fa fa-pinterest"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section89add5faddf671f3480dda95c5b68d60(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <li class="list-inline-item"><a {{#social_target_href}} {{{ social_target_href }}} {{/social_target_href}} href="{{{ edash_dribbble_url }}}"><i class="fa fa-dribbble"></i></a></li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <li class="list-inline-item"><a ';
                $value = $context->find('social_target_href');
                $buffer .= $this->section0eab6084e945dfe0b2e0627b4cd4caa8($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('edash_dribbble_url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><i class="fa fa-dribbble"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC1280c772b09cedd83d45340868b30f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <li class="list-inline-item"><a {{#social_target_href}} {{{ social_target_href }}} {{/social_target_href}} href="{{{ edash_google_url }}}"><i class="fa fa-google"></i></a></li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <li class="list-inline-item"><a ';
                $value = $context->find('social_target_href');
                $buffer .= $this->section0eab6084e945dfe0b2e0627b4cd4caa8($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('edash_google_url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><i class="fa fa-google"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDad8d0265e484c6ed7304fd5b57d444b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <li class="list-inline-item"><a {{#social_target_href}} {{{ social_target_href }}} {{/social_target_href}} href="{{{ edash_youtube_url }}}"><i class="fa fa-youtube-play"></i></a></li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <li class="list-inline-item"><a ';
                $value = $context->find('social_target_href');
                $buffer .= $this->section0eab6084e945dfe0b2e0627b4cd4caa8($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('edash_youtube_url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><i class="fa fa-youtube-play"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAac49a1b69cac5a3b227c0d6f09f2554(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <li class="list-inline-item"><a {{#social_target_href}} {{{ social_target_href }}} {{/social_target_href}} href="{{{ edash_vk_url }}}"><i class="fa fa-vk"></i></a></li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <li class="list-inline-item"><a ';
                $value = $context->find('social_target_href');
                $buffer .= $this->section0eab6084e945dfe0b2e0627b4cd4caa8($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('edash_vk_url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><i class="fa fa-vk"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBd6492908710c09181849bd90723b8e1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <li class="list-inline-item"><a {{#social_target_href}} {{{ social_target_href }}} {{/social_target_href}} href="{{{ edash_500px_url }}}"><i class="fa fa-500px"></i></a></li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <li class="list-inline-item"><a ';
                $value = $context->find('social_target_href');
                $buffer .= $this->section0eab6084e945dfe0b2e0627b4cd4caa8($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('edash_500px_url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><i class="fa fa-500px"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section007691edb8888d544915c84736a01ca2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <li class="list-inline-item"><a {{#social_target_href}} {{{ social_target_href }}} {{/social_target_href}} href="{{{ edash_behance_url }}}"><i class="fa fa-behance"></i></a></li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <li class="list-inline-item"><a ';
                $value = $context->find('social_target_href');
                $buffer .= $this->section0eab6084e945dfe0b2e0627b4cd4caa8($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('edash_behance_url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><i class="fa fa-behance"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB50591dec36a841691e33d593d2bed77(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <li class="list-inline-item"><a {{#social_target_href}} {{{ social_target_href }}} {{/social_target_href}} href="{{{ edash_digg_url }}}"><i class="fa fa-digg"></i></a></li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <li class="list-inline-item"><a ';
                $value = $context->find('social_target_href');
                $buffer .= $this->section0eab6084e945dfe0b2e0627b4cd4caa8($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('edash_digg_url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><i class="fa fa-digg"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2dfa011a13b52a8ec386172a97409c2a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <li class="list-inline-item"><a {{#social_target_href}} {{{ social_target_href }}} {{/social_target_href}} href="{{{ edash_flickr_url }}}"><i class="fa fa-flickr"></i></a></li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <li class="list-inline-item"><a ';
                $value = $context->find('social_target_href');
                $buffer .= $this->section0eab6084e945dfe0b2e0627b4cd4caa8($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('edash_flickr_url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><i class="fa fa-flickr"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFb53e0ccea893fb40600aa372f2492f5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <li class="list-inline-item"><a {{#social_target_href}} {{{ social_target_href }}} {{/social_target_href}} href="{{{ edash_foursquare_url }}}"><i class="fa fa-foursquare"></i></a></li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <li class="list-inline-item"><a ';
                $value = $context->find('social_target_href');
                $buffer .= $this->section0eab6084e945dfe0b2e0627b4cd4caa8($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('edash_foursquare_url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><i class="fa fa-foursquare"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC6cd668bcf9e9563ce96ffc32f3afca9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <li class="list-inline-item"><a {{#social_target_href}} {{{ social_target_href }}} {{/social_target_href}} href="{{{ edash_linkedin_url }}}"><i class="fa fa-linkedin"></i></a></li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <li class="list-inline-item"><a ';
                $value = $context->find('social_target_href');
                $buffer .= $this->section0eab6084e945dfe0b2e0627b4cd4caa8($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('edash_linkedin_url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><i class="fa fa-linkedin"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3106d3a6943182d24c2a94e4e6c5a1b5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <li class="list-inline-item"><a {{#social_target_href}} {{{ social_target_href }}} {{/social_target_href}} href="{{{ edash_medium_url }}}"><i class="fa fa-medium"></i></a></li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <li class="list-inline-item"><a ';
                $value = $context->find('social_target_href');
                $buffer .= $this->section0eab6084e945dfe0b2e0627b4cd4caa8($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('edash_medium_url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><i class="fa fa-medium"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1a9e3ff8953e959b54da9b32f2f6ba4b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <li class="list-inline-item"><a {{#social_target_href}} {{{ social_target_href }}} {{/social_target_href}} href="{{{ edash_meetup_url }}}"><i class="fa fa-meetup"></i></a></li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <li class="list-inline-item"><a ';
                $value = $context->find('social_target_href');
                $buffer .= $this->section0eab6084e945dfe0b2e0627b4cd4caa8($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('edash_meetup_url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><i class="fa fa-meetup"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4c1732f551a8ebf87fe0fe3b0d8b0e5d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <li class="list-inline-item"><a {{#social_target_href}} {{{ social_target_href }}} {{/social_target_href}} href="{{{ edash_snapchat_url }}}"><i class="fa fa-snapchat-ghost"></i></a></li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <li class="list-inline-item"><a ';
                $value = $context->find('social_target_href');
                $buffer .= $this->section0eab6084e945dfe0b2e0627b4cd4caa8($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('edash_snapchat_url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><i class="fa fa-snapchat-ghost"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBb121b7c98818be810317b76ea74169a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <li class="list-inline-item"><a {{#social_target_href}} {{{ social_target_href }}} {{/social_target_href}} href="{{{ edash_tumblr_url }}}"><i class="fa fa-tumblr"></i></a></li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <li class="list-inline-item"><a ';
                $value = $context->find('social_target_href');
                $buffer .= $this->section0eab6084e945dfe0b2e0627b4cd4caa8($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('edash_tumblr_url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><i class="fa fa-tumblr"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section76938978f9d47628b674983e607da68b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <li class="list-inline-item"><a {{#social_target_href}} {{{ social_target_href }}} {{/social_target_href}} href="{{{ edash_vimeo_url }}}"><i class="fa fa-vimeo"></i></a></li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <li class="list-inline-item"><a ';
                $value = $context->find('social_target_href');
                $buffer .= $this->section0eab6084e945dfe0b2e0627b4cd4caa8($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('edash_vimeo_url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><i class="fa fa-vimeo"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1fe8347c9bd25361c414f770518529c3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <li class="list-inline-item"><a {{#social_target_href}} {{{ social_target_href }}} {{/social_target_href}} href="{{{ edash_wechat_url }}}"><i class="fa fa-wechat"></i></a></li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <li class="list-inline-item"><a ';
                $value = $context->find('social_target_href');
                $buffer .= $this->section0eab6084e945dfe0b2e0627b4cd4caa8($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('edash_wechat_url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><i class="fa fa-wechat"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3a5e7423baa1a28974b39fcf624e2d6c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <li class="list-inline-item"><a {{#social_target_href}} {{{ social_target_href }}} {{/social_target_href}} href="{{{ edash_whatsapp_url }}}"><i class="fa fa-whatsapp"></i></a></li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <li class="list-inline-item"><a ';
                $value = $context->find('social_target_href');
                $buffer .= $this->section0eab6084e945dfe0b2e0627b4cd4caa8($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('edash_whatsapp_url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><i class="fa fa-whatsapp"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAba3ae1aa7a5341759fe8304295ee334(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <li class="list-inline-item"><a {{#social_target_href}} {{{ social_target_href }}} {{/social_target_href}} href="{{{ edash_wordpress_url }}}"><i class="fa fa-wordpress"></i></a></li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <li class="list-inline-item"><a ';
                $value = $context->find('social_target_href');
                $buffer .= $this->section0eab6084e945dfe0b2e0627b4cd4caa8($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('edash_wordpress_url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><i class="fa fa-wordpress"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0edf10d981710d12b9c204923a410cee(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <li class="list-inline-item"><a {{#social_target_href}} {{{ social_target_href }}} {{/social_target_href}} href="{{{ edash_weibo_url }}}"><i class="fa fa-weibo"></i></a></li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <li class="list-inline-item"><a ';
                $value = $context->find('social_target_href');
                $buffer .= $this->section0eab6084e945dfe0b2e0627b4cd4caa8($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('edash_weibo_url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><i class="fa fa-weibo"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section44fd8d2f9689441978bb6f46ceaf7835(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <li class="list-inline-item"><a {{#social_target_href}} {{{ social_target_href }}} {{/social_target_href}} href="{{{ edash_telegram_url }}}"><i class="fa fa-telegram"></i></a></li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <li class="list-inline-item"><a ';
                $value = $context->find('social_target_href');
                $buffer .= $this->section0eab6084e945dfe0b2e0627b4cd4caa8($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('edash_telegram_url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><i class="fa fa-telegram"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEd37a6fbb77de44f492f34133ee41131(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <li class="list-inline-item"><a {{#social_target_href}} {{{ social_target_href }}} {{/social_target_href}} href="{{{ edash_moodle_url }}}"><i class="fa fa-graduation-cap"></i></a></li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <li class="list-inline-item"><a ';
                $value = $context->find('social_target_href');
                $buffer .= $this->section0eab6084e945dfe0b2e0627b4cd4caa8($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('edash_moodle_url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><i class="fa fa-graduation-cap"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4bc4d12d9985375c7beecb60ed75c4cc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <li class="list-inline-item"><a {{#social_target_href}} {{{ social_target_href }}} {{/social_target_href}} href="{{{ edash_amazon_url }}}"><i class="fa fa-amazon"></i></a></li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <li class="list-inline-item"><a ';
                $value = $context->find('social_target_href');
                $buffer .= $this->section0eab6084e945dfe0b2e0627b4cd4caa8($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('edash_amazon_url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><i class="fa fa-amazon"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC91443f70d6413f1b4acd3913c1365d4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <li class="list-inline-item"><a {{#social_target_href}} {{{ social_target_href }}} {{/social_target_href}} href="{{{ edash_slideshare_url }}}"><i class="fa fa-slideshare"></i></a></li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <li class="list-inline-item"><a ';
                $value = $context->find('social_target_href');
                $buffer .= $this->section0eab6084e945dfe0b2e0627b4cd4caa8($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('edash_slideshare_url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><i class="fa fa-slideshare"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4079c0df7af5523c085aaa3f1f30eb7c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <li class="list-inline-item"><a {{#social_target_href}} {{{ social_target_href }}} {{/social_target_href}} href="{{{ edash_soundcloud_url }}}"><i class="fa fa-soundcloud"></i></a></li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <li class="list-inline-item"><a ';
                $value = $context->find('social_target_href');
                $buffer .= $this->section0eab6084e945dfe0b2e0627b4cd4caa8($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('edash_soundcloud_url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><i class="fa fa-soundcloud"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6f9240191a617d0877378df0e4c99adb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <li class="list-inline-item"><a {{#social_target_href}} {{{ social_target_href }}} {{/social_target_href}} href="{{{ edash_leanpub_url }}}"><i class="fa fa-leanpub"></i></a></li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <li class="list-inline-item"><a ';
                $value = $context->find('social_target_href');
                $buffer .= $this->section0eab6084e945dfe0b2e0627b4cd4caa8($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('edash_leanpub_url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><i class="fa fa-leanpub"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6847d0ce190c9ae69f3d7f397954f6f9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <li class="list-inline-item"><a {{#social_target_href}} {{{ social_target_href }}} {{/social_target_href}} href="{{{ edash_xing_url }}}"><i class="fa fa-xing"></i></a></li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <li class="list-inline-item"><a ';
                $value = $context->find('social_target_href');
                $buffer .= $this->section0eab6084e945dfe0b2e0627b4cd4caa8($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('edash_xing_url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><i class="fa fa-xing"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section86d64c067c0f725afd0003a969d30db9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <li class="list-inline-item"><a {{#social_target_href}} {{{ social_target_href }}} {{/social_target_href}} href="{{{ edash_bitcoin_url }}}"><i class="fa fa-btc"></i></a></li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <li class="list-inline-item"><a ';
                $value = $context->find('social_target_href');
                $buffer .= $this->section0eab6084e945dfe0b2e0627b4cd4caa8($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('edash_bitcoin_url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><i class="fa fa-btc"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCc7ce0048e29969d76f28c5b2dc29b9b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <li class="list-inline-item"><a {{#social_target_href}} {{{ social_target_href }}} {{/social_target_href}} href="{{{ edash_twitch_url }}}"><i class="fa fa-twitch"></i></a></li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <li class="list-inline-item"><a ';
                $value = $context->find('social_target_href');
                $buffer .= $this->section0eab6084e945dfe0b2e0627b4cd4caa8($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('edash_twitch_url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><i class="fa fa-twitch"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8e8f8ba669c12474b725cf0e9e60c806(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <li class="list-inline-item"><a {{#social_target_href}} {{{ social_target_href }}} {{/social_target_href}} href="{{{ edash_github_url }}}"><i class="fa fa-github"></i></a></li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <li class="list-inline-item"><a ';
                $value = $context->find('social_target_href');
                $buffer .= $this->section0eab6084e945dfe0b2e0627b4cd4caa8($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('edash_github_url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><i class="fa fa-github"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1251b7e90babb156cce998cf6a7971b9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <li class="list-inline-item"><a {{#social_target_href}} {{{ social_target_href }}} {{/social_target_href}} href="{{{ edash_gitlab_url }}}"><i class="fa fa-gitlab"></i></a></li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <li class="list-inline-item"><a ';
                $value = $context->find('social_target_href');
                $buffer .= $this->section0eab6084e945dfe0b2e0627b4cd4caa8($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('edash_gitlab_url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><i class="fa fa-gitlab"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0ca2a80f690938e3cc77e760699c5da8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <li class="list-inline-item"><a {{#social_target_href}} {{{ social_target_href }}} {{/social_target_href}} href="{{{ edash_forumbee_url }}}"><i class="fa fa-forumbee"></i></a></li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <li class="list-inline-item"><a ';
                $value = $context->find('social_target_href');
                $buffer .= $this->section0eab6084e945dfe0b2e0627b4cd4caa8($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('edash_forumbee_url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><i class="fa fa-forumbee"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE8910cff1c6e0482e9c64e5172c47ad2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <li class="list-inline-item"><a {{#social_target_href}} {{{ social_target_href }}} {{/social_target_href}} href="{{{ edash_trello_url }}}"><i class="fa fa-trello"></i></a></li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <li class="list-inline-item"><a ';
                $value = $context->find('social_target_href');
                $buffer .= $this->section0eab6084e945dfe0b2e0627b4cd4caa8($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('edash_trello_url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><i class="fa fa-trello"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA68a6813c968abeec81ffb914a4d83f4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
  <li class="list-inline-item"><a {{#social_target_href}} {{{ social_target_href }}} {{/social_target_href}} href="{{{ edash_weixin_url }}}"><i class="fa fa-weixin"></i></a></li>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '  <li class="list-inline-item"><a ';
                $value = $context->find('social_target_href');
                $buffer .= $this->section0eab6084e945dfe0b2e0627b4cd4caa8($context, $indent, $value);
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('edash_weixin_url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><i class="fa fa-weixin"></i></a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
