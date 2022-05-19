<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/services/media_file_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V9\Services;

class MediaFileService
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
�
-google/ads/googleads/v9/enums/mime_type.protogoogle.ads.googleads.v9.enums"�
MimeTypeEnum"�
MimeType
UNSPECIFIED 
UNKNOWN

IMAGE_JPEG
	IMAGE_GIF
	IMAGE_PNG	
FLASH
	TEXT_HTML
PDF

MSWORD
MSEXCEL	
RTF

	AUDIO_WAV
	AUDIO_MP3
HTML5_AD_ZIPB�
!com.google.ads.googleads.v9.enumsBMimeTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3
�
.google/ads/googleads/v9/enums/media_type.protogoogle.ads.googleads.v9.enums"�
MediaTypeEnum"y
	MediaType
UNSPECIFIED 
UNKNOWN	
IMAGE
ICON
MEDIA_BUNDLE	
AUDIO	
VIDEO
DYNAMIC_IMAGEB�
!com.google.ads.googleads.v9.enumsBMediaTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3
�
9google/ads/googleads/v9/enums/response_content_type.protogoogle.ads.googleads.v9.enums"o
ResponseContentTypeEnum"T
ResponseContentType
UNSPECIFIED 
RESOURCE_NAME_ONLY
MUTABLE_RESOURCEB�
!com.google.ads.googleads.v9.enumsBResponseContentTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3
�
2google/ads/googleads/v9/resources/media_file.proto!google.ads.googleads.v9.resources-google/ads/googleads/v9/enums/mime_type.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
	MediaFileA
resource_name (	B*�A�A$
"googleads.googleapis.com/MediaFile
id (B�AH�I
type (26.google.ads.googleads.v9.enums.MediaTypeEnum.MediaTypeB�AL
	mime_type (24.google.ads.googleads.v9.enums.MimeTypeEnum.MimeTypeB�A

source_url (	B�AH�
name (	B�AH�
	file_size (B�AH�C
image (2-.google.ads.googleads.v9.resources.MediaImageB�AH K
media_bundle (2..google.ads.googleads.v9.resources.MediaBundleB�AH C
audio
 (2-.google.ads.googleads.v9.resources.MediaAudioB�AH C
video (2-.google.ads.googleads.v9.resources.MediaVideoB�AH :[�AX
"googleads.googleapis.com/MediaFile2customers/{customer_id}/mediaFiles/{media_file_id}B
	mediatypeB
_idB
_source_urlB
_nameB

_file_size"�

MediaImage
data (B�AH �%
full_size_image_url (	B�AH�(
preview_size_image_url (	B�AH�B
_dataB
_full_size_image_urlB
_preview_size_image_url"M
MediaBundle
data (B�AH �
url (	B�AH�B
_dataB
_url"I

MediaAudio$
ad_duration_millis (B�AH �B
_ad_duration_millis"�

MediaVideo$
ad_duration_millis (B�AH �"
youtube_video_id (	B�AH�%
advertising_id_code (	B�AH�
	isci_code (	B�AH�B
_ad_duration_millisB
_youtube_video_idB
_advertising_id_codeB

_isci_codeB�
%com.google.ads.googleads.v9.resourcesBMediaFileProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v9/resources;resources�GAA�!Google.Ads.GoogleAds.V9.Resources�!Google\\Ads\\GoogleAds\\V9\\Resources�%Google::Ads::GoogleAds::V9::Resourcesbproto3
�
9google/ads/googleads/v9/services/media_file_service.proto google.ads.googleads.v9.services2google/ads/googleads/v9/resources/media_file.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/rpc/status.proto"X
GetMediaFileRequestA
resource_name (	B*�A�A$
"googleads.googleapis.com/MediaFile"�
MutateMediaFilesRequest
customer_id (	B�AM

operations (24.google.ads.googleads.v9.services.MediaFileOperationB�A
partial_failure (
validate_only (i
response_content_type (2J.google.ads.googleads.v9.enums.ResponseContentTypeEnum.ResponseContentType"a
MediaFileOperation>
create (2,.google.ads.googleads.v9.resources.MediaFileH B
	operation"�
MutateMediaFilesResponse1
partial_failure_error (2.google.rpc.StatusH
results (27.google.ads.googleads.v9.services.MutateMediaFileResult"p
MutateMediaFileResult
resource_name (	@

media_file (2,.google.ads.googleads.v9.resources.MediaFile2�
MediaFileService�
GetMediaFile5.google.ads.googleads.v9.services.GetMediaFileRequest,.google.ads.googleads.v9.resources.MediaFile"D���.,/v9/{resource_name=customers/*/mediaFiles/*}�Aresource_name�
MutateMediaFiles9.google.ads.googleads.v9.services.MutateMediaFilesRequest:.google.ads.googleads.v9.services.MutateMediaFilesResponse"S���4"//v9/customers/{customer_id=*}/mediaFiles:mutate:*�Acustomer_id,operationsE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v9.servicesBMediaFileServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v9/services;services�GAA� Google.Ads.GoogleAds.V9.Services� Google\\Ads\\GoogleAds\\V9\\Services�$Google::Ads::GoogleAds::V9::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

