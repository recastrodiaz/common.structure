<?php declare(strict_types = 1);

namespace Dms\Common\Structure\Web;

use Dms\Common\Structure\Type\StringValueObject;
use Dms\Core\Exception\InvalidArgumentException;

/**
 * The url value object class
 *
 * @author Elliot Levin <elliotlevin@hotmail.com>
 */
class Url extends StringValueObject
{
    /**
     * @see http://stackoverflow.com/questions/219569/best-database-field-type-for-a-url
     */
    const MAX_LENGTH = 2083;


    /**
     * Validates the string is in the required format.
     *
     * @param string $string
     *
     * @return void
     * @throws InvalidArgumentException
     */
    protected function validateString(string $string)
    {
        if (strlen($string) > self::MAX_LENGTH || !filter_var($string, FILTER_VALIDATE_URL)) {
            throw InvalidArgumentException::format(
                    'Cannot construct class %s: argument must be a valid uri, \'%s\' given',
                    get_class($this), $string
            );
        }
    }
}