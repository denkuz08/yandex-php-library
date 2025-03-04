<?php

namespace Yandex\Metrica\Stat\Models;

use Yandex\Common\Model;
use Yandex\Common\StringCollection;

class TableParams extends Model
{

    protected $id = null;

    protected $preset = null;

    /**
     * @var null|StringCollection
     */
    protected $dimensions = null;

    /**
     * @var null|StringCollection
     */
    protected $metrics = null;

    /**
     * @var null|StringCollection
     */
    protected $sort = null;
    
    /**
     * @var null|StringCollection
     */
    protected $directClientLogins = null;
    
    protected $limit = null;

    protected $offset = null;

    protected $date1 = null;

    protected $date2 = null;

    protected $filters = null;

    protected $accuracy = null;

    protected $callback = null;

    protected $includeUndefined = null;

    protected $lang = null;

    protected $pretty = null;

    protected $mappingClasses = [];

    protected $propNameMap = [
        'include_undefined' => 'includeUndefined',
        'direct_client_logins' => 'directClientLogins',
    ];

    /**
     * Retrieve the id property
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the id property
     *
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Retrieve the preset property
     *
     * @return string|null
     */
    public function getPreset()
    {
        return $this->preset;
    }

    /**
     * Set the preset property
     *
     * @param string $preset
     * @return $this
     */
    public function setPreset($preset)
    {
        $this->preset = $preset;
        return $this;
    }

    /**
     * Retrieve the dimensions property
     *
     * @return string[]|null
     */
    public function getDimensions()
    {
        return is_null($this->dimensions) ? null : $this->dimensions->asArray();
    }

    /**
     * Set the dimensions property
     *
     * @param string|string[]|null $dimensions
     * @return $this
     */
    public function setDimensions($dimensions)
    {
        $this->dimensions = StringCollection::init($dimensions);
        return $this;
    }

    /**
     * Retrieve the metrics property
     *
     * @return string[]|null
     */
    public function getMetrics()
    {
        return is_null($this->metrics) ? null : $this->metrics->asArray();
    }

    /**
     * Set the metrics property
     *
     * @param string[]|string|null $metrics
     * @return $this
     */
    public function setMetrics($metrics)
    {
        $this->metrics = StringCollection::init($metrics);
        return $this;
    }

    /**
     * Retrieve the sort property
     *
     * @return string[]|null
     */
    public function getSort()
    {
        return is_null($this->sort) ? null : $this->sort->asArray();
    }

    /**
     * Set the sort property
     *
     * @param string|string[]|null $sort
     * @return $this
     */
    public function setSort($sort)
    {
        $this->sort = StringCollection::init($sort);
        return $this;
    }
    
    /**
     * Retrieve the directClientLogins property
     *
     * @return string[]|null
     */
    public function getDirectClientLogins()
    {
        return is_null($this->directClientLogins) ? null : $this->directClientLogins->asArray();
    }
    
    /**
     * Set the directClientLogins property
     *
     * @param string|string[]|null $directClientLogins
     * @return $this
     */
    public function setDirectClientLogins($directClientLogins)
    {
        $this->directClientLogins = StringCollection::init($directClientLogins);
        return $this;
    }

    /**
     * Retrieve the limit property
     *
     * @return int|null
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * Set the limit property
     *
     * @param int $limit
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * Retrieve the offset property
     *
     * @return int|null
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * Set the offset property
     *
     * @param int $offset
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
        return $this;
    }

    /**
     * Retrieve the date1 property
     *
     * @return string|null
     */
    public function getDate1()
    {
        return $this->date1;
    }

    /**
     * Set the date1 property
     *
     * @param string $date1
     * @return $this
     */
    public function setDate1($date1)
    {
        $this->date1 = $date1;
        return $this;
    }

    /**
     * Retrieve the date2 property
     *
     * @return string|null
     */
    public function getDate2()
    {
        return $this->date2;
    }

    /**
     * Set the date2 property
     *
     * @param string $date2
     * @return $this
     */
    public function setDate2($date2)
    {
        $this->date2 = $date2;
        return $this;
    }

    /**
     * Retrieve the filters property
     *
     * @return string|null
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * Set the filters property
     *
     * @param string $filters
     * @return $this
     */
    public function setFilters($filters)
    {
        $this->filters = $filters;
        return $this;
    }

    /**
     * Retrieve the accuracy property
     *
     * @return string|null
     */
    public function getAccuracy()
    {
        return $this->accuracy;
    }

    /**
     * Set the accuracy property
     *
     * @param string $accuracy
     * @return $this
     */
    public function setAccuracy($accuracy)
    {
        $this->accuracy = $accuracy;
        return $this;
    }

    /**
     * Retrieve the callback property
     *
     * @return string|null
     */
    public function getCallback()
    {
        return $this->callback;
    }

    /**
     * Set the callback property
     *
     * @param string $callback
     * @return $this
     */
    public function setCallback($callback)
    {
        $this->callback = $callback;
        return $this;
    }

    /**
     * Retrieve the includeUndefined property
     *
     * @return bool|null
     */
    public function getIncludeUndefined()
    {
        return $this->includeUndefined;
    }

    /**
     * Set the includeUndefined property
     *
     * @param bool $includeUndefined
     * @return $this
     */
    public function setIncludeUndefined($includeUndefined)
    {
        $this->includeUndefined = $includeUndefined;
        return $this;
    }

    /**
     * Retrieve the lang property
     *
     * @return string|null
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Set the lang property
     *
     * @param string $lang
     * @return $this
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
        return $this;
    }

    /**
     * Retrieve the pretty property
     *
     * @return bool|null
     */
    public function getPretty()
    {
        return $this->pretty;
    }

    /**
     * Set the pretty property
     *
     * @param bool $pretty
     * @return $this
     */
    public function setPretty($pretty)
    {
        $this->pretty = $pretty;
        return $this;
    }
}
