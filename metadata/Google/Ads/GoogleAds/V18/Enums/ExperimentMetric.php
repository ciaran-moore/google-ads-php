<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/enums/experiment_metric.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V18\Enums;

class ExperimentMetric
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
6google/ads/googleads/v18/enums/experiment_metric.protogoogle.ads.googleads.v18.enums"�
ExperimentMetricEnum"�
ExperimentMetric
UNSPECIFIED 
UNKNOWN

CLICKS
IMPRESSIONS
COST$
 CONVERSIONS_PER_INTERACTION_RATE
COST_PER_CONVERSION
CONVERSIONS_VALUE_PER_COST
AVERAGE_CPC
CTR	
INCREMENTAL_CONVERSIONS

COMPLETED_VIDEO_VIEWS
CUSTOM_ALGORITHMS
CONVERSIONS
CONVERSION_VALUEB�
"com.google.ads.googleads.v18.enumsBExperimentMetricProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v18/enums;enums�GAA�Google.Ads.GoogleAds.V18.Enums�Google\\Ads\\GoogleAds\\V18\\Enums�"Google::Ads::GoogleAds::V18::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

