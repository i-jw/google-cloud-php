<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recaptchaenterprise/v1/recaptchaenterprise.proto

namespace Google\Cloud\RecaptchaEnterprise\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Options for user acceptance testing.
 *
 * Generated from protobuf message <code>google.cloud.recaptchaenterprise.v1.TestingOptions</code>
 */
class TestingOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. All assessments for this Key return this score. Must be between 0
     * (likely not legitimate) and 1 (likely legitimate) inclusive.
     *
     * Generated from protobuf field <code>float testing_score = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $testing_score = 0.0;
    /**
     * Optional. For challenge-based keys only (CHECKBOX, INVISIBLE), all
     * challenge requests for this site return nocaptcha if NOCAPTCHA, or an
     * unsolvable challenge if CHALLENGE.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.TestingOptions.TestingChallenge testing_challenge = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $testing_challenge = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $testing_score
     *           Optional. All assessments for this Key return this score. Must be between 0
     *           (likely not legitimate) and 1 (likely legitimate) inclusive.
     *     @type int $testing_challenge
     *           Optional. For challenge-based keys only (CHECKBOX, INVISIBLE), all
     *           challenge requests for this site return nocaptcha if NOCAPTCHA, or an
     *           unsolvable challenge if CHALLENGE.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recaptchaenterprise\V1\Recaptchaenterprise::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. All assessments for this Key return this score. Must be between 0
     * (likely not legitimate) and 1 (likely legitimate) inclusive.
     *
     * Generated from protobuf field <code>float testing_score = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return float
     */
    public function getTestingScore()
    {
        return $this->testing_score;
    }

    /**
     * Optional. All assessments for this Key return this score. Must be between 0
     * (likely not legitimate) and 1 (likely legitimate) inclusive.
     *
     * Generated from protobuf field <code>float testing_score = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param float $var
     * @return $this
     */
    public function setTestingScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->testing_score = $var;

        return $this;
    }

    /**
     * Optional. For challenge-based keys only (CHECKBOX, INVISIBLE), all
     * challenge requests for this site return nocaptcha if NOCAPTCHA, or an
     * unsolvable challenge if CHALLENGE.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.TestingOptions.TestingChallenge testing_challenge = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getTestingChallenge()
    {
        return $this->testing_challenge;
    }

    /**
     * Optional. For challenge-based keys only (CHECKBOX, INVISIBLE), all
     * challenge requests for this site return nocaptcha if NOCAPTCHA, or an
     * unsolvable challenge if CHALLENGE.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.TestingOptions.TestingChallenge testing_challenge = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setTestingChallenge($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\RecaptchaEnterprise\V1\TestingOptions\TestingChallenge::class);
        $this->testing_challenge = $var;

        return $this;
    }

}

