<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/resources/ad_group_customizer.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V9\Resources;

class AdGroupCustomizer
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
        $pool->internalAddGeneratedFile(
            '
�
=google/ads/googleads/v9/enums/customizer_attribute_type.protogoogle.ads.googleads.v9.enums"�
CustomizerAttributeTypeEnum"e
CustomizerAttributeType
UNSPECIFIED 
UNKNOWN
TEXT

NUMBER	
PRICE
PERCENTB�
!com.google.ads.googleads.v9.enumsBCustomizerAttributeTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3
�
5google/ads/googleads/v9/common/customizer_value.protogoogle.ads.googleads.v9.commongoogle/api/field_behavior.protogoogle/api/annotations.proto"�
CustomizerValuee
type (2R.google.ads.googleads.v9.enums.CustomizerAttributeTypeEnum.CustomizerAttributeTypeB�A
string_value (	B�AB�
"com.google.ads.googleads.v9.commonBCustomizerValueProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v9/common;common�GAA�Google.Ads.GoogleAds.V9.Common�Google\\Ads\\GoogleAds\\V9\\Common�"Google::Ads::GoogleAds::V9::Commonbproto3
�
;google/ads/googleads/v9/enums/customizer_value_status.protogoogle.ads.googleads.v9.enums"l
CustomizerValueStatusEnum"O
CustomizerValueStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVEDB�
!com.google.ads.googleads.v9.enumsBCustomizerValueStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3
�
;google/ads/googleads/v9/resources/ad_group_customizer.proto!google.ads.googleads.v9.resources;google/ads/googleads/v9/enums/customizer_value_status.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
AdGroupCustomizerI
resource_name (	B2�A�A,
*googleads.googleapis.com/AdGroupCustomizer:
ad_group (	B(�A�A"
 googleads.googleapis.com/AdGroupU
customizer_attribute (	B7�A�A�A.
,googleads.googleapis.com/CustomizerAttributec
status (2N.google.ads.googleads.v9.enums.CustomizerValueStatusEnum.CustomizerValueStatusB�AC
value (2/.google.ads.googleads.v9.common.CustomizerValueB�A:��A�
*googleads.googleapis.com/AdGroupCustomizerRcustomers/{customer_id}/adGroupCustomizers/{ad_group_id}~{customizer_attribute_id}B�
%com.google.ads.googleads.v9.resourcesBAdGroupCustomizerProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v9/resources;resources�GAA�!Google.Ads.GoogleAds.V9.Resources�!Google\\Ads\\GoogleAds\\V9\\Resources�%Google::Ads::GoogleAds::V9::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

