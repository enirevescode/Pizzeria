<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/enums/promotion_placeholder_field.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V9\Enums;

class PromotionPlaceholderField
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
�
?google/ads/googleads/v9/enums/promotion_placeholder_field.protogoogle.ads.googleads.v9.enums"�
PromotionPlaceholderFieldEnum"�
PromotionPlaceholderField
UNSPECIFIED 
UNKNOWN
PROMOTION_TARGET
DISCOUNT_MODIFIER
PERCENT_OFF
MONEY_AMOUNT_OFF
PROMOTION_CODE
ORDERS_OVER_AMOUNT
PROMOTION_START
PROMOTION_END	
OCCASION


FINAL_URLS
FINAL_MOBILE_URLS
TRACKING_URL
LANGUAGE
FINAL_URL_SUFFIXB�
!com.google.ads.googleads.v9.enumsBPromotionPlaceholderFieldProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

