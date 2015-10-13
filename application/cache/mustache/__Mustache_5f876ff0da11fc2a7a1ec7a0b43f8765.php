<?php

class __Mustache_5f876ff0da11fc2a7a1ec7a0b43f8765 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
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
        // 'isLoginPage' section
        $buffer .= $this->sectionAca46d8bb8a574b751b58facb266bb7c($context, $indent, $context->find('isLoginPage'));
        $buffer .= $indent . '	</script>
';
        $buffer .= $indent . '</html>';

        return $buffer;
    }

    private function sectionAca46d8bb8a574b751b58facb266bb7c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
		$(document).ready(one);
		$document.ready(two);
		function one(){
			alert(\'one\')
		}
		function two(){
			alert(\'2\')
		}

		';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '		$(document).ready(one);
';
                $buffer .= $indent . '		$document.ready(two);
';
                $buffer .= $indent . '		function one(){
';
                $buffer .= $indent . '			alert(\'one\')
';
                $buffer .= $indent . '		}
';
                $buffer .= $indent . '		function two(){
';
                $buffer .= $indent . '			alert(\'2\')
';
                $buffer .= $indent . '		}
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
