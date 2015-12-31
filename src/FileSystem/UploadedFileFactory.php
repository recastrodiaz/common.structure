<?php

namespace Dms\Common\Structure\FileSystem;

use Dms\Core\File\IUploadedFile;

/**
 * The uploaded file factory class.
 *
 * @author Elliot Levin <elliotlevin@hotmail.com>
 */
class UploadedFileFactory
{
    /**
     * Builds a new uploaded file instance based on the given mime type.
     *
     * @param string      $fullPath
     * @param int         $uploadStatus
     * @param string|null $clientFileName
     * @param string|null $clientMimeType
     *
     * @return IUploadedFile
     */
    public static function build($fullPath, $uploadStatus, $clientFileName = null, $clientMimeType = null)
    {
        if ($clientMimeType && stripos($clientMimeType, 'image') === 0) {
            return new UploadedImage(
                    $fullPath,
                    $uploadStatus,
                    $clientFileName,
                    $clientMimeType
            );
        } else {
            return new UploadedFile(
                    $fullPath,
                    $uploadStatus,
                    $clientFileName,
                    $clientMimeType
            );
        }
    }
}