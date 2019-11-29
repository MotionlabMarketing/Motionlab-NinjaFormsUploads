<?php

namespace NF_FU_VENDOR;

// This file was auto-generated from sdk-root/src/data/sagemaker/2017-07-24/waiters-2.json
return ['version' => 2, 'waiters' => ['NotebookInstanceInService' => ['delay' => 30, 'maxAttempts' => 60, 'operation' => 'DescribeNotebookInstance', 'acceptors' => [['expected' => 'InService', 'matcher' => 'path', 'state' => 'success', 'argument' => 'NotebookInstanceStatus'], ['expected' => 'Failed', 'matcher' => 'path', 'state' => 'failure', 'argument' => 'NotebookInstanceStatus']]], 'NotebookInstanceStopped' => ['delay' => 30, 'operation' => 'DescribeNotebookInstance', 'maxAttempts' => 60, 'acceptors' => [['expected' => 'Stopped', 'matcher' => 'path', 'state' => 'success', 'argument' => 'NotebookInstanceStatus'], ['expected' => 'Failed', 'matcher' => 'path', 'state' => 'failure', 'argument' => 'NotebookInstanceStatus']]], 'NotebookInstanceDeleted' => ['delay' => 30, 'maxAttempts' => 60, 'operation' => 'DescribeNotebookInstance', 'acceptors' => [['expected' => 'ValidationException', 'matcher' => 'error', 'state' => 'success'], ['expected' => 'Failed', 'matcher' => 'path', 'state' => 'failure', 'argument' => 'NotebookInstanceStatus']]], 'TrainingJobCompletedOrStopped' => ['delay' => 120, 'maxAttempts' => 180, 'operation' => 'DescribeTrainingJob', 'acceptors' => [['expected' => 'Completed', 'matcher' => 'path', 'state' => 'success', 'argument' => 'TrainingJobStatus'], ['expected' => 'Stopped', 'matcher' => 'path', 'state' => 'success', 'argument' => 'TrainingJobStatus'], ['expected' => 'Failed', 'matcher' => 'path', 'state' => 'failure', 'argument' => 'TrainingJobStatus'], ['expected' => 'ValidationException', 'matcher' => 'error', 'state' => 'failure']]], 'EndpointInService' => ['delay' => 30, 'maxAttempts' => 120, 'operation' => 'DescribeEndpoint', 'acceptors' => [['expected' => 'InService', 'matcher' => 'path', 'state' => 'success', 'argument' => 'EndpointStatus'], ['expected' => 'Failed', 'matcher' => 'path', 'state' => 'failure', 'argument' => 'EndpointStatus'], ['expected' => 'ValidationException', 'matcher' => 'error', 'state' => 'failure']]], 'EndpointDeleted' => ['delay' => 30, 'maxAttempts' => 60, 'operation' => 'DescribeEndpoint', 'acceptors' => [['expected' => 'ValidationException', 'matcher' => 'error', 'state' => 'success'], ['expected' => 'Failed', 'matcher' => 'path', 'state' => 'failure', 'argument' => 'EndpointStatus']]], 'TransformJobCompletedOrStopped' => ['delay' => 60, 'maxAttempts' => 60, 'operation' => 'DescribeTransformJob', 'acceptors' => [['expected' => 'Completed', 'matcher' => 'path', 'state' => 'success', 'argument' => 'TransformJobStatus'], ['expected' => 'Stopped', 'matcher' => 'path', 'state' => 'success', 'argument' => 'TransformJobStatus'], ['expected' => 'Failed', 'matcher' => 'path', 'state' => 'failure', 'argument' => 'TransformJobStatus'], ['expected' => 'ValidationException', 'matcher' => 'error', 'state' => 'failure']]]]];
