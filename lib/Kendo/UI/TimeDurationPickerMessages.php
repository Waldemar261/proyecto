<?php

namespace Kendo\UI;

class TimeDurationPickerMessages extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Allows customization of the cancel button inside the popup.
    * @param string $value
    * @return \Kendo\UI\TimeDurationPickerMessages
    */
    public function cancel($value) {
        return $this->setProperty('cancel', $value);
    }

    /**
    * Sets the title of the days column in the popup
    * @param string $value
    * @return \Kendo\UI\TimeDurationPickerMessages
    */
    public function days($value) {
        return $this->setProperty('days', $value);
    }

    /**
    * Sets the title of the hours column in the popup
    * @param string $value
    * @return \Kendo\UI\TimeDurationPickerMessages
    */
    public function hours($value) {
        return $this->setProperty('hours', $value);
    }

    /**
    * Sets the title of the milliseconds column in the popup
    * @param string $value
    * @return \Kendo\UI\TimeDurationPickerMessages
    */
    public function milliseconds($value) {
        return $this->setProperty('milliseconds', $value);
    }

    /**
    * Sets the title of the minutes column in the popup
    * @param string $value
    * @return \Kendo\UI\TimeDurationPickerMessages
    */
    public function minutes($value) {
        return $this->setProperty('minutes', $value);
    }

    /**
    * Sets the title of the seconds column in the popup
    * @param string $value
    * @return \Kendo\UI\TimeDurationPickerMessages
    */
    public function seconds($value) {
        return $this->setProperty('seconds', $value);
    }

    /**
    * Sets the title of the set button in the popup
    * @param string $value
    * @return \Kendo\UI\TimeDurationPickerMessages
    */
    public function set($value) {
        return $this->setProperty('set', $value);
    }

//<< Properties
}

?>
