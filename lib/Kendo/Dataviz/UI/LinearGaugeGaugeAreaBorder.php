<?php

namespace Kendo\Dataviz\UI;

class LinearGaugeGaugeAreaBorder extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The color of the border. Any valid CSS color string will work here, including hex and rgb.
    * @param string $value
    * @return \Kendo\Dataviz\UI\LinearGaugeGaugeAreaBorder
    */
    public function color($value) {
        return $this->setProperty('color', $value);
    }

    /**
    * The dash type of the border.
    * @param string $value
    * @return \Kendo\Dataviz\UI\LinearGaugeGaugeAreaBorder
    */
    public function dashType($value) {
        return $this->setProperty('dashType', $value);
    }

    /**
    * The width of the border.#### Example - set gaugeArea border width
    * @param float $value
    * @return \Kendo\Dataviz\UI\LinearGaugeGaugeAreaBorder
    */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

//<< Properties
}

?>
