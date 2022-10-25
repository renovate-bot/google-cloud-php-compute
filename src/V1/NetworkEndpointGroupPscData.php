<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * All data that is specifically relevant to only network endpoint groups of type PRIVATE_SERVICE_CONNECT.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.NetworkEndpointGroupPscData</code>
 */
class NetworkEndpointGroupPscData extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] Address allocated from given subnetwork for PSC. This IP address acts as a VIP for a PSC NEG, allowing it to act as an endpoint in L7 PSC-XLB.
     *
     * Generated from protobuf field <code>optional string consumer_psc_address = 452646572;</code>
     */
    private $consumer_psc_address = null;
    /**
     * [Output Only] The PSC connection id of the PSC Network Endpoint Group Consumer.
     *
     * Generated from protobuf field <code>optional uint64 psc_connection_id = 292082397;</code>
     */
    private $psc_connection_id = null;
    /**
     * [Output Only] The connection status of the PSC Forwarding Rule.
     * Check the PscConnectionStatus enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string psc_connection_status = 184149172;</code>
     */
    private $psc_connection_status = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $consumer_psc_address
     *           [Output Only] Address allocated from given subnetwork for PSC. This IP address acts as a VIP for a PSC NEG, allowing it to act as an endpoint in L7 PSC-XLB.
     *     @type int|string $psc_connection_id
     *           [Output Only] The PSC connection id of the PSC Network Endpoint Group Consumer.
     *     @type string $psc_connection_status
     *           [Output Only] The connection status of the PSC Forwarding Rule.
     *           Check the PscConnectionStatus enum for the list of possible values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] Address allocated from given subnetwork for PSC. This IP address acts as a VIP for a PSC NEG, allowing it to act as an endpoint in L7 PSC-XLB.
     *
     * Generated from protobuf field <code>optional string consumer_psc_address = 452646572;</code>
     * @return string
     */
    public function getConsumerPscAddress()
    {
        return isset($this->consumer_psc_address) ? $this->consumer_psc_address : '';
    }

    public function hasConsumerPscAddress()
    {
        return isset($this->consumer_psc_address);
    }

    public function clearConsumerPscAddress()
    {
        unset($this->consumer_psc_address);
    }

    /**
     * [Output Only] Address allocated from given subnetwork for PSC. This IP address acts as a VIP for a PSC NEG, allowing it to act as an endpoint in L7 PSC-XLB.
     *
     * Generated from protobuf field <code>optional string consumer_psc_address = 452646572;</code>
     * @param string $var
     * @return $this
     */
    public function setConsumerPscAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->consumer_psc_address = $var;

        return $this;
    }

    /**
     * [Output Only] The PSC connection id of the PSC Network Endpoint Group Consumer.
     *
     * Generated from protobuf field <code>optional uint64 psc_connection_id = 292082397;</code>
     * @return int|string
     */
    public function getPscConnectionId()
    {
        return isset($this->psc_connection_id) ? $this->psc_connection_id : 0;
    }

    public function hasPscConnectionId()
    {
        return isset($this->psc_connection_id);
    }

    public function clearPscConnectionId()
    {
        unset($this->psc_connection_id);
    }

    /**
     * [Output Only] The PSC connection id of the PSC Network Endpoint Group Consumer.
     *
     * Generated from protobuf field <code>optional uint64 psc_connection_id = 292082397;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPscConnectionId($var)
    {
        GPBUtil::checkUint64($var);
        $this->psc_connection_id = $var;

        return $this;
    }

    /**
     * [Output Only] The connection status of the PSC Forwarding Rule.
     * Check the PscConnectionStatus enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string psc_connection_status = 184149172;</code>
     * @return string
     */
    public function getPscConnectionStatus()
    {
        return isset($this->psc_connection_status) ? $this->psc_connection_status : '';
    }

    public function hasPscConnectionStatus()
    {
        return isset($this->psc_connection_status);
    }

    public function clearPscConnectionStatus()
    {
        unset($this->psc_connection_status);
    }

    /**
     * [Output Only] The connection status of the PSC Forwarding Rule.
     * Check the PscConnectionStatus enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string psc_connection_status = 184149172;</code>
     * @param string $var
     * @return $this
     */
    public function setPscConnectionStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->psc_connection_status = $var;

        return $this;
    }

}

