<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/enums/local_services_verification_artifact_type.proto

namespace Google\Ads\GoogleAds\V18\Enums\LocalServicesVerificationArtifactTypeEnum;

use UnexpectedValueException;

/**
 * Enums describing possible types of local services verification artifact.
 *
 * Protobuf type <code>google.ads.googleads.v18.enums.LocalServicesVerificationArtifactTypeEnum.LocalServicesVerificationArtifactType</code>
 */
class LocalServicesVerificationArtifactType
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Background check verification artifact.
     *
     * Generated from protobuf enum <code>BACKGROUND_CHECK = 2;</code>
     */
    const BACKGROUND_CHECK = 2;
    /**
     * Insurance verification artifact.
     *
     * Generated from protobuf enum <code>INSURANCE = 3;</code>
     */
    const INSURANCE = 3;
    /**
     * License verification artifact.
     *
     * Generated from protobuf enum <code>LICENSE = 4;</code>
     */
    const LICENSE = 4;
    /**
     * Business registration check verification artifact.
     *
     * Generated from protobuf enum <code>BUSINESS_REGISTRATION_CHECK = 5;</code>
     */
    const BUSINESS_REGISTRATION_CHECK = 5;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::BACKGROUND_CHECK => 'BACKGROUND_CHECK',
        self::INSURANCE => 'INSURANCE',
        self::LICENSE => 'LICENSE',
        self::BUSINESS_REGISTRATION_CHECK => 'BUSINESS_REGISTRATION_CHECK',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LocalServicesVerificationArtifactType::class, \Google\Ads\GoogleAds\V18\Enums\LocalServicesVerificationArtifactTypeEnum_LocalServicesVerificationArtifactType::class);
