<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/enums/geo_targeting_restriction.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V9\Enums;

class GeoTargetingRestriction
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
�
=google/ads/googleads/v9/enums/geo_targeting_restriction.protogoogle.ads.googleads.v9.enums"p
GeoTargetingRestrictionEnum"Q
GeoTargetingRestriction
UNSPECIFIED 
UNKNOWN
LOCATION_OF_PRESENCEB�
!com.google.ads.googleads.v9.enumsBGeoTargetingRestrictionProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

