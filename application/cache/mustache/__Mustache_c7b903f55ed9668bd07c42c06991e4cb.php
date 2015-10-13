<?php

class __Mustache_c7b903f55ed9668bd07c42c06991e4cb extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div  style=\'text-align:center; color:white ; background-color: #5fc487\'class="jumbotron" sty>
';
        $buffer .= $indent . '  <h1>#startupftw</h1>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<div  style=\'text-align:center; color:white ; background-color: #5fc487\'class="jumbotron" sty>
';
        $buffer .= $indent . '<div class=\'btn jumbotron\'>
';
        $buffer .= $indent . '	<i class="fa fa-twitter"></i> Sign In with Twitter
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }
}
