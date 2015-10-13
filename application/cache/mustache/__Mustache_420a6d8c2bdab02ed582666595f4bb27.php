<?php

class __Mustache_420a6d8c2bdab02ed582666595f4bb27 extends Mustache_Template
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
        if ($partial = $this->mustache->loadPartial('content')) {
            $buffer .= $partial->renderInternal($context, '		');
        }
        $buffer .= $indent . '	</body>
';
        $buffer .= $indent . '	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
';
        $buffer .= $indent . '	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
';
        $buffer .= $indent . '	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
';
        $buffer .= $indent . '	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
';
        $buffer .= $indent . '	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<style>
';
        $buffer .= $indent . '		body{
';
        $buffer .= $indent . '			background-color :#52B6AC ;			
';
        $buffer .= $indent . '		}
';
        $buffer .= $indent . '	</style>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	<script>
';
        // 'isLoginPage' inverted section
        $value = $context->find('isLoginPage');
        if (empty($value)) {
            
            $buffer .= $indent . '		$(document).ready(one);
';
            $buffer .= $indent . '		$(document).ready(two);
';
            $buffer .= $indent . '		function one(){
';
            $buffer .= $indent . '			alert(\'one\');
';
            $buffer .= $indent . '		}
';
            $buffer .= $indent . '		function two(){
';
            $buffer .= $indent . '			alert(\'2\');
';
            $buffer .= $indent . '		}
';
            $buffer .= $indent . '
';
        }
        $buffer .= $indent . '	</script>
';
        $buffer .= $indent . '</html>';

        return $buffer;
    }
}
