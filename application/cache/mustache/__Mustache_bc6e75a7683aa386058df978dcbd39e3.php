<?php

class __Mustache_bc6e75a7683aa386058df978dcbd39e3 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . 'dskjndfkn
';
        $buffer .= $indent . '
';
        $value = $this->resolveValue($context->find('base'), $context, $indent);
        $buffer .= $indent . call_user_func($this->mustache->getEscape(), $value);

        return $buffer;
    }
}
