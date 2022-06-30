<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4/job.proto

namespace Google\Cloud\Talent\V4\Job\JobDebugInfo;

use UnexpectedValueException;

/**
 * Protobuf type <code>google.cloud.talent.v4.Job.JobDebugInfo.JobStatus</code>
 */
class JobStatus
{
    /**
     * Generated from protobuf enum <code>JOB_DEBUG_INFO_UNSPECIFIED = 0;</code>
     */
    const JOB_DEBUG_INFO_UNSPECIFIED = 0;
    /**
     * Generated from protobuf enum <code>EXPIRED = 1;</code>
     */
    const EXPIRED = 1;
    /**
     * Generated from protobuf enum <code>OPEN = 2;</code>
     */
    const OPEN = 2;
    /**
     * Generated from protobuf enum <code>DELETED = 3;</code>
     */
    const DELETED = 3;

    private static $valueToName = [
        self::JOB_DEBUG_INFO_UNSPECIFIED => 'JOB_DEBUG_INFO_UNSPECIFIED',
        self::EXPIRED => 'EXPIRED',
        self::OPEN => 'OPEN',
        self::DELETED => 'DELETED',
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


