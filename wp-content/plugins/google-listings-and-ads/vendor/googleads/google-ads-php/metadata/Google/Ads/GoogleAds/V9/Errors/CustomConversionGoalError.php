<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/errors/custom_conversion_goal_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V9\Errors;

class CustomConversionGoalError
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
Agoogle/ads/googleads/v9/errors/custom_conversion_goal_error.protogoogle.ads.googleads.v9.errors"�
CustomConversionGoalErrorEnum"�
CustomConversionGoalError
UNSPECIFIED 
UNKNOWN
INVALID_CONVERSION_ACTION!
CONVERSION_ACTION_NOT_ENABLED/
+CANNOT_REMOVE_LINKED_CUSTOM_CONVERSION_GOALB�
"com.google.ads.googleads.v9.errorsBCustomConversionGoalErrorProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v9/errors;errors�GAA�Google.Ads.GoogleAds.V9.Errors�Google\\Ads\\GoogleAds\\V9\\Errors�"Google::Ads::GoogleAds::V9::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

