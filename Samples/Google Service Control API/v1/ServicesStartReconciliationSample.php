﻿<?php
// Copyright 2017 DAIMTO ([Linda Lawton](https://twitter.com/LindaLawtonDK)) :  [www.daimto.com](http://www.daimto.com/)
//
// Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with
// the License. You may obtain a copy of the License at
//
// http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on
// an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the
// specific language governing permissions and limitations under the License.
//------------------------------------------------------------------------------
// <auto-generated>
//     This code was generated by DAIMTO-Google-apis-Sample-generator 1.0.0
//     Template File Name:  methodTemplate.tt
//     Build date: 2017-10-08
//     PHP generator version: 1.0.0
//     
//     Changes to this file may cause incorrect behavior and will be lost if
//     the code is regenerated.
// </auto-generated>
//------------------------------------------------------------------------------  
// About 
// 
// Unofficial sample for the Service Control v1 API for PHP. 
// This sample is designed to be used with the Google PHP client library. (https://github.com/google/google-api-php-client)
// 
// API Description: Google Service Control provides control plane functionality to managed services, such as logging, monitoring, and status checks.
// API Documentation Link https://cloud.google.com/service-control/
//
// Discovery Doc  https://www.googleapis.com/discovery/v1/apis/servicecontrol/v1/rest
//
//------------------------------------------------------------------------------
// Installation
//
// The preferred method is via https://getcomposer.org. Follow the installation instructions https://getcomposer.org/doc/00-intro.md 
// if you do not already have composer installed.
//
// Once composer is installed, execute the following command in your project root to install this library:
//
// composer require google/apiclient:^2.0
//
//------------------------------------------------------------------------------  
// Load the Google API PHP Client Library.
require_once __DIR__ . '/vendor/autoload.php';
session_start();

/***************************************************
* Include this line for service account authencation.  Note: Not all APIs support service accounts.  
//require_once __DIR__ . '/ServiceAccount.php';     
* Include the following four lines Oauth2 authencation.
* require_once __DIR__ . '/Oauth2Authentication.php';
* $_SESSION['mainScript'] = basename($_SERVER['PHP_SELF']);   // Oauth2callback.php will return here.
* $client = getGoogleClient();
* $service = new Google_Service_Servicecontrol($client); 
****************************************************/

// Option paramaters can be set as needed.
 $optParams = array(
  'fields' => '*'
);
// Single Request.
$results = servicesStartReconciliationExample($service, $serviceName, $optParams);


/**
* Unlike rate quota, allocation quota does not get refilled periodically.So, it is possible that the quota usage as seen by the service differs fromwhat the One Platform considers the usage is. This is expected to happenonly rarely, but over time this can accumulate. Services can invokeStartReconciliation and EndReconciliation to correct this usage drift, asdescribed below:1. Service sends StartReconciliation with a timestamp in future for each   metric that needs to be reconciled. The timestamp being in future allows   to account for in-flight AllocateQuota and ReleaseQuota requests for the   same metric.2. One Platform records this timestamp and starts tracking subsequent   AllocateQuota and ReleaseQuota requests until EndReconciliation is   called.3. At or after the time specified in the StartReconciliation, service   sends EndReconciliation with the usage that needs to be reconciled to.4. One Platform adjusts its own record of usage for that metric to the   value specified in EndReconciliation by taking in to account any   allocation or release between StartReconciliation and EndReconciliation.Signals the quota controller that the service wants to perform a usagereconciliation as specified in the request.This method requires the `servicemanagement.services.quota`permission on the specified service. For more information, see[Google Cloud IAM](https://cloud.google.com/iam).
* @service Authenticated Servicecontrol service.
* @optParams Optional paramaters are not required by a request.
* @serviceName Name of the service as specified in the service configuration. For example,
`"pubsub.googleapis.com"`.

See google.api.Service for the definition of a service name.
* @return StartReconciliationResponse
*/
function servicesStartReconciliationExample($service, $serviceName, $optParams)
{
	try
	{
		// Parameter validation.
		if ($service == null)
			throw new Exception("service is required.");
		if ($optParams == null)
			throw new Exception("optParams is required.");
		if (serviceName == null)
			throw new Exception("serviceName is required.");
		// Make the request and return the results.
		return $service->services->StartReconciliationServices($serviceName, $optParams);
	}
	catch (Exception $e)
	{
		print "An error occurred: " . $e->getMessage();
	}
}
?>
