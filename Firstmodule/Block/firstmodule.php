<?php
/**
 * Created by PhpStorm.
 * User: liviab
 * Date: 1/22/18
 * Time: 9:02 AM
 */


namespace Livia\Firstmodule\Block;

class Firstmodule extends \Magento\Framework\View\Element\Template
{
    public function getTxt()
    {
        return 'Test first module!';
    }
}