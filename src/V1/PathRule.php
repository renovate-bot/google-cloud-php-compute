<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A path-matching rule for a URL. If matched, will use the specified BackendService to handle the traffic arriving at this URL.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.PathRule</code>
 */
class PathRule extends \Google\Protobuf\Internal\Message
{
    /**
     * customErrorResponsePolicy specifies how the Load Balancer returns error responses when BackendServiceor BackendBucket responds with an error. If a policy for an error code is not configured for the PathRule, a policy for the error code configured in pathMatcher.defaultCustomErrorResponsePolicy is applied. If one is not specified in pathMatcher.defaultCustomErrorResponsePolicy, the policy configured in UrlMap.defaultCustomErrorResponsePolicy takes effect. For example, consider a UrlMap with the following configuration: - UrlMap.defaultCustomErrorResponsePolicy are configured with policies for 5xx and 4xx errors - A PathRule for /coming_soon/ is configured for the error code 404. If the request is for www.myotherdomain.com and a 404 is encountered, the policy under UrlMap.defaultCustomErrorResponsePolicy takes effect. If a 404 response is encountered for the request www.example.com/current_events/, the pathMatcher's policy takes effect. If however, the request for www.example.com/coming_soon/ encounters a 404, the policy in PathRule.customErrorResponsePolicy takes effect. If any of the requests in this example encounter a 500 error code, the policy at UrlMap.defaultCustomErrorResponsePolicy takes effect. customErrorResponsePolicy is supported only for global external Application Load Balancers.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.CustomErrorResponsePolicy custom_error_response_policy = 202816619;</code>
     */
    private $custom_error_response_policy = null;
    /**
     * The list of path patterns to match. Each must start with / and the only place a * is allowed is at the end following a /. The string fed to the path matcher does not include any text after the first ? or #, and those chars are not allowed here.
     *
     * Generated from protobuf field <code>repeated string paths = 106438894;</code>
     */
    private $paths;
    /**
     * In response to a matching path, the load balancer performs advanced routing actions, such as URL rewrites and header transformations, before forwarding the request to the selected backend. Only one of urlRedirect, service or routeAction.weightedBackendService can be set. URL maps for classic Application Load Balancers only support the urlRewrite action within a path rule's routeAction.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.HttpRouteAction route_action = 424563948;</code>
     */
    private $route_action = null;
    /**
     * The full or partial URL of the backend service resource to which traffic is directed if this rule is matched. If routeAction is also specified, advanced routing actions, such as URL rewrites, take effect before sending the request to the backend. Only one of urlRedirect, service or routeAction.weightedBackendService can be set.
     *
     * Generated from protobuf field <code>optional string service = 373540533;</code>
     */
    private $service = null;
    /**
     * When a path pattern is matched, the request is redirected to a URL specified by urlRedirect. Only one of urlRedirect, service or routeAction.weightedBackendService can be set. Not supported when the URL map is bound to a target gRPC proxy.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.HttpRedirectAction url_redirect = 405147820;</code>
     */
    private $url_redirect = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\CustomErrorResponsePolicy $custom_error_response_policy
     *           customErrorResponsePolicy specifies how the Load Balancer returns error responses when BackendServiceor BackendBucket responds with an error. If a policy for an error code is not configured for the PathRule, a policy for the error code configured in pathMatcher.defaultCustomErrorResponsePolicy is applied. If one is not specified in pathMatcher.defaultCustomErrorResponsePolicy, the policy configured in UrlMap.defaultCustomErrorResponsePolicy takes effect. For example, consider a UrlMap with the following configuration: - UrlMap.defaultCustomErrorResponsePolicy are configured with policies for 5xx and 4xx errors - A PathRule for /coming_soon/ is configured for the error code 404. If the request is for www.myotherdomain.com and a 404 is encountered, the policy under UrlMap.defaultCustomErrorResponsePolicy takes effect. If a 404 response is encountered for the request www.example.com/current_events/, the pathMatcher's policy takes effect. If however, the request for www.example.com/coming_soon/ encounters a 404, the policy in PathRule.customErrorResponsePolicy takes effect. If any of the requests in this example encounter a 500 error code, the policy at UrlMap.defaultCustomErrorResponsePolicy takes effect. customErrorResponsePolicy is supported only for global external Application Load Balancers.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $paths
     *           The list of path patterns to match. Each must start with / and the only place a * is allowed is at the end following a /. The string fed to the path matcher does not include any text after the first ? or #, and those chars are not allowed here.
     *     @type \Google\Cloud\Compute\V1\HttpRouteAction $route_action
     *           In response to a matching path, the load balancer performs advanced routing actions, such as URL rewrites and header transformations, before forwarding the request to the selected backend. Only one of urlRedirect, service or routeAction.weightedBackendService can be set. URL maps for classic Application Load Balancers only support the urlRewrite action within a path rule's routeAction.
     *     @type string $service
     *           The full or partial URL of the backend service resource to which traffic is directed if this rule is matched. If routeAction is also specified, advanced routing actions, such as URL rewrites, take effect before sending the request to the backend. Only one of urlRedirect, service or routeAction.weightedBackendService can be set.
     *     @type \Google\Cloud\Compute\V1\HttpRedirectAction $url_redirect
     *           When a path pattern is matched, the request is redirected to a URL specified by urlRedirect. Only one of urlRedirect, service or routeAction.weightedBackendService can be set. Not supported when the URL map is bound to a target gRPC proxy.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * customErrorResponsePolicy specifies how the Load Balancer returns error responses when BackendServiceor BackendBucket responds with an error. If a policy for an error code is not configured for the PathRule, a policy for the error code configured in pathMatcher.defaultCustomErrorResponsePolicy is applied. If one is not specified in pathMatcher.defaultCustomErrorResponsePolicy, the policy configured in UrlMap.defaultCustomErrorResponsePolicy takes effect. For example, consider a UrlMap with the following configuration: - UrlMap.defaultCustomErrorResponsePolicy are configured with policies for 5xx and 4xx errors - A PathRule for /coming_soon/ is configured for the error code 404. If the request is for www.myotherdomain.com and a 404 is encountered, the policy under UrlMap.defaultCustomErrorResponsePolicy takes effect. If a 404 response is encountered for the request www.example.com/current_events/, the pathMatcher's policy takes effect. If however, the request for www.example.com/coming_soon/ encounters a 404, the policy in PathRule.customErrorResponsePolicy takes effect. If any of the requests in this example encounter a 500 error code, the policy at UrlMap.defaultCustomErrorResponsePolicy takes effect. customErrorResponsePolicy is supported only for global external Application Load Balancers.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.CustomErrorResponsePolicy custom_error_response_policy = 202816619;</code>
     * @return \Google\Cloud\Compute\V1\CustomErrorResponsePolicy|null
     */
    public function getCustomErrorResponsePolicy()
    {
        return $this->custom_error_response_policy;
    }

    public function hasCustomErrorResponsePolicy()
    {
        return isset($this->custom_error_response_policy);
    }

    public function clearCustomErrorResponsePolicy()
    {
        unset($this->custom_error_response_policy);
    }

    /**
     * customErrorResponsePolicy specifies how the Load Balancer returns error responses when BackendServiceor BackendBucket responds with an error. If a policy for an error code is not configured for the PathRule, a policy for the error code configured in pathMatcher.defaultCustomErrorResponsePolicy is applied. If one is not specified in pathMatcher.defaultCustomErrorResponsePolicy, the policy configured in UrlMap.defaultCustomErrorResponsePolicy takes effect. For example, consider a UrlMap with the following configuration: - UrlMap.defaultCustomErrorResponsePolicy are configured with policies for 5xx and 4xx errors - A PathRule for /coming_soon/ is configured for the error code 404. If the request is for www.myotherdomain.com and a 404 is encountered, the policy under UrlMap.defaultCustomErrorResponsePolicy takes effect. If a 404 response is encountered for the request www.example.com/current_events/, the pathMatcher's policy takes effect. If however, the request for www.example.com/coming_soon/ encounters a 404, the policy in PathRule.customErrorResponsePolicy takes effect. If any of the requests in this example encounter a 500 error code, the policy at UrlMap.defaultCustomErrorResponsePolicy takes effect. customErrorResponsePolicy is supported only for global external Application Load Balancers.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.CustomErrorResponsePolicy custom_error_response_policy = 202816619;</code>
     * @param \Google\Cloud\Compute\V1\CustomErrorResponsePolicy $var
     * @return $this
     */
    public function setCustomErrorResponsePolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\CustomErrorResponsePolicy::class);
        $this->custom_error_response_policy = $var;

        return $this;
    }

    /**
     * The list of path patterns to match. Each must start with / and the only place a * is allowed is at the end following a /. The string fed to the path matcher does not include any text after the first ? or #, and those chars are not allowed here.
     *
     * Generated from protobuf field <code>repeated string paths = 106438894;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPaths()
    {
        return $this->paths;
    }

    /**
     * The list of path patterns to match. Each must start with / and the only place a * is allowed is at the end following a /. The string fed to the path matcher does not include any text after the first ? or #, and those chars are not allowed here.
     *
     * Generated from protobuf field <code>repeated string paths = 106438894;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPaths($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->paths = $arr;

        return $this;
    }

    /**
     * In response to a matching path, the load balancer performs advanced routing actions, such as URL rewrites and header transformations, before forwarding the request to the selected backend. Only one of urlRedirect, service or routeAction.weightedBackendService can be set. URL maps for classic Application Load Balancers only support the urlRewrite action within a path rule's routeAction.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.HttpRouteAction route_action = 424563948;</code>
     * @return \Google\Cloud\Compute\V1\HttpRouteAction|null
     */
    public function getRouteAction()
    {
        return $this->route_action;
    }

    public function hasRouteAction()
    {
        return isset($this->route_action);
    }

    public function clearRouteAction()
    {
        unset($this->route_action);
    }

    /**
     * In response to a matching path, the load balancer performs advanced routing actions, such as URL rewrites and header transformations, before forwarding the request to the selected backend. Only one of urlRedirect, service or routeAction.weightedBackendService can be set. URL maps for classic Application Load Balancers only support the urlRewrite action within a path rule's routeAction.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.HttpRouteAction route_action = 424563948;</code>
     * @param \Google\Cloud\Compute\V1\HttpRouteAction $var
     * @return $this
     */
    public function setRouteAction($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\HttpRouteAction::class);
        $this->route_action = $var;

        return $this;
    }

    /**
     * The full or partial URL of the backend service resource to which traffic is directed if this rule is matched. If routeAction is also specified, advanced routing actions, such as URL rewrites, take effect before sending the request to the backend. Only one of urlRedirect, service or routeAction.weightedBackendService can be set.
     *
     * Generated from protobuf field <code>optional string service = 373540533;</code>
     * @return string
     */
    public function getService()
    {
        return isset($this->service) ? $this->service : '';
    }

    public function hasService()
    {
        return isset($this->service);
    }

    public function clearService()
    {
        unset($this->service);
    }

    /**
     * The full or partial URL of the backend service resource to which traffic is directed if this rule is matched. If routeAction is also specified, advanced routing actions, such as URL rewrites, take effect before sending the request to the backend. Only one of urlRedirect, service or routeAction.weightedBackendService can be set.
     *
     * Generated from protobuf field <code>optional string service = 373540533;</code>
     * @param string $var
     * @return $this
     */
    public function setService($var)
    {
        GPBUtil::checkString($var, True);
        $this->service = $var;

        return $this;
    }

    /**
     * When a path pattern is matched, the request is redirected to a URL specified by urlRedirect. Only one of urlRedirect, service or routeAction.weightedBackendService can be set. Not supported when the URL map is bound to a target gRPC proxy.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.HttpRedirectAction url_redirect = 405147820;</code>
     * @return \Google\Cloud\Compute\V1\HttpRedirectAction|null
     */
    public function getUrlRedirect()
    {
        return $this->url_redirect;
    }

    public function hasUrlRedirect()
    {
        return isset($this->url_redirect);
    }

    public function clearUrlRedirect()
    {
        unset($this->url_redirect);
    }

    /**
     * When a path pattern is matched, the request is redirected to a URL specified by urlRedirect. Only one of urlRedirect, service or routeAction.weightedBackendService can be set. Not supported when the URL map is bound to a target gRPC proxy.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.HttpRedirectAction url_redirect = 405147820;</code>
     * @param \Google\Cloud\Compute\V1\HttpRedirectAction $var
     * @return $this
     */
    public function setUrlRedirect($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\HttpRedirectAction::class);
        $this->url_redirect = $var;

        return $this;
    }

}

