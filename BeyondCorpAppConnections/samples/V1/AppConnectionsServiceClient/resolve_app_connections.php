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

// [START beyondcorp_v1_generated_AppConnectionsService_ResolveAppConnections_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\PagedListResponse;
use Google\Cloud\BeyondCorp\AppConnections\V1\AppConnectionsServiceClient;
use Google\Cloud\BeyondCorp\AppConnections\V1\ResolveAppConnectionsResponse\AppConnectionDetails;

/**
 * Resolves AppConnections details for a given AppConnector.
 * An internal method called by a connector to find AppConnections to connect
 * to.
 *
 * @param string $formattedParent         The resource name of the AppConnection location using the form:
 *                                        `projects/{project_id}/locations/{location_id}`
 *                                        Please see {@see AppConnectionsServiceClient::locationName()} for help formatting this field.
 * @param string $formattedAppConnectorId BeyondCorp Connector name of the connector associated with those
 *                                        AppConnections using the form:
 *                                        `projects/{project_id}/locations/{location_id}/appConnectors/{app_connector_id}`
 *                                        Please see {@see AppConnectionsServiceClient::appConnectorName()} for help formatting this field.
 */
function resolve_app_connections_sample(
    string $formattedParent,
    string $formattedAppConnectorId
): void {
    // Create a client.
    $appConnectionsServiceClient = new AppConnectionsServiceClient();

    // Call the API and handle any network failures.
    try {
        /** @var PagedListResponse $response */
        $response = $appConnectionsServiceClient->resolveAppConnections(
            $formattedParent,
            $formattedAppConnectorId
        );

        /** @var AppConnectionDetails $element */
        foreach ($response as $element) {
            printf('Element data: %s' . PHP_EOL, $element->serializeToJsonString());
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
    $formattedParent = AppConnectionsServiceClient::locationName('[PROJECT]', '[LOCATION]');
    $formattedAppConnectorId = AppConnectionsServiceClient::appConnectorName(
        '[PROJECT]',
        '[LOCATION]',
        '[APP_CONNECTOR]'
    );

    resolve_app_connections_sample($formattedParent, $formattedAppConnectorId);
}
// [END beyondcorp_v1_generated_AppConnectionsService_ResolveAppConnections_sync]
