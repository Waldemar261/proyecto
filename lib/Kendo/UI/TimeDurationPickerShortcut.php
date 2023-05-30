<?php

namespace Kendo\UI;

class TimeDurationPickerShortcut extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The text that will be displayed in the button
    * @param string $value
    * @return \Kendo\UI\TimeDurationPickerShortcut
    */
    public function text($value) {
        return $this->setProperty('text', $value);
    }

    /**
    * The value of the timeframe in milliseconds
    * @param float $value
    * @return \Kendo\UI\TimeDurationPickerShortcut
    */
    public function value($value) {
        return $this->setProperty('value', $value);
    }

//<< Properties
}

?>
