<?php

namespace Dms\Common\Structure\Web\Persistence;

use Dms\Common\Structure\Type\Persistence\StringValueObjectMapper;
use Dms\Common\Structure\Web\EmailAddress;
use Dms\Core\Persistence\Db\Mapping\Definition\Column\ColumnTypeDefiner;

/**
 * The email address value object mapper.
 *
 * @author Elliot Levin <elliotlevin@hotmail.com>
 */
class EmailAddressMapper extends StringValueObjectMapper
{
    /**
     * @inheritDoc
     */
    public function __construct($columnName = 'email')
    {
        parent::__construct($columnName);
    }

    /**
     * Gets the mapped class type.
     *
     * @return string
     */
    protected function classType()
    {
        return EmailAddress::class;
    }

    /**
     * Defines the column type for the string property.
     *
     * @param ColumnTypeDefiner $stringColumn
     *
     * @return void
     */
    protected function defineStringColumnType(ColumnTypeDefiner $stringColumn)
    {
        $stringColumn->asVarchar(EmailAddress::MAX_LENGTH);
    }
}