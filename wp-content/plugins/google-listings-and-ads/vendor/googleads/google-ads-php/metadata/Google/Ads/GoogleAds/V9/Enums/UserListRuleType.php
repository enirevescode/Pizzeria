<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/enums/user_list_rule_type.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V9\Enums;

class UserListRuleType
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
7google/ads/googleads/v9/enums/user_list_rule_type.protogoogle.ads.googleads.v9.enums"h
UserListRuleTypeEnum"P
UserListRuleType
UNSPECIFIED 
UNKNOWN

AND_OF_ORS

OR_OF_ANDSB�
!com.google.ads.googleads.v9.enumsBUserListRuleTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

