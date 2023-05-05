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

// [START aiplatform_v1_generated_JobService_CreateModelDeploymentMonitoringJob_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\AIPlatform\V1\Client\JobServiceClient;
use Google\Cloud\AIPlatform\V1\CreateModelDeploymentMonitoringJobRequest;
use Google\Cloud\AIPlatform\V1\ModelDeploymentMonitoringJob;
use Google\Cloud\AIPlatform\V1\ModelDeploymentMonitoringObjectiveConfig;
use Google\Cloud\AIPlatform\V1\ModelDeploymentMonitoringScheduleConfig;
use Google\Cloud\AIPlatform\V1\SamplingStrategy;
use Google\Protobuf\Duration;

/**
 * Creates a ModelDeploymentMonitoringJob. It will run periodically on a
 * configured interval.
 *
 * @param string $formattedParent                               The parent of the ModelDeploymentMonitoringJob.
 *                                                              Format: `projects/{project}/locations/{location}`
 *                                                              Please see {@see JobServiceClient::locationName()} for help formatting this field.
 * @param string $modelDeploymentMonitoringJobDisplayName       The user-defined name of the ModelDeploymentMonitoringJob.
 *                                                              The name can be up to 128 characters long and can consist of any UTF-8
 *                                                              characters.
 *                                                              Display name of a ModelDeploymentMonitoringJob.
 * @param string $formattedModelDeploymentMonitoringJobEndpoint Endpoint resource name.
 *                                                              Format: `projects/{project}/locations/{location}/endpoints/{endpoint}`
 *                                                              Please see {@see JobServiceClient::endpointName()} for help formatting this field.
 */
function create_model_deployment_monitoring_job_sample(
    string $formattedParent,
    string $modelDeploymentMonitoringJobDisplayName,
    string $formattedModelDeploymentMonitoringJobEndpoint
): void {
    // Create a client.
    $jobServiceClient = new JobServiceClient();

    // Prepare the request message.
    $modelDeploymentMonitoringJobModelDeploymentMonitoringObjectiveConfigs = [
        new ModelDeploymentMonitoringObjectiveConfig()
    ];
    $modelDeploymentMonitoringJobModelDeploymentMonitoringScheduleConfigMonitorInterval = new Duration();
    $modelDeploymentMonitoringJobModelDeploymentMonitoringScheduleConfig = (new ModelDeploymentMonitoringScheduleConfig())
        ->setMonitorInterval(
            $modelDeploymentMonitoringJobModelDeploymentMonitoringScheduleConfigMonitorInterval
        );
    $modelDeploymentMonitoringJobLoggingSamplingStrategy = new SamplingStrategy();
    $modelDeploymentMonitoringJob = (new ModelDeploymentMonitoringJob())
        ->setDisplayName($modelDeploymentMonitoringJobDisplayName)
        ->setEndpoint($formattedModelDeploymentMonitoringJobEndpoint)
        ->setModelDeploymentMonitoringObjectiveConfigs(
            $modelDeploymentMonitoringJobModelDeploymentMonitoringObjectiveConfigs
        )
        ->setModelDeploymentMonitoringScheduleConfig(
            $modelDeploymentMonitoringJobModelDeploymentMonitoringScheduleConfig
        )
        ->setLoggingSamplingStrategy($modelDeploymentMonitoringJobLoggingSamplingStrategy);
    $request = (new CreateModelDeploymentMonitoringJobRequest())
        ->setParent($formattedParent)
        ->setModelDeploymentMonitoringJob($modelDeploymentMonitoringJob);

    // Call the API and handle any network failures.
    try {
        /** @var ModelDeploymentMonitoringJob $response */
        $response = $jobServiceClient->createModelDeploymentMonitoringJob($request);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
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
    $formattedParent = JobServiceClient::locationName('[PROJECT]', '[LOCATION]');
    $modelDeploymentMonitoringJobDisplayName = '[DISPLAY_NAME]';
    $formattedModelDeploymentMonitoringJobEndpoint = JobServiceClient::endpointName(
        '[PROJECT]',
        '[LOCATION]',
        '[ENDPOINT]'
    );

    create_model_deployment_monitoring_job_sample(
        $formattedParent,
        $modelDeploymentMonitoringJobDisplayName,
        $formattedModelDeploymentMonitoringJobEndpoint
    );
}
// [END aiplatform_v1_generated_JobService_CreateModelDeploymentMonitoringJob_sync]
