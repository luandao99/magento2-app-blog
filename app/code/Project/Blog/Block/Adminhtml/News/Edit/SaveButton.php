<?php
namespace Project\Blog\Block\Adminhtml\News\Edit;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;
/**
 * Class SaveButton
 * @package Magento\Customer\Block\Adminhtml\Edit
 */
class SaveButton extends ButtonGeneric implements ButtonProviderInterface
{
    /**
     * @return array
     */
    public function getButtonData()
    {
        return [
            'label' => __('Save'),
            'class' => 'save primary',
            'data_attribute' => [
                'mage-init' => [
                    'buttonAdapter' => [
                        'actions' => [
                            [
                                'targetName' => 'news_listing_form.news_listing_form',
                                'actionName' => 'save',
                                'params' => [
                                    true,
                                    [
                                        'back' => 'continue'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            // 'class_name' => Container::SPLIT_BUTTON
        ];
    }

    // /**
    //  * Retrieve options
    //  *
    //  * @return array
    //  */
    // private function getOptions()
    // {
    //     $options = [
    //         [
    //             'label' => __('Save & Duplicate'),
    //             'id_hard' => 'save_and_duplicate',
    //             'data_attribute' => [
    //                 'mage-init' => [
    //                     'buttonAdapter' => [
    //                         'actions' => [
    //                             [
    //                                 'targetName' => 'news_listing_form.news_listing_form',
    //                                 'actionName' => 'save',
    //                                 'params' => [
    //                                     true,
    //                                     [
    //                                         'back' => 'duplicate'
    //                                     ]
    //                                 ]
    //                             ]
    //                         ]
    //                     ]
    //                 ]
    //             ]
    //         ],
    //         [
    //             'id_hard' => 'save_and_close',
    //             'label' => __('Save & Close'),
    //             'data_attribute' => [
    //                 'mage-init' => [
    //                     'buttonAdapter' => [
    //                         'actions' => [
    //                             [
    //                                 'targetName' => 'news_listing_form.news_listing_form',
    //                                 'actionName' => 'save',
    //                                 'params' => [
    //                                     true,
    //                                     [
    //                                         'back' => 'close'
    //                                     ]
    //                                 ]
    //                             ]
    //                         ]
    //                     ]
    //                 ]
    //             ]
    //         ]
    //     ];

    //     return $options;
    // }
}
