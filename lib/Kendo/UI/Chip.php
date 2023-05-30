<?php

namespace Kendo\UI;

class Chip extends \Kendo\UI\Widget {
    public function name() {
        return 'Chip';
    }
//>> Properties

    /**
    * Defines the name for an existing icon in a Kendo UI theme or SVG content. The icon is rendered inside the chip by a span.k-icon or span.k-svg-icon element.See web font icons help article for more details on Kendo UI icons.
    * @param string $value
    * @return \Kendo\UI\Chip
    */
    public function icon($value) {
        return $this->setProperty('icon', $value);
    }

    /**
    * If set, value will be appended to the icon's element class attribute.
    * @param string $value
    * @return \Kendo\UI\Chip
    */
    public function iconClass($value) {
        return $this->setProperty('iconClass', $value);
    }

    /**
    * If set, value will be appended to the icon's element class attribute. It also appends "k-chip avatar" and "k-avatar" classes to the icon's element.
    * @param string $value
    * @return \Kendo\UI\Chip
    */
    public function avatarClass($value) {
        return $this->setProperty('avatarClass', $value);
    }

    /**
    * Defines the name for an existing icon in a Kendo UI theme or SVG content for the remove button when removable=true. The icon is rendered inside the chip by a span.k-icon or span.k-svg-icon element.See web font icons help article for more details on Kendo UI icons.
    * @param string $value
    * @return \Kendo\UI\Chip
    */
    public function removeIcon($value) {
        return $this->setProperty('removeIcon', $value);
    }

    /**
    * If set, value will be appended to the remove icon's element class attribute.
    * @param string $value
    * @return \Kendo\UI\Chip
    */
    public function removeIconClass($value) {
        return $this->setProperty('removeIconClass', $value);
    }

    /**
    * Specifies the background and border styles of the Chip. Valid fillMode options are: solid (default) or outline.
    * @param string $value
    * @return \Kendo\UI\Chip
    */
    public function fillMode($value) {
        return $this->setProperty('fillMode', $value);
    }

    /**
    * Specifies the size of the chip. Valid options are small, medium, large, full and none.
    * @param string $value
    * @return \Kendo\UI\Chip
    */
    public function rounded($value) {
        return $this->setProperty('rounded', $value);
    }

    /**
    * Specifies the size of the chip. Valid options are small, medium, large and none.
    * @param string $value
    * @return \Kendo\UI\Chip
    */
    public function size($value) {
        return $this->setProperty('size', $value);
    }

    /**
    * The label text of the chip. Default is empty string.
    * @param string $value
    * @return \Kendo\UI\Chip
    */
    public function label($value) {
        return $this->setProperty('label', $value);
    }

    /**
    * Specifies the theme color of the component. Valid options are base: apply coloring based on surface theme color.; info: apply coloring based on info theme color.; success: apply coloring based on success theme color.; warning:apply coloring based on warning theme color. or error: apply coloring based on error theme color..
    * @param string $value
    * @return \Kendo\UI\Chip
    */
    public function themeColor($value) {
        return $this->setProperty('themeColor', $value);
    }

    /**
    * Specifies if the Chip will be removable or not. If the property is set to true, the Chip renders a remove icon.
    * @param boolean $value
    * @return \Kendo\UI\Chip
    */
    public function removable($value) {
        return $this->setProperty('removable', $value);
    }

    /**
    * Sets whether the Chip can be selected.
    * @param boolean $value
    * @return \Kendo\UI\Chip
    */
    public function selectable($value) {
        return $this->setProperty('selectable', $value);
    }

    /**
    * Toggles the selected state of the Chip.
    * @param boolean $value
    * @return \Kendo\UI\Chip
    */
    public function selected($value) {
        return $this->setProperty('selected', $value);
    }

    /**
    * Toggles the enabled state of the Chip.
    * @param boolean $value
    * @return \Kendo\UI\Chip
    */
    public function enabled($value) {
        return $this->setProperty('enabled', $value);
    }

    /**
    * Defines custom attributes of the Chip's element.
    * @param  $value
    * @return \Kendo\UI\Chip
    */
    public function attributes($value) {
        return $this->setProperty('attributes', $value);
    }

    /**
    * Sets the click event of the Chip.
    * Fires when the user clicks the content of the Chip or activates it with the Enter or Space keys.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\Chip
    */
    public function click($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('click', $value);
    }

    /**
    * Sets the select event of the Chip.
    * Fires when the selection of a selectable the Chip toggles.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\Chip
    */
    public function select($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('select', $value);
    }

    /**
    * Sets the remove event of the Chip.
    * Fires when the user clicks the remove icon of the Chip. After this event, the Chip will not remove itself.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\Chip
    */
    public function remove($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('remove', $value);
    }


//<< Properties
}

?>
