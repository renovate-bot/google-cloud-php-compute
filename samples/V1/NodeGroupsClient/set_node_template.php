<?php
/*
 * Copyright 2022 Google LLC
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

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START compute_v1_generated_NodeGroups_SetNodeTemplate_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\Compute\V1\Client\NodeGroupsClient;
use Google\Cloud\Compute\V1\NodeGroupsSetNodeTemplateRequest;
use Google\Cloud\Compute\V1\SetNodeTemplateNodeGroupRequest;
use Google\Rpc\Status;

/**
 * Updates the node template of the node group.
 *
 * @param string $nodeGroup Name of the NodeGroup resource to update.
 * @param string $project   Project ID for this request.
 * @param string $zone      The name of the zone for this request.
 */
function set_node_template_sample(string $nodeGroup, string $project, string $zone): void
{
    // Create a client.
    $nodeGroupsClient = new NodeGroupsClient();

    // Prepare the request message.
    $nodeGroupsSetNodeTemplateRequestResource = new NodeGroupsSetNodeTemplateRequest();
    $request = (new SetNodeTemplateNodeGroupRequest())
        ->setNodeGroup($nodeGroup)
        ->setNodeGroupsSetNodeTemplateRequestResource($nodeGroupsSetNodeTemplateRequestResource)
        ->setProject($project)
        ->setZone($zone);

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $nodeGroupsClient->setNodeTemplate($request);
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            printf('Operation completed successfully.' . PHP_EOL);
        } else {
            /** @var Status $error */
            $error = $response->getError();
            printf('Operation failed with error data: %s' . PHP_EOL, $error->serializeToJsonString());
        }
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $nodeGroup = '[NODE_GROUP]';
    $project = '[PROJECT]';
    $zone = '[ZONE]';

    set_node_template_sample($nodeGroup, $project, $zone);
}
// [END compute_v1_generated_NodeGroups_SetNodeTemplate_sync]
