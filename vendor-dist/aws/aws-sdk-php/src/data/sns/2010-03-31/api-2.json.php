<?php

namespace NF_FU_VENDOR;

// This file was auto-generated from sdk-root/src/data/sns/2010-03-31/api-2.json
return ['version' => '2.0', 'metadata' => ['apiVersion' => '2010-03-31', 'endpointPrefix' => 'sns', 'protocol' => 'query', 'serviceAbbreviation' => 'Amazon SNS', 'serviceFullName' => 'Amazon Simple Notification Service', 'serviceId' => 'SNS', 'signatureVersion' => 'v4', 'uid' => 'sns-2010-03-31', 'xmlNamespace' => 'http://sns.amazonaws.com/doc/2010-03-31/'], 'operations' => ['AddPermission' => ['name' => 'AddPermission', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'AddPermissionInput'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'InternalErrorException'], ['shape' => 'AuthorizationErrorException'], ['shape' => 'NotFoundException']]], 'CheckIfPhoneNumberIsOptedOut' => ['name' => 'CheckIfPhoneNumberIsOptedOut', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'CheckIfPhoneNumberIsOptedOutInput'], 'output' => ['shape' => 'CheckIfPhoneNumberIsOptedOutResponse', 'resultWrapper' => 'CheckIfPhoneNumberIsOptedOutResult'], 'errors' => [['shape' => 'ThrottledException'], ['shape' => 'InternalErrorException'], ['shape' => 'AuthorizationErrorException'], ['shape' => 'InvalidParameterException']]], 'ConfirmSubscription' => ['name' => 'ConfirmSubscription', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'ConfirmSubscriptionInput'], 'output' => ['shape' => 'ConfirmSubscriptionResponse', 'resultWrapper' => 'ConfirmSubscriptionResult'], 'errors' => [['shape' => 'SubscriptionLimitExceededException'], ['shape' => 'InvalidParameterException'], ['shape' => 'NotFoundException'], ['shape' => 'InternalErrorException'], ['shape' => 'AuthorizationErrorException'], ['shape' => 'FilterPolicyLimitExceededException']]], 'CreatePlatformApplication' => ['name' => 'CreatePlatformApplication', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'CreatePlatformApplicationInput'], 'output' => ['shape' => 'CreatePlatformApplicationResponse', 'resultWrapper' => 'CreatePlatformApplicationResult'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'InternalErrorException'], ['shape' => 'AuthorizationErrorException']]], 'CreatePlatformEndpoint' => ['name' => 'CreatePlatformEndpoint', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'CreatePlatformEndpointInput'], 'output' => ['shape' => 'CreateEndpointResponse', 'resultWrapper' => 'CreatePlatformEndpointResult'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'InternalErrorException'], ['shape' => 'AuthorizationErrorException'], ['shape' => 'NotFoundException']]], 'CreateTopic' => ['name' => 'CreateTopic', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'CreateTopicInput'], 'output' => ['shape' => 'CreateTopicResponse', 'resultWrapper' => 'CreateTopicResult'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'TopicLimitExceededException'], ['shape' => 'InternalErrorException'], ['shape' => 'AuthorizationErrorException'], ['shape' => 'InvalidSecurityException'], ['shape' => 'TagLimitExceededException'], ['shape' => 'StaleTagException'], ['shape' => 'TagPolicyException'], ['shape' => 'ConcurrentAccessException']]], 'DeleteEndpoint' => ['name' => 'DeleteEndpoint', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DeleteEndpointInput'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'InternalErrorException'], ['shape' => 'AuthorizationErrorException']]], 'DeletePlatformApplication' => ['name' => 'DeletePlatformApplication', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DeletePlatformApplicationInput'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'InternalErrorException'], ['shape' => 'AuthorizationErrorException']]], 'DeleteTopic' => ['name' => 'DeleteTopic', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DeleteTopicInput'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'InternalErrorException'], ['shape' => 'AuthorizationErrorException'], ['shape' => 'NotFoundException'], ['shape' => 'StaleTagException'], ['shape' => 'TagPolicyException'], ['shape' => 'ConcurrentAccessException']]], 'GetEndpointAttributes' => ['name' => 'GetEndpointAttributes', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'GetEndpointAttributesInput'], 'output' => ['shape' => 'GetEndpointAttributesResponse', 'resultWrapper' => 'GetEndpointAttributesResult'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'InternalErrorException'], ['shape' => 'AuthorizationErrorException'], ['shape' => 'NotFoundException']]], 'GetPlatformApplicationAttributes' => ['name' => 'GetPlatformApplicationAttributes', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'GetPlatformApplicationAttributesInput'], 'output' => ['shape' => 'GetPlatformApplicationAttributesResponse', 'resultWrapper' => 'GetPlatformApplicationAttributesResult'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'InternalErrorException'], ['shape' => 'AuthorizationErrorException'], ['shape' => 'NotFoundException']]], 'GetSMSAttributes' => ['name' => 'GetSMSAttributes', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'GetSMSAttributesInput'], 'output' => ['shape' => 'GetSMSAttributesResponse', 'resultWrapper' => 'GetSMSAttributesResult'], 'errors' => [['shape' => 'ThrottledException'], ['shape' => 'InternalErrorException'], ['shape' => 'AuthorizationErrorException'], ['shape' => 'InvalidParameterException']]], 'GetSubscriptionAttributes' => ['name' => 'GetSubscriptionAttributes', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'GetSubscriptionAttributesInput'], 'output' => ['shape' => 'GetSubscriptionAttributesResponse', 'resultWrapper' => 'GetSubscriptionAttributesResult'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'InternalErrorException'], ['shape' => 'NotFoundException'], ['shape' => 'AuthorizationErrorException']]], 'GetTopicAttributes' => ['name' => 'GetTopicAttributes', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'GetTopicAttributesInput'], 'output' => ['shape' => 'GetTopicAttributesResponse', 'resultWrapper' => 'GetTopicAttributesResult'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'InternalErrorException'], ['shape' => 'NotFoundException'], ['shape' => 'AuthorizationErrorException'], ['shape' => 'InvalidSecurityException']]], 'ListEndpointsByPlatformApplication' => ['name' => 'ListEndpointsByPlatformApplication', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'ListEndpointsByPlatformApplicationInput'], 'output' => ['shape' => 'ListEndpointsByPlatformApplicationResponse', 'resultWrapper' => 'ListEndpointsByPlatformApplicationResult'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'InternalErrorException'], ['shape' => 'AuthorizationErrorException'], ['shape' => 'NotFoundException']]], 'ListPhoneNumbersOptedOut' => ['name' => 'ListPhoneNumbersOptedOut', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'ListPhoneNumbersOptedOutInput'], 'output' => ['shape' => 'ListPhoneNumbersOptedOutResponse', 'resultWrapper' => 'ListPhoneNumbersOptedOutResult'], 'errors' => [['shape' => 'ThrottledException'], ['shape' => 'InternalErrorException'], ['shape' => 'AuthorizationErrorException'], ['shape' => 'InvalidParameterException']]], 'ListPlatformApplications' => ['name' => 'ListPlatformApplications', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'ListPlatformApplicationsInput'], 'output' => ['shape' => 'ListPlatformApplicationsResponse', 'resultWrapper' => 'ListPlatformApplicationsResult'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'InternalErrorException'], ['shape' => 'AuthorizationErrorException']]], 'ListSubscriptions' => ['name' => 'ListSubscriptions', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'ListSubscriptionsInput'], 'output' => ['shape' => 'ListSubscriptionsResponse', 'resultWrapper' => 'ListSubscriptionsResult'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'InternalErrorException'], ['shape' => 'AuthorizationErrorException']]], 'ListSubscriptionsByTopic' => ['name' => 'ListSubscriptionsByTopic', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'ListSubscriptionsByTopicInput'], 'output' => ['shape' => 'ListSubscriptionsByTopicResponse', 'resultWrapper' => 'ListSubscriptionsByTopicResult'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'InternalErrorException'], ['shape' => 'NotFoundException'], ['shape' => 'AuthorizationErrorException']]], 'ListTagsForResource' => ['name' => 'ListTagsForResource', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'ListTagsForResourceRequest'], 'output' => ['shape' => 'ListTagsForResourceResponse', 'resultWrapper' => 'ListTagsForResourceResult'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'TagPolicyException'], ['shape' => 'InvalidParameterException'], ['shape' => 'AuthorizationErrorException'], ['shape' => 'ConcurrentAccessException']]], 'ListTopics' => ['name' => 'ListTopics', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'ListTopicsInput'], 'output' => ['shape' => 'ListTopicsResponse', 'resultWrapper' => 'ListTopicsResult'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'InternalErrorException'], ['shape' => 'AuthorizationErrorException']]], 'OptInPhoneNumber' => ['name' => 'OptInPhoneNumber', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'OptInPhoneNumberInput'], 'output' => ['shape' => 'OptInPhoneNumberResponse', 'resultWrapper' => 'OptInPhoneNumberResult'], 'errors' => [['shape' => 'ThrottledException'], ['shape' => 'InternalErrorException'], ['shape' => 'AuthorizationErrorException'], ['shape' => 'InvalidParameterException']]], 'Publish' => ['name' => 'Publish', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'PublishInput'], 'output' => ['shape' => 'PublishResponse', 'resultWrapper' => 'PublishResult'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'InvalidParameterValueException'], ['shape' => 'InternalErrorException'], ['shape' => 'NotFoundException'], ['shape' => 'EndpointDisabledException'], ['shape' => 'PlatformApplicationDisabledException'], ['shape' => 'AuthorizationErrorException'], ['shape' => 'KMSDisabledException'], ['shape' => 'KMSInvalidStateException'], ['shape' => 'KMSNotFoundException'], ['shape' => 'KMSOptInRequired'], ['shape' => 'KMSThrottlingException'], ['shape' => 'KMSAccessDeniedException'], ['shape' => 'InvalidSecurityException']]], 'RemovePermission' => ['name' => 'RemovePermission', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'RemovePermissionInput'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'InternalErrorException'], ['shape' => 'AuthorizationErrorException'], ['shape' => 'NotFoundException']]], 'SetEndpointAttributes' => ['name' => 'SetEndpointAttributes', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'SetEndpointAttributesInput'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'InternalErrorException'], ['shape' => 'AuthorizationErrorException'], ['shape' => 'NotFoundException']]], 'SetPlatformApplicationAttributes' => ['name' => 'SetPlatformApplicationAttributes', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'SetPlatformApplicationAttributesInput'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'InternalErrorException'], ['shape' => 'AuthorizationErrorException'], ['shape' => 'NotFoundException']]], 'SetSMSAttributes' => ['name' => 'SetSMSAttributes', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'SetSMSAttributesInput'], 'output' => ['shape' => 'SetSMSAttributesResponse', 'resultWrapper' => 'SetSMSAttributesResult'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'ThrottledException'], ['shape' => 'InternalErrorException'], ['shape' => 'AuthorizationErrorException']]], 'SetSubscriptionAttributes' => ['name' => 'SetSubscriptionAttributes', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'SetSubscriptionAttributesInput'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'FilterPolicyLimitExceededException'], ['shape' => 'InternalErrorException'], ['shape' => 'NotFoundException'], ['shape' => 'AuthorizationErrorException']]], 'SetTopicAttributes' => ['name' => 'SetTopicAttributes', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'SetTopicAttributesInput'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'InternalErrorException'], ['shape' => 'NotFoundException'], ['shape' => 'AuthorizationErrorException'], ['shape' => 'InvalidSecurityException']]], 'Subscribe' => ['name' => 'Subscribe', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'SubscribeInput'], 'output' => ['shape' => 'SubscribeResponse', 'resultWrapper' => 'SubscribeResult'], 'errors' => [['shape' => 'SubscriptionLimitExceededException'], ['shape' => 'FilterPolicyLimitExceededException'], ['shape' => 'InvalidParameterException'], ['shape' => 'InternalErrorException'], ['shape' => 'NotFoundException'], ['shape' => 'AuthorizationErrorException'], ['shape' => 'InvalidSecurityException']]], 'TagResource' => ['name' => 'TagResource', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'TagResourceRequest'], 'output' => ['shape' => 'TagResourceResponse', 'resultWrapper' => 'TagResourceResult'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'TagLimitExceededException'], ['shape' => 'StaleTagException'], ['shape' => 'TagPolicyException'], ['shape' => 'InvalidParameterException'], ['shape' => 'AuthorizationErrorException'], ['shape' => 'ConcurrentAccessException']]], 'Unsubscribe' => ['name' => 'Unsubscribe', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'UnsubscribeInput'], 'errors' => [['shape' => 'InvalidParameterException'], ['shape' => 'InternalErrorException'], ['shape' => 'AuthorizationErrorException'], ['shape' => 'NotFoundException'], ['shape' => 'InvalidSecurityException']]], 'UntagResource' => ['name' => 'UntagResource', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'UntagResourceRequest'], 'output' => ['shape' => 'UntagResourceResponse', 'resultWrapper' => 'UntagResourceResult'], 'errors' => [['shape' => 'ResourceNotFoundException'], ['shape' => 'TagLimitExceededException'], ['shape' => 'StaleTagException'], ['shape' => 'TagPolicyException'], ['shape' => 'InvalidParameterException'], ['shape' => 'AuthorizationErrorException'], ['shape' => 'ConcurrentAccessException']]]], 'shapes' => ['ActionsList' => ['type' => 'list', 'member' => ['shape' => 'action']], 'AddPermissionInput' => ['type' => 'structure', 'required' => ['TopicArn', 'Label', 'AWSAccountId', 'ActionName'], 'members' => ['TopicArn' => ['shape' => 'topicARN'], 'Label' => ['shape' => 'label'], 'AWSAccountId' => ['shape' => 'DelegatesList'], 'ActionName' => ['shape' => 'ActionsList']]], 'AmazonResourceName' => ['type' => 'string', 'max' => 1011, 'min' => 1], 'AuthorizationErrorException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'string']], 'error' => ['code' => 'AuthorizationError', 'httpStatusCode' => 403, 'senderFault' => \true], 'exception' => \true], 'Binary' => ['type' => 'blob'], 'CheckIfPhoneNumberIsOptedOutInput' => ['type' => 'structure', 'required' => ['phoneNumber'], 'members' => ['phoneNumber' => ['shape' => 'PhoneNumber']]], 'CheckIfPhoneNumberIsOptedOutResponse' => ['type' => 'structure', 'members' => ['isOptedOut' => ['shape' => 'boolean']]], 'ConcurrentAccessException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'string']], 'error' => ['code' => 'ConcurrentAccess', 'httpStatusCode' => 400, 'senderFault' => \true], 'exception' => \true], 'ConfirmSubscriptionInput' => ['type' => 'structure', 'required' => ['TopicArn', 'Token'], 'members' => ['TopicArn' => ['shape' => 'topicARN'], 'Token' => ['shape' => 'token'], 'AuthenticateOnUnsubscribe' => ['shape' => 'authenticateOnUnsubscribe']]], 'ConfirmSubscriptionResponse' => ['type' => 'structure', 'members' => ['SubscriptionArn' => ['shape' => 'subscriptionARN']]], 'CreateEndpointResponse' => ['type' => 'structure', 'members' => ['EndpointArn' => ['shape' => 'String']]], 'CreatePlatformApplicationInput' => ['type' => 'structure', 'required' => ['Name', 'Platform', 'Attributes'], 'members' => ['Name' => ['shape' => 'String'], 'Platform' => ['shape' => 'String'], 'Attributes' => ['shape' => 'MapStringToString']]], 'CreatePlatformApplicationResponse' => ['type' => 'structure', 'members' => ['PlatformApplicationArn' => ['shape' => 'String']]], 'CreatePlatformEndpointInput' => ['type' => 'structure', 'required' => ['PlatformApplicationArn', 'Token'], 'members' => ['PlatformApplicationArn' => ['shape' => 'String'], 'Token' => ['shape' => 'String'], 'CustomUserData' => ['shape' => 'String'], 'Attributes' => ['shape' => 'MapStringToString']]], 'CreateTopicInput' => ['type' => 'structure', 'required' => ['Name'], 'members' => ['Name' => ['shape' => 'topicName'], 'Attributes' => ['shape' => 'TopicAttributesMap'], 'Tags' => ['shape' => 'TagList']]], 'CreateTopicResponse' => ['type' => 'structure', 'members' => ['TopicArn' => ['shape' => 'topicARN']]], 'DelegatesList' => ['type' => 'list', 'member' => ['shape' => 'delegate']], 'DeleteEndpointInput' => ['type' => 'structure', 'required' => ['EndpointArn'], 'members' => ['EndpointArn' => ['shape' => 'String']]], 'DeletePlatformApplicationInput' => ['type' => 'structure', 'required' => ['PlatformApplicationArn'], 'members' => ['PlatformApplicationArn' => ['shape' => 'String']]], 'DeleteTopicInput' => ['type' => 'structure', 'required' => ['TopicArn'], 'members' => ['TopicArn' => ['shape' => 'topicARN']]], 'Endpoint' => ['type' => 'structure', 'members' => ['EndpointArn' => ['shape' => 'String'], 'Attributes' => ['shape' => 'MapStringToString']]], 'EndpointDisabledException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'string']], 'error' => ['code' => 'EndpointDisabled', 'httpStatusCode' => 400, 'senderFault' => \true], 'exception' => \true], 'FilterPolicyLimitExceededException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'string']], 'error' => ['code' => 'FilterPolicyLimitExceeded', 'httpStatusCode' => 403, 'senderFault' => \true], 'exception' => \true], 'GetEndpointAttributesInput' => ['type' => 'structure', 'required' => ['EndpointArn'], 'members' => ['EndpointArn' => ['shape' => 'String']]], 'GetEndpointAttributesResponse' => ['type' => 'structure', 'members' => ['Attributes' => ['shape' => 'MapStringToString']]], 'GetPlatformApplicationAttributesInput' => ['type' => 'structure', 'required' => ['PlatformApplicationArn'], 'members' => ['PlatformApplicationArn' => ['shape' => 'String']]], 'GetPlatformApplicationAttributesResponse' => ['type' => 'structure', 'members' => ['Attributes' => ['shape' => 'MapStringToString']]], 'GetSMSAttributesInput' => ['type' => 'structure', 'members' => ['attributes' => ['shape' => 'ListString']]], 'GetSMSAttributesResponse' => ['type' => 'structure', 'members' => ['attributes' => ['shape' => 'MapStringToString']]], 'GetSubscriptionAttributesInput' => ['type' => 'structure', 'required' => ['SubscriptionArn'], 'members' => ['SubscriptionArn' => ['shape' => 'subscriptionARN']]], 'GetSubscriptionAttributesResponse' => ['type' => 'structure', 'members' => ['Attributes' => ['shape' => 'SubscriptionAttributesMap']]], 'GetTopicAttributesInput' => ['type' => 'structure', 'required' => ['TopicArn'], 'members' => ['TopicArn' => ['shape' => 'topicARN']]], 'GetTopicAttributesResponse' => ['type' => 'structure', 'members' => ['Attributes' => ['shape' => 'TopicAttributesMap']]], 'InternalErrorException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'string']], 'error' => ['code' => 'InternalError', 'httpStatusCode' => 500], 'exception' => \true, 'fault' => \true], 'InvalidParameterException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'string']], 'error' => ['code' => 'InvalidParameter', 'httpStatusCode' => 400, 'senderFault' => \true], 'exception' => \true], 'InvalidParameterValueException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'string']], 'error' => ['code' => 'ParameterValueInvalid', 'httpStatusCode' => 400, 'senderFault' => \true], 'exception' => \true], 'InvalidSecurityException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'string']], 'error' => ['code' => 'InvalidSecurity', 'httpStatusCode' => 403, 'senderFault' => \true], 'exception' => \true], 'KMSAccessDeniedException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'string']], 'error' => ['code' => 'KMSAccessDenied', 'httpStatusCode' => 400, 'senderFault' => \true], 'exception' => \true], 'KMSDisabledException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'string']], 'error' => ['code' => 'KMSDisabled', 'httpStatusCode' => 400, 'senderFault' => \true], 'exception' => \true], 'KMSInvalidStateException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'string']], 'error' => ['code' => 'KMSInvalidState', 'httpStatusCode' => 400, 'senderFault' => \true], 'exception' => \true], 'KMSNotFoundException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'string']], 'error' => ['code' => 'KMSNotFound', 'httpStatusCode' => 400, 'senderFault' => \true], 'exception' => \true], 'KMSOptInRequired' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'string']], 'error' => ['code' => 'KMSOptInRequired', 'httpStatusCode' => 403, 'senderFault' => \true], 'exception' => \true], 'KMSThrottlingException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'string']], 'error' => ['code' => 'KMSThrottling', 'httpStatusCode' => 400, 'senderFault' => \true], 'exception' => \true], 'ListEndpointsByPlatformApplicationInput' => ['type' => 'structure', 'required' => ['PlatformApplicationArn'], 'members' => ['PlatformApplicationArn' => ['shape' => 'String'], 'NextToken' => ['shape' => 'String']]], 'ListEndpointsByPlatformApplicationResponse' => ['type' => 'structure', 'members' => ['Endpoints' => ['shape' => 'ListOfEndpoints'], 'NextToken' => ['shape' => 'String']]], 'ListOfEndpoints' => ['type' => 'list', 'member' => ['shape' => 'Endpoint']], 'ListOfPlatformApplications' => ['type' => 'list', 'member' => ['shape' => 'PlatformApplication']], 'ListPhoneNumbersOptedOutInput' => ['type' => 'structure', 'members' => ['nextToken' => ['shape' => 'string']]], 'ListPhoneNumbersOptedOutResponse' => ['type' => 'structure', 'members' => ['phoneNumbers' => ['shape' => 'PhoneNumberList'], 'nextToken' => ['shape' => 'string']]], 'ListPlatformApplicationsInput' => ['type' => 'structure', 'members' => ['NextToken' => ['shape' => 'String']]], 'ListPlatformApplicationsResponse' => ['type' => 'structure', 'members' => ['PlatformApplications' => ['shape' => 'ListOfPlatformApplications'], 'NextToken' => ['shape' => 'String']]], 'ListString' => ['type' => 'list', 'member' => ['shape' => 'String']], 'ListSubscriptionsByTopicInput' => ['type' => 'structure', 'required' => ['TopicArn'], 'members' => ['TopicArn' => ['shape' => 'topicARN'], 'NextToken' => ['shape' => 'nextToken']]], 'ListSubscriptionsByTopicResponse' => ['type' => 'structure', 'members' => ['Subscriptions' => ['shape' => 'SubscriptionsList'], 'NextToken' => ['shape' => 'nextToken']]], 'ListSubscriptionsInput' => ['type' => 'structure', 'members' => ['NextToken' => ['shape' => 'nextToken']]], 'ListSubscriptionsResponse' => ['type' => 'structure', 'members' => ['Subscriptions' => ['shape' => 'SubscriptionsList'], 'NextToken' => ['shape' => 'nextToken']]], 'ListTagsForResourceRequest' => ['type' => 'structure', 'required' => ['ResourceArn'], 'members' => ['ResourceArn' => ['shape' => 'AmazonResourceName']]], 'ListTagsForResourceResponse' => ['type' => 'structure', 'members' => ['Tags' => ['shape' => 'TagList']]], 'ListTopicsInput' => ['type' => 'structure', 'members' => ['NextToken' => ['shape' => 'nextToken']]], 'ListTopicsResponse' => ['type' => 'structure', 'members' => ['Topics' => ['shape' => 'TopicsList'], 'NextToken' => ['shape' => 'nextToken']]], 'MapStringToString' => ['type' => 'map', 'key' => ['shape' => 'String'], 'value' => ['shape' => 'String']], 'MessageAttributeMap' => ['type' => 'map', 'key' => ['shape' => 'String', 'locationName' => 'Name'], 'value' => ['shape' => 'MessageAttributeValue', 'locationName' => 'Value']], 'MessageAttributeValue' => ['type' => 'structure', 'required' => ['DataType'], 'members' => ['DataType' => ['shape' => 'String'], 'StringValue' => ['shape' => 'String'], 'BinaryValue' => ['shape' => 'Binary']]], 'NotFoundException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'string']], 'error' => ['code' => 'NotFound', 'httpStatusCode' => 404, 'senderFault' => \true], 'exception' => \true], 'OptInPhoneNumberInput' => ['type' => 'structure', 'required' => ['phoneNumber'], 'members' => ['phoneNumber' => ['shape' => 'PhoneNumber']]], 'OptInPhoneNumberResponse' => ['type' => 'structure', 'members' => []], 'PhoneNumber' => ['type' => 'string'], 'PhoneNumberList' => ['type' => 'list', 'member' => ['shape' => 'PhoneNumber']], 'PlatformApplication' => ['type' => 'structure', 'members' => ['PlatformApplicationArn' => ['shape' => 'String'], 'Attributes' => ['shape' => 'MapStringToString']]], 'PlatformApplicationDisabledException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'string']], 'error' => ['code' => 'PlatformApplicationDisabled', 'httpStatusCode' => 400, 'senderFault' => \true], 'exception' => \true], 'PublishInput' => ['type' => 'structure', 'required' => ['Message'], 'members' => ['TopicArn' => ['shape' => 'topicARN'], 'TargetArn' => ['shape' => 'String'], 'PhoneNumber' => ['shape' => 'String'], 'Message' => ['shape' => 'message'], 'Subject' => ['shape' => 'subject'], 'MessageStructure' => ['shape' => 'messageStructure'], 'MessageAttributes' => ['shape' => 'MessageAttributeMap']]], 'PublishResponse' => ['type' => 'structure', 'members' => ['MessageId' => ['shape' => 'messageId']]], 'RemovePermissionInput' => ['type' => 'structure', 'required' => ['TopicArn', 'Label'], 'members' => ['TopicArn' => ['shape' => 'topicARN'], 'Label' => ['shape' => 'label']]], 'ResourceNotFoundException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'string']], 'error' => ['code' => 'ResourceNotFound', 'httpStatusCode' => 404, 'senderFault' => \true], 'exception' => \true], 'SetEndpointAttributesInput' => ['type' => 'structure', 'required' => ['EndpointArn', 'Attributes'], 'members' => ['EndpointArn' => ['shape' => 'String'], 'Attributes' => ['shape' => 'MapStringToString']]], 'SetPlatformApplicationAttributesInput' => ['type' => 'structure', 'required' => ['PlatformApplicationArn', 'Attributes'], 'members' => ['PlatformApplicationArn' => ['shape' => 'String'], 'Attributes' => ['shape' => 'MapStringToString']]], 'SetSMSAttributesInput' => ['type' => 'structure', 'required' => ['attributes'], 'members' => ['attributes' => ['shape' => 'MapStringToString']]], 'SetSMSAttributesResponse' => ['type' => 'structure', 'members' => []], 'SetSubscriptionAttributesInput' => ['type' => 'structure', 'required' => ['SubscriptionArn', 'AttributeName'], 'members' => ['SubscriptionArn' => ['shape' => 'subscriptionARN'], 'AttributeName' => ['shape' => 'attributeName'], 'AttributeValue' => ['shape' => 'attributeValue']]], 'SetTopicAttributesInput' => ['type' => 'structure', 'required' => ['TopicArn', 'AttributeName'], 'members' => ['TopicArn' => ['shape' => 'topicARN'], 'AttributeName' => ['shape' => 'attributeName'], 'AttributeValue' => ['shape' => 'attributeValue']]], 'StaleTagException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'string']], 'error' => ['code' => 'StaleTag', 'httpStatusCode' => 400, 'senderFault' => \true], 'exception' => \true], 'String' => ['type' => 'string'], 'SubscribeInput' => ['type' => 'structure', 'required' => ['TopicArn', 'Protocol'], 'members' => ['TopicArn' => ['shape' => 'topicARN'], 'Protocol' => ['shape' => 'protocol'], 'Endpoint' => ['shape' => 'endpoint'], 'Attributes' => ['shape' => 'SubscriptionAttributesMap'], 'ReturnSubscriptionArn' => ['shape' => 'boolean']]], 'SubscribeResponse' => ['type' => 'structure', 'members' => ['SubscriptionArn' => ['shape' => 'subscriptionARN']]], 'Subscription' => ['type' => 'structure', 'members' => ['SubscriptionArn' => ['shape' => 'subscriptionARN'], 'Owner' => ['shape' => 'account'], 'Protocol' => ['shape' => 'protocol'], 'Endpoint' => ['shape' => 'endpoint'], 'TopicArn' => ['shape' => 'topicARN']]], 'SubscriptionAttributesMap' => ['type' => 'map', 'key' => ['shape' => 'attributeName'], 'value' => ['shape' => 'attributeValue']], 'SubscriptionLimitExceededException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'string']], 'error' => ['code' => 'SubscriptionLimitExceeded', 'httpStatusCode' => 403, 'senderFault' => \true], 'exception' => \true], 'SubscriptionsList' => ['type' => 'list', 'member' => ['shape' => 'Subscription']], 'Tag' => ['type' => 'structure', 'required' => ['Key', 'Value'], 'members' => ['Key' => ['shape' => 'TagKey'], 'Value' => ['shape' => 'TagValue']]], 'TagKey' => ['type' => 'string', 'max' => 128, 'min' => 1], 'TagKeyList' => ['type' => 'list', 'member' => ['shape' => 'TagKey']], 'TagLimitExceededException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'string']], 'error' => ['code' => 'TagLimitExceeded', 'httpStatusCode' => 400, 'senderFault' => \true], 'exception' => \true], 'TagList' => ['type' => 'list', 'member' => ['shape' => 'Tag']], 'TagPolicyException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'string']], 'error' => ['code' => 'TagPolicy', 'httpStatusCode' => 400, 'senderFault' => \true], 'exception' => \true], 'TagResourceRequest' => ['type' => 'structure', 'required' => ['ResourceArn', 'Tags'], 'members' => ['ResourceArn' => ['shape' => 'AmazonResourceName'], 'Tags' => ['shape' => 'TagList']]], 'TagResourceResponse' => ['type' => 'structure', 'members' => []], 'TagValue' => ['type' => 'string', 'max' => 256, 'min' => 0], 'ThrottledException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'string']], 'error' => ['code' => 'Throttled', 'httpStatusCode' => 429, 'senderFault' => \true], 'exception' => \true], 'Topic' => ['type' => 'structure', 'members' => ['TopicArn' => ['shape' => 'topicARN']]], 'TopicAttributesMap' => ['type' => 'map', 'key' => ['shape' => 'attributeName'], 'value' => ['shape' => 'attributeValue']], 'TopicLimitExceededException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'string']], 'error' => ['code' => 'TopicLimitExceeded', 'httpStatusCode' => 403, 'senderFault' => \true], 'exception' => \true], 'TopicsList' => ['type' => 'list', 'member' => ['shape' => 'Topic']], 'UnsubscribeInput' => ['type' => 'structure', 'required' => ['SubscriptionArn'], 'members' => ['SubscriptionArn' => ['shape' => 'subscriptionARN']]], 'UntagResourceRequest' => ['type' => 'structure', 'required' => ['ResourceArn', 'TagKeys'], 'members' => ['ResourceArn' => ['shape' => 'AmazonResourceName'], 'TagKeys' => ['shape' => 'TagKeyList']]], 'UntagResourceResponse' => ['type' => 'structure', 'members' => []], 'account' => ['type' => 'string'], 'action' => ['type' => 'string'], 'attributeName' => ['type' => 'string'], 'attributeValue' => ['type' => 'string'], 'authenticateOnUnsubscribe' => ['type' => 'string'], 'boolean' => ['type' => 'boolean'], 'delegate' => ['type' => 'string'], 'endpoint' => ['type' => 'string'], 'label' => ['type' => 'string'], 'message' => ['type' => 'string'], 'messageId' => ['type' => 'string'], 'messageStructure' => ['type' => 'string'], 'nextToken' => ['type' => 'string'], 'protocol' => ['type' => 'string'], 'string' => ['type' => 'string'], 'subject' => ['type' => 'string'], 'subscriptionARN' => ['type' => 'string'], 'token' => ['type' => 'string'], 'topicARN' => ['type' => 'string'], 'topicName' => ['type' => 'string']]];
