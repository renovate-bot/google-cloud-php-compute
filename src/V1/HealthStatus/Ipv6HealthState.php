<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\HealthStatus;

use UnexpectedValueException;

/**
 * Health state of the IPv6 address of the instance.
 * Additional supported values which may be not listed in the enum directly due to technical reasons:
 * HEALTHY
 * UNHEALTHY
 *
 * Protobuf type <code>google.cloud.compute.v1.HealthStatus.Ipv6HealthState</code>
 */
class Ipv6HealthState
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_IPV6_HEALTH_STATE = 0;</code>
     */
    const UNDEFINED_IPV6_HEALTH_STATE = 0;

    private static $valueToName = [
        self::UNDEFINED_IPV6_HEALTH_STATE => 'UNDEFINED_IPV6_HEALTH_STATE',
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


