<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/services/campaign_budget_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V9\Services;

class CampaignBudgetService
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
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
:google/ads/googleads/v9/enums/budget_delivery_method.protogoogle.ads.googleads.v9.enums"o
BudgetDeliveryMethodEnum"S
BudgetDeliveryMethod
UNSPECIFIED 
UNKNOWN
STANDARD
ACCELERATEDB�
!com.google.ads.googleads.v9.enumsBBudgetDeliveryMethodProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3
�
1google/ads/googleads/v9/enums/budget_period.protogoogle.ads.googleads.v9.enums"^
BudgetPeriodEnum"J
BudgetPeriod
UNSPECIFIED 
UNKNOWN	
DAILY
CUSTOM_PERIODB�
!com.google.ads.googleads.v9.enumsBBudgetPeriodProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3
�
1google/ads/googleads/v9/enums/budget_status.protogoogle.ads.googleads.v9.enums"Z
BudgetStatusEnum"F
BudgetStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVEDB�
!com.google.ads.googleads.v9.enumsBBudgetStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3
�
/google/ads/googleads/v9/enums/budget_type.protogoogle.ads.googleads.v9.enums"m
BudgetTypeEnum"[

BudgetType
UNSPECIFIED 
UNKNOWN
STANDARD
	FIXED_CPA
SMART_CAMPAIGNB�
!com.google.ads.googleads.v9.enumsBBudgetTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3
�
9google/ads/googleads/v9/enums/response_content_type.protogoogle.ads.googleads.v9.enums"o
ResponseContentTypeEnum"T
ResponseContentType
UNSPECIFIED 
RESOURCE_NAME_ONLY
MUTABLE_RESOURCEB�
!com.google.ads.googleads.v9.enumsBResponseContentTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3
�
7google/ads/googleads/v9/resources/campaign_budget.proto!google.ads.googleads.v9.resources1google/ads/googleads/v9/enums/budget_period.proto1google/ads/googleads/v9/enums/budget_status.proto/google/ads/googleads/v9/enums/budget_type.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
CampaignBudgetF
resource_name (	B/�A�A)
\'googleads.googleapis.com/CampaignBudget
id (B�AH �
name (	H�
amount_micros (H� 
total_amount_micros (H�Q
status (2<.google.ads.googleads.v9.enums.BudgetStatusEnum.BudgetStatusB�Ae
delivery_method (2L.google.ads.googleads.v9.enums.BudgetDeliveryMethodEnum.BudgetDeliveryMethod
explicitly_shared (H�!
reference_count (B�AH�(
has_recommended_budget (B�AH�2
 recommended_budget_amount_micros (B�AH�Q
period (2<.google.ads.googleads.v9.enums.BudgetPeriodEnum.BudgetPeriodB�AC
1recommended_budget_estimated_change_weekly_clicks (B�AH�H
6recommended_budget_estimated_change_weekly_cost_micros (B�AH	�I
7recommended_budget_estimated_change_weekly_interactions (B�AH
�B
0recommended_budget_estimated_change_weekly_views (B�AH�K
type (28.google.ads.googleads.v9.enums.BudgetTypeEnum.BudgetTypeB�A:j�Ag
\'googleads.googleapis.com/CampaignBudget<customers/{customer_id}/campaignBudgets/{campaign_budget_id}B
_idB
_nameB
_amount_microsB
_total_amount_microsB
_explicitly_sharedB
_reference_countB
_has_recommended_budgetB#
!_recommended_budget_amount_microsB4
2_recommended_budget_estimated_change_weekly_clicksB9
7_recommended_budget_estimated_change_weekly_cost_microsB:
8_recommended_budget_estimated_change_weekly_interactionsB3
1_recommended_budget_estimated_change_weekly_viewsB�
%com.google.ads.googleads.v9.resourcesBCampaignBudgetProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v9/resources;resources�GAA�!Google.Ads.GoogleAds.V9.Resources�!Google\\Ads\\GoogleAds\\V9\\Resources�%Google::Ads::GoogleAds::V9::Resourcesbproto3
�
>google/ads/googleads/v9/services/campaign_budget_service.proto google.ads.googleads.v9.services7google/ads/googleads/v9/resources/campaign_budget.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"b
GetCampaignBudgetRequestF
resource_name (	B/�A�A)
\'googleads.googleapis.com/CampaignBudget"�
MutateCampaignBudgetsRequest
customer_id (	B�AR

operations (29.google.ads.googleads.v9.services.CampaignBudgetOperationB�A
partial_failure (
validate_only (i
response_content_type (2J.google.ads.googleads.v9.enums.ResponseContentTypeEnum.ResponseContentType"�
CampaignBudgetOperation/
update_mask (2.google.protobuf.FieldMaskC
create (21.google.ads.googleads.v9.resources.CampaignBudgetH C
update (21.google.ads.googleads.v9.resources.CampaignBudgetH 
remove (	H B
	operation"�
MutateCampaignBudgetsResponse1
partial_failure_error (2.google.rpc.StatusM
results (2<.google.ads.googleads.v9.services.MutateCampaignBudgetResult"
MutateCampaignBudgetResult
resource_name (	J
campaign_budget (21.google.ads.googleads.v9.resources.CampaignBudget2�
CampaignBudgetService�
GetCampaignBudget:.google.ads.googleads.v9.services.GetCampaignBudgetRequest1.google.ads.googleads.v9.resources.CampaignBudget"I���31/v9/{resource_name=customers/*/campaignBudgets/*}�Aresource_name�
MutateCampaignBudgets>.google.ads.googleads.v9.services.MutateCampaignBudgetsRequest?.google.ads.googleads.v9.services.MutateCampaignBudgetsResponse"X���9"4/v9/customers/{customer_id=*}/campaignBudgets:mutate:*�Acustomer_id,operationsE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v9.servicesBCampaignBudgetServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v9/services;services�GAA� Google.Ads.GoogleAds.V9.Services� Google\\Ads\\GoogleAds\\V9\\Services�$Google::Ads::GoogleAds::V9::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

