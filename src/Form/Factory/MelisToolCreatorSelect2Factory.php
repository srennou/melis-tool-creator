<?php

/**
 * Melis Technology (http://www.melistechnology.com)
 *
 * @copyright Copyright (c) 2016 Melis Technology (http://www.melistechnology.com)
 *
 */

namespace MelisToolCreator\Form\Factory;

use Psr\Container\ContainerInterface;
use Laminas\Form\Element\Select;
use Laminas\ServiceManager\ServiceManager;

/**
 * MelisToolCreatorSelect using Select2
 *
 * Source:
 * https://select2.org/getting-started
 */

class MelisToolCreatorSelect2Factory
{
    /**
     * @return Select
     */
    public function __invoke()
    {
        $element = new Select;
        $element->setValueOptions($this->loadValueOptions());
        $element->setAttribute('meliscore-user-select2', true);
        return $element;
    }

    /**
     * @return array
     */
    protected function loadValueOptions()
    {
        $valueoptions['none'] = 'tr_melistoolcreator_validator_none';
        $valueoptions['digit-validator'] = 'tr_melistoolcreator_validator_digit';
        $valueoptions['email-validator'] = 'tr_melistoolcreator_validator_email';
        $valueoptions['date-validator'] = 'tr_melistoolcreator_validator_date';
        return $valueoptions;
    }
}

