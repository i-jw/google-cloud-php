<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/backupdr/v1/backupvault.proto

namespace Google\Cloud\BackupDR\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * BackupApplianceApplication describes a Source Resource when it is an
 * application backed up by a BackupAppliance.
 *
 * Generated from protobuf message <code>google.cloud.backupdr.v1.DataSourceBackupApplianceApplication</code>
 */
class DataSourceBackupApplianceApplication extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the Application as known to the Backup Appliance.
     *
     * Generated from protobuf field <code>string application_name = 1;</code>
     */
    protected $application_name = '';
    /**
     * Appliance name.
     *
     * Generated from protobuf field <code>string backup_appliance = 2;</code>
     */
    protected $backup_appliance = '';
    /**
     * Appliance Id of the Backup Appliance.
     *
     * Generated from protobuf field <code>int64 appliance_id = 3;</code>
     */
    protected $appliance_id = 0;
    /**
     * The type of the application. e.g. VMBackup
     *
     * Generated from protobuf field <code>string type = 4;</code>
     */
    protected $type = '';
    /**
     * The appid field of the application within the Backup Appliance.
     *
     * Generated from protobuf field <code>int64 application_id = 8;</code>
     */
    protected $application_id = 0;
    /**
     * Hostname of the host where the application is running.
     *
     * Generated from protobuf field <code>string hostname = 6;</code>
     */
    protected $hostname = '';
    /**
     * Hostid of the application host.
     *
     * Generated from protobuf field <code>int64 host_id = 7;</code>
     */
    protected $host_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $application_name
     *           The name of the Application as known to the Backup Appliance.
     *     @type string $backup_appliance
     *           Appliance name.
     *     @type int|string $appliance_id
     *           Appliance Id of the Backup Appliance.
     *     @type string $type
     *           The type of the application. e.g. VMBackup
     *     @type int|string $application_id
     *           The appid field of the application within the Backup Appliance.
     *     @type string $hostname
     *           Hostname of the host where the application is running.
     *     @type int|string $host_id
     *           Hostid of the application host.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Backupdr\V1\Backupvault::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the Application as known to the Backup Appliance.
     *
     * Generated from protobuf field <code>string application_name = 1;</code>
     * @return string
     */
    public function getApplicationName()
    {
        return $this->application_name;
    }

    /**
     * The name of the Application as known to the Backup Appliance.
     *
     * Generated from protobuf field <code>string application_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setApplicationName($var)
    {
        GPBUtil::checkString($var, True);
        $this->application_name = $var;

        return $this;
    }

    /**
     * Appliance name.
     *
     * Generated from protobuf field <code>string backup_appliance = 2;</code>
     * @return string
     */
    public function getBackupAppliance()
    {
        return $this->backup_appliance;
    }

    /**
     * Appliance name.
     *
     * Generated from protobuf field <code>string backup_appliance = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setBackupAppliance($var)
    {
        GPBUtil::checkString($var, True);
        $this->backup_appliance = $var;

        return $this;
    }

    /**
     * Appliance Id of the Backup Appliance.
     *
     * Generated from protobuf field <code>int64 appliance_id = 3;</code>
     * @return int|string
     */
    public function getApplianceId()
    {
        return $this->appliance_id;
    }

    /**
     * Appliance Id of the Backup Appliance.
     *
     * Generated from protobuf field <code>int64 appliance_id = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setApplianceId($var)
    {
        GPBUtil::checkInt64($var);
        $this->appliance_id = $var;

        return $this;
    }

    /**
     * The type of the application. e.g. VMBackup
     *
     * Generated from protobuf field <code>string type = 4;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of the application. e.g. VMBackup
     *
     * Generated from protobuf field <code>string type = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * The appid field of the application within the Backup Appliance.
     *
     * Generated from protobuf field <code>int64 application_id = 8;</code>
     * @return int|string
     */
    public function getApplicationId()
    {
        return $this->application_id;
    }

    /**
     * The appid field of the application within the Backup Appliance.
     *
     * Generated from protobuf field <code>int64 application_id = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setApplicationId($var)
    {
        GPBUtil::checkInt64($var);
        $this->application_id = $var;

        return $this;
    }

    /**
     * Hostname of the host where the application is running.
     *
     * Generated from protobuf field <code>string hostname = 6;</code>
     * @return string
     */
    public function getHostname()
    {
        return $this->hostname;
    }

    /**
     * Hostname of the host where the application is running.
     *
     * Generated from protobuf field <code>string hostname = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setHostname($var)
    {
        GPBUtil::checkString($var, True);
        $this->hostname = $var;

        return $this;
    }

    /**
     * Hostid of the application host.
     *
     * Generated from protobuf field <code>int64 host_id = 7;</code>
     * @return int|string
     */
    public function getHostId()
    {
        return $this->host_id;
    }

    /**
     * Hostid of the application host.
     *
     * Generated from protobuf field <code>int64 host_id = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setHostId($var)
    {
        GPBUtil::checkInt64($var);
        $this->host_id = $var;

        return $this;
    }

}

