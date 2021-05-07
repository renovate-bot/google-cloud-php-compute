<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a Packet Mirroring resource.
 * Packet Mirroring clones the traffic of specified instances in your Virtual Private Cloud (VPC) network and forwards it to a collector destination, such as an instance group of an internal TCP/UDP load balancer, for analysis or examination. For more information about setting up Packet Mirroring, see Using Packet Mirroring. (== resource_for {$api_version}.packetMirrorings ==)
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.PacketMirroring</code>
 */
class PacketMirroring extends \Google\Protobuf\Internal\Message
{
    /**
     * The Forwarding Rule resource of type loadBalancingScheme=INTERNAL that will be used as collector for mirrored traffic. The specified forwarding rule must have isMirroringCollector set to true.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.PacketMirroringForwardingRuleInfo collector_ilb = 426607853;</code>
     */
    private $collector_ilb = null;
    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>string creation_timestamp = 30525366;</code>
     */
    private $creation_timestamp = null;
    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>string description = 422937596;</code>
     */
    private $description = null;
    /**
     * Indicates whether or not this packet mirroring takes effect. If set to FALSE, this packet mirroring policy will not be enforced on the network.
     * The default is TRUE.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.PacketMirroring.Enable enable = 311764355;</code>
     */
    private $enable = null;
    /**
     * Filter for mirrored traffic. If unspecified, all traffic is mirrored.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.PacketMirroringFilter filter = 336120696;</code>
     */
    private $filter = null;
    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>string id = 3355;</code>
     */
    private $id = null;
    /**
     * [Output Only] Type of the resource. Always compute#packetMirroring for packet mirrorings.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     */
    private $kind = null;
    /**
     * PacketMirroring mirroredResourceInfos. MirroredResourceInfo specifies a set of mirrored VM instances, subnetworks and/or tags for which traffic from/to all VM instances will be mirrored.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.PacketMirroringMirroredResourceInfo mirrored_resources = 124817348;</code>
     */
    private $mirrored_resources = null;
    /**
     * Name of the resource; provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     */
    private $name = null;
    /**
     * Specifies the mirrored VPC network. Only packets in this network will be mirrored. All mirrored VMs should have a NIC in the given network. All mirrored subnetworks should belong to the given network.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.PacketMirroringNetworkInfo network = 232872494;</code>
     */
    private $network = null;
    /**
     * The priority of applying this configuration. Priority is used to break ties in cases where there is more than one matching rule. In the case of two rules that apply for a given Instance, the one with the lowest-numbered priority value wins.
     * Default value is 1000. Valid range is 0 through 65535.
     *
     * Generated from protobuf field <code>uint32 priority = 445151652;</code>
     */
    private $priority = null;
    /**
     * [Output Only] URI of the region where the packetMirroring resides.
     *
     * Generated from protobuf field <code>string region = 138946292;</code>
     */
    private $region = null;
    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>string self_link = 456214797;</code>
     */
    private $self_link = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\PacketMirroringForwardingRuleInfo $collector_ilb
     *           The Forwarding Rule resource of type loadBalancingScheme=INTERNAL that will be used as collector for mirrored traffic. The specified forwarding rule must have isMirroringCollector set to true.
     *     @type string $creation_timestamp
     *           [Output Only] Creation timestamp in RFC3339 text format.
     *     @type string $description
     *           An optional description of this resource. Provide this property when you create the resource.
     *     @type int $enable
     *           Indicates whether or not this packet mirroring takes effect. If set to FALSE, this packet mirroring policy will not be enforced on the network.
     *           The default is TRUE.
     *     @type \Google\Cloud\Compute\V1\PacketMirroringFilter $filter
     *           Filter for mirrored traffic. If unspecified, all traffic is mirrored.
     *     @type string $id
     *           [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *     @type string $kind
     *           [Output Only] Type of the resource. Always compute#packetMirroring for packet mirrorings.
     *     @type \Google\Cloud\Compute\V1\PacketMirroringMirroredResourceInfo $mirrored_resources
     *           PacketMirroring mirroredResourceInfos. MirroredResourceInfo specifies a set of mirrored VM instances, subnetworks and/or tags for which traffic from/to all VM instances will be mirrored.
     *     @type string $name
     *           Name of the resource; provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *     @type \Google\Cloud\Compute\V1\PacketMirroringNetworkInfo $network
     *           Specifies the mirrored VPC network. Only packets in this network will be mirrored. All mirrored VMs should have a NIC in the given network. All mirrored subnetworks should belong to the given network.
     *     @type int $priority
     *           The priority of applying this configuration. Priority is used to break ties in cases where there is more than one matching rule. In the case of two rules that apply for a given Instance, the one with the lowest-numbered priority value wins.
     *           Default value is 1000. Valid range is 0 through 65535.
     *     @type string $region
     *           [Output Only] URI of the region where the packetMirroring resides.
     *     @type string $self_link
     *           [Output Only] Server-defined URL for the resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The Forwarding Rule resource of type loadBalancingScheme=INTERNAL that will be used as collector for mirrored traffic. The specified forwarding rule must have isMirroringCollector set to true.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.PacketMirroringForwardingRuleInfo collector_ilb = 426607853;</code>
     * @return \Google\Cloud\Compute\V1\PacketMirroringForwardingRuleInfo|null
     */
    public function getCollectorIlb()
    {
        return isset($this->collector_ilb) ? $this->collector_ilb : null;
    }

    public function hasCollectorIlb()
    {
        return isset($this->collector_ilb);
    }

    public function clearCollectorIlb()
    {
        unset($this->collector_ilb);
    }

    /**
     * The Forwarding Rule resource of type loadBalancingScheme=INTERNAL that will be used as collector for mirrored traffic. The specified forwarding rule must have isMirroringCollector set to true.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.PacketMirroringForwardingRuleInfo collector_ilb = 426607853;</code>
     * @param \Google\Cloud\Compute\V1\PacketMirroringForwardingRuleInfo $var
     * @return $this
     */
    public function setCollectorIlb($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\PacketMirroringForwardingRuleInfo::class);
        $this->collector_ilb = $var;

        return $this;
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>string creation_timestamp = 30525366;</code>
     * @return string
     */
    public function getCreationTimestamp()
    {
        return isset($this->creation_timestamp) ? $this->creation_timestamp : '';
    }

    public function hasCreationTimestamp()
    {
        return isset($this->creation_timestamp);
    }

    public function clearCreationTimestamp()
    {
        unset($this->creation_timestamp);
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>string creation_timestamp = 30525366;</code>
     * @param string $var
     * @return $this
     */
    public function setCreationTimestamp($var)
    {
        GPBUtil::checkString($var, True);
        $this->creation_timestamp = $var;

        return $this;
    }

    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>string description = 422937596;</code>
     * @return string
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : '';
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>string description = 422937596;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Indicates whether or not this packet mirroring takes effect. If set to FALSE, this packet mirroring policy will not be enforced on the network.
     * The default is TRUE.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.PacketMirroring.Enable enable = 311764355;</code>
     * @return int
     */
    public function getEnable()
    {
        return isset($this->enable) ? $this->enable : 0;
    }

    public function hasEnable()
    {
        return isset($this->enable);
    }

    public function clearEnable()
    {
        unset($this->enable);
    }

    /**
     * Indicates whether or not this packet mirroring takes effect. If set to FALSE, this packet mirroring policy will not be enforced on the network.
     * The default is TRUE.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.PacketMirroring.Enable enable = 311764355;</code>
     * @param int $var
     * @return $this
     */
    public function setEnable($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\PacketMirroring\Enable::class);
        $this->enable = $var;

        return $this;
    }

    /**
     * Filter for mirrored traffic. If unspecified, all traffic is mirrored.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.PacketMirroringFilter filter = 336120696;</code>
     * @return \Google\Cloud\Compute\V1\PacketMirroringFilter|null
     */
    public function getFilter()
    {
        return isset($this->filter) ? $this->filter : null;
    }

    public function hasFilter()
    {
        return isset($this->filter);
    }

    public function clearFilter()
    {
        unset($this->filter);
    }

    /**
     * Filter for mirrored traffic. If unspecified, all traffic is mirrored.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.PacketMirroringFilter filter = 336120696;</code>
     * @param \Google\Cloud\Compute\V1\PacketMirroringFilter $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\PacketMirroringFilter::class);
        $this->filter = $var;

        return $this;
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>string id = 3355;</code>
     * @return string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : '';
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
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>string id = 3355;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * [Output Only] Type of the resource. Always compute#packetMirroring for packet mirrorings.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     * @return string
     */
    public function getKind()
    {
        return isset($this->kind) ? $this->kind : '';
    }

    public function hasKind()
    {
        return isset($this->kind);
    }

    public function clearKind()
    {
        unset($this->kind);
    }

    /**
     * [Output Only] Type of the resource. Always compute#packetMirroring for packet mirrorings.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * PacketMirroring mirroredResourceInfos. MirroredResourceInfo specifies a set of mirrored VM instances, subnetworks and/or tags for which traffic from/to all VM instances will be mirrored.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.PacketMirroringMirroredResourceInfo mirrored_resources = 124817348;</code>
     * @return \Google\Cloud\Compute\V1\PacketMirroringMirroredResourceInfo|null
     */
    public function getMirroredResources()
    {
        return isset($this->mirrored_resources) ? $this->mirrored_resources : null;
    }

    public function hasMirroredResources()
    {
        return isset($this->mirrored_resources);
    }

    public function clearMirroredResources()
    {
        unset($this->mirrored_resources);
    }

    /**
     * PacketMirroring mirroredResourceInfos. MirroredResourceInfo specifies a set of mirrored VM instances, subnetworks and/or tags for which traffic from/to all VM instances will be mirrored.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.PacketMirroringMirroredResourceInfo mirrored_resources = 124817348;</code>
     * @param \Google\Cloud\Compute\V1\PacketMirroringMirroredResourceInfo $var
     * @return $this
     */
    public function setMirroredResources($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\PacketMirroringMirroredResourceInfo::class);
        $this->mirrored_resources = $var;

        return $this;
    }

    /**
     * Name of the resource; provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
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
     * Name of the resource; provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
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
     * Specifies the mirrored VPC network. Only packets in this network will be mirrored. All mirrored VMs should have a NIC in the given network. All mirrored subnetworks should belong to the given network.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.PacketMirroringNetworkInfo network = 232872494;</code>
     * @return \Google\Cloud\Compute\V1\PacketMirroringNetworkInfo|null
     */
    public function getNetwork()
    {
        return isset($this->network) ? $this->network : null;
    }

    public function hasNetwork()
    {
        return isset($this->network);
    }

    public function clearNetwork()
    {
        unset($this->network);
    }

    /**
     * Specifies the mirrored VPC network. Only packets in this network will be mirrored. All mirrored VMs should have a NIC in the given network. All mirrored subnetworks should belong to the given network.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.PacketMirroringNetworkInfo network = 232872494;</code>
     * @param \Google\Cloud\Compute\V1\PacketMirroringNetworkInfo $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\PacketMirroringNetworkInfo::class);
        $this->network = $var;

        return $this;
    }

    /**
     * The priority of applying this configuration. Priority is used to break ties in cases where there is more than one matching rule. In the case of two rules that apply for a given Instance, the one with the lowest-numbered priority value wins.
     * Default value is 1000. Valid range is 0 through 65535.
     *
     * Generated from protobuf field <code>uint32 priority = 445151652;</code>
     * @return int
     */
    public function getPriority()
    {
        return isset($this->priority) ? $this->priority : 0;
    }

    public function hasPriority()
    {
        return isset($this->priority);
    }

    public function clearPriority()
    {
        unset($this->priority);
    }

    /**
     * The priority of applying this configuration. Priority is used to break ties in cases where there is more than one matching rule. In the case of two rules that apply for a given Instance, the one with the lowest-numbered priority value wins.
     * Default value is 1000. Valid range is 0 through 65535.
     *
     * Generated from protobuf field <code>uint32 priority = 445151652;</code>
     * @param int $var
     * @return $this
     */
    public function setPriority($var)
    {
        GPBUtil::checkUint32($var);
        $this->priority = $var;

        return $this;
    }

    /**
     * [Output Only] URI of the region where the packetMirroring resides.
     *
     * Generated from protobuf field <code>string region = 138946292;</code>
     * @return string
     */
    public function getRegion()
    {
        return isset($this->region) ? $this->region : '';
    }

    public function hasRegion()
    {
        return isset($this->region);
    }

    public function clearRegion()
    {
        unset($this->region);
    }

    /**
     * [Output Only] URI of the region where the packetMirroring resides.
     *
     * Generated from protobuf field <code>string region = 138946292;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>string self_link = 456214797;</code>
     * @return string
     */
    public function getSelfLink()
    {
        return isset($this->self_link) ? $this->self_link : '';
    }

    public function hasSelfLink()
    {
        return isset($this->self_link);
    }

    public function clearSelfLink()
    {
        unset($this->self_link);
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>string self_link = 456214797;</code>
     * @param string $var
     * @return $this
     */
    public function setSelfLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_link = $var;

        return $this;
    }

}

