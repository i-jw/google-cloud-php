<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkebackup/v1/backup_plan.proto

namespace Google\Cloud\GkeBackup\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines RPO scheduling configuration for automatically creating
 * Backups via this BackupPlan.
 *
 * Generated from protobuf message <code>google.cloud.gkebackup.v1.RpoConfig</code>
 */
class RpoConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Defines the target RPO for the BackupPlan in minutes, which means
     * the target maximum data loss in time that is acceptable for this
     * BackupPlan. This must be at least 60, i.e., 1 hour, and at most 86400,
     * i.e., 60 days.
     *
     * Generated from protobuf field <code>int32 target_rpo_minutes = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $target_rpo_minutes = 0;
    /**
     * Optional. User specified time windows during which backup can NOT happen
     * for this BackupPlan - backups should start and finish outside of any given
     * exclusion window. Note: backup jobs will be scheduled to start and
     * finish outside the duration of the window as much as possible, but
     * running jobs will not get canceled when it runs into the window.
     * All the time and date values in exclusion_windows entry in the API are in
     * UTC.
     * We only allow <=1 recurrence (daily or weekly) exclusion window for a
     * BackupPlan while no restriction on number of single occurrence
     * windows.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkebackup.v1.ExclusionWindow exclusion_windows = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $exclusion_windows;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $target_rpo_minutes
     *           Required. Defines the target RPO for the BackupPlan in minutes, which means
     *           the target maximum data loss in time that is acceptable for this
     *           BackupPlan. This must be at least 60, i.e., 1 hour, and at most 86400,
     *           i.e., 60 days.
     *     @type array<\Google\Cloud\GkeBackup\V1\ExclusionWindow>|\Google\Protobuf\Internal\RepeatedField $exclusion_windows
     *           Optional. User specified time windows during which backup can NOT happen
     *           for this BackupPlan - backups should start and finish outside of any given
     *           exclusion window. Note: backup jobs will be scheduled to start and
     *           finish outside the duration of the window as much as possible, but
     *           running jobs will not get canceled when it runs into the window.
     *           All the time and date values in exclusion_windows entry in the API are in
     *           UTC.
     *           We only allow <=1 recurrence (daily or weekly) exclusion window for a
     *           BackupPlan while no restriction on number of single occurrence
     *           windows.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkebackup\V1\BackupPlan::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Defines the target RPO for the BackupPlan in minutes, which means
     * the target maximum data loss in time that is acceptable for this
     * BackupPlan. This must be at least 60, i.e., 1 hour, and at most 86400,
     * i.e., 60 days.
     *
     * Generated from protobuf field <code>int32 target_rpo_minutes = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getTargetRpoMinutes()
    {
        return $this->target_rpo_minutes;
    }

    /**
     * Required. Defines the target RPO for the BackupPlan in minutes, which means
     * the target maximum data loss in time that is acceptable for this
     * BackupPlan. This must be at least 60, i.e., 1 hour, and at most 86400,
     * i.e., 60 days.
     *
     * Generated from protobuf field <code>int32 target_rpo_minutes = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setTargetRpoMinutes($var)
    {
        GPBUtil::checkInt32($var);
        $this->target_rpo_minutes = $var;

        return $this;
    }

    /**
     * Optional. User specified time windows during which backup can NOT happen
     * for this BackupPlan - backups should start and finish outside of any given
     * exclusion window. Note: backup jobs will be scheduled to start and
     * finish outside the duration of the window as much as possible, but
     * running jobs will not get canceled when it runs into the window.
     * All the time and date values in exclusion_windows entry in the API are in
     * UTC.
     * We only allow <=1 recurrence (daily or weekly) exclusion window for a
     * BackupPlan while no restriction on number of single occurrence
     * windows.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkebackup.v1.ExclusionWindow exclusion_windows = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExclusionWindows()
    {
        return $this->exclusion_windows;
    }

    /**
     * Optional. User specified time windows during which backup can NOT happen
     * for this BackupPlan - backups should start and finish outside of any given
     * exclusion window. Note: backup jobs will be scheduled to start and
     * finish outside the duration of the window as much as possible, but
     * running jobs will not get canceled when it runs into the window.
     * All the time and date values in exclusion_windows entry in the API are in
     * UTC.
     * We only allow <=1 recurrence (daily or weekly) exclusion window for a
     * BackupPlan while no restriction on number of single occurrence
     * windows.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkebackup.v1.ExclusionWindow exclusion_windows = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\GkeBackup\V1\ExclusionWindow>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExclusionWindows($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\GkeBackup\V1\ExclusionWindow::class);
        $this->exclusion_windows = $arr;

        return $this;
    }

}

