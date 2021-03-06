<?php declare(strict_types = 1);

namespace Dms\Common\Structure\DateTime\Persistence;

use Dms\Core\Persistence\Db\Mapping\IndependentValueObjectMapper;

/**
 * The date or time range value object mapper base class
 *
 * @author Elliot Levin <elliotlevin@hotmail.com>
 */
abstract class DateOrTimeRangeMapper extends IndependentValueObjectMapper
{
    /**
     * @var string
     */
    protected $startColumnName;

    /**
     * @var string
     */
    protected $endColumnName;

    /**
     * DateOrTimeRangeMapper constructor.
     *
     * @param string $startColumnName
     * @param string $endColumnName
     */
    public function __construct(string $startColumnName, string $endColumnName)
    {
        $this->startColumnName = $startColumnName;
        $this->endColumnName   = $endColumnName;
        parent::__construct();
    }
}