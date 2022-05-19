<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/services/asset_field_type_view_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V9\Services;

class AssetFieldTypeViewService
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
�
4google/ads/googleads/v9/enums/asset_field_type.protogoogle.ads.googleads.v9.enums"�
AssetFieldTypeEnum"�
AssetFieldType
UNSPECIFIED 
UNKNOWN
HEADLINE
DESCRIPTION
MANDATORY_AD_TEXT
MARKETING_IMAGE
MEDIA_BUNDLE
YOUTUBE_VIDEO
BOOK_ON_GOOGLE
	LEAD_FORM	
	PROMOTION

CALLOUT
STRUCTURED_SNIPPET
SITELINK

MOBILE_APP
HOTEL_CALLOUT
CALL	
PRICE
LONG_HEADLINE
BUSINESS_NAME
SQUARE_MARKETING_IMAGE
PORTRAIT_MARKETING_IMAGE
LOGO
LANDSCAPE_LOGO	
VIDEO
CALL_TO_ACTION_SELECTIONB�
!com.google.ads.googleads.v9.enumsBAssetFieldTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3
�
=google/ads/googleads/v9/resources/asset_field_type_view.proto!google.ads.googleads.v9.resourcesgoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
AssetFieldTypeViewJ
resource_name (	B3�A�A-
+googleads.googleapis.com/AssetFieldTypeViewY

field_type (2@.google.ads.googleads.v9.enums.AssetFieldTypeEnum.AssetFieldTypeB�A:j�Ag
+googleads.googleapis.com/AssetFieldTypeView8customers/{customer_id}/assetFieldTypeViews/{field_type}B�
%com.google.ads.googleads.v9.resourcesBAssetFieldTypeViewProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v9/resources;resources�GAA�!Google.Ads.GoogleAds.V9.Resources�!Google\\Ads\\GoogleAds\\V9\\Resources�%Google::Ads::GoogleAds::V9::Resourcesbproto3
�
Dgoogle/ads/googleads/v9/services/asset_field_type_view_service.proto google.ads.googleads.v9.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto"j
GetAssetFieldTypeViewRequestJ
resource_name (	B3�A�A-
+googleads.googleapis.com/AssetFieldTypeView2�
AssetFieldTypeViewService�
GetAssetFieldTypeView>.google.ads.googleads.v9.services.GetAssetFieldTypeViewRequest5.google.ads.googleads.v9.resources.AssetFieldTypeView"M���75/v9/{resource_name=customers/*/assetFieldTypeViews/*}�Aresource_nameE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v9.servicesBAssetFieldTypeViewServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v9/services;services�GAA� Google.Ads.GoogleAds.V9.Services� Google\\Ads\\GoogleAds\\V9\\Services�$Google::Ads::GoogleAds::V9::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

