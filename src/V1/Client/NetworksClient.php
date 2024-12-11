<?php
/*
 * Copyright 2023 Google LLC
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
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Compute\V1\AddPeeringNetworkRequest;
use Google\Cloud\Compute\V1\DeleteNetworkRequest;
use Google\Cloud\Compute\V1\GetEffectiveFirewallsNetworkRequest;
use Google\Cloud\Compute\V1\GetNetworkRequest;
use Google\Cloud\Compute\V1\GlobalOperationsClient;
use Google\Cloud\Compute\V1\InsertNetworkRequest;
use Google\Cloud\Compute\V1\ListNetworksRequest;
use Google\Cloud\Compute\V1\ListPeeringRoutesNetworksRequest;
use Google\Cloud\Compute\V1\Network;
use Google\Cloud\Compute\V1\NetworksGetEffectiveFirewallsResponse;
use Google\Cloud\Compute\V1\PatchNetworkRequest;
use Google\Cloud\Compute\V1\RemovePeeringNetworkRequest;
use Google\Cloud\Compute\V1\SwitchToCustomModeNetworkRequest;
use Google\Cloud\Compute\V1\UpdatePeeringNetworkRequest;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Log\LoggerInterface;

/**
 * Service Description: The Networks API.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * @method PromiseInterface<OperationResponse> addPeeringAsync(AddPeeringNetworkRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> deleteAsync(DeleteNetworkRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Network> getAsync(GetNetworkRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<NetworksGetEffectiveFirewallsResponse> getEffectiveFirewallsAsync(GetEffectiveFirewallsNetworkRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> insertAsync(InsertNetworkRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listAsync(ListNetworksRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listPeeringRoutesAsync(ListPeeringRoutesNetworksRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> patchAsync(PatchNetworkRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> removePeeringAsync(RemovePeeringNetworkRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> switchToCustomModeAsync(SwitchToCustomModeNetworkRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> updatePeeringAsync(UpdatePeeringNetworkRequest $request, array $optionalArgs = [])
 */
final class NetworksClient
{
    use GapicClientTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.compute.v1.Networks';

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
            'clientConfig' => __DIR__ . '/../resources/networks_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/networks_descriptor_config.php',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
                'useJwtAccessWithScope' => false,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/networks_rest_client_config.php',
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
     * Adds a peering to the specified network.
     *
     * The async variant is {@see NetworksClient::addPeeringAsync()} .
     *
     * @param AddPeeringNetworkRequest $request     A request to house fields associated with the call.
     * @param array                    $callOptions {
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
    public function addPeering(AddPeeringNetworkRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('AddPeering', $request, $callOptions)->wait();
    }

    /**
     * Deletes the specified network.
     *
     * The async variant is {@see NetworksClient::deleteAsync()} .
     *
     * @param DeleteNetworkRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
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
    public function delete(DeleteNetworkRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('Delete', $request, $callOptions)->wait();
    }

    /**
     * Returns the specified network.
     *
     * The async variant is {@see NetworksClient::getAsync()} .
     *
     * @param GetNetworkRequest $request     A request to house fields associated with the call.
     * @param array             $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Network
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function get(GetNetworkRequest $request, array $callOptions = []): Network
    {
        return $this->startApiCall('Get', $request, $callOptions)->wait();
    }

    /**
     * Returns the effective firewalls on a given network.
     *
     * The async variant is {@see NetworksClient::getEffectiveFirewallsAsync()} .
     *
     * @param GetEffectiveFirewallsNetworkRequest $request     A request to house fields associated with the call.
     * @param array                               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return NetworksGetEffectiveFirewallsResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getEffectiveFirewalls(GetEffectiveFirewallsNetworkRequest $request, array $callOptions = []): NetworksGetEffectiveFirewallsResponse
    {
        return $this->startApiCall('GetEffectiveFirewalls', $request, $callOptions)->wait();
    }

    /**
     * Creates a network in the specified project using the data included in the request.
     *
     * The async variant is {@see NetworksClient::insertAsync()} .
     *
     * @param InsertNetworkRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
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
    public function insert(InsertNetworkRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('Insert', $request, $callOptions)->wait();
    }

    /**
     * Retrieves the list of networks available to the specified project.
     *
     * The async variant is {@see NetworksClient::listAsync()} .
     *
     * @param ListNetworksRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function list(ListNetworksRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('List', $request, $callOptions);
    }

    /**
     * Lists the peering routes exchanged over peering connection.
     *
     * The async variant is {@see NetworksClient::listPeeringRoutesAsync()} .
     *
     * @param ListPeeringRoutesNetworksRequest $request     A request to house fields associated with the call.
     * @param array                            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listPeeringRoutes(ListPeeringRoutesNetworksRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListPeeringRoutes', $request, $callOptions);
    }

    /**
     * Patches the specified network with the data included in the request. Only routingConfig can be modified.
     *
     * The async variant is {@see NetworksClient::patchAsync()} .
     *
     * @param PatchNetworkRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
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
    public function patch(PatchNetworkRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('Patch', $request, $callOptions)->wait();
    }

    /**
     * Removes a peering from the specified network.
     *
     * The async variant is {@see NetworksClient::removePeeringAsync()} .
     *
     * @param RemovePeeringNetworkRequest $request     A request to house fields associated with the call.
     * @param array                       $callOptions {
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
    public function removePeering(RemovePeeringNetworkRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('RemovePeering', $request, $callOptions)->wait();
    }

    /**
     * Switches the network mode from auto subnet mode to custom subnet mode.
     *
     * The async variant is {@see NetworksClient::switchToCustomModeAsync()} .
     *
     * @param SwitchToCustomModeNetworkRequest $request     A request to house fields associated with the call.
     * @param array                            $callOptions {
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
    public function switchToCustomMode(SwitchToCustomModeNetworkRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('SwitchToCustomMode', $request, $callOptions)->wait();
    }

    /**
     * Updates the specified network peering with the data included in the request. You can only modify the NetworkPeering.export_custom_routes field and the NetworkPeering.import_custom_routes field.
     *
     * The async variant is {@see NetworksClient::updatePeeringAsync()} .
     *
     * @param UpdatePeeringNetworkRequest $request     A request to house fields associated with the call.
     * @param array                       $callOptions {
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
    public function updatePeering(UpdatePeeringNetworkRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('UpdatePeering', $request, $callOptions)->wait();
    }
}
