<?php

namespace Botble\Marketplace\Forms\Fields;

use Illuminate\Support\Arr;
use Kris\LaravelFormBuilder\Fields\FormField;

class CustomImageField extends FormField
{

    /**
     * {@inheritDoc}
     */
    public function render(array $options = [], $showLabel = true, $showField = true, $showError = true)
    {
        $options['attr'] = Arr::set($options['attr'], 'class', Arr::get($options['attr'], 'class') . 'form-control');

        return parent::render($options, $showLabel, $showField, $showError);
    }

    /**
     * {@inheritDoc}
     */
    protected function getTemplate()
    {
        return 'plugins/marketplace::themes.dashboard.forms.fields.custom-image';
    }
}
