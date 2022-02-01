<?php namespace Anomaly\WysiwygWidgetExtension;

use Anomaly\WysiwygWidgetExtension\Command\LoadWidget;
use Anomaly\DashboardModule\Widget\Contract\WidgetInterface;
use Anomaly\DashboardModule\Widget\Extension\WidgetExtension;

class WysiwygWidgetExtension extends WidgetExtension
{

    /**
     * This extension provides the WYSIWYG
     * widget for the Dashboard module.
     *
     * @var string
     */
    protected $provides = 'anomaly.module.dashboard::widget.wysiwyg';

    /**
     * Load the widget data.
     *
     * @param WidgetInterface $widget
     */
    protected function load(WidgetInterface $widget)
    {
        $this->dispatch(new LoadWidget($widget));

        parent::load($widget);
    }

}
