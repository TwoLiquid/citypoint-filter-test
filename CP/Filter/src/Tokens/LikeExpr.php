<?php
namespace CP\Filter\Tokens;

class LikeExpr extends BinaryExpression{

    public function apply($data)
    {
        $left = $this->left->apply($data);
        $right = $this->right->apply($data);

        return preg_match('/^' . $right . '/i', $left);
    }

}
