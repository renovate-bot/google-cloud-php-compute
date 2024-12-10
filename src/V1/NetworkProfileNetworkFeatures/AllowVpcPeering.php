<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\NetworkProfileNetworkFeatures;

use UnexpectedValueException;

/**
 * Specifies whether VPC peering is allowed.
 *
 * Protobuf type <code>google.cloud.compute.v1.NetworkProfileNetworkFeatures.AllowVpcPeering</code>
 */
class AllowVpcPeering
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_ALLOW_VPC_PEERING = 0;</code>
     */
    const UNDEFINED_ALLOW_VPC_PEERING = 0;
    /**
     * Generated from protobuf enum <code>VPC_PEERING_ALLOWED = 261465075;</code>
     */
    const VPC_PEERING_ALLOWED = 261465075;
    /**
     * Generated from protobuf enum <code>VPC_PEERING_BLOCKED = 77628471;</code>
     */
    const VPC_PEERING_BLOCKED = 77628471;

    private static $valueToName = [
        self::UNDEFINED_ALLOW_VPC_PEERING => 'UNDEFINED_ALLOW_VPC_PEERING',
        self::VPC_PEERING_ALLOWED => 'VPC_PEERING_ALLOWED',
        self::VPC_PEERING_BLOCKED => 'VPC_PEERING_BLOCKED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


