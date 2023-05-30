<?php

namespace Kendo\UI;

class ChipListItem extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Defines the name for an existing icon in a Kendo UI theme or SVG content. The icon is rendered inside the chip by a span.k-icon or span.k-svg-icon element.See web font icons help article for more details on Kendo UI icons.
    * @param string $value
    * @return \Kendo\UI\ChipListItem
    */
    public function icon($value) {
        return $this->setProperty('icon', $value);
    }

    /**
    * If set, value will be appended to the icon's element class attribute.
    * @param string $value
    * @return \Kendo\UI\ChipListItem
    */
    public function iconClass($value) {
        return $this->setProperty('iconClass', $value);
    }

    /**
    * If set, value will be appended to the icon's element class attribute. It also appends "k-chip avatar" and "k-avatar" classes to the icon's element.
    * @param string $value
    * @return \Kendo\UI\ChipListItem
    */
    public function avatarClass($value) {
        return $this->setProperty('avatarClass', $value);
    }

    /**
    * The label text of the chip. Default is empty string.
    * @param string $value
    * @return \Kendo\UI\ChipListItem
    */
    public function label($value) {
        return $this->setProperty('label', $value);
    }

    /**
    * Specifies the theme color of the Chip item. Valid options are: base: apply coloring based on surface theme color.; info: apply coloring based on info theme color.; success: apply coloring based on success theme color.; warning:apply coloring based on warning theme color. or error: apply coloring based on error theme color..
    * @param string $value
    * @return \Kendo\UI\ChipListItem
    */
    public function themeColor($value) {
        return $this->setProperty('themeColor', $value);
    }

    /**
    * Toggles the selected state of the Chip.
    * @param boolean $value
    * @return \Kendo\UI\ChipListItem
    */
    public function selected($value) {
        return $this->setProperty('selected', $value);
    }

    /**
    * Toggles the enabled state of the Chip item.
    * @param boolean $value
    * @return \Kendo\UI\ChipListItem
    */
    public function enabled($value) {
        return $this->setProperty('enabled', $value);
    }

    /**
    * Defines custom attributes of the Chip's element.
    * @param  $value
    * @return \Kendo\UI\ChipListItem
    */
    public function attributes($value) {
        return $this->setProperty('attributes', $value);
    }

//<< Properties
}

?>
