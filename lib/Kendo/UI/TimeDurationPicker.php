<?php

namespace Kendo\UI;

class TimeDurationPicker extends \Kendo\UI\Widget {
    public function name() {
        return 'TimeDurationPicker';
    }
//>> Properties

    /**
    * Adds TimeDurationPickerColumn to the TimeDurationPicker.
    * @param \Kendo\UI\TimeDurationPickerColumn|array,... $value one or more TimeDurationPickerColumn to add.
    * @return \Kendo\UI\TimeDurationPicker
    */
    public function addColumn($value) {
        return $this->add('columns', func_get_args());
    }

    /**
    * If set to false, the widget will be disabled and will not allow user input. The widget is enabled by default and allows user input.
    * @param boolean $value
    * @return \Kendo\UI\TimeDurationPicker
    */
    public function enable($value) {
        return $this->setProperty('enable', $value);
    }

    /**
    * Sets a value controlling how the color is applied. Can also be set to the following string values: "solid"; "flat"; "outline" or "none".
    * @param string $value
    * @return \Kendo\UI\TimeDurationPicker
    */
    public function fillMode($value) {
        return $this->setProperty('fillMode', $value);
    }

    /**
    * Allows localization of the strings that are used in the widget.
    * @param \Kendo\UI\TimeDurationPickerMessages|array $value
    * @return \Kendo\UI\TimeDurationPicker
    */
    public function messages($value) {
        return $this->setProperty('messages', $value);
    }

    /**
    * If set to true, the widget will be readonly and will not allow user input. The widget is not readonly by default and allows user input.
    * @param boolean $value
    * @return \Kendo\UI\TimeDurationPicker
    */
    public function readonly($value) {
        return $this->setProperty('readonly', $value);
    }

    /**
    * Sets a value controlling the border radius. Can also be set to the following string values: "small"; "medium"; "large"; "full" or "none".
    * @param string $value
    * @return \Kendo\UI\TimeDurationPicker
    */
    public function rounded($value) {
        return $this->setProperty('rounded', $value);
    }

    /**
    * Sets a string value that is used to devide the different column values inside the input. The value must be a single character, you cannot use more than one character as a separator.
    * @param string $value
    * @return \Kendo\UI\TimeDurationPicker
    */
    public function separator($value) {
        return $this->setProperty('separator', $value);
    }

    /**
    * Adds TimeDurationPickerShortcut to the TimeDurationPicker.
    * @param \Kendo\UI\TimeDurationPickerShortcut|array,... $value one or more TimeDurationPickerShortcut to add.
    * @return \Kendo\UI\TimeDurationPicker
    */
    public function addShortcut($value) {
        return $this->add('shortcuts', func_get_args());
    }

    /**
    * The value of the widget in milliseconds
    * @param float $value
    * @return \Kendo\UI\TimeDurationPicker
    */
    public function value($value) {
        return $this->setProperty('value', $value);
    }

    /**
    * Sets a value controlling size of the component. Can also be set to the following string values: "small"; "medium"; "large" or "none".
    * @param string $value
    * @return \Kendo\UI\TimeDurationPicker
    */
    public function size($value) {
        return $this->setProperty('size', $value);
    }

    /**
    * Sets the change event of the TimeDurationPicker.
    * Fired when the value of the widget is changed by the user.The event handler function context (available via the this keyword) will be set to the widget instance.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\TimeDurationPicker
    */
    public function change($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('change', $value);
    }

    /**
    * Sets the close event of the TimeDurationPicker.
    * Fires when the popup  is closed
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\TimeDurationPicker
    */
    public function close($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('close', $value);
    }

    /**
    * Sets the open event of the TimeDurationPicker.
    * Fires when the time drop-down list is opened
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\TimeDurationPicker
    */
    public function open($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('open', $value);
    }


//<< Properties
}

?>
