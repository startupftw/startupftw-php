<?php

class __Mustache_95b4aecf63746b2c3f32ddc121f0f173 extends Mustache_Template
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
        $buffer .= $indent . '	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
';
        $buffer .= $indent . '	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
';
        $buffer .= $indent . '	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
';
        $buffer .= $indent . '	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
';
        $buffer .= $indent . '	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
';
        $buffer .= $indent . '	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
';
        $buffer .= $indent . '	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
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
        $buffer .= $this->section019fc6931c090a88435c3fd2fb608ac5($context, $indent, $context->find('isLoginPage'));
        $buffer .= $indent . '	</script>
';
        $buffer .= $indent . '</html>';

        return $buffer;
    }

    private function section5238fd8e16eb7e6d8780f5f5e0af3dfc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
				toastr.warning(\'\' ,\'Login failed, please try again\');
		';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '				toastr.warning(\'\' ,\'Login failed, please try again\');
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section019fc6931c090a88435c3fd2fb608ac5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        if (!is_string($value) && is_callable($value)) {
            $source = '
		$(document).ready(initLoginPage);
		function initLoginPage(){
			$(\'#loginButton\').click(twitterLogin);
		}
		function twitterLogin(){
			window.location.href = \'{{base}}\' + \'Welcome/signInWithTwitter\';
		}
		{{#loginFailed}}
				toastr.warning(\'\' ,\'Login failed, please try again\');
		{{/loginFailed}}
		';
            $buffer .= $this->mustache
                ->loadLambda((string) call_user_func($value, $source, $this->lambdaHelper))
                ->renderInternal($context);
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                $buffer .= $indent . '		$(document).ready(initLoginPage);
';
                $buffer .= $indent . '		function initLoginPage(){
';
                $buffer .= $indent . '			$(\'#loginButton\').click(twitterLogin);
';
                $buffer .= $indent . '		}
';
                $buffer .= $indent . '		function twitterLogin(){
';
                $buffer .= $indent . '			window.location.href = \'';
                $value = $this->resolveValue($context->find('base'), $context, $indent);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '\' + \'Welcome/signInWithTwitter\';
';
                $buffer .= $indent . '		}
';
                // 'loginFailed' section
                $buffer .= $this->section5238fd8e16eb7e6d8780f5f5e0af3dfc($context, $indent, $context->find('loginFailed'));
                $context->pop();
            }
        }
    
        return $buffer;
    }
}
