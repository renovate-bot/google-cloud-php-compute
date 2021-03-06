<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CPU utilization policy.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.AutoscalingPolicyCpuUtilization</code>
 */
class AutoscalingPolicyCpuUtilization extends \Google\Protobuf\Internal\Message
{
    /**
     * The target CPU utilization that the autoscaler maintains. Must be a float value in the range (0, 1]. If not specified, the default is 0.6.
     * If the CPU level is below the target utilization, the autoscaler scales in the number of instances until it reaches the minimum number of instances you specified or until the average CPU of your instances reaches the target utilization.
     * If the average CPU is above the target utilization, the autoscaler scales out until it reaches the maximum number of instances you specified or until the average utilization reaches the target utilization.
     *
     * Generated from protobuf field <code>double utilization_target = 215905870;</code>
     */
    private $utilization_target = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $utilization_target
     *           The target CPU utilization that the autoscaler maintains. Must be a float value in the range (0, 1]. If not specified, the default is 0.6.
     *           If the CPU level is below the target utilization, the autoscaler scales in the number of instances until it reaches the minimum number of instances you specified or until the average CPU of your instances reaches the target utilization.
     *           If the average CPU is above the target utilization, the autoscaler scales out until it reaches the maximum number of instances you specified or until the average utilization reaches the target utilization.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The target CPU utilization that the autoscaler maintains. Must be a float value in the range (0, 1]. If not specified, the default is 0.6.
     * If the CPU level is below the target utilization, the autoscaler scales in the number of instances until it reaches the minimum number of instances you specified or until the average CPU of your instances reaches the target utilization.
     * If the average CPU is above the target utilization, the autoscaler scales out until it reaches the maximum number of instances you specified or until the average utilization reaches the target utilization.
     *
     * Generated from protobuf field <code>double utilization_target = 215905870;</code>
     * @return float
     */
    public function getUtilizationTarget()
    {
        return isset($this->utilization_target) ? $this->utilization_target : 0.0;
    }

    public function hasUtilizationTarget()
    {
        return isset($this->utilization_target);
    }

    public function clearUtilizationTarget()
    {
        unset($this->utilization_target);
    }

    /**
     * The target CPU utilization that the autoscaler maintains. Must be a float value in the range (0, 1]. If not specified, the default is 0.6.
     * If the CPU level is below the target utilization, the autoscaler scales in the number of instances until it reaches the minimum number of instances you specified or until the average CPU of your instances reaches the target utilization.
     * If the average CPU is above the target utilization, the autoscaler scales out until it reaches the maximum number of instances you specified or until the average utilization reaches the target utilization.
     *
     * Generated from protobuf field <code>double utilization_target = 215905870;</code>
     * @param float $var
     * @return $this
     */
    public function setUtilizationTarget($var)
    {
        GPBUtil::checkDouble($var);
        $this->utilization_target = $var;

        return $this;
    }

}

