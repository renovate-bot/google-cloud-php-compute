<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Settings controlling the eviction of unhealthy hosts from the load balancing pool for the backend service.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.OutlierDetection</code>
 */
class OutlierDetection extends \Google\Protobuf\Internal\Message
{
    /**
     * The base time that a host is ejected for. The real ejection time is equal to the base ejection time multiplied by the number of times the host has been ejected. Defaults to 30000ms or 30s.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Duration base_ejection_time = 80997255;</code>
     */
    private $base_ejection_time = null;
    /**
     * Number of errors before a host is ejected from the connection pool. When the backend host is accessed over HTTP, a 5xx return code qualifies as an error. Defaults to 5.
     *
     * Generated from protobuf field <code>int32 consecutive_errors = 387193248;</code>
     */
    private $consecutive_errors = null;
    /**
     * The number of consecutive gateway failures (502, 503, 504 status or connection errors that are mapped to one of those status codes) before a consecutive gateway failure ejection occurs. Defaults to 3.
     *
     * Generated from protobuf field <code>int32 consecutive_gateway_failure = 417504250;</code>
     */
    private $consecutive_gateway_failure = null;
    /**
     * The percentage chance that a host will be actually ejected when an outlier status is detected through consecutive 5xx. This setting can be used to disable ejection or to ramp it up slowly. Defaults to 0.
     *
     * Generated from protobuf field <code>int32 enforcing_consecutive_errors = 213133760;</code>
     */
    private $enforcing_consecutive_errors = null;
    /**
     * The percentage chance that a host will be actually ejected when an outlier status is detected through consecutive gateway failures. This setting can be used to disable ejection or to ramp it up slowly. Defaults to 100.
     *
     * Generated from protobuf field <code>int32 enforcing_consecutive_gateway_failure = 394440666;</code>
     */
    private $enforcing_consecutive_gateway_failure = null;
    /**
     * The percentage chance that a host will be actually ejected when an outlier status is detected through success rate statistics. This setting can be used to disable ejection or to ramp it up slowly. Defaults to 100.
     *
     * Generated from protobuf field <code>int32 enforcing_success_rate = 194508732;</code>
     */
    private $enforcing_success_rate = null;
    /**
     * Time interval between ejection analysis sweeps. This can result in both new ejections as well as hosts being returned to service. Defaults to 1 second.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Duration interval = 33547461;</code>
     */
    private $interval = null;
    /**
     * Maximum percentage of hosts in the load balancing pool for the backend service that can be ejected. Defaults to 50%.
     *
     * Generated from protobuf field <code>int32 max_ejection_percent = 18436888;</code>
     */
    private $max_ejection_percent = null;
    /**
     * The number of hosts in a cluster that must have enough request volume to detect success rate outliers. If the number of hosts is less than this setting, outlier detection via success rate statistics is not performed for any host in the cluster. Defaults to 5.
     *
     * Generated from protobuf field <code>int32 success_rate_minimum_hosts = 525766903;</code>
     */
    private $success_rate_minimum_hosts = null;
    /**
     * The minimum number of total requests that must be collected in one interval (as defined by the interval duration above) to include this host in success rate based outlier detection. If the volume is lower than this setting, outlier detection via success rate statistics is not performed for that host. Defaults to 100.
     *
     * Generated from protobuf field <code>int32 success_rate_request_volume = 281425357;</code>
     */
    private $success_rate_request_volume = null;
    /**
     * This factor is used to determine the ejection threshold for success rate outlier ejection. The ejection threshold is the difference between the mean success rate, and the product of this factor and the standard deviation of the mean success rate: mean - (stdev * success_rate_stdev_factor). This factor is divided by a thousand to get a double. That is, if the desired factor is 1.9, the runtime value should be 1900. Defaults to 1900.
     *
     * Generated from protobuf field <code>int32 success_rate_stdev_factor = 174735773;</code>
     */
    private $success_rate_stdev_factor = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\Duration $base_ejection_time
     *           The base time that a host is ejected for. The real ejection time is equal to the base ejection time multiplied by the number of times the host has been ejected. Defaults to 30000ms or 30s.
     *     @type int $consecutive_errors
     *           Number of errors before a host is ejected from the connection pool. When the backend host is accessed over HTTP, a 5xx return code qualifies as an error. Defaults to 5.
     *     @type int $consecutive_gateway_failure
     *           The number of consecutive gateway failures (502, 503, 504 status or connection errors that are mapped to one of those status codes) before a consecutive gateway failure ejection occurs. Defaults to 3.
     *     @type int $enforcing_consecutive_errors
     *           The percentage chance that a host will be actually ejected when an outlier status is detected through consecutive 5xx. This setting can be used to disable ejection or to ramp it up slowly. Defaults to 0.
     *     @type int $enforcing_consecutive_gateway_failure
     *           The percentage chance that a host will be actually ejected when an outlier status is detected through consecutive gateway failures. This setting can be used to disable ejection or to ramp it up slowly. Defaults to 100.
     *     @type int $enforcing_success_rate
     *           The percentage chance that a host will be actually ejected when an outlier status is detected through success rate statistics. This setting can be used to disable ejection or to ramp it up slowly. Defaults to 100.
     *     @type \Google\Cloud\Compute\V1\Duration $interval
     *           Time interval between ejection analysis sweeps. This can result in both new ejections as well as hosts being returned to service. Defaults to 1 second.
     *     @type int $max_ejection_percent
     *           Maximum percentage of hosts in the load balancing pool for the backend service that can be ejected. Defaults to 50%.
     *     @type int $success_rate_minimum_hosts
     *           The number of hosts in a cluster that must have enough request volume to detect success rate outliers. If the number of hosts is less than this setting, outlier detection via success rate statistics is not performed for any host in the cluster. Defaults to 5.
     *     @type int $success_rate_request_volume
     *           The minimum number of total requests that must be collected in one interval (as defined by the interval duration above) to include this host in success rate based outlier detection. If the volume is lower than this setting, outlier detection via success rate statistics is not performed for that host. Defaults to 100.
     *     @type int $success_rate_stdev_factor
     *           This factor is used to determine the ejection threshold for success rate outlier ejection. The ejection threshold is the difference between the mean success rate, and the product of this factor and the standard deviation of the mean success rate: mean - (stdev * success_rate_stdev_factor). This factor is divided by a thousand to get a double. That is, if the desired factor is 1.9, the runtime value should be 1900. Defaults to 1900.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The base time that a host is ejected for. The real ejection time is equal to the base ejection time multiplied by the number of times the host has been ejected. Defaults to 30000ms or 30s.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Duration base_ejection_time = 80997255;</code>
     * @return \Google\Cloud\Compute\V1\Duration|null
     */
    public function getBaseEjectionTime()
    {
        return isset($this->base_ejection_time) ? $this->base_ejection_time : null;
    }

    public function hasBaseEjectionTime()
    {
        return isset($this->base_ejection_time);
    }

    public function clearBaseEjectionTime()
    {
        unset($this->base_ejection_time);
    }

    /**
     * The base time that a host is ejected for. The real ejection time is equal to the base ejection time multiplied by the number of times the host has been ejected. Defaults to 30000ms or 30s.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Duration base_ejection_time = 80997255;</code>
     * @param \Google\Cloud\Compute\V1\Duration $var
     * @return $this
     */
    public function setBaseEjectionTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\Duration::class);
        $this->base_ejection_time = $var;

        return $this;
    }

    /**
     * Number of errors before a host is ejected from the connection pool. When the backend host is accessed over HTTP, a 5xx return code qualifies as an error. Defaults to 5.
     *
     * Generated from protobuf field <code>int32 consecutive_errors = 387193248;</code>
     * @return int
     */
    public function getConsecutiveErrors()
    {
        return isset($this->consecutive_errors) ? $this->consecutive_errors : 0;
    }

    public function hasConsecutiveErrors()
    {
        return isset($this->consecutive_errors);
    }

    public function clearConsecutiveErrors()
    {
        unset($this->consecutive_errors);
    }

    /**
     * Number of errors before a host is ejected from the connection pool. When the backend host is accessed over HTTP, a 5xx return code qualifies as an error. Defaults to 5.
     *
     * Generated from protobuf field <code>int32 consecutive_errors = 387193248;</code>
     * @param int $var
     * @return $this
     */
    public function setConsecutiveErrors($var)
    {
        GPBUtil::checkInt32($var);
        $this->consecutive_errors = $var;

        return $this;
    }

    /**
     * The number of consecutive gateway failures (502, 503, 504 status or connection errors that are mapped to one of those status codes) before a consecutive gateway failure ejection occurs. Defaults to 3.
     *
     * Generated from protobuf field <code>int32 consecutive_gateway_failure = 417504250;</code>
     * @return int
     */
    public function getConsecutiveGatewayFailure()
    {
        return isset($this->consecutive_gateway_failure) ? $this->consecutive_gateway_failure : 0;
    }

    public function hasConsecutiveGatewayFailure()
    {
        return isset($this->consecutive_gateway_failure);
    }

    public function clearConsecutiveGatewayFailure()
    {
        unset($this->consecutive_gateway_failure);
    }

    /**
     * The number of consecutive gateway failures (502, 503, 504 status or connection errors that are mapped to one of those status codes) before a consecutive gateway failure ejection occurs. Defaults to 3.
     *
     * Generated from protobuf field <code>int32 consecutive_gateway_failure = 417504250;</code>
     * @param int $var
     * @return $this
     */
    public function setConsecutiveGatewayFailure($var)
    {
        GPBUtil::checkInt32($var);
        $this->consecutive_gateway_failure = $var;

        return $this;
    }

    /**
     * The percentage chance that a host will be actually ejected when an outlier status is detected through consecutive 5xx. This setting can be used to disable ejection or to ramp it up slowly. Defaults to 0.
     *
     * Generated from protobuf field <code>int32 enforcing_consecutive_errors = 213133760;</code>
     * @return int
     */
    public function getEnforcingConsecutiveErrors()
    {
        return isset($this->enforcing_consecutive_errors) ? $this->enforcing_consecutive_errors : 0;
    }

    public function hasEnforcingConsecutiveErrors()
    {
        return isset($this->enforcing_consecutive_errors);
    }

    public function clearEnforcingConsecutiveErrors()
    {
        unset($this->enforcing_consecutive_errors);
    }

    /**
     * The percentage chance that a host will be actually ejected when an outlier status is detected through consecutive 5xx. This setting can be used to disable ejection or to ramp it up slowly. Defaults to 0.
     *
     * Generated from protobuf field <code>int32 enforcing_consecutive_errors = 213133760;</code>
     * @param int $var
     * @return $this
     */
    public function setEnforcingConsecutiveErrors($var)
    {
        GPBUtil::checkInt32($var);
        $this->enforcing_consecutive_errors = $var;

        return $this;
    }

    /**
     * The percentage chance that a host will be actually ejected when an outlier status is detected through consecutive gateway failures. This setting can be used to disable ejection or to ramp it up slowly. Defaults to 100.
     *
     * Generated from protobuf field <code>int32 enforcing_consecutive_gateway_failure = 394440666;</code>
     * @return int
     */
    public function getEnforcingConsecutiveGatewayFailure()
    {
        return isset($this->enforcing_consecutive_gateway_failure) ? $this->enforcing_consecutive_gateway_failure : 0;
    }

    public function hasEnforcingConsecutiveGatewayFailure()
    {
        return isset($this->enforcing_consecutive_gateway_failure);
    }

    public function clearEnforcingConsecutiveGatewayFailure()
    {
        unset($this->enforcing_consecutive_gateway_failure);
    }

    /**
     * The percentage chance that a host will be actually ejected when an outlier status is detected through consecutive gateway failures. This setting can be used to disable ejection or to ramp it up slowly. Defaults to 100.
     *
     * Generated from protobuf field <code>int32 enforcing_consecutive_gateway_failure = 394440666;</code>
     * @param int $var
     * @return $this
     */
    public function setEnforcingConsecutiveGatewayFailure($var)
    {
        GPBUtil::checkInt32($var);
        $this->enforcing_consecutive_gateway_failure = $var;

        return $this;
    }

    /**
     * The percentage chance that a host will be actually ejected when an outlier status is detected through success rate statistics. This setting can be used to disable ejection or to ramp it up slowly. Defaults to 100.
     *
     * Generated from protobuf field <code>int32 enforcing_success_rate = 194508732;</code>
     * @return int
     */
    public function getEnforcingSuccessRate()
    {
        return isset($this->enforcing_success_rate) ? $this->enforcing_success_rate : 0;
    }

    public function hasEnforcingSuccessRate()
    {
        return isset($this->enforcing_success_rate);
    }

    public function clearEnforcingSuccessRate()
    {
        unset($this->enforcing_success_rate);
    }

    /**
     * The percentage chance that a host will be actually ejected when an outlier status is detected through success rate statistics. This setting can be used to disable ejection or to ramp it up slowly. Defaults to 100.
     *
     * Generated from protobuf field <code>int32 enforcing_success_rate = 194508732;</code>
     * @param int $var
     * @return $this
     */
    public function setEnforcingSuccessRate($var)
    {
        GPBUtil::checkInt32($var);
        $this->enforcing_success_rate = $var;

        return $this;
    }

    /**
     * Time interval between ejection analysis sweeps. This can result in both new ejections as well as hosts being returned to service. Defaults to 1 second.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Duration interval = 33547461;</code>
     * @return \Google\Cloud\Compute\V1\Duration|null
     */
    public function getInterval()
    {
        return isset($this->interval) ? $this->interval : null;
    }

    public function hasInterval()
    {
        return isset($this->interval);
    }

    public function clearInterval()
    {
        unset($this->interval);
    }

    /**
     * Time interval between ejection analysis sweeps. This can result in both new ejections as well as hosts being returned to service. Defaults to 1 second.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Duration interval = 33547461;</code>
     * @param \Google\Cloud\Compute\V1\Duration $var
     * @return $this
     */
    public function setInterval($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\Duration::class);
        $this->interval = $var;

        return $this;
    }

    /**
     * Maximum percentage of hosts in the load balancing pool for the backend service that can be ejected. Defaults to 50%.
     *
     * Generated from protobuf field <code>int32 max_ejection_percent = 18436888;</code>
     * @return int
     */
    public function getMaxEjectionPercent()
    {
        return isset($this->max_ejection_percent) ? $this->max_ejection_percent : 0;
    }

    public function hasMaxEjectionPercent()
    {
        return isset($this->max_ejection_percent);
    }

    public function clearMaxEjectionPercent()
    {
        unset($this->max_ejection_percent);
    }

    /**
     * Maximum percentage of hosts in the load balancing pool for the backend service that can be ejected. Defaults to 50%.
     *
     * Generated from protobuf field <code>int32 max_ejection_percent = 18436888;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxEjectionPercent($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_ejection_percent = $var;

        return $this;
    }

    /**
     * The number of hosts in a cluster that must have enough request volume to detect success rate outliers. If the number of hosts is less than this setting, outlier detection via success rate statistics is not performed for any host in the cluster. Defaults to 5.
     *
     * Generated from protobuf field <code>int32 success_rate_minimum_hosts = 525766903;</code>
     * @return int
     */
    public function getSuccessRateMinimumHosts()
    {
        return isset($this->success_rate_minimum_hosts) ? $this->success_rate_minimum_hosts : 0;
    }

    public function hasSuccessRateMinimumHosts()
    {
        return isset($this->success_rate_minimum_hosts);
    }

    public function clearSuccessRateMinimumHosts()
    {
        unset($this->success_rate_minimum_hosts);
    }

    /**
     * The number of hosts in a cluster that must have enough request volume to detect success rate outliers. If the number of hosts is less than this setting, outlier detection via success rate statistics is not performed for any host in the cluster. Defaults to 5.
     *
     * Generated from protobuf field <code>int32 success_rate_minimum_hosts = 525766903;</code>
     * @param int $var
     * @return $this
     */
    public function setSuccessRateMinimumHosts($var)
    {
        GPBUtil::checkInt32($var);
        $this->success_rate_minimum_hosts = $var;

        return $this;
    }

    /**
     * The minimum number of total requests that must be collected in one interval (as defined by the interval duration above) to include this host in success rate based outlier detection. If the volume is lower than this setting, outlier detection via success rate statistics is not performed for that host. Defaults to 100.
     *
     * Generated from protobuf field <code>int32 success_rate_request_volume = 281425357;</code>
     * @return int
     */
    public function getSuccessRateRequestVolume()
    {
        return isset($this->success_rate_request_volume) ? $this->success_rate_request_volume : 0;
    }

    public function hasSuccessRateRequestVolume()
    {
        return isset($this->success_rate_request_volume);
    }

    public function clearSuccessRateRequestVolume()
    {
        unset($this->success_rate_request_volume);
    }

    /**
     * The minimum number of total requests that must be collected in one interval (as defined by the interval duration above) to include this host in success rate based outlier detection. If the volume is lower than this setting, outlier detection via success rate statistics is not performed for that host. Defaults to 100.
     *
     * Generated from protobuf field <code>int32 success_rate_request_volume = 281425357;</code>
     * @param int $var
     * @return $this
     */
    public function setSuccessRateRequestVolume($var)
    {
        GPBUtil::checkInt32($var);
        $this->success_rate_request_volume = $var;

        return $this;
    }

    /**
     * This factor is used to determine the ejection threshold for success rate outlier ejection. The ejection threshold is the difference between the mean success rate, and the product of this factor and the standard deviation of the mean success rate: mean - (stdev * success_rate_stdev_factor). This factor is divided by a thousand to get a double. That is, if the desired factor is 1.9, the runtime value should be 1900. Defaults to 1900.
     *
     * Generated from protobuf field <code>int32 success_rate_stdev_factor = 174735773;</code>
     * @return int
     */
    public function getSuccessRateStdevFactor()
    {
        return isset($this->success_rate_stdev_factor) ? $this->success_rate_stdev_factor : 0;
    }

    public function hasSuccessRateStdevFactor()
    {
        return isset($this->success_rate_stdev_factor);
    }

    public function clearSuccessRateStdevFactor()
    {
        unset($this->success_rate_stdev_factor);
    }

    /**
     * This factor is used to determine the ejection threshold for success rate outlier ejection. The ejection threshold is the difference between the mean success rate, and the product of this factor and the standard deviation of the mean success rate: mean - (stdev * success_rate_stdev_factor). This factor is divided by a thousand to get a double. That is, if the desired factor is 1.9, the runtime value should be 1900. Defaults to 1900.
     *
     * Generated from protobuf field <code>int32 success_rate_stdev_factor = 174735773;</code>
     * @param int $var
     * @return $this
     */
    public function setSuccessRateStdevFactor($var)
    {
        GPBUtil::checkInt32($var);
        $this->success_rate_stdev_factor = $var;

        return $this;
    }

}

