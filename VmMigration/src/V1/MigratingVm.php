<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmmigration/v1/vmmigration.proto

namespace Google\Cloud\VMMigration\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MigratingVm describes the VM that will be migrated from a Source environment
 * and its replication state.
 *
 * Generated from protobuf message <code>google.cloud.vmmigration.v1.MigratingVm</code>
 */
class MigratingVm extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The identifier of the MigratingVm.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * The unique ID of the VM in the source.
     * The VM's name in vSphere can be changed, so this is not the VM's name but
     * rather its moRef id. This id is of the form vm-<num>.
     *
     * Generated from protobuf field <code>string source_vm_id = 2;</code>
     */
    protected $source_vm_id = '';
    /**
     * The display name attached to the MigratingVm by the user.
     *
     * Generated from protobuf field <code>string display_name = 18;</code>
     */
    protected $display_name = '';
    /**
     * The description attached to the migrating VM by the user.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    protected $description = '';
    /**
     * The replication schedule policy.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.SchedulePolicy policy = 8;</code>
     */
    protected $policy = null;
    /**
     * Output only. The time the migrating VM was created (this refers to this
     * resource and not to the time it was installed in the source).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The last time the migrating VM resource was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Output only. The most updated snapshot created time in the source that
     * finished replication.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.ReplicationSync last_sync = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $last_sync = null;
    /**
     * Output only. State of the MigratingVm.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.MigratingVm.State state = 23 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Output only. The last time the migrating VM state was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp state_time = 22 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state_time = null;
    /**
     * Output only. The percentage progress of the current running replication
     * cycle.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.ReplicationCycle current_sync_info = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $current_sync_info = null;
    /**
     * Output only. The group this migrating vm is included in, if any. The group
     * is represented by the full path of the appropriate
     * [Group][google.cloud.vmmigration.v1.Group] resource.
     *
     * Generated from protobuf field <code>string group = 15 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $group = '';
    /**
     * The labels of the migrating VM.
     *
     * Generated from protobuf field <code>map<string, string> labels = 16;</code>
     */
    private $labels;
    /**
     * Output only. The recent [clone jobs][google.cloud.vmmigration.v1.CloneJob]
     * performed on the migrating VM. This field holds the vm's last completed
     * clone job and the vm's running clone job, if one exists.
     * Note: To have this field populated you need to explicitly request it via
     * the "view" parameter of the Get/List request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmmigration.v1.CloneJob recent_clone_jobs = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $recent_clone_jobs;
    /**
     * Output only. Provides details on the state of the Migrating VM in case of
     * an error in replication.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $error = null;
    /**
     * Output only. The recent cutover jobs performed on the migrating VM.
     * This field holds the vm's last completed cutover job and the vm's
     * running cutover job, if one exists.
     * Note: To have this field populated you need to explicitly request it via
     * the "view" parameter of the Get/List request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmmigration.v1.CutoverJob recent_cutover_jobs = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $recent_cutover_jobs;
    protected $target_vm_defaults;
    protected $source_vm_details;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\VMMigration\V1\ComputeEngineTargetDefaults $compute_engine_target_defaults
     *           Details of the target VM in Compute Engine.
     *     @type \Google\Cloud\VMMigration\V1\AwsSourceVmDetails $aws_source_vm_details
     *           Output only. Details of the VM from an AWS source.
     *     @type string $name
     *           Output only. The identifier of the MigratingVm.
     *     @type string $source_vm_id
     *           The unique ID of the VM in the source.
     *           The VM's name in vSphere can be changed, so this is not the VM's name but
     *           rather its moRef id. This id is of the form vm-<num>.
     *     @type string $display_name
     *           The display name attached to the MigratingVm by the user.
     *     @type string $description
     *           The description attached to the migrating VM by the user.
     *     @type \Google\Cloud\VMMigration\V1\SchedulePolicy $policy
     *           The replication schedule policy.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time the migrating VM was created (this refers to this
     *           resource and not to the time it was installed in the source).
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The last time the migrating VM resource was updated.
     *     @type \Google\Cloud\VMMigration\V1\ReplicationSync $last_sync
     *           Output only. The most updated snapshot created time in the source that
     *           finished replication.
     *     @type int $state
     *           Output only. State of the MigratingVm.
     *     @type \Google\Protobuf\Timestamp $state_time
     *           Output only. The last time the migrating VM state was updated.
     *     @type \Google\Cloud\VMMigration\V1\ReplicationCycle $current_sync_info
     *           Output only. The percentage progress of the current running replication
     *           cycle.
     *     @type string $group
     *           Output only. The group this migrating vm is included in, if any. The group
     *           is represented by the full path of the appropriate
     *           [Group][google.cloud.vmmigration.v1.Group] resource.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           The labels of the migrating VM.
     *     @type array<\Google\Cloud\VMMigration\V1\CloneJob>|\Google\Protobuf\Internal\RepeatedField $recent_clone_jobs
     *           Output only. The recent [clone jobs][google.cloud.vmmigration.v1.CloneJob]
     *           performed on the migrating VM. This field holds the vm's last completed
     *           clone job and the vm's running clone job, if one exists.
     *           Note: To have this field populated you need to explicitly request it via
     *           the "view" parameter of the Get/List request.
     *     @type \Google\Rpc\Status $error
     *           Output only. Provides details on the state of the Migrating VM in case of
     *           an error in replication.
     *     @type array<\Google\Cloud\VMMigration\V1\CutoverJob>|\Google\Protobuf\Internal\RepeatedField $recent_cutover_jobs
     *           Output only. The recent cutover jobs performed on the migrating VM.
     *           This field holds the vm's last completed cutover job and the vm's
     *           running cutover job, if one exists.
     *           Note: To have this field populated you need to explicitly request it via
     *           the "view" parameter of the Get/List request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vmmigration\V1\Vmmigration::initOnce();
        parent::__construct($data);
    }

    /**
     * Details of the target VM in Compute Engine.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.ComputeEngineTargetDefaults compute_engine_target_defaults = 26;</code>
     * @return \Google\Cloud\VMMigration\V1\ComputeEngineTargetDefaults|null
     */
    public function getComputeEngineTargetDefaults()
    {
        return $this->readOneof(26);
    }

    public function hasComputeEngineTargetDefaults()
    {
        return $this->hasOneof(26);
    }

    /**
     * Details of the target VM in Compute Engine.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.ComputeEngineTargetDefaults compute_engine_target_defaults = 26;</code>
     * @param \Google\Cloud\VMMigration\V1\ComputeEngineTargetDefaults $var
     * @return $this
     */
    public function setComputeEngineTargetDefaults($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VMMigration\V1\ComputeEngineTargetDefaults::class);
        $this->writeOneof(26, $var);

        return $this;
    }

    /**
     * Output only. Details of the VM from an AWS source.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.AwsSourceVmDetails aws_source_vm_details = 29 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\VMMigration\V1\AwsSourceVmDetails|null
     */
    public function getAwsSourceVmDetails()
    {
        return $this->readOneof(29);
    }

    public function hasAwsSourceVmDetails()
    {
        return $this->hasOneof(29);
    }

    /**
     * Output only. Details of the VM from an AWS source.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.AwsSourceVmDetails aws_source_vm_details = 29 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\VMMigration\V1\AwsSourceVmDetails $var
     * @return $this
     */
    public function setAwsSourceVmDetails($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VMMigration\V1\AwsSourceVmDetails::class);
        $this->writeOneof(29, $var);

        return $this;
    }

    /**
     * Output only. The identifier of the MigratingVm.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The identifier of the MigratingVm.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The unique ID of the VM in the source.
     * The VM's name in vSphere can be changed, so this is not the VM's name but
     * rather its moRef id. This id is of the form vm-<num>.
     *
     * Generated from protobuf field <code>string source_vm_id = 2;</code>
     * @return string
     */
    public function getSourceVmId()
    {
        return $this->source_vm_id;
    }

    /**
     * The unique ID of the VM in the source.
     * The VM's name in vSphere can be changed, so this is not the VM's name but
     * rather its moRef id. This id is of the form vm-<num>.
     *
     * Generated from protobuf field <code>string source_vm_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceVmId($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_vm_id = $var;

        return $this;
    }

    /**
     * The display name attached to the MigratingVm by the user.
     *
     * Generated from protobuf field <code>string display_name = 18;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * The display name attached to the MigratingVm by the user.
     *
     * Generated from protobuf field <code>string display_name = 18;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * The description attached to the migrating VM by the user.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * The description attached to the migrating VM by the user.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * The replication schedule policy.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.SchedulePolicy policy = 8;</code>
     * @return \Google\Cloud\VMMigration\V1\SchedulePolicy|null
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    public function hasPolicy()
    {
        return isset($this->policy);
    }

    public function clearPolicy()
    {
        unset($this->policy);
    }

    /**
     * The replication schedule policy.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.SchedulePolicy policy = 8;</code>
     * @param \Google\Cloud\VMMigration\V1\SchedulePolicy $var
     * @return $this
     */
    public function setPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VMMigration\V1\SchedulePolicy::class);
        $this->policy = $var;

        return $this;
    }

    /**
     * Output only. The time the migrating VM was created (this refers to this
     * resource and not to the time it was installed in the source).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The time the migrating VM was created (this refers to this
     * resource and not to the time it was installed in the source).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The last time the migrating VM resource was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The last time the migrating VM resource was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Output only. The most updated snapshot created time in the source that
     * finished replication.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.ReplicationSync last_sync = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\VMMigration\V1\ReplicationSync|null
     */
    public function getLastSync()
    {
        return $this->last_sync;
    }

    public function hasLastSync()
    {
        return isset($this->last_sync);
    }

    public function clearLastSync()
    {
        unset($this->last_sync);
    }

    /**
     * Output only. The most updated snapshot created time in the source that
     * finished replication.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.ReplicationSync last_sync = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\VMMigration\V1\ReplicationSync $var
     * @return $this
     */
    public function setLastSync($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VMMigration\V1\ReplicationSync::class);
        $this->last_sync = $var;

        return $this;
    }

    /**
     * Output only. State of the MigratingVm.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.MigratingVm.State state = 23 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. State of the MigratingVm.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.MigratingVm.State state = 23 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\VMMigration\V1\MigratingVm\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. The last time the migrating VM state was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp state_time = 22 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStateTime()
    {
        return $this->state_time;
    }

    public function hasStateTime()
    {
        return isset($this->state_time);
    }

    public function clearStateTime()
    {
        unset($this->state_time);
    }

    /**
     * Output only. The last time the migrating VM state was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp state_time = 22 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->state_time = $var;

        return $this;
    }

    /**
     * Output only. The percentage progress of the current running replication
     * cycle.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.ReplicationCycle current_sync_info = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\VMMigration\V1\ReplicationCycle|null
     */
    public function getCurrentSyncInfo()
    {
        return $this->current_sync_info;
    }

    public function hasCurrentSyncInfo()
    {
        return isset($this->current_sync_info);
    }

    public function clearCurrentSyncInfo()
    {
        unset($this->current_sync_info);
    }

    /**
     * Output only. The percentage progress of the current running replication
     * cycle.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.ReplicationCycle current_sync_info = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\VMMigration\V1\ReplicationCycle $var
     * @return $this
     */
    public function setCurrentSyncInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VMMigration\V1\ReplicationCycle::class);
        $this->current_sync_info = $var;

        return $this;
    }

    /**
     * Output only. The group this migrating vm is included in, if any. The group
     * is represented by the full path of the appropriate
     * [Group][google.cloud.vmmigration.v1.Group] resource.
     *
     * Generated from protobuf field <code>string group = 15 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Output only. The group this migrating vm is included in, if any. The group
     * is represented by the full path of the appropriate
     * [Group][google.cloud.vmmigration.v1.Group] resource.
     *
     * Generated from protobuf field <code>string group = 15 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setGroup($var)
    {
        GPBUtil::checkString($var, True);
        $this->group = $var;

        return $this;
    }

    /**
     * The labels of the migrating VM.
     *
     * Generated from protobuf field <code>map<string, string> labels = 16;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * The labels of the migrating VM.
     *
     * Generated from protobuf field <code>map<string, string> labels = 16;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Output only. The recent [clone jobs][google.cloud.vmmigration.v1.CloneJob]
     * performed on the migrating VM. This field holds the vm's last completed
     * clone job and the vm's running clone job, if one exists.
     * Note: To have this field populated you need to explicitly request it via
     * the "view" parameter of the Get/List request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmmigration.v1.CloneJob recent_clone_jobs = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRecentCloneJobs()
    {
        return $this->recent_clone_jobs;
    }

    /**
     * Output only. The recent [clone jobs][google.cloud.vmmigration.v1.CloneJob]
     * performed on the migrating VM. This field holds the vm's last completed
     * clone job and the vm's running clone job, if one exists.
     * Note: To have this field populated you need to explicitly request it via
     * the "view" parameter of the Get/List request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmmigration.v1.CloneJob recent_clone_jobs = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\VMMigration\V1\CloneJob>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRecentCloneJobs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VMMigration\V1\CloneJob::class);
        $this->recent_clone_jobs = $arr;

        return $this;
    }

    /**
     * Output only. Provides details on the state of the Migrating VM in case of
     * an error in replication.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Rpc\Status|null
     */
    public function getError()
    {
        return $this->error;
    }

    public function hasError()
    {
        return isset($this->error);
    }

    public function clearError()
    {
        unset($this->error);
    }

    /**
     * Output only. Provides details on the state of the Migrating VM in case of
     * an error in replication.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->error = $var;

        return $this;
    }

    /**
     * Output only. The recent cutover jobs performed on the migrating VM.
     * This field holds the vm's last completed cutover job and the vm's
     * running cutover job, if one exists.
     * Note: To have this field populated you need to explicitly request it via
     * the "view" parameter of the Get/List request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmmigration.v1.CutoverJob recent_cutover_jobs = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRecentCutoverJobs()
    {
        return $this->recent_cutover_jobs;
    }

    /**
     * Output only. The recent cutover jobs performed on the migrating VM.
     * This field holds the vm's last completed cutover job and the vm's
     * running cutover job, if one exists.
     * Note: To have this field populated you need to explicitly request it via
     * the "view" parameter of the Get/List request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmmigration.v1.CutoverJob recent_cutover_jobs = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\VMMigration\V1\CutoverJob>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRecentCutoverJobs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VMMigration\V1\CutoverJob::class);
        $this->recent_cutover_jobs = $arr;

        return $this;
    }

    /**
     * @return string
     */
    public function getTargetVmDefaults()
    {
        return $this->whichOneof("target_vm_defaults");
    }

    /**
     * @return string
     */
    public function getSourceVmDetails()
    {
        return $this->whichOneof("source_vm_details");
    }

}

