<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\Route;

use UnexpectedValueException;

/**
 * [Output Only] Indicates the origin of the route. Can be IGP (Interior Gateway Protocol), EGP (Exterior Gateway Protocol), or INCOMPLETE.
 *
 * Protobuf type <code>google.cloud.compute.v1.Route.NextHopOrigin</code>
 */
class NextHopOrigin
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_NEXT_HOP_ORIGIN = 0;</code>
     */
    const UNDEFINED_NEXT_HOP_ORIGIN = 0;
    /**
     * Generated from protobuf enum <code>EGP = 68590;</code>
     */
    const EGP = 68590;
    /**
     * Generated from protobuf enum <code>IGP = 72434;</code>
     */
    const IGP = 72434;
    /**
     * Generated from protobuf enum <code>INCOMPLETE = 11941214;</code>
     */
    const INCOMPLETE = 11941214;

    private static $valueToName = [
        self::UNDEFINED_NEXT_HOP_ORIGIN => 'UNDEFINED_NEXT_HOP_ORIGIN',
        self::EGP => 'EGP',
        self::IGP => 'IGP',
        self::INCOMPLETE => 'INCOMPLETE',
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

