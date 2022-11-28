<?php
namespace Testvendor\Breadcrumbs\Plugins\Block\Html;
use Magento\Theme\Block\Html\Footer;

class ChangeCopyrightInfo 
{
    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
  

    public function afterGetCopyright(Footer $subject, $result)
    {
        return str_replace("Magento","Adobe Commerce", $result);
    }
}
