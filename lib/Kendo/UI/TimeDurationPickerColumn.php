<?php

namespace Kendo\UI;

class TimeDurationPickerColumn extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The format that will be used to display the column value in the input. The amount of # symbols should be equal to the largest amount of digits that the time unit can hold.
    * @param string $value
    * @return \Kendo\UI\TimeDurationPickerColumn
    */
    public function format($value) {
        return $this->setProperty('format', $value);
    }

    /**
    * Sets the maximum time unit value.
    * @param float $value
    * @return \Kendo\UI\TimeDurationPickerColumn
    */
    public function max($value) {
        return $this->setProperty('max', $value);
    }

    /**
    * Sets the minimum time unit value.
    * @param float $value
    * @return \Kendo\UI\TimeDurationPickerColumn
    */
    public function min($value) {
        return $this->setProperty('min', $value);
    }

    /**
    * Specifies the name of the time unit the column will hold. Can be set to the following values: "days"; "hours"; "minutes"; "seconds" or "milliseconds".
    * @param string $value
    * @return \Kendo\UI\TimeDurationPickerColumn
    */
    public function name($value) {
        return $this->setProperty('name', $value);
    }

    /**
    * Specifies the value used to increment or decrement the column value
    * @param float $value
    * @return \Kendo\UI\TimeDurationPickerColumn
    */
    public function step($value) {
        return $this->setProperty('step', $value);
    }

//<< Properties
}

?>
