<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/errors/third_party_app_analytics_link_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V9\Errors;

class ThirdPartyAppAnalyticsLinkError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Igoogle/ads/googleads/v9/errors/third_party_app_analytics_link_error.protogoogle.ads.googleads.v9.errors"�
#ThirdPartyAppAnalyticsLinkErrorEnum"�
ThirdPartyAppAnalyticsLinkError
UNSPECIFIED 
UNKNOWN!
INVALID_ANALYTICS_PROVIDER_ID
INVALID_MOBILE_APP_ID
MOBILE_APP_IS_NOT_ENABLED8
4CANNOT_REGENERATE_SHAREABLE_LINK_ID_FOR_REMOVED_LINKB�
"com.google.ads.googleads.v9.errorsB$ThirdPartyAppAnalyticsLinkErrorProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v9/errors;errors�GAA�Google.Ads.GoogleAds.V9.Errors�Google\\Ads\\GoogleAds\\V9\\Errors�"Google::Ads::GoogleAds::V9::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

