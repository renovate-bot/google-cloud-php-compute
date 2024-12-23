<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Managed Instance resource.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.ManagedInstance</code>
 */
class ManagedInstance extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] The current action that the managed instance group has scheduled for the instance. Possible values: - NONE The instance is running, and the managed instance group does not have any scheduled actions for this instance. - CREATING The managed instance group is creating this instance. If the group fails to create this instance, it will try again until it is successful. - CREATING_WITHOUT_RETRIES The managed instance group is attempting to create this instance only once. If the group fails to create this instance, it does not try again and the group's targetSize value is decreased instead. - RECREATING The managed instance group is recreating this instance. - DELETING The managed instance group is permanently deleting this instance. - ABANDONING The managed instance group is abandoning this instance. The instance will be removed from the instance group and from any target pools that are associated with this group. - RESTARTING The managed instance group is restarting the instance. - REFRESHING The managed instance group is applying configuration changes to the instance without stopping it. For example, the group can update the target pool list for an instance without stopping that instance. - VERIFYING The managed instance group has created the instance and it is in the process of being verified.
     * Check the CurrentAction enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string current_action = 178475964;</code>
     */
    private $current_action = null;
    /**
     * [Output only] The unique identifier for this resource. This field is empty when instance does not exist.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     */
    private $id = null;
    /**
     * [Output Only] The URL of the instance. The URL can exist even if the instance has not yet been created.
     *
     * Generated from protobuf field <code>optional string instance = 18257045;</code>
     */
    private $instance = null;
    /**
     * [Output Only] Health state of the instance per health-check.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.ManagedInstanceInstanceHealth instance_health = 382667078;</code>
     */
    private $instance_health;
    /**
     * [Output Only] The status of the instance. This field is empty when the instance does not exist.
     * Check the InstanceStatus enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string instance_status = 174577372;</code>
     */
    private $instance_status = null;
    /**
     * [Output Only] Information about the last attempt to create or delete the instance.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ManagedInstanceLastAttempt last_attempt = 434771492;</code>
     */
    private $last_attempt = null;
    /**
     * [Output Only] The name of the instance. The name always exists even if the instance has not yet been created.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     */
    private $name = null;
    /**
     * [Output Only] Preserved state applied from per-instance config for this instance.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.PreservedState preserved_state_from_config = 98661858;</code>
     */
    private $preserved_state_from_config = null;
    /**
     * [Output Only] Preserved state generated based on stateful policy for this instance.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.PreservedState preserved_state_from_policy = 470783954;</code>
     */
    private $preserved_state_from_policy = null;
    /**
     * [Output Only] Instance properties selected for this instance resulting from InstanceFlexibilityPolicy.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ManagedInstancePropertiesFromFlexibilityPolicy properties_from_flexibility_policy = 155525825;</code>
     */
    private $properties_from_flexibility_policy = null;
    /**
     * [Output Only] Intended version of this instance.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ManagedInstanceVersion version = 351608024;</code>
     */
    private $version = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $current_action
     *           [Output Only] The current action that the managed instance group has scheduled for the instance. Possible values: - NONE The instance is running, and the managed instance group does not have any scheduled actions for this instance. - CREATING The managed instance group is creating this instance. If the group fails to create this instance, it will try again until it is successful. - CREATING_WITHOUT_RETRIES The managed instance group is attempting to create this instance only once. If the group fails to create this instance, it does not try again and the group's targetSize value is decreased instead. - RECREATING The managed instance group is recreating this instance. - DELETING The managed instance group is permanently deleting this instance. - ABANDONING The managed instance group is abandoning this instance. The instance will be removed from the instance group and from any target pools that are associated with this group. - RESTARTING The managed instance group is restarting the instance. - REFRESHING The managed instance group is applying configuration changes to the instance without stopping it. For example, the group can update the target pool list for an instance without stopping that instance. - VERIFYING The managed instance group has created the instance and it is in the process of being verified.
     *           Check the CurrentAction enum for the list of possible values.
     *     @type int|string $id
     *           [Output only] The unique identifier for this resource. This field is empty when instance does not exist.
     *     @type string $instance
     *           [Output Only] The URL of the instance. The URL can exist even if the instance has not yet been created.
     *     @type array<\Google\Cloud\Compute\V1\ManagedInstanceInstanceHealth>|\Google\Protobuf\Internal\RepeatedField $instance_health
     *           [Output Only] Health state of the instance per health-check.
     *     @type string $instance_status
     *           [Output Only] The status of the instance. This field is empty when the instance does not exist.
     *           Check the InstanceStatus enum for the list of possible values.
     *     @type \Google\Cloud\Compute\V1\ManagedInstanceLastAttempt $last_attempt
     *           [Output Only] Information about the last attempt to create or delete the instance.
     *     @type string $name
     *           [Output Only] The name of the instance. The name always exists even if the instance has not yet been created.
     *     @type \Google\Cloud\Compute\V1\PreservedState $preserved_state_from_config
     *           [Output Only] Preserved state applied from per-instance config for this instance.
     *     @type \Google\Cloud\Compute\V1\PreservedState $preserved_state_from_policy
     *           [Output Only] Preserved state generated based on stateful policy for this instance.
     *     @type \Google\Cloud\Compute\V1\ManagedInstancePropertiesFromFlexibilityPolicy $properties_from_flexibility_policy
     *           [Output Only] Instance properties selected for this instance resulting from InstanceFlexibilityPolicy.
     *     @type \Google\Cloud\Compute\V1\ManagedInstanceVersion $version
     *           [Output Only] Intended version of this instance.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] The current action that the managed instance group has scheduled for the instance. Possible values: - NONE The instance is running, and the managed instance group does not have any scheduled actions for this instance. - CREATING The managed instance group is creating this instance. If the group fails to create this instance, it will try again until it is successful. - CREATING_WITHOUT_RETRIES The managed instance group is attempting to create this instance only once. If the group fails to create this instance, it does not try again and the group's targetSize value is decreased instead. - RECREATING The managed instance group is recreating this instance. - DELETING The managed instance group is permanently deleting this instance. - ABANDONING The managed instance group is abandoning this instance. The instance will be removed from the instance group and from any target pools that are associated with this group. - RESTARTING The managed instance group is restarting the instance. - REFRESHING The managed instance group is applying configuration changes to the instance without stopping it. For example, the group can update the target pool list for an instance without stopping that instance. - VERIFYING The managed instance group has created the instance and it is in the process of being verified.
     * Check the CurrentAction enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string current_action = 178475964;</code>
     * @return string
     */
    public function getCurrentAction()
    {
        return isset($this->current_action) ? $this->current_action : '';
    }

    public function hasCurrentAction()
    {
        return isset($this->current_action);
    }

    public function clearCurrentAction()
    {
        unset($this->current_action);
    }

    /**
     * [Output Only] The current action that the managed instance group has scheduled for the instance. Possible values: - NONE The instance is running, and the managed instance group does not have any scheduled actions for this instance. - CREATING The managed instance group is creating this instance. If the group fails to create this instance, it will try again until it is successful. - CREATING_WITHOUT_RETRIES The managed instance group is attempting to create this instance only once. If the group fails to create this instance, it does not try again and the group's targetSize value is decreased instead. - RECREATING The managed instance group is recreating this instance. - DELETING The managed instance group is permanently deleting this instance. - ABANDONING The managed instance group is abandoning this instance. The instance will be removed from the instance group and from any target pools that are associated with this group. - RESTARTING The managed instance group is restarting the instance. - REFRESHING The managed instance group is applying configuration changes to the instance without stopping it. For example, the group can update the target pool list for an instance without stopping that instance. - VERIFYING The managed instance group has created the instance and it is in the process of being verified.
     * Check the CurrentAction enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string current_action = 178475964;</code>
     * @param string $var
     * @return $this
     */
    public function setCurrentAction($var)
    {
        GPBUtil::checkString($var, True);
        $this->current_action = $var;

        return $this;
    }

    /**
     * [Output only] The unique identifier for this resource. This field is empty when instance does not exist.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     * @return int|string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : 0;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * [Output only] The unique identifier for this resource. This field is empty when instance does not exist.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * [Output Only] The URL of the instance. The URL can exist even if the instance has not yet been created.
     *
     * Generated from protobuf field <code>optional string instance = 18257045;</code>
     * @return string
     */
    public function getInstance()
    {
        return isset($this->instance) ? $this->instance : '';
    }

    public function hasInstance()
    {
        return isset($this->instance);
    }

    public function clearInstance()
    {
        unset($this->instance);
    }

    /**
     * [Output Only] The URL of the instance. The URL can exist even if the instance has not yet been created.
     *
     * Generated from protobuf field <code>optional string instance = 18257045;</code>
     * @param string $var
     * @return $this
     */
    public function setInstance($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance = $var;

        return $this;
    }

    /**
     * [Output Only] Health state of the instance per health-check.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.ManagedInstanceInstanceHealth instance_health = 382667078;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInstanceHealth()
    {
        return $this->instance_health;
    }

    /**
     * [Output Only] Health state of the instance per health-check.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.ManagedInstanceInstanceHealth instance_health = 382667078;</code>
     * @param array<\Google\Cloud\Compute\V1\ManagedInstanceInstanceHealth>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInstanceHealth($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\ManagedInstanceInstanceHealth::class);
        $this->instance_health = $arr;

        return $this;
    }

    /**
     * [Output Only] The status of the instance. This field is empty when the instance does not exist.
     * Check the InstanceStatus enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string instance_status = 174577372;</code>
     * @return string
     */
    public function getInstanceStatus()
    {
        return isset($this->instance_status) ? $this->instance_status : '';
    }

    public function hasInstanceStatus()
    {
        return isset($this->instance_status);
    }

    public function clearInstanceStatus()
    {
        unset($this->instance_status);
    }

    /**
     * [Output Only] The status of the instance. This field is empty when the instance does not exist.
     * Check the InstanceStatus enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string instance_status = 174577372;</code>
     * @param string $var
     * @return $this
     */
    public function setInstanceStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance_status = $var;

        return $this;
    }

    /**
     * [Output Only] Information about the last attempt to create or delete the instance.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ManagedInstanceLastAttempt last_attempt = 434771492;</code>
     * @return \Google\Cloud\Compute\V1\ManagedInstanceLastAttempt|null
     */
    public function getLastAttempt()
    {
        return $this->last_attempt;
    }

    public function hasLastAttempt()
    {
        return isset($this->last_attempt);
    }

    public function clearLastAttempt()
    {
        unset($this->last_attempt);
    }

    /**
     * [Output Only] Information about the last attempt to create or delete the instance.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ManagedInstanceLastAttempt last_attempt = 434771492;</code>
     * @param \Google\Cloud\Compute\V1\ManagedInstanceLastAttempt $var
     * @return $this
     */
    public function setLastAttempt($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\ManagedInstanceLastAttempt::class);
        $this->last_attempt = $var;

        return $this;
    }

    /**
     * [Output Only] The name of the instance. The name always exists even if the instance has not yet been created.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * [Output Only] The name of the instance. The name always exists even if the instance has not yet been created.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * [Output Only] Preserved state applied from per-instance config for this instance.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.PreservedState preserved_state_from_config = 98661858;</code>
     * @return \Google\Cloud\Compute\V1\PreservedState|null
     */
    public function getPreservedStateFromConfig()
    {
        return $this->preserved_state_from_config;
    }

    public function hasPreservedStateFromConfig()
    {
        return isset($this->preserved_state_from_config);
    }

    public function clearPreservedStateFromConfig()
    {
        unset($this->preserved_state_from_config);
    }

    /**
     * [Output Only] Preserved state applied from per-instance config for this instance.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.PreservedState preserved_state_from_config = 98661858;</code>
     * @param \Google\Cloud\Compute\V1\PreservedState $var
     * @return $this
     */
    public function setPreservedStateFromConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\PreservedState::class);
        $this->preserved_state_from_config = $var;

        return $this;
    }

    /**
     * [Output Only] Preserved state generated based on stateful policy for this instance.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.PreservedState preserved_state_from_policy = 470783954;</code>
     * @return \Google\Cloud\Compute\V1\PreservedState|null
     */
    public function getPreservedStateFromPolicy()
    {
        return $this->preserved_state_from_policy;
    }

    public function hasPreservedStateFromPolicy()
    {
        return isset($this->preserved_state_from_policy);
    }

    public function clearPreservedStateFromPolicy()
    {
        unset($this->preserved_state_from_policy);
    }

    /**
     * [Output Only] Preserved state generated based on stateful policy for this instance.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.PreservedState preserved_state_from_policy = 470783954;</code>
     * @param \Google\Cloud\Compute\V1\PreservedState $var
     * @return $this
     */
    public function setPreservedStateFromPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\PreservedState::class);
        $this->preserved_state_from_policy = $var;

        return $this;
    }

    /**
     * [Output Only] Instance properties selected for this instance resulting from InstanceFlexibilityPolicy.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ManagedInstancePropertiesFromFlexibilityPolicy properties_from_flexibility_policy = 155525825;</code>
     * @return \Google\Cloud\Compute\V1\ManagedInstancePropertiesFromFlexibilityPolicy|null
     */
    public function getPropertiesFromFlexibilityPolicy()
    {
        return $this->properties_from_flexibility_policy;
    }

    public function hasPropertiesFromFlexibilityPolicy()
    {
        return isset($this->properties_from_flexibility_policy);
    }

    public function clearPropertiesFromFlexibilityPolicy()
    {
        unset($this->properties_from_flexibility_policy);
    }

    /**
     * [Output Only] Instance properties selected for this instance resulting from InstanceFlexibilityPolicy.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ManagedInstancePropertiesFromFlexibilityPolicy properties_from_flexibility_policy = 155525825;</code>
     * @param \Google\Cloud\Compute\V1\ManagedInstancePropertiesFromFlexibilityPolicy $var
     * @return $this
     */
    public function setPropertiesFromFlexibilityPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\ManagedInstancePropertiesFromFlexibilityPolicy::class);
        $this->properties_from_flexibility_policy = $var;

        return $this;
    }

    /**
     * [Output Only] Intended version of this instance.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ManagedInstanceVersion version = 351608024;</code>
     * @return \Google\Cloud\Compute\V1\ManagedInstanceVersion|null
     */
    public function getVersion()
    {
        return $this->version;
    }

    public function hasVersion()
    {
        return isset($this->version);
    }

    public function clearVersion()
    {
        unset($this->version);
    }

    /**
     * [Output Only] Intended version of this instance.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.ManagedInstanceVersion version = 351608024;</code>
     * @param \Google\Cloud\Compute\V1\ManagedInstanceVersion $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\ManagedInstanceVersion::class);
        $this->version = $var;

        return $this;
    }

}

