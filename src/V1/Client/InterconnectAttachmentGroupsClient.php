<?php
/*
 * Copyright 2025 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/compute/v1/compute.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Compute\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Compute\V1\DeleteInterconnectAttachmentGroupRequest;
use Google\Cloud\Compute\V1\GetIamPolicyInterconnectAttachmentGroupRequest;
use Google\Cloud\Compute\V1\GetInterconnectAttachmentGroupRequest;
use Google\Cloud\Compute\V1\GetOperationalStatusInterconnectAttachmentGroupRequest;
use Google\Cloud\Compute\V1\GlobalOperationsClient;
use Google\Cloud\Compute\V1\InsertInterconnectAttachmentGroupRequest;
use Google\Cloud\Compute\V1\InterconnectAttachmentGroup;
use Google\Cloud\Compute\V1\InterconnectAttachmentGroupsGetOperationalStatusResponse;
use Google\Cloud\Compute\V1\InterconnectAttachmentGroupsListResponse;
use Google\Cloud\Compute\V1\ListInterconnectAttachmentGroupsRequest;
use Google\Cloud\Compute\V1\PatchInterconnectAttachmentGroupRequest;
use Google\Cloud\Compute\V1\Policy;
use Google\Cloud\Compute\V1\SetIamPolicyInterconnectAttachmentGroupRequest;
use Google\Cloud\Compute\V1\TestIamPermissionsInterconnectAttachmentGroupRequest;
use Google\Cloud\Compute\V1\TestPermissionsResponse;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Log\LoggerInterface;

/**
 * Service Description: The InterconnectAttachmentGroups API.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * @method PromiseInterface<OperationResponse> deleteAsync(DeleteInterconnectAttachmentGroupRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<InterconnectAttachmentGroup> getAsync(GetInterconnectAttachmentGroupRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Policy> getIamPolicyAsync(GetIamPolicyInterconnectAttachmentGroupRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<InterconnectAttachmentGroupsGetOperationalStatusResponse> getOperationalStatusAsync(GetOperationalStatusInterconnectAttachmentGroupRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> insertAsync(InsertInterconnectAttachmentGroupRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<InterconnectAttachmentGroupsListResponse> listAsync(ListInterconnectAttachmentGroupsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> patchAsync(PatchInterconnectAttachmentGroupRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Policy> setIamPolicyAsync(SetIamPolicyInterconnectAttachmentGroupRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<TestPermissionsResponse> testIamPermissionsAsync(TestIamPermissionsInterconnectAttachmentGroupRequest $request, array $optionalArgs = [])
 */
final class InterconnectAttachmentGroupsClient
{
    use GapicClientTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.compute.v1.InterconnectAttachmentGroups';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'compute.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'compute.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/compute',
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/interconnect_attachment_groups_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/interconnect_attachment_groups_descriptor_config.php',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
                'useJwtAccessWithScope' => false,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/interconnect_attachment_groups_rest_client_config.php',
                ],
            ],
            'operationsClientClass' => GlobalOperationsClient::class,
        ];
    }

    /** Implements GapicClientTrait::defaultTransport. */
    private static function defaultTransport()
    {
        return 'rest';
    }

    /** Implements ClientOptionsTrait::supportedTransports. */
    private static function supportedTransports()
    {
        return [
            'rest',
        ];
    }

    /**
     * Return an GlobalOperationsClient object with the same endpoint as $this.
     *
     * @return GlobalOperationsClient
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /** Return the default longrunning operation descriptor config. */
    private function getDefaultOperationDescriptor()
    {
        return [
            'additionalArgumentMethods' => [
                'getProject',
            ],
            'getOperationMethod' => 'get',
            'cancelOperationMethod' => null,
            'deleteOperationMethod' => 'delete',
            'operationErrorCodeMethod' => 'getHttpErrorStatusCode',
            'operationErrorMessageMethod' => 'getHttpErrorMessage',
            'operationNameMethod' => 'getName',
            'operationStatusMethod' => 'getStatus',
            'operationStatusDoneValue' => \Google\Cloud\Compute\V1\Operation\Status::DONE,
            'getOperationRequest' => '\Google\Cloud\Compute\V1\GetGlobalOperationRequest',
            'cancelOperationRequest' => null,
            'deleteOperationRequest' => '\Google\Cloud\Compute\V1\DeleteGlobalOperationRequest',
        ];
    }

    /**
     * Resume an existing long running operation that was previously started by a long
     * running API method. If $methodName is not provided, or does not match a long
     * running API method, then the operation can still be resumed, but the
     * OperationResponse object will not deserialize the final response.
     *
     * @param string $operationName The name of the long running operation
     * @param string $methodName    The name of the method used to start the operation
     *
     * @return OperationResponse
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning']) ? $this->descriptors[$methodName]['longRunning'] : $this->getDefaultOperationDescriptor();
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();
        return $operation;
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'compute.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *           *Important*: If you accept a credential configuration (credential
     *           JSON/File/Stream) from an external source for authentication to Google Cloud
     *           Platform, you must validate it before providing it to any Google API or library.
     *           Providing an unvalidated credential configuration to Google APIs can compromise
     *           the security of your systems and data. For more information {@see
     *           https://cloud.google.com/docs/authentication/external/externally-sourced-credentials}
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. At the moment, supports only
     *           `rest`. *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\RestTransport::build()} method for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     *     @type false|LoggerInterface $logger
     *           A PSR-3 compliant logger. If set to false, logging is disabled, ignoring the
     *           'GOOGLE_SDK_PHP_LOGGING' environment flag
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
        $this->operationsClient = $this->createOperationsClient($clientOptions);
    }

    /** Handles execution of the async variants for each documented method. */
    public function __call($method, $args)
    {
        if (substr($method, -5) !== 'Async') {
            trigger_error('Call to undefined method ' . __CLASS__ . "::$method()", E_USER_ERROR);
        }

        array_unshift($args, substr($method, 0, -5));
        return call_user_func_array([$this, 'startAsyncCall'], $args);
    }

    /**
     * Deletes the specified InterconnectAttachmentGroup in the given scope
     *
     * The async variant is {@see InterconnectAttachmentGroupsClient::deleteAsync()} .
     *
     * @example samples/V1/InterconnectAttachmentGroupsClient/delete.php
     *
     * @param DeleteInterconnectAttachmentGroupRequest $request     A request to house fields associated with the call.
     * @param array                                    $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function delete(DeleteInterconnectAttachmentGroupRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('Delete', $request, $callOptions)->wait();
    }

    /**
     * Returns the specified InterconnectAttachmentGroup resource in the given scope.
     *
     * The async variant is {@see InterconnectAttachmentGroupsClient::getAsync()} .
     *
     * @example samples/V1/InterconnectAttachmentGroupsClient/get.php
     *
     * @param GetInterconnectAttachmentGroupRequest $request     A request to house fields associated with the call.
     * @param array                                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return InterconnectAttachmentGroup
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function get(GetInterconnectAttachmentGroupRequest $request, array $callOptions = []): InterconnectAttachmentGroup
    {
        return $this->startApiCall('Get', $request, $callOptions)->wait();
    }

    /**
     * Gets the access control policy for a resource. May be empty if no such policy or resource exists.
     *
     * The async variant is
     * {@see InterconnectAttachmentGroupsClient::getIamPolicyAsync()} .
     *
     * @example samples/V1/InterconnectAttachmentGroupsClient/get_iam_policy.php
     *
     * @param GetIamPolicyInterconnectAttachmentGroupRequest $request     A request to house fields associated with the call.
     * @param array                                          $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getIamPolicy(GetIamPolicyInterconnectAttachmentGroupRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('GetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Returns the InterconnectAttachmentStatuses for the specified InterconnectAttachmentGroup resource.
     *
     * The async variant is
     * {@see InterconnectAttachmentGroupsClient::getOperationalStatusAsync()} .
     *
     * @example samples/V1/InterconnectAttachmentGroupsClient/get_operational_status.php
     *
     * @param GetOperationalStatusInterconnectAttachmentGroupRequest $request     A request to house fields associated with the call.
     * @param array                                                  $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return InterconnectAttachmentGroupsGetOperationalStatusResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getOperationalStatus(GetOperationalStatusInterconnectAttachmentGroupRequest $request, array $callOptions = []): InterconnectAttachmentGroupsGetOperationalStatusResponse
    {
        return $this->startApiCall('GetOperationalStatus', $request, $callOptions)->wait();
    }

    /**
     * Creates a InterconnectAttachmentGroup in the specified project in the given scope using the parameters that are included in the request.
     *
     * The async variant is {@see InterconnectAttachmentGroupsClient::insertAsync()} .
     *
     * @example samples/V1/InterconnectAttachmentGroupsClient/insert.php
     *
     * @param InsertInterconnectAttachmentGroupRequest $request     A request to house fields associated with the call.
     * @param array                                    $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function insert(InsertInterconnectAttachmentGroupRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('Insert', $request, $callOptions)->wait();
    }

    /**
     * Lists the InterconnectAttachmentGroups for a project in the given scope.
     *
     * The async variant is {@see InterconnectAttachmentGroupsClient::listAsync()} .
     *
     * @example samples/V1/InterconnectAttachmentGroupsClient/list.php
     *
     * @param ListInterconnectAttachmentGroupsRequest $request     A request to house fields associated with the call.
     * @param array                                   $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return InterconnectAttachmentGroupsListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function list(ListInterconnectAttachmentGroupsRequest $request, array $callOptions = []): InterconnectAttachmentGroupsListResponse
    {
        return $this->startApiCall('List', $request, $callOptions)->wait();
    }

    /**
     * Patches the specified InterconnectAttachmentGroup resource with the data included in the request. This method supports PATCH semantics and uses JSON merge patch format and processing rules.
     *
     * The async variant is {@see InterconnectAttachmentGroupsClient::patchAsync()} .
     *
     * @example samples/V1/InterconnectAttachmentGroupsClient/patch.php
     *
     * @param PatchInterconnectAttachmentGroupRequest $request     A request to house fields associated with the call.
     * @param array                                   $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function patch(PatchInterconnectAttachmentGroupRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('Patch', $request, $callOptions)->wait();
    }

    /**
     * Sets the access control policy on the specified resource. Replaces any existing policy.
     *
     * The async variant is
     * {@see InterconnectAttachmentGroupsClient::setIamPolicyAsync()} .
     *
     * @example samples/V1/InterconnectAttachmentGroupsClient/set_iam_policy.php
     *
     * @param SetIamPolicyInterconnectAttachmentGroupRequest $request     A request to house fields associated with the call.
     * @param array                                          $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function setIamPolicy(SetIamPolicyInterconnectAttachmentGroupRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('SetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Returns permissions that a caller has on the specified resource.
     *
     * The async variant is
     * {@see InterconnectAttachmentGroupsClient::testIamPermissionsAsync()} .
     *
     * @example samples/V1/InterconnectAttachmentGroupsClient/test_iam_permissions.php
     *
     * @param TestIamPermissionsInterconnectAttachmentGroupRequest $request     A request to house fields associated with the call.
     * @param array                                                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return TestPermissionsResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function testIamPermissions(TestIamPermissionsInterconnectAttachmentGroupRequest $request, array $callOptions = []): TestPermissionsResponse
    {
        return $this->startApiCall('TestIamPermissions', $request, $callOptions)->wait();
    }
}
