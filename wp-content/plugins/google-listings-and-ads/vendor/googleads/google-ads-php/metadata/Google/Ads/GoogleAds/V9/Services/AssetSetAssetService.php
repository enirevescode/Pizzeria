<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/services/asset_set_asset_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V9\Services;

class AssetSetAssetService
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
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
:google/ads/googleads/v9/enums/asset_set_asset_status.protogoogle.ads.googleads.v9.enums"h
AssetSetAssetStatusEnum"M
AssetSetAssetStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVEDB�
!com.google.ads.googleads.v9.enumsBAssetSetAssetStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3
�
9google/ads/googleads/v9/enums/response_content_type.protogoogle.ads.googleads.v9.enums"o
ResponseContentTypeEnum"T
ResponseContentType
UNSPECIFIED 
RESOURCE_NAME_ONLY
MUTABLE_RESOURCEB�
!com.google.ads.googleads.v9.enumsBResponseContentTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3
�
7google/ads/googleads/v9/resources/asset_set_asset.proto!google.ads.googleads.v9.resourcesgoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
AssetSetAssetE
resource_name (	B.�A�A(
&googleads.googleapis.com/AssetSetAsset<
	asset_set (	B)�A�A#
!googleads.googleapis.com/AssetSet5
asset (	B&�A�A 
googleads.googleapis.com/Asset_
status (2J.google.ads.googleads.v9.enums.AssetSetAssetStatusEnum.AssetSetAssetStatusB�A:m�Aj
&googleads.googleapis.com/AssetSetAsset@customers/{customer_id}/assetSetAssets/{asset_set_id}~{asset_id}B�
%com.google.ads.googleads.v9.resourcesBAssetSetAssetProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v9/resources;resources�GAA�!Google.Ads.GoogleAds.V9.Resources�!Google\\Ads\\GoogleAds\\V9\\Resources�%Google::Ads::GoogleAds::V9::Resourcesbproto3
�
>google/ads/googleads/v9/services/asset_set_asset_service.proto google.ads.googleads.v9.services7google/ads/googleads/v9/resources/asset_set_asset.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/rpc/status.proto"�
MutateAssetSetAssetsRequest
customer_id (	B�AQ

operations (28.google.ads.googleads.v9.services.AssetSetAssetOperationB�A
partial_failure (
validate_only (i
response_content_type (2J.google.ads.googleads.v9.enums.ResponseContentTypeEnum.ResponseContentType"{
AssetSetAssetOperationB
create (20.google.ads.googleads.v9.resources.AssetSetAssetH 
remove (	H B
	operation"�
MutateAssetSetAssetsResponseL
results (2;.google.ads.googleads.v9.services.MutateAssetSetAssetResult1
partial_failure_error (2.google.rpc.Status"}
MutateAssetSetAssetResult
resource_name (	I
asset_set_asset (20.google.ads.googleads.v9.resources.AssetSetAsset2�
AssetSetAssetService�
MutateAssetSetAssets=.google.ads.googleads.v9.services.MutateAssetSetAssetsRequest>.google.ads.googleads.v9.services.MutateAssetSetAssetsResponse"W���8"3/v9/customers/{customer_id=*}/assetSetAssets:mutate:*�Acustomer_id,operationsE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v9.servicesBAssetSetAssetServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v9/services;services�GAA� Google.Ads.GoogleAds.V9.Services� Google\\Ads\\GoogleAds\\V9\\Services�$Google::Ads::GoogleAds::V9::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

