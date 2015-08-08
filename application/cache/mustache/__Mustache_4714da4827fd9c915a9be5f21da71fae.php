<?php

class __Mustache_4714da4827fd9c915a9be5f21da71fae extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<!DOCTYPE html>
';
        $buffer .= $indent . '<html lang="en">
';
        $buffer .= $indent . '	<head>
';
        $buffer .= $indent . '		<meta charset="utf-8" />
';
        $buffer .= $indent . '		<title>';
        $value = $this->resolveValue($context->find('title'), $context, $indent);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</title>
';
        $buffer .= $indent . '	</head>
';
        $buffer .= $indent . '	<body>
';
        $buffer .= $indent . '		<h1>';
        $value = $this->resolveValue($context->find('title'), $context, $indent);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</h1>
';
        $buffer .= $indent . '		<p>';
        if ($partial = $this->mustache->loadPartial('content')) {
            $buffer .= $partial->renderInternal($context, '');
        }
        $buffer .= '</p>
';
        $buffer .= $indent . '	</body>
';
        $buffer .= $indent . '</html>';

        return $buffer;
    }
}
