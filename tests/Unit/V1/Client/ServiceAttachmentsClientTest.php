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
 * This file was automatically generated - do not edit!
 */

namespace Google\Cloud\Compute\Tests\Unit\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\Testing\GeneratedTest;
use Google\ApiCore\Testing\MockTransport;
use Google\Cloud\Compute\V1\AggregatedListServiceAttachmentsRequest;
use Google\Cloud\Compute\V1\Client\ServiceAttachmentsClient;
use Google\Cloud\Compute\V1\DeleteServiceAttachmentRequest;
use Google\Cloud\Compute\V1\GetIamPolicyServiceAttachmentRequest;
use Google\Cloud\Compute\V1\GetRegionOperationRequest;
use Google\Cloud\Compute\V1\GetServiceAttachmentRequest;
use Google\Cloud\Compute\V1\InsertServiceAttachmentRequest;
use Google\Cloud\Compute\V1\ListServiceAttachmentsRequest;
use Google\Cloud\Compute\V1\Operation;
use Google\Cloud\Compute\V1\Operation\Status;
use Google\Cloud\Compute\V1\PatchServiceAttachmentRequest;
use Google\Cloud\Compute\V1\Policy;
use Google\Cloud\Compute\V1\RegionOperationsClient;
use Google\Cloud\Compute\V1\RegionSetPolicyRequest;
use Google\Cloud\Compute\V1\ServiceAttachment;
use Google\Cloud\Compute\V1\ServiceAttachmentAggregatedList;
use Google\Cloud\Compute\V1\ServiceAttachmentList;
use Google\Cloud\Compute\V1\ServiceAttachmentsScopedList;
use Google\Cloud\Compute\V1\SetIamPolicyServiceAttachmentRequest;
use Google\Cloud\Compute\V1\TestIamPermissionsServiceAttachmentRequest;
use Google\Cloud\Compute\V1\TestPermissionsRequest;
use Google\Cloud\Compute\V1\TestPermissionsResponse;
use Google\Rpc\Code;
use stdClass;

/**
 * @group compute
 *
 * @group gapic
 */
class ServiceAttachmentsClientTest extends GeneratedTest
{
    /** @return TransportInterface */
    private function createTransport($deserialize = null)
    {
        return new MockTransport($deserialize);
    }

    /** @return CredentialsWrapper */
    private function createCredentials()
    {
        return $this->getMockBuilder(CredentialsWrapper::class)->disableOriginalConstructor()->getMock();
    }

    /** @return ServiceAttachmentsClient */
    private function createClient(array $options = [])
    {
        $options += [
            'credentials' => $this->createCredentials(),
        ];
        return new ServiceAttachmentsClient($options);
    }

    /** @test */
    public function aggregatedListTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $id = 'id3355';
        $kind = 'kind3292052';
        $nextPageToken = '';
        $selfLink = 'selfLink-1691268851';
        $items = [
            'itemsKey' => new ServiceAttachmentsScopedList(),
        ];
        $expectedResponse = new ServiceAttachmentAggregatedList();
        $expectedResponse->setId($id);
        $expectedResponse->setKind($kind);
        $expectedResponse->setNextPageToken($nextPageToken);
        $expectedResponse->setSelfLink($selfLink);
        $expectedResponse->setItems($items);
        $transport->addResponse($expectedResponse);
        // Mock request
        $project = 'project-309310695';
        $request = (new AggregatedListServiceAttachmentsRequest())
            ->setProject($project);
        $response = $gapicClient->aggregatedList($request);
        $this->assertEquals($expectedResponse, $response->getPage()->getResponseObject());
        $resources = iterator_to_array($response->iterateAllElements());
        $this->assertSame(1, count($resources));
        $this->assertArrayHasKey('itemsKey', $expectedResponse->getItems());
        $this->assertArrayHasKey('itemsKey', $resources);
        $this->assertEquals($expectedResponse->getItems()['itemsKey'], $resources['itemsKey']);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.compute.v1.ServiceAttachments/AggregatedList', $actualFuncCall);
        $actualValue = $actualRequestObject->getProject();
        $this->assertProtobufEquals($project, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function aggregatedListExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $project = 'project-309310695';
        $request = (new AggregatedListServiceAttachmentsRequest())
            ->setProject($project);
        try {
            $gapicClient->aggregatedList($request);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function deleteTest()
    {
        $operationsTransport = $this->createTransport();
        $operationsClient = new RegionOperationsClient([
            'apiEndpoint' => '',
            'transport' => $operationsTransport,
            'credentials' => $this->createCredentials(),
        ]);
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
            'operationsClient' => $operationsClient,
        ]);
        $this->assertTrue($transport->isExhausted());
        $this->assertTrue($operationsTransport->isExhausted());
        // Mock response
        $incompleteOperation = new Operation();
        $incompleteOperation->setName('customOperations/deleteTest');
        $incompleteOperation->setStatus(Status::RUNNING);
        $transport->addResponse($incompleteOperation);
        $completeOperation = new Operation();
        $completeOperation->setName('customOperations/deleteTest');
        $completeOperation->setStatus(Status::DONE);
        $operationsTransport->addResponse($completeOperation);
        // Mock request
        $project = 'project-309310695';
        $region = 'region-934795532';
        $serviceAttachment = 'serviceAttachment-1271655187';
        $request = (new DeleteServiceAttachmentRequest())
            ->setProject($project)
            ->setRegion($region)
            ->setServiceAttachment($serviceAttachment);
        $response = $gapicClient->delete($request);
        $this->assertFalse($response->isDone());
        $apiRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($apiRequests));
        $operationsRequestsEmpty = $operationsTransport->popReceivedCalls();
        $this->assertSame(0, count($operationsRequestsEmpty));
        $actualApiFuncCall = $apiRequests[0]->getFuncCall();
        $actualApiRequestObject = $apiRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.compute.v1.ServiceAttachments/Delete', $actualApiFuncCall);
        $actualValue = $actualApiRequestObject->getProject();
        $this->assertProtobufEquals($project, $actualValue);
        $actualValue = $actualApiRequestObject->getRegion();
        $this->assertProtobufEquals($region, $actualValue);
        $actualValue = $actualApiRequestObject->getServiceAttachment();
        $this->assertProtobufEquals($serviceAttachment, $actualValue);
        $expectedOperationsRequestObject = new GetRegionOperationRequest();
        $expectedOperationsRequestObject->setOperation($completeOperation->getName());
        $expectedOperationsRequestObject->setProject($project);
        $expectedOperationsRequestObject->setRegion($region);
        $response->pollUntilComplete([
            'initialPollDelayMillis' => 1,
        ]);
        $this->assertTrue($response->isDone());
        $apiRequestsEmpty = $transport->popReceivedCalls();
        $this->assertSame(0, count($apiRequestsEmpty));
        $operationsRequests = $operationsTransport->popReceivedCalls();
        $this->assertSame(1, count($operationsRequests));
        $actualOperationsFuncCall = $operationsRequests[0]->getFuncCall();
        $actualOperationsRequestObject = $operationsRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.compute.v1.RegionOperations/Get', $actualOperationsFuncCall);
        $this->assertEquals($expectedOperationsRequestObject, $actualOperationsRequestObject);
        $this->assertTrue($transport->isExhausted());
        $this->assertTrue($operationsTransport->isExhausted());
    }

    /** @test */
    public function deleteExceptionTest()
    {
        $operationsTransport = $this->createTransport();
        $operationsClient = new RegionOperationsClient([
            'apiEndpoint' => '',
            'transport' => $operationsTransport,
            'credentials' => $this->createCredentials(),
        ]);
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
            'operationsClient' => $operationsClient,
        ]);
        $this->assertTrue($transport->isExhausted());
        $this->assertTrue($operationsTransport->isExhausted());
        // Mock response
        $incompleteOperation = new Operation();
        $incompleteOperation->setName('customOperations/deleteExceptionTest');
        $incompleteOperation->setStatus(Status::RUNNING);
        $transport->addResponse($incompleteOperation);
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $operationsTransport->addResponse(null, $status);
        // Mock request
        $project = 'project-309310695';
        $region = 'region-934795532';
        $serviceAttachment = 'serviceAttachment-1271655187';
        $request = (new DeleteServiceAttachmentRequest())
            ->setProject($project)
            ->setRegion($region)
            ->setServiceAttachment($serviceAttachment);
        $response = $gapicClient->delete($request);
        $this->assertFalse($response->isDone());
        $this->assertNull($response->getResult());
        try {
            $response->pollUntilComplete([
                'initialPollDelayMillis' => 1,
            ]);
            // If the pollUntilComplete() method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stubs are exhausted
        $transport->popReceivedCalls();
        $operationsTransport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
        $this->assertTrue($operationsTransport->isExhausted());
    }

    /** @test */
    public function getTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $connectionPreference = 'connectionPreference822688988';
        $creationTimestamp = 'creationTimestamp567396278';
        $description = 'description-1724546052';
        $enableProxyProtocol = false;
        $fingerprint = 'fingerprint-1375934236';
        $id = 3355;
        $kind = 'kind3292052';
        $name = 'name3373707';
        $producerForwardingRule = 'producerForwardingRule-825813935';
        $reconcileConnections = true;
        $region2 = 'region2-690338393';
        $selfLink = 'selfLink-1691268851';
        $targetService = 'targetService-1609318905';
        $expectedResponse = new ServiceAttachment();
        $expectedResponse->setConnectionPreference($connectionPreference);
        $expectedResponse->setCreationTimestamp($creationTimestamp);
        $expectedResponse->setDescription($description);
        $expectedResponse->setEnableProxyProtocol($enableProxyProtocol);
        $expectedResponse->setFingerprint($fingerprint);
        $expectedResponse->setId($id);
        $expectedResponse->setKind($kind);
        $expectedResponse->setName($name);
        $expectedResponse->setProducerForwardingRule($producerForwardingRule);
        $expectedResponse->setReconcileConnections($reconcileConnections);
        $expectedResponse->setRegion($region2);
        $expectedResponse->setSelfLink($selfLink);
        $expectedResponse->setTargetService($targetService);
        $transport->addResponse($expectedResponse);
        // Mock request
        $project = 'project-309310695';
        $region = 'region-934795532';
        $serviceAttachment = 'serviceAttachment-1271655187';
        $request = (new GetServiceAttachmentRequest())
            ->setProject($project)
            ->setRegion($region)
            ->setServiceAttachment($serviceAttachment);
        $response = $gapicClient->get($request);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.compute.v1.ServiceAttachments/Get', $actualFuncCall);
        $actualValue = $actualRequestObject->getProject();
        $this->assertProtobufEquals($project, $actualValue);
        $actualValue = $actualRequestObject->getRegion();
        $this->assertProtobufEquals($region, $actualValue);
        $actualValue = $actualRequestObject->getServiceAttachment();
        $this->assertProtobufEquals($serviceAttachment, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $project = 'project-309310695';
        $region = 'region-934795532';
        $serviceAttachment = 'serviceAttachment-1271655187';
        $request = (new GetServiceAttachmentRequest())
            ->setProject($project)
            ->setRegion($region)
            ->setServiceAttachment($serviceAttachment);
        try {
            $gapicClient->get($request);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getIamPolicyTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $etag = 'etag3123477';
        $iamOwned = false;
        $version = 351608024;
        $expectedResponse = new Policy();
        $expectedResponse->setEtag($etag);
        $expectedResponse->setIamOwned($iamOwned);
        $expectedResponse->setVersion($version);
        $transport->addResponse($expectedResponse);
        // Mock request
        $project = 'project-309310695';
        $region = 'region-934795532';
        $resource = 'resource-341064690';
        $request = (new GetIamPolicyServiceAttachmentRequest())
            ->setProject($project)
            ->setRegion($region)
            ->setResource($resource);
        $response = $gapicClient->getIamPolicy($request);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.compute.v1.ServiceAttachments/GetIamPolicy', $actualFuncCall);
        $actualValue = $actualRequestObject->getProject();
        $this->assertProtobufEquals($project, $actualValue);
        $actualValue = $actualRequestObject->getRegion();
        $this->assertProtobufEquals($region, $actualValue);
        $actualValue = $actualRequestObject->getResource();
        $this->assertProtobufEquals($resource, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function getIamPolicyExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $project = 'project-309310695';
        $region = 'region-934795532';
        $resource = 'resource-341064690';
        $request = (new GetIamPolicyServiceAttachmentRequest())
            ->setProject($project)
            ->setRegion($region)
            ->setResource($resource);
        try {
            $gapicClient->getIamPolicy($request);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function insertTest()
    {
        $operationsTransport = $this->createTransport();
        $operationsClient = new RegionOperationsClient([
            'apiEndpoint' => '',
            'transport' => $operationsTransport,
            'credentials' => $this->createCredentials(),
        ]);
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
            'operationsClient' => $operationsClient,
        ]);
        $this->assertTrue($transport->isExhausted());
        $this->assertTrue($operationsTransport->isExhausted());
        // Mock response
        $incompleteOperation = new Operation();
        $incompleteOperation->setName('customOperations/insertTest');
        $incompleteOperation->setStatus(Status::RUNNING);
        $transport->addResponse($incompleteOperation);
        $completeOperation = new Operation();
        $completeOperation->setName('customOperations/insertTest');
        $completeOperation->setStatus(Status::DONE);
        $operationsTransport->addResponse($completeOperation);
        // Mock request
        $project = 'project-309310695';
        $region = 'region-934795532';
        $serviceAttachmentResource = new ServiceAttachment();
        $request = (new InsertServiceAttachmentRequest())
            ->setProject($project)
            ->setRegion($region)
            ->setServiceAttachmentResource($serviceAttachmentResource);
        $response = $gapicClient->insert($request);
        $this->assertFalse($response->isDone());
        $apiRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($apiRequests));
        $operationsRequestsEmpty = $operationsTransport->popReceivedCalls();
        $this->assertSame(0, count($operationsRequestsEmpty));
        $actualApiFuncCall = $apiRequests[0]->getFuncCall();
        $actualApiRequestObject = $apiRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.compute.v1.ServiceAttachments/Insert', $actualApiFuncCall);
        $actualValue = $actualApiRequestObject->getProject();
        $this->assertProtobufEquals($project, $actualValue);
        $actualValue = $actualApiRequestObject->getRegion();
        $this->assertProtobufEquals($region, $actualValue);
        $actualValue = $actualApiRequestObject->getServiceAttachmentResource();
        $this->assertProtobufEquals($serviceAttachmentResource, $actualValue);
        $expectedOperationsRequestObject = new GetRegionOperationRequest();
        $expectedOperationsRequestObject->setOperation($completeOperation->getName());
        $expectedOperationsRequestObject->setProject($project);
        $expectedOperationsRequestObject->setRegion($region);
        $response->pollUntilComplete([
            'initialPollDelayMillis' => 1,
        ]);
        $this->assertTrue($response->isDone());
        $apiRequestsEmpty = $transport->popReceivedCalls();
        $this->assertSame(0, count($apiRequestsEmpty));
        $operationsRequests = $operationsTransport->popReceivedCalls();
        $this->assertSame(1, count($operationsRequests));
        $actualOperationsFuncCall = $operationsRequests[0]->getFuncCall();
        $actualOperationsRequestObject = $operationsRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.compute.v1.RegionOperations/Get', $actualOperationsFuncCall);
        $this->assertEquals($expectedOperationsRequestObject, $actualOperationsRequestObject);
        $this->assertTrue($transport->isExhausted());
        $this->assertTrue($operationsTransport->isExhausted());
    }

    /** @test */
    public function insertExceptionTest()
    {
        $operationsTransport = $this->createTransport();
        $operationsClient = new RegionOperationsClient([
            'apiEndpoint' => '',
            'transport' => $operationsTransport,
            'credentials' => $this->createCredentials(),
        ]);
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
            'operationsClient' => $operationsClient,
        ]);
        $this->assertTrue($transport->isExhausted());
        $this->assertTrue($operationsTransport->isExhausted());
        // Mock response
        $incompleteOperation = new Operation();
        $incompleteOperation->setName('customOperations/insertExceptionTest');
        $incompleteOperation->setStatus(Status::RUNNING);
        $transport->addResponse($incompleteOperation);
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $operationsTransport->addResponse(null, $status);
        // Mock request
        $project = 'project-309310695';
        $region = 'region-934795532';
        $serviceAttachmentResource = new ServiceAttachment();
        $request = (new InsertServiceAttachmentRequest())
            ->setProject($project)
            ->setRegion($region)
            ->setServiceAttachmentResource($serviceAttachmentResource);
        $response = $gapicClient->insert($request);
        $this->assertFalse($response->isDone());
        $this->assertNull($response->getResult());
        try {
            $response->pollUntilComplete([
                'initialPollDelayMillis' => 1,
            ]);
            // If the pollUntilComplete() method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stubs are exhausted
        $transport->popReceivedCalls();
        $operationsTransport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
        $this->assertTrue($operationsTransport->isExhausted());
    }

    /** @test */
    public function listTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $id = 'id3355';
        $kind = 'kind3292052';
        $nextPageToken = '';
        $selfLink = 'selfLink-1691268851';
        $itemsElement = new ServiceAttachment();
        $items = [
            $itemsElement,
        ];
        $expectedResponse = new ServiceAttachmentList();
        $expectedResponse->setId($id);
        $expectedResponse->setKind($kind);
        $expectedResponse->setNextPageToken($nextPageToken);
        $expectedResponse->setSelfLink($selfLink);
        $expectedResponse->setItems($items);
        $transport->addResponse($expectedResponse);
        // Mock request
        $project = 'project-309310695';
        $region = 'region-934795532';
        $request = (new ListServiceAttachmentsRequest())
            ->setProject($project)
            ->setRegion($region);
        $response = $gapicClient->list($request);
        $this->assertEquals($expectedResponse, $response->getPage()->getResponseObject());
        $resources = iterator_to_array($response->iterateAllElements());
        $this->assertSame(1, count($resources));
        $this->assertEquals($expectedResponse->getItems()[0], $resources[0]);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.compute.v1.ServiceAttachments/List', $actualFuncCall);
        $actualValue = $actualRequestObject->getProject();
        $this->assertProtobufEquals($project, $actualValue);
        $actualValue = $actualRequestObject->getRegion();
        $this->assertProtobufEquals($region, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function listExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $project = 'project-309310695';
        $region = 'region-934795532';
        $request = (new ListServiceAttachmentsRequest())
            ->setProject($project)
            ->setRegion($region);
        try {
            $gapicClient->list($request);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function patchTest()
    {
        $operationsTransport = $this->createTransport();
        $operationsClient = new RegionOperationsClient([
            'apiEndpoint' => '',
            'transport' => $operationsTransport,
            'credentials' => $this->createCredentials(),
        ]);
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
            'operationsClient' => $operationsClient,
        ]);
        $this->assertTrue($transport->isExhausted());
        $this->assertTrue($operationsTransport->isExhausted());
        // Mock response
        $incompleteOperation = new Operation();
        $incompleteOperation->setName('customOperations/patchTest');
        $incompleteOperation->setStatus(Status::RUNNING);
        $transport->addResponse($incompleteOperation);
        $completeOperation = new Operation();
        $completeOperation->setName('customOperations/patchTest');
        $completeOperation->setStatus(Status::DONE);
        $operationsTransport->addResponse($completeOperation);
        // Mock request
        $project = 'project-309310695';
        $region = 'region-934795532';
        $serviceAttachment = 'serviceAttachment-1271655187';
        $serviceAttachmentResource = new ServiceAttachment();
        $request = (new PatchServiceAttachmentRequest())
            ->setProject($project)
            ->setRegion($region)
            ->setServiceAttachment($serviceAttachment)
            ->setServiceAttachmentResource($serviceAttachmentResource);
        $response = $gapicClient->patch($request);
        $this->assertFalse($response->isDone());
        $apiRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($apiRequests));
        $operationsRequestsEmpty = $operationsTransport->popReceivedCalls();
        $this->assertSame(0, count($operationsRequestsEmpty));
        $actualApiFuncCall = $apiRequests[0]->getFuncCall();
        $actualApiRequestObject = $apiRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.compute.v1.ServiceAttachments/Patch', $actualApiFuncCall);
        $actualValue = $actualApiRequestObject->getProject();
        $this->assertProtobufEquals($project, $actualValue);
        $actualValue = $actualApiRequestObject->getRegion();
        $this->assertProtobufEquals($region, $actualValue);
        $actualValue = $actualApiRequestObject->getServiceAttachment();
        $this->assertProtobufEquals($serviceAttachment, $actualValue);
        $actualValue = $actualApiRequestObject->getServiceAttachmentResource();
        $this->assertProtobufEquals($serviceAttachmentResource, $actualValue);
        $expectedOperationsRequestObject = new GetRegionOperationRequest();
        $expectedOperationsRequestObject->setOperation($completeOperation->getName());
        $expectedOperationsRequestObject->setProject($project);
        $expectedOperationsRequestObject->setRegion($region);
        $response->pollUntilComplete([
            'initialPollDelayMillis' => 1,
        ]);
        $this->assertTrue($response->isDone());
        $apiRequestsEmpty = $transport->popReceivedCalls();
        $this->assertSame(0, count($apiRequestsEmpty));
        $operationsRequests = $operationsTransport->popReceivedCalls();
        $this->assertSame(1, count($operationsRequests));
        $actualOperationsFuncCall = $operationsRequests[0]->getFuncCall();
        $actualOperationsRequestObject = $operationsRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.compute.v1.RegionOperations/Get', $actualOperationsFuncCall);
        $this->assertEquals($expectedOperationsRequestObject, $actualOperationsRequestObject);
        $this->assertTrue($transport->isExhausted());
        $this->assertTrue($operationsTransport->isExhausted());
    }

    /** @test */
    public function patchExceptionTest()
    {
        $operationsTransport = $this->createTransport();
        $operationsClient = new RegionOperationsClient([
            'apiEndpoint' => '',
            'transport' => $operationsTransport,
            'credentials' => $this->createCredentials(),
        ]);
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
            'operationsClient' => $operationsClient,
        ]);
        $this->assertTrue($transport->isExhausted());
        $this->assertTrue($operationsTransport->isExhausted());
        // Mock response
        $incompleteOperation = new Operation();
        $incompleteOperation->setName('customOperations/patchExceptionTest');
        $incompleteOperation->setStatus(Status::RUNNING);
        $transport->addResponse($incompleteOperation);
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $operationsTransport->addResponse(null, $status);
        // Mock request
        $project = 'project-309310695';
        $region = 'region-934795532';
        $serviceAttachment = 'serviceAttachment-1271655187';
        $serviceAttachmentResource = new ServiceAttachment();
        $request = (new PatchServiceAttachmentRequest())
            ->setProject($project)
            ->setRegion($region)
            ->setServiceAttachment($serviceAttachment)
            ->setServiceAttachmentResource($serviceAttachmentResource);
        $response = $gapicClient->patch($request);
        $this->assertFalse($response->isDone());
        $this->assertNull($response->getResult());
        try {
            $response->pollUntilComplete([
                'initialPollDelayMillis' => 1,
            ]);
            // If the pollUntilComplete() method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stubs are exhausted
        $transport->popReceivedCalls();
        $operationsTransport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
        $this->assertTrue($operationsTransport->isExhausted());
    }

    /** @test */
    public function setIamPolicyTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $etag = 'etag3123477';
        $iamOwned = false;
        $version = 351608024;
        $expectedResponse = new Policy();
        $expectedResponse->setEtag($etag);
        $expectedResponse->setIamOwned($iamOwned);
        $expectedResponse->setVersion($version);
        $transport->addResponse($expectedResponse);
        // Mock request
        $project = 'project-309310695';
        $region = 'region-934795532';
        $regionSetPolicyRequestResource = new RegionSetPolicyRequest();
        $resource = 'resource-341064690';
        $request = (new SetIamPolicyServiceAttachmentRequest())
            ->setProject($project)
            ->setRegion($region)
            ->setRegionSetPolicyRequestResource($regionSetPolicyRequestResource)
            ->setResource($resource);
        $response = $gapicClient->setIamPolicy($request);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.compute.v1.ServiceAttachments/SetIamPolicy', $actualFuncCall);
        $actualValue = $actualRequestObject->getProject();
        $this->assertProtobufEquals($project, $actualValue);
        $actualValue = $actualRequestObject->getRegion();
        $this->assertProtobufEquals($region, $actualValue);
        $actualValue = $actualRequestObject->getRegionSetPolicyRequestResource();
        $this->assertProtobufEquals($regionSetPolicyRequestResource, $actualValue);
        $actualValue = $actualRequestObject->getResource();
        $this->assertProtobufEquals($resource, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function setIamPolicyExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $project = 'project-309310695';
        $region = 'region-934795532';
        $regionSetPolicyRequestResource = new RegionSetPolicyRequest();
        $resource = 'resource-341064690';
        $request = (new SetIamPolicyServiceAttachmentRequest())
            ->setProject($project)
            ->setRegion($region)
            ->setRegionSetPolicyRequestResource($regionSetPolicyRequestResource)
            ->setResource($resource);
        try {
            $gapicClient->setIamPolicy($request);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function testIamPermissionsTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new TestPermissionsResponse();
        $transport->addResponse($expectedResponse);
        // Mock request
        $project = 'project-309310695';
        $region = 'region-934795532';
        $resource = 'resource-341064690';
        $testPermissionsRequestResource = new TestPermissionsRequest();
        $request = (new TestIamPermissionsServiceAttachmentRequest())
            ->setProject($project)
            ->setRegion($region)
            ->setResource($resource)
            ->setTestPermissionsRequestResource($testPermissionsRequestResource);
        $response = $gapicClient->testIamPermissions($request);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.compute.v1.ServiceAttachments/TestIamPermissions', $actualFuncCall);
        $actualValue = $actualRequestObject->getProject();
        $this->assertProtobufEquals($project, $actualValue);
        $actualValue = $actualRequestObject->getRegion();
        $this->assertProtobufEquals($region, $actualValue);
        $actualValue = $actualRequestObject->getResource();
        $this->assertProtobufEquals($resource, $actualValue);
        $actualValue = $actualRequestObject->getTestPermissionsRequestResource();
        $this->assertProtobufEquals($testPermissionsRequestResource, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function testIamPermissionsExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $project = 'project-309310695';
        $region = 'region-934795532';
        $resource = 'resource-341064690';
        $testPermissionsRequestResource = new TestPermissionsRequest();
        $request = (new TestIamPermissionsServiceAttachmentRequest())
            ->setProject($project)
            ->setRegion($region)
            ->setResource($resource)
            ->setTestPermissionsRequestResource($testPermissionsRequestResource);
        try {
            $gapicClient->testIamPermissions($request);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function aggregatedListAsyncTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $id = 'id3355';
        $kind = 'kind3292052';
        $nextPageToken = '';
        $selfLink = 'selfLink-1691268851';
        $items = [
            'itemsKey' => new ServiceAttachmentsScopedList(),
        ];
        $expectedResponse = new ServiceAttachmentAggregatedList();
        $expectedResponse->setId($id);
        $expectedResponse->setKind($kind);
        $expectedResponse->setNextPageToken($nextPageToken);
        $expectedResponse->setSelfLink($selfLink);
        $expectedResponse->setItems($items);
        $transport->addResponse($expectedResponse);
        // Mock request
        $project = 'project-309310695';
        $request = (new AggregatedListServiceAttachmentsRequest())
            ->setProject($project);
        $response = $gapicClient->aggregatedListAsync($request)->wait();
        $this->assertEquals($expectedResponse, $response->getPage()->getResponseObject());
        $resources = iterator_to_array($response->iterateAllElements());
        $this->assertSame(1, count($resources));
        $this->assertArrayHasKey('itemsKey', $expectedResponse->getItems());
        $this->assertArrayHasKey('itemsKey', $resources);
        $this->assertEquals($expectedResponse->getItems()['itemsKey'], $resources['itemsKey']);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.compute.v1.ServiceAttachments/AggregatedList', $actualFuncCall);
        $actualValue = $actualRequestObject->getProject();
        $this->assertProtobufEquals($project, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }
}
