<?php

namespace Kendo\UI;

class ChipList extends \Kendo\UI\Widget {
    public function name() {
        return 'ChipList';
    }
//>> Properties

    /**
    * Specifies the background and border styles of the Chip items. Valid fillMode options are: solid (default); outline or none.
    * @param string $value
    * @return \Kendo\UI\ChipList
    */
    public function fillMode($value) {
        return $this->setProperty('fillMode', $value);
    }

    /**
    * Specifies the size of the chip. Valid options are small, medium, large, full and none.
    * @param string $value
    * @return \Kendo\UI\ChipList
    */
    public function rounded($value) {
        return $this->setProperty('rounded', $value);
    }

    /**
    * Specifies the gap between the Chips in the ChipList. Valid options are small, medium, large and none.
    * @param string $value
    * @return \Kendo\UI\ChipList
    */
    public function size($value) {
        return $this->setProperty('size', $value);
    }

    /**
    * Specifies the size of the chip. Valid options are small, medium, large and none.
    * @param string $value
    * @return \Kendo\UI\ChipList
    */
    public function itemSize($value) {
        return $this->setProperty('itemSize', $value);
    }

    /**
    * Sets the selection mode of the ChipList.The available values are: none (default); single or multiple.
    * @param string $value
    * @return \Kendo\UI\ChipList
    */
    public function selectable($value) {
        return $this->setProperty('selectable', $value);
    }

    /**
    * Specifies if the Chip items will be removable or not. If the property is set to true, the Chip renders a remove icon.
    * @param boolean $value
    * @return \Kendo\UI\ChipList
    */
    public function removable($value) {
        return $this->setProperty('removable', $value);
    }

    /**
    * Adds ChipListItem to the ChipList.
    * @param \Kendo\UI\ChipListItem|array,... $value one or more ChipListItem to add.
    * @return \Kendo\UI\ChipList
    */
    public function addItem($value) {
        return $this->add('items', func_get_args());
    }

    /**
    * Sets the select event of the ChipList.
    * Fires when the user changes a Chip selection in the ChipList.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\ChipList
    */
    public function select($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('select', $value);
    }

    /**
    * Sets the remove event of the ChipList.
    * Fires when the user clicks the remove icon of the Chip.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\ChipList
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
