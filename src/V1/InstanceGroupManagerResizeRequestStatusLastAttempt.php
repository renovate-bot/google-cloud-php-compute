<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.InstanceGroupManagerResizeRequestStatusLastAttempt</code>
 */
class InstanceGroupManagerResizeRequestStatusLastAttempt extends \Google\Protobuf\Internal\Message
{
    /**
     * Errors that prevented the ResizeRequest to be fulfilled.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Error error = 96784904;</code>
     */
    private $error = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\Error $error
     *           Errors that prevented the ResizeRequest to be fulfilled.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Errors that prevented the ResizeRequest to be fulfilled.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Error error = 96784904;</code>
     * @return \Google\Cloud\Compute\V1\Error|null
     */
    public function getError()
    {
        return $this->error;
    }

    public function hasError()
    {
        return isset($this->error);
    }

    public function clearError()
    {
        unset($this->error);
    }

    /**
     * Errors that prevented the ResizeRequest to be fulfilled.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Error error = 96784904;</code>
     * @param \Google\Cloud\Compute\V1\Error $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\Error::class);
        $this->error = $var;

        return $this;
    }

}

