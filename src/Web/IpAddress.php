<?php declare(strict_types = 1);

namespace Dms\Common\Structure\Web;

use Dms\Common\Structure\Type\StringValueObject;
use Dms\Core\Exception\InvalidArgumentException;

/**
 * The ip address value object class
 *
 * @author Elliot Levin <elliotlevin@hotmail.com>
 */
class IpAddress extends StringValueObject
{
    /**
     * See http://stackoverflow.com/questions/1076714/max-length-for-client-ip-address
     */
    const MAX_LENGTH = 45;

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
        if (strlen($string) > self::MAX_LENGTH || !filter_var($string, FILTER_VALIDATE_IP)) {
            throw InvalidArgumentException::format(
                    'Cannot construct class %s: argument must be a valid ip address, \'%s\' given',
                    get_class($this), $string
            );
        }
    }
}