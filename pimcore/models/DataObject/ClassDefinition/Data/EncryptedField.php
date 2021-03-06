<?php
/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @category   Pimcore
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace Pimcore\Model\DataObject\ClassDefinition\Data;

use Defuse\Crypto\Crypto;
use Defuse\Crypto\Key;
use Pimcore\Logger;
use Pimcore\Model;

/**
 * Class EncryptedField
 *
 * @package Pimcore\Model\DataObject\ClassDefinition\Data
 *
 * How to generate a key: vendor/bin/generate-defuse-key
 */
class EncryptedField extends Model\DataObject\ClassDefinition\Data
{
    /**
     * don't throw an error it encrypted field cannot be decoded (default)
     */
    const STRICT_DISABLED = 0;

    /**
     * throw an error it encrypted field cannot be decoded (default)
     */
    const STRICT_ENABLED = 1;

    /**
     * @var bool
     */
    private static $strictMode = 1;

    /**
     * Static type of this element
     *
     * @var string
     */
    public $fieldtype = 'encryptedField';

    /**
     * @var string
     */
    public $delegateDatatype;

    /**
     * @var Model\DataObject\ClassDefinition\Data
     */
    public $delegate;

    /**
     * Type for the column to query
     *
     * @var array
     */
    public $queryColumnType = null;

    /**
     * Type for the column
     *
     * @var array
     */
    public $columnType = 'LONGBLOB';

    /**
     * Type for the generated phpdoc
     *
     * @var string
     */
    public $phpdocType;

    /**
     * @see Model\DataObject\ClassDefinition\Data::getDataForResource
     *
     * @param string $data
     * @param null|Model\DataObject\AbstractObject $object
     * @param mixed $params
     *
     * @return array
     */
    public function getDataForResource($data, $object = null, $params = [])
    {
        $fd = $this->getDelegateDatatypeDefinition();
        if ($fd) {
            $result = $fd->getDataForResource($data, $object, $params);
            $result = $this->encrypt($result, $object, $params);

            return $result;
        }
    }

    /**
     * @param $data
     * @param $object
     * @param array $params
     *
     * @return string
     *
     * @throws \Defuse\Crypto\Exception\BadFormatException
     * @throws \Defuse\Crypto\Exception\EnvironmentIsBrokenException
     */
    public function encrypt($data, $object, $params = [])
    {
        if (!is_null($data)) {
            $key = \Pimcore::getContainer()->getParameter('secret');
            $key = Key::loadFromAsciiSafeString($key);
            // store it in raw binary mode to preserve space
            if (method_exists($this->delegate, 'marshalBeforeEncryption')) {
                $data = $this->delegate->marshalBeforeEncryption($data, $object, $params);
            }
            $data = Crypto::encrypt($data, $key, true);
        }

        return $data;
    }

    /**
     * @param $data
     * @param $object
     * @param array $params
     *
     * @return string
     *
     * @throws \Exception
     */
    public function decrypt($data, $object, $params = [])
    {
        if ($data) {
            try {
                $key = \Pimcore::getContainer()->getParameter('secret');
                $key = Key::loadFromAsciiSafeString($key);
                $data = Crypto::decrypt($data, $key, true);

                if (method_exists($this->delegate, 'unmarshalAfterDecryption')) {
                    $data = $this->delegate->unmarshalAfterDecryption($data, $object, $params);
                }

                return $data;
            } catch (\Exception $e) {
                Logger::error($e);
                if (self::isStrictMode()) {
                    throw new \Exception('encrypted field ' . $this->getName() . ' cannot be decoded');
                }
            }
        }
    }

    /**
     * @see Model\DataObject\ClassDefinition\Data::getDataFromResource
     *
     * @param string $data
     * @param null|Model\DataObject\AbstractObject $object
     * @param mixed $params
     *
     * @return Model\DataObject\Data\RgbaColor|null
     */
    public function getDataFromResource($data, $object = null, $params = [])
    {
        $fd = $this->getDelegateDatatypeDefinition();
        if ($fd) {
            $data = $this->decrypt($data, $object, $params);
            $data = $fd->getDataFromResource($data, $object, $params);

            return $data;
        }
    }

    /**
     * @see Model\DataObject\ClassDefinition\Data::getDataForQueryResource
     *
     * @param string $data
     * @param null|Model\DataObject\AbstractObject $object
     * @param mixed $params
     *
     * @return array
     */
    public function getDataForQueryResource($data, $object = null, $params = [])
    {
        return null;
    }

    /**
     * @see Model\DataObject\ClassDefinition\Data::getDataForEditmode
     *
     * @param string $data
     * @param null|Model\DataObject\AbstractObject $object
     * @param mixed $params
     *
     * @return string
     */
    public function getDataForEditmode($data, $object = null, $params = [])
    {
        $fd = $this->getDelegateDatatypeDefinition();
        if ($fd) {
            $result = $fd->getDataForEditmode($data, $object, $params);

            return $result;
        }
    }

    /**
     * @see Model\DataObject\ClassDefinition\Data::getDataFromEditmode
     *
     * @param string $data
     * @param null|Model\DataObject\AbstractObject $object
     * @param mixed $params
     *
     * @return Model\DataObject\Data\RgbaColor|null
     */
    public function getDataFromEditmode($data, $object = null, $params = [])
    {
        $fd = $this->getDelegateDatatypeDefinition();
        if ($fd) {
            $result = $fd->getDataFromEditmode($data, $object, $params);

            return $result;
        }
    }

    /**
     * @param float $data
     * @param Model\DataObject\Concrete $object
     * @param mixed $params
     *
     * @return float
     */
    public function getDataFromGridEditor($data, $object = null, $params = [])
    {
        $fd = $this->getDelegateDatatypeDefinition();
        if ($fd && method_exists($fd, 'getDataFromGridEditor')) {
            $data = $fd->getDataFromGridEditor($data, $object, $params);
        }

        return $data;
    }

    /**
     * @return string
     */
    public function getQueryColumnType()
    {
        return null;
    }

    /**
     * @return string
     */
    public function getColumnType()
    {
        return 'LONGBLOB';
    }

    /**
     * Checks if data is valid for current data field
     *
     * @param mixed $data
     * @param bool $omitMandatoryCheck
     *
     * @throws \Exception
     */
    public function checkValidity($data, $omitMandatoryCheck = false)
    {
        $fd = $this->getDelegateDatatypeDefinition();
        if ($fd) {
            $result = $fd->checkValidity($data, $omitMandatoryCheck);

            return $result;
        }
    }

    /**
     * @param Model\DataObject\ClassDefinition\Data $masterDefinition
     */
    public function synchronizeWithMasterDefinition(Model\DataObject\ClassDefinition\Data $masterDefinition)
    {
        $this->datatype = $masterDefinition->datatype;
    }

    /**
     * @param Model\DataObject\Data\RgbaColor $data
     *
     * @return bool
     */
    public function isEmpty($data)
    {
        $fd = $this->getDelegateDatatypeDefinition();
        if ($fd) {
            $result = $fd->isEmpty($data);

            return $result;
        }
    }

    /**
     * converts data to be exposed via webservices
     *
     * @param string $object
     * @param mixed $params
     *
     * @return mixed
     */
    public function getForWebserviceExport($object, $params = [])
    {
        $data = $this->getDataFromObjectParam($object, $params);

        if ($data instanceof Model\DataObject\Data\RgbaColor) {
            return $this->getDataForEditmode($data, $object, $params);
        } else {
            return null;
        }
    }

    /**
     * converts data to be imported via webservices
     *
     * @param mixed $value
     * @param null|Model\DataObject\AbstractObject $object
     * @param mixed $params
     * @param $idMapper
     *
     * @return Model\DataObject\Data\RgbaColor|null
     *
     * @throws \Exception
     */
    public function getFromWebserviceImport($value, $object = null, $params = [], $idMapper = null)
    {
        // not implemented
    }

    /**
     * display the quantity value field data in the grid
     *
     * @param $data
     * @param null $object
     * @param array $params
     *
     * @return array
     */
    public function getDataForGrid($data, $object = null, $params = [])
    {
        $fd = $this->getDelegateDatatypeDefinition();
        if ($fd) {
            if (method_exists($fd, 'getDataForGrid')) {
                $result = $fd->getDataForGrid($data, $object, $params);

                return $result;
            } else {
                return $data;
            }
        }
    }

    /**
     * @param $data
     * @param null|Model\DataObject\AbstractObject $object
     * @param mixed $params
     *
     * @return string
     */
    public function getVersionPreview($data, $object = null, $params = [])
    {
        {
            $fd = $this->getDelegateDatatypeDefinition();
            $result = $fd->getVersionPreview($data, $object, $params);

            return $result;
        }
    }

    /** Encode value for packing it into a single column.
     * @param mixed $value
     * @param Model\DataObject\AbstractObject $object
     * @param mixed $params
     *
     * @return mixed
     */
    public function marshal($value, $object = null, $params = [])
    {
        $fd = $this->getDelegateDatatypeDefinition();
        if ($fd) {
            $result = $fd->marshal($value, $object, $params);

            return $result;
        }
    }

    /** See marshal
     * @param mixed $value
     * @param Model\DataObject\AbstractObject $object
     * @param mixed $params
     *
     * @return mixed
     */
    public function unmarshal($value, $object = null, $params = [])
    {
        $fd = $this->getDelegateDatatypeDefinition();
        if ($fd) {
            $result = $fd->unmarshal($value, $object, $params);

            return $result;
        }
    }

    /**
     * converts object data to a simple string value or CSV Export
     *
     * @abstract
     *
     * @param Model\DataObject\AbstractObject $object
     * @param array $params
     *
     * @return string
     */
    public function getForCsvExport($object, $params = [])
    {
        $fd = $this->getDelegateDatatypeDefinition();
        if ($fd) {
            $result = $fd->getForCsvExport($object, $params);

            return $result;
        }
    }

    /**
     * @param $importValue
     * @param null|Model\DataObject\AbstractObject $object
     * @param mixed $params
     *
     * @return mixed
     */
    public function getFromCsvImport($importValue, $object = null, $params = [])
    {
        $fd = $this->getDelegateDatatypeDefinition();
        if ($fd) {
            $result = $fd->getFromCsvImport($importValue, $object, $params);

            return $result;
        }
    }

    /**
     * returns sql query statement to filter according to this data types value(s)
     *
     * @param  $value
     * @param  $operator
     * @param  $params
     *
     * @return string
     *
     */
    public function getFilterCondition($value, $operator, $params = [])
    {
    }

    /**
     * @return string
     */
    public function getDelegateDatatype()
    {
        return $this->delegateDatatype;
    }

    /**
     * @param string $delegateDatatype
     */
    public function setDelegateDatatype($delegateDatatype)
    {
        $this->delegateDatatype = $delegateDatatype;
    }

    /**
     * @param string $phpdocType
     */
    public function setPhpdocType($phpdocType)
    {
        $this->phpdocType = $phpdocType;
    }

    /**
     * @return Model\DataObject\ClassDefinition\Data
     */
    public function getDelegateDatatypeDefinition()
    {
        return $this->getDelegate();
    }

    /**
     * @param $data
     */
    public function setupDelegate($data)
    {
        $this->delegate = null;

        $loader = \Pimcore::getContainer()->get('pimcore.implementation_loader.object.data');
        if ($this->getDelegateDatatype()) {
            if ($loader->supports($this->getDelegateDatatype())) {
                $delegate = $loader->build($this->getDelegateDatatype());
                $className = get_class($delegate);
                if (method_exists($className, '__set_state')) {
                    $delegate = $className::__set_state($data);
                }
                $delegate->setFieldtype($this->getDelegateDatatype());
                $this->delegate = $delegate;
            }
        }
    }

    /**
     * @return bool
     */
    public static function isStrictMode()
    {
        return self::$strictMode;
    }

    /**
     * @param bool $strictMode
     */
    public static function setStrictMode($strictMode)
    {
        self::$strictMode = $strictMode;
    }

    /**
     * @param array $data
     *
     * @return $this
     */
    public function setValues($data = [])
    {
        foreach ($data as $key => $value) {
            $method = 'set' . $key;
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }

        return $this;
    }

    /**
     * @return Model\DataObject\ClassDefinition\Data
     */
    public function getDelegate()
    {
        return $this->delegate;
    }

    /**
     * @param Model\DataObject\ClassDefinition\Data $delegate
     */
    public function setDelegate($delegate)
    {
        $this->delegate = $delegate;
    }

    /**
     * @param string | array $columnType
     *
     * @return $this
     */
    public function setColumnType($columnType)
    {
        $this->columnType = 'LONGBLOB';
    }

    /**
     * @param $object
     * @param array $context
     */
    public function enrichLayoutDefinition($object, $context = [])
    {
        $delegate = $this->getDelegate();
        if (method_exists($delegate, enrichLayoutDefinition)) {
            $delegate->enrichLayoutDefinition($object, $context);
        }
    }

    /**
     * @return string
     */
    public function getPhpdocType()
    {
        return $this->delegate ? $this->delegate->getPhpdocType() : null;
    }
}
