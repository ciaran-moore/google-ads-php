<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/resources/data_link.proto

namespace Google\Ads\GoogleAds\V18\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the data sharing connection between  a Google
 * Ads customer and another product's data.
 *
 * Generated from protobuf message <code>google.ads.googleads.v18.resources.DataLink</code>
 */
class DataLink extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. Resource name of the product data link.
     * DataLink resource names have the form:
     * `customers/{customer_id}/datalinks/{product_link_id}~{data_link_id}}
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. The ID of the link.
     * This field is read only.
     *
     * Generated from protobuf field <code>optional int64 product_link_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $product_link_id = null;
    /**
     * Output only. The ID of the data link.
     * This field is read only.
     *
     * Generated from protobuf field <code>optional int64 data_link_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $data_link_id = null;
    /**
     * Output only. The type of the data.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.DataLinkTypeEnum.DataLinkType type = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $type = 0;
    /**
     * Output only. The status of the data link.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.DataLinkStatusEnum.DataLinkStatus status = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $status = 0;
    protected $data_link_entity;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. Resource name of the product data link.
     *           DataLink resource names have the form:
     *           `customers/{customer_id}/datalinks/{product_link_id}~{data_link_id}}
     *     @type int|string $product_link_id
     *           Output only. The ID of the link.
     *           This field is read only.
     *     @type int|string $data_link_id
     *           Output only. The ID of the data link.
     *           This field is read only.
     *     @type int $type
     *           Output only. The type of the data.
     *     @type int $status
     *           Output only. The status of the data link.
     *     @type \Google\Ads\GoogleAds\V18\Resources\YoutubeVideoIdentifier $youtube_video
     *           Immutable. A data link to YouTube video.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V18\Resources\DataLink::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. Resource name of the product data link.
     * DataLink resource names have the form:
     * `customers/{customer_id}/datalinks/{product_link_id}~{data_link_id}}
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. Resource name of the product data link.
     * DataLink resource names have the form:
     * `customers/{customer_id}/datalinks/{product_link_id}~{data_link_id}}
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Output only. The ID of the link.
     * This field is read only.
     *
     * Generated from protobuf field <code>optional int64 product_link_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getProductLinkId()
    {
        return isset($this->product_link_id) ? $this->product_link_id : 0;
    }

    public function hasProductLinkId()
    {
        return isset($this->product_link_id);
    }

    public function clearProductLinkId()
    {
        unset($this->product_link_id);
    }

    /**
     * Output only. The ID of the link.
     * This field is read only.
     *
     * Generated from protobuf field <code>optional int64 product_link_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setProductLinkId($var)
    {
        GPBUtil::checkInt64($var);
        $this->product_link_id = $var;

        return $this;
    }

    /**
     * Output only. The ID of the data link.
     * This field is read only.
     *
     * Generated from protobuf field <code>optional int64 data_link_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getDataLinkId()
    {
        return isset($this->data_link_id) ? $this->data_link_id : 0;
    }

    public function hasDataLinkId()
    {
        return isset($this->data_link_id);
    }

    public function clearDataLinkId()
    {
        unset($this->data_link_id);
    }

    /**
     * Output only. The ID of the data link.
     * This field is read only.
     *
     * Generated from protobuf field <code>optional int64 data_link_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setDataLinkId($var)
    {
        GPBUtil::checkInt64($var);
        $this->data_link_id = $var;

        return $this;
    }

    /**
     * Output only. The type of the data.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.DataLinkTypeEnum.DataLinkType type = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Output only. The type of the data.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.DataLinkTypeEnum.DataLinkType type = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V18\Enums\DataLinkTypeEnum\DataLinkType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Output only. The status of the data link.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.DataLinkStatusEnum.DataLinkStatus status = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Output only. The status of the data link.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.DataLinkStatusEnum.DataLinkStatus status = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V18\Enums\DataLinkStatusEnum\DataLinkStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Immutable. A data link to YouTube video.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.resources.YoutubeVideoIdentifier youtube_video = 6 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Ads\GoogleAds\V18\Resources\YoutubeVideoIdentifier|null
     */
    public function getYoutubeVideo()
    {
        return $this->readOneof(6);
    }

    public function hasYoutubeVideo()
    {
        return $this->hasOneof(6);
    }

    /**
     * Immutable. A data link to YouTube video.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.resources.YoutubeVideoIdentifier youtube_video = 6 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Ads\GoogleAds\V18\Resources\YoutubeVideoIdentifier $var
     * @return $this
     */
    public function setYoutubeVideo($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V18\Resources\YoutubeVideoIdentifier::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getDataLinkEntity()
    {
        return $this->whichOneof("data_link_entity");
    }

}
