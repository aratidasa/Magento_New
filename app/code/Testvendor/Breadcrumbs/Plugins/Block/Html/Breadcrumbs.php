<?php
namespace Testvendor\Breadcrumbs\Plugins\Block\Html;
use Magento\Theme\Block\Html\Breadcrumbs as originalClass;

class Breadcrumbs
{
  

    public function aroundAddCrumb(originalClass $subject, callable $proceed, 
    $crumbName,$crumbInfo
    )
    {
        $crumbInfo['label']  .= "(!a)";
        $proceed($crumbName,$crumbInfo);
    }
}
