<?php

namespace Kendo\Dataviz\UI;

class StockChartNavigator extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The category axis configuration options.
    * @param \Kendo\Dataviz\UI\StockChartNavigatorCategoryAxis|array $value
    * @return \Kendo\Dataviz\UI\StockChartNavigator
    */
    public function categoryAxis($value) {
        return $this->setProperty('categoryAxis', $value);
    }

    /**
    * Sets the data source of the StockChartNavigator.
    * @param array|\Kendo\Data\DataSource $value
    * @return \Kendo\Dataviz\UI\StockChartNavigator
    */
    public function dataSource($value) {
        return $this->setProperty('dataSource', $value);
    }

    /**
    * Indicates whether the navigator will call read on the data source initially. Applicable only when using a dedicated navigator data source.
    * @param boolean $value
    * @return \Kendo\Dataviz\UI\StockChartNavigator
    */
    public function autoBind($value) {
        return $this->setProperty('autoBind', $value);
    }

    /**
    * The field containing the point date. It is used as a default field for the navigator axis.The data item field value must be either:
    * @param string $value
    * @return \Kendo\Dataviz\UI\StockChartNavigator
    */
    public function dateField($value) {
        return $this->setProperty('dateField', $value);
    }

    /**
    * The navigator pane configuration.
    * @param \Kendo\Dataviz\UI\StockChartNavigatorPane|array $value
    * @return \Kendo\Dataviz\UI\StockChartNavigator
    */
    public function pane($value) {
        return $this->setProperty('pane', $value);
    }

    /**
    * The position of the navigator.The supported values are: "top" - the navigator is positioned on the top or "bottom" - the navigator is positioned on the bottom (default).
    * @param string $value
    * @return \Kendo\Dataviz\UI\StockChartNavigator
    */
    public function position($value) {
        return $this->setProperty('position', $value);
    }

    /**
    * Adds StockChartNavigatorSeriesItem to the StockChartNavigator.
    * @param \Kendo\Dataviz\UI\StockChartNavigatorSeriesItem|array,... $value one or more StockChartNavigatorSeriesItem to add.
    * @return \Kendo\Dataviz\UI\StockChartNavigator
    */
    public function addSeriesItem($value) {
        return $this->add('series', func_get_args());
    }

    /**
    * Specifies the initially selected range.The full range of values is shown if no range is specified.
    * @param \Kendo\Dataviz\UI\StockChartNavigatorSelect|array $value
    * @return \Kendo\Dataviz\UI\StockChartNavigator
    */
    public function select($value) {
        return $this->setProperty('select', $value);
    }

    /**
    * Default options for the navigator hint.
    * @param \Kendo\Dataviz\UI\StockChartNavigatorHint|array $value
    * @return \Kendo\Dataviz\UI\StockChartNavigator
    */
    public function hint($value) {
        return $this->setProperty('hint', $value);
    }

    /**
    * The visibility of the navigator.
    * @param boolean $value
    * @return \Kendo\Dataviz\UI\StockChartNavigator
    */
    public function visible($value) {
        return $this->setProperty('visible', $value);
    }

//<< Properties
}

?>
