<?php
namespace Testvendor\Blog\Block;

class Recent extends \Magento\Framework\View\Element\Template
{
    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    private function getBlogs()
    {
        $blog= [
            [
                'title'=>'Blog Title 1',
                'content'=>'This is the first blog content'
            ],
            [
                'title'=>'Blog Title 2',
                'content'=>'This is the second blog content'
            ],
            [
                'title'=>'Blog Title 3',
                'content'=>'This is the third blog content'
            ],

        ];
        return $blog;
    }

    public function getRecentBlogs()
    {
        return $this->getBlogs();
    }
}

    

