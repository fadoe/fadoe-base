<?php

namespace FadoeBase\Entity;

use Zend\InputFilter\InputFilterAwareInterface;
use Zend\Stdlib\ArraySerializableInterface;

interface EntityInterface extends InputFilterAwareInterface, ArraySerializableInterface
{

}
