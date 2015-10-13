<?php

class __Mustache_efdedeefd36bea95f752302d7b4bd0e0 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<html>
';
        $buffer .= $indent . '	<head>
';
        $buffer .= $indent . '		<title>';
        $value = $this->resolveValue($context->find('pagetitle'), $context, $indent);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</title>
';
        $buffer .= $indent . '		<meta charset="utf-8">
';
        $buffer .= $indent . '	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
';
        $buffer .= $indent . '	    <meta name="viewport" content="width=device-width, initial-scale=1">
';
        $buffer .= $indent . '	</head>
';
        $buffer .= $indent . '	<body>
';
        $buffer .= $indent . '		 <h1>Hello, world!</h1>
';
        if ($partial = $this->mustache->loadPartial('content')) {
            $buffer .= $partial->renderInternal($context, '		');
        }
        $buffer .= $indent . '	</body>
';
        $buffer .= $indent . '	<style>
';
        $buffer .= $indent . '		body{
';
        $buffer .= $indent . '			background-color :#5fc487 ;			
';
        $buffer .= $indent . '		}
';
        $buffer .= $indent . '	</style>
';
        $buffer .= $indent . '	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
';
        $buffer .= $indent . '</html>';

        return $buffer;
    }
}
