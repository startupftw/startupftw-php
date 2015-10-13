<?php

class __Mustache_6f61e87979941b432f960b92f118e943 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<html>
';
        $buffer .= $indent . '	<head>
';
        $buffer .= $indent . '		<title>';
        $value = $this->resolveValue($context->find(''), $context, $indent);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</title>
';
        $buffer .= $indent . '	</head>
';
        $buffer .= $indent . '	<body>
';
        $buffer .= $indent . '		';
        $value = $this->resolveValue($context->find('content'), $context, $indent);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '
';
        $buffer .= $indent . '	</body>
';
        $buffer .= $indent . '</html>';

        return $buffer;
    }
}
