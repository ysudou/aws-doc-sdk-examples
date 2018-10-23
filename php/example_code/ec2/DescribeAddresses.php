<?php
/**
 * Copyright 2010-2018 Amazon.com, Inc. or its affiliates. All Rights Reserved.
 *
 * This file is licensed under the Apache License, Version 2.0 (the "License").
 * You may not use this file except in compliance with the License. A copy of
 * the License is located at
 *
 * http://aws.amazon.com/apache2.0/
 *
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations under the License.
 */
require 'vendor/autoload.php';

use Aws\Ec2\Ec2Client;

/**
 * Describe Addresses
 *
 * This code expects that you have AWS credentials set up per:
 * https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/guide_credentials.html
 */

$ec2Client = new Ec2Client([
    'region' => 'us-west-2',
    'version' => '2016-11-15',
    'profile' => 'default'
]);

$result = $ec2Client->describeAddresses();

var_dump($result);
 

//snippet-comment:[These are tags for the AWS doc team's sample catalog. Do not remove.]
//snippet-sourcedescription:[DescribeAddresses.php demonstrates how to describe one or more of your Elastic IP addresses. An Elastic IP address is for use in either the Amazon EC2-Classic platform or in a VPC.]
//snippet-keyword:[PHP]
//snippet-keyword:[AWS SDK for PHP v3]
//snippet-keyword:[Code Sample]
//snippet-keyword:[Amazon EC2]
//snippet-service:[ec2]
//snippet-sourcetype:[full-example]
//snippet-sourcedate:[2018-09-20]
//snippet-sourceauthor:[jschwarzwalder (AWS)]

