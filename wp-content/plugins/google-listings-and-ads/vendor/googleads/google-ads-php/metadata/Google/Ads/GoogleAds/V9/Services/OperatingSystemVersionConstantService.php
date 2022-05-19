<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/services/operating_system_version_constant_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V9\Services;

class OperatingSystemVersionConstantService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Jgoogle/ads/googleads/v9/enums/operating_system_version_operator_type.protogoogle.ads.googleads.v9.enums"�
&OperatingSystemVersionOperatorTypeEnum"m
"OperatingSystemVersionOperatorType
UNSPECIFIED 
UNKNOWN
	EQUALS_TO
GREATER_THAN_EQUALS_TOB�
!com.google.ads.googleads.v9.enumsB\'OperatingSystemVersionOperatorTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3
�
Igoogle/ads/googleads/v9/resources/operating_system_version_constant.proto!google.ads.googleads.v9.resourcesgoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
OperatingSystemVersionConstantV
resource_name (	B?�A�A9
7googleads.googleapis.com/OperatingSystemVersionConstant
id (B�AH �
name (	B�AH�"
os_major_version	 (B�AH�"
os_minor_version
 (B�AH��
operator_type (2h.google.ads.googleads.v9.enums.OperatingSystemVersionOperatorTypeEnum.OperatingSystemVersionOperatorTypeB�A:l�Ai
7googleads.googleapis.com/OperatingSystemVersionConstant.operatingSystemVersionConstants/{criterion_id}B
_idB
_nameB
_os_major_versionB
_os_minor_versionB�
%com.google.ads.googleads.v9.resourcesB#OperatingSystemVersionConstantProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v9/resources;resources�GAA�!Google.Ads.GoogleAds.V9.Resources�!Google\\Ads\\GoogleAds\\V9\\Resources�%Google::Ads::GoogleAds::V9::Resourcesbproto3
�
Pgoogle/ads/googleads/v9/services/operating_system_version_constant_service.proto google.ads.googleads.v9.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
(GetOperatingSystemVersionConstantRequestV
resource_name (	B?�A�A9
7googleads.googleapis.com/OperatingSystemVersionConstant2�
%OperatingSystemVersionConstantService�
!GetOperatingSystemVersionConstantJ.google.ads.googleads.v9.services.GetOperatingSystemVersionConstantRequestA.google.ads.googleads.v9.resources.OperatingSystemVersionConstant"M���75/v9/{resource_name=operatingSystemVersionConstants/*}�Aresource_nameE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v9.servicesB*OperatingSystemVersionConstantServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v9/services;services�GAA� Google.Ads.GoogleAds.V9.Services� Google\\Ads\\GoogleAds\\V9\\Services�$Google::Ads::GoogleAds::V9::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

