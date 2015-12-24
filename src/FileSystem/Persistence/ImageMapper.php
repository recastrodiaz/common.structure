<?php

namespace Dms\Common\Structure\FileSystem\Persistence;

use Dms\Common\Structure\FileSystem\Image;
use Dms\Common\Structure\FileSystem\RelativePathCalculator;

/**
 * The image value object mapper.
 *
 * @author Elliot Levin <elliotlevin@hotmail.com>
 */
class ImageMapper extends FileOrDirectoryMapper
{
    /**
     * ImageMapper constructor.
     *
     * @param string                      $filePathColumnName
     * @param string|null                 $baseDirectoryPath
     * @param RelativePathCalculator|null $relativePathCalculator
     */
    public function __construct(
            $filePathColumnName = 'image',
            $baseDirectoryPath = null,
            RelativePathCalculator $relativePathCalculator = null
    ) {
        parent::__construct($filePathColumnName, $baseDirectoryPath, $relativePathCalculator);
    }

    /**
     * @return string
     */
    protected function classType()
    {
        return Image::class;
    }

    /**
     * @return string
     */
    protected function fullPathPropertyName()
    {
        return Image::FULL_PATH;
    }
}