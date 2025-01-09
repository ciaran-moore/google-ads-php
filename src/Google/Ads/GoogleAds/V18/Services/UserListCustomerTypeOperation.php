<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/services/user_list_customer_type_service.proto

namespace Google\Ads\GoogleAds\V18\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A single mutate operation on the user list customer type.
 *
 * Generated from protobuf message <code>google.ads.googleads.v18.services.UserListCustomerTypeOperation</code>
 */
class UserListCustomerTypeOperation extends \Google\Protobuf\Internal\Message
{
    protected $operation;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V18\Resources\UserListCustomerType $create
     *           Attach a user list customer type to a user list.
     *           No resource name is expected for the new user list customer type.
     *     @type string $remove
     *           Remove an existing user list customer type.
     *           A resource name for the removed user list customer type is
     *           expected, in this format:
     *           `customers/{customer_id}/userListCustomerTypes/{user_list_id}~{customer_type_category}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V18\Services\UserListCustomerTypeService::initOnce();
        parent::__construct($data);
    }

    /**
     * Attach a user list customer type to a user list.
     * No resource name is expected for the new user list customer type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.resources.UserListCustomerType create = 1;</code>
     * @return \Google\Ads\GoogleAds\V18\Resources\UserListCustomerType|null
     */
    public function getCreate()
    {
        return $this->readOneof(1);
    }

    public function hasCreate()
    {
        return $this->hasOneof(1);
    }

    /**
     * Attach a user list customer type to a user list.
     * No resource name is expected for the new user list customer type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.resources.UserListCustomerType create = 1;</code>
     * @param \Google\Ads\GoogleAds\V18\Resources\UserListCustomerType $var
     * @return $this
     */
    public function setCreate($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V18\Resources\UserListCustomerType::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Remove an existing user list customer type.
     * A resource name for the removed user list customer type is
     * expected, in this format:
     * `customers/{customer_id}/userListCustomerTypes/{user_list_id}~{customer_type_category}`
     *
     * Generated from protobuf field <code>string remove = 2 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getRemove()
    {
        return $this->readOneof(2);
    }

    public function hasRemove()
    {
        return $this->hasOneof(2);
    }

    /**
     * Remove an existing user list customer type.
     * A resource name for the removed user list customer type is
     * expected, in this format:
     * `customers/{customer_id}/userListCustomerTypes/{user_list_id}~{customer_type_category}`
     *
     * Generated from protobuf field <code>string remove = 2 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setRemove($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getOperation()
    {
        return $this->whichOneof("operation");
    }

}
