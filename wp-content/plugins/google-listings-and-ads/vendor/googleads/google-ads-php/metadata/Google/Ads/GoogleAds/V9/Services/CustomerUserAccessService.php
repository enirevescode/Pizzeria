<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/services/customer_user_access_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V9\Services;

class CustomerUserAccessService
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
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
/google/ads/googleads/v9/enums/access_role.protogoogle.ads.googleads.v9.enums"t
AccessRoleEnum"b

AccessRole
UNSPECIFIED 
UNKNOWN	
ADMIN
STANDARD
	READ_ONLY

EMAIL_ONLYB�
!com.google.ads.googleads.v9.enumsBAccessRoleProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3
�
<google/ads/googleads/v9/resources/customer_user_access.proto!google.ads.googleads.v9.resourcesgoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
CustomerUserAccessJ
resource_name (	B3�A�A-
+googleads.googleapis.com/CustomerUserAccess
user_id (B�A
email_address (	B�AH �M
access_role (28.google.ads.googleads.v9.enums.AccessRoleEnum.AccessRole+
access_creation_date_time (	B�AH�,
inviter_user_email_address (	B�AH�:h�Ae
+googleads.googleapis.com/CustomerUserAccess6customers/{customer_id}/customerUserAccesses/{user_id}B
_email_addressB
_access_creation_date_timeB
_inviter_user_email_addressB�
%com.google.ads.googleads.v9.resourcesBCustomerUserAccessProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v9/resources;resources�GAA�!Google.Ads.GoogleAds.V9.Resources�!Google\\Ads\\GoogleAds\\V9\\Resources�%Google::Ads::GoogleAds::V9::Resourcesbproto3
�
Cgoogle/ads/googleads/v9/services/customer_user_access_service.proto google.ads.googleads.v9.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.proto"j
GetCustomerUserAccessRequestJ
resource_name (	B3�A�A-
+googleads.googleapis.com/CustomerUserAccess"�
MutateCustomerUserAccessRequest
customer_id (	B�AU
	operation (2=.google.ads.googleads.v9.services.CustomerUserAccessOperationB�A"�
CustomerUserAccessOperation/
update_mask (2.google.protobuf.FieldMaskG
update (25.google.ads.googleads.v9.resources.CustomerUserAccessH 
remove (	H B
	operation"t
 MutateCustomerUserAccessResponseP
result (2@.google.ads.googleads.v9.services.MutateCustomerUserAccessResult"7
MutateCustomerUserAccessResult
resource_name (	2�
CustomerUserAccessService�
GetCustomerUserAccess>.google.ads.googleads.v9.services.GetCustomerUserAccessRequest5.google.ads.googleads.v9.resources.CustomerUserAccess"N���86/v9/{resource_name=customers/*/customerUserAccesses/*}�Aresource_name�
MutateCustomerUserAccessA.google.ads.googleads.v9.services.MutateCustomerUserAccessRequestB.google.ads.googleads.v9.services.MutateCustomerUserAccessResponse"\\���>"9/v9/customers/{customer_id=*}/customerUserAccesses:mutate:*�Acustomer_id,operationE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v9.servicesBCustomerUserAccessServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v9/services;services�GAA� Google.Ads.GoogleAds.V9.Services� Google\\Ads\\GoogleAds\\V9\\Services�$Google::Ads::GoogleAds::V9::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

