<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\Commitment;

use UnexpectedValueException;

/**
 * The type of commitment, which affects the discount rate and the eligible resources. Type MEMORY_OPTIMIZED specifies a commitment that will only apply to memory optimized machines. Type ACCELERATOR_OPTIMIZED specifies a commitment that will only apply to accelerator optimized machines.
 *
 * Protobuf type <code>google.cloud.compute.v1.Commitment.Type</code>
 */
class Type
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_TYPE = 0;</code>
     */
    const UNDEFINED_TYPE = 0;
    /**
     * Generated from protobuf enum <code>ACCELERATOR_OPTIMIZED = 280848403;</code>
     */
    const ACCELERATOR_OPTIMIZED = 280848403;
    /**
     * Generated from protobuf enum <code>ACCELERATOR_OPTIMIZED_A3 = 158574526;</code>
     */
    const ACCELERATOR_OPTIMIZED_A3 = 158574526;
    /**
     * Generated from protobuf enum <code>ACCELERATOR_OPTIMIZED_A3_MEGA = 156517459;</code>
     */
    const ACCELERATOR_OPTIMIZED_A3_MEGA = 156517459;
    /**
     * Generated from protobuf enum <code>ACCELERATOR_OPTIMIZED_A3_ULTRA = 27812811;</code>
     */
    const ACCELERATOR_OPTIMIZED_A3_ULTRA = 27812811;
    /**
     * Generated from protobuf enum <code>COMPUTE_OPTIMIZED = 158349023;</code>
     */
    const COMPUTE_OPTIMIZED = 158349023;
    /**
     * Generated from protobuf enum <code>COMPUTE_OPTIMIZED_C2D = 383246453;</code>
     */
    const COMPUTE_OPTIMIZED_C2D = 383246453;
    /**
     * Generated from protobuf enum <code>COMPUTE_OPTIMIZED_C3 = 428004784;</code>
     */
    const COMPUTE_OPTIMIZED_C3 = 428004784;
    /**
     * Generated from protobuf enum <code>COMPUTE_OPTIMIZED_C3D = 383246484;</code>
     */
    const COMPUTE_OPTIMIZED_C3D = 383246484;
    /**
     * Generated from protobuf enum <code>COMPUTE_OPTIMIZED_H3 = 428004939;</code>
     */
    const COMPUTE_OPTIMIZED_H3 = 428004939;
    /**
     * Generated from protobuf enum <code>GENERAL_PURPOSE = 299793543;</code>
     */
    const GENERAL_PURPOSE = 299793543;
    /**
     * Generated from protobuf enum <code>GENERAL_PURPOSE_C4 = 301911817;</code>
     */
    const GENERAL_PURPOSE_C4 = 301911817;
    /**
     * Generated from protobuf enum <code>GENERAL_PURPOSE_C4A = 232460888;</code>
     */
    const GENERAL_PURPOSE_C4A = 232460888;
    /**
     * Generated from protobuf enum <code>GENERAL_PURPOSE_E2 = 301911877;</code>
     */
    const GENERAL_PURPOSE_E2 = 301911877;
    /**
     * Generated from protobuf enum <code>GENERAL_PURPOSE_N2 = 301912156;</code>
     */
    const GENERAL_PURPOSE_N2 = 301912156;
    /**
     * Generated from protobuf enum <code>GENERAL_PURPOSE_N2D = 232471400;</code>
     */
    const GENERAL_PURPOSE_N2D = 232471400;
    /**
     * Generated from protobuf enum <code>GENERAL_PURPOSE_N4 = 301912158;</code>
     */
    const GENERAL_PURPOSE_N4 = 301912158;
    /**
     * Generated from protobuf enum <code>GENERAL_PURPOSE_T2D = 232477166;</code>
     */
    const GENERAL_PURPOSE_T2D = 232477166;
    /**
     * Generated from protobuf enum <code>GRAPHICS_OPTIMIZED = 68500563;</code>
     */
    const GRAPHICS_OPTIMIZED = 68500563;
    /**
     * Generated from protobuf enum <code>MEMORY_OPTIMIZED = 281753417;</code>
     */
    const MEMORY_OPTIMIZED = 281753417;
    /**
     * Generated from protobuf enum <code>MEMORY_OPTIMIZED_M3 = 276301372;</code>
     */
    const MEMORY_OPTIMIZED_M3 = 276301372;
    /**
     * Generated from protobuf enum <code>MEMORY_OPTIMIZED_X4_16TB = 183089120;</code>
     */
    const MEMORY_OPTIMIZED_X4_16TB = 183089120;
    /**
     * Generated from protobuf enum <code>MEMORY_OPTIMIZED_X4_24TB = 183116989;</code>
     */
    const MEMORY_OPTIMIZED_X4_24TB = 183116989;
    /**
     * Generated from protobuf enum <code>MEMORY_OPTIMIZED_X4_32TB = 183144858;</code>
     */
    const MEMORY_OPTIMIZED_X4_32TB = 183144858;
    /**
     * Generated from protobuf enum <code>STORAGE_OPTIMIZED_Z3 = 316796085;</code>
     */
    const STORAGE_OPTIMIZED_Z3 = 316796085;
    /**
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 437714322;</code>
     */
    const TYPE_UNSPECIFIED = 437714322;

    private static $valueToName = [
        self::UNDEFINED_TYPE => 'UNDEFINED_TYPE',
        self::ACCELERATOR_OPTIMIZED => 'ACCELERATOR_OPTIMIZED',
        self::ACCELERATOR_OPTIMIZED_A3 => 'ACCELERATOR_OPTIMIZED_A3',
        self::ACCELERATOR_OPTIMIZED_A3_MEGA => 'ACCELERATOR_OPTIMIZED_A3_MEGA',
        self::ACCELERATOR_OPTIMIZED_A3_ULTRA => 'ACCELERATOR_OPTIMIZED_A3_ULTRA',
        self::COMPUTE_OPTIMIZED => 'COMPUTE_OPTIMIZED',
        self::COMPUTE_OPTIMIZED_C2D => 'COMPUTE_OPTIMIZED_C2D',
        self::COMPUTE_OPTIMIZED_C3 => 'COMPUTE_OPTIMIZED_C3',
        self::COMPUTE_OPTIMIZED_C3D => 'COMPUTE_OPTIMIZED_C3D',
        self::COMPUTE_OPTIMIZED_H3 => 'COMPUTE_OPTIMIZED_H3',
        self::GENERAL_PURPOSE => 'GENERAL_PURPOSE',
        self::GENERAL_PURPOSE_C4 => 'GENERAL_PURPOSE_C4',
        self::GENERAL_PURPOSE_C4A => 'GENERAL_PURPOSE_C4A',
        self::GENERAL_PURPOSE_E2 => 'GENERAL_PURPOSE_E2',
        self::GENERAL_PURPOSE_N2 => 'GENERAL_PURPOSE_N2',
        self::GENERAL_PURPOSE_N2D => 'GENERAL_PURPOSE_N2D',
        self::GENERAL_PURPOSE_N4 => 'GENERAL_PURPOSE_N4',
        self::GENERAL_PURPOSE_T2D => 'GENERAL_PURPOSE_T2D',
        self::GRAPHICS_OPTIMIZED => 'GRAPHICS_OPTIMIZED',
        self::MEMORY_OPTIMIZED => 'MEMORY_OPTIMIZED',
        self::MEMORY_OPTIMIZED_M3 => 'MEMORY_OPTIMIZED_M3',
        self::MEMORY_OPTIMIZED_X4_16TB => 'MEMORY_OPTIMIZED_X4_16TB',
        self::MEMORY_OPTIMIZED_X4_24TB => 'MEMORY_OPTIMIZED_X4_24TB',
        self::MEMORY_OPTIMIZED_X4_32TB => 'MEMORY_OPTIMIZED_X4_32TB',
        self::STORAGE_OPTIMIZED_Z3 => 'STORAGE_OPTIMIZED_Z3',
        self::TYPE_UNSPECIFIED => 'TYPE_UNSPECIFIED',
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


