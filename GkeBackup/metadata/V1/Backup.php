<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkebackup/v1/backup.proto

namespace GPBMetadata\Google\Cloud\Gkebackup\V1;

class Backup
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Gkebackup\V1\Common::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
&google/cloud/gkebackup/v1/backup.protogoogle.cloud.gkebackup.v1google/api/resource.proto&google/cloud/gkebackup/v1/common.protogoogle/protobuf/timestamp.proto"�
Backup
name (	B�A
uid (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A
manual (B�AB
labels (2-.google.cloud.gkebackup.v1.Backup.LabelsEntryB�A
delete_lock_days (B�A@
delete_lock_expire_time (2.google.protobuf.TimestampB�A
retain_days	 (B�A;
retain_expire_time
 (2.google.protobuf.TimestampB�AE
encryption_key (2(.google.cloud.gkebackup.v1.EncryptionKeyB�A
all_namespaces (B�AH I
selected_namespaces (2%.google.cloud.gkebackup.v1.NamespacesB�AH P
selected_applications (2*.google.cloud.gkebackup.v1.NamespacedNamesB�AH !
contains_volume_data (B�A
contains_secrets (B�AP
cluster_metadata (21.google.cloud.gkebackup.v1.Backup.ClusterMetadataB�A;
state (2\'.google.cloud.gkebackup.v1.Backup.StateB�A
state_reason (	B�A6
complete_time (2.google.protobuf.TimestampB�A
resource_count (B�A
volume_count (B�A

size_bytes (B�A
etag (	B�A
description (	B�A
	pod_count (B�A%
config_backup_size_bytes (B�A�
ClusterMetadata
cluster (	B�A
k8s_version (	B�Aj
backup_crd_versions (2H.google.cloud.gkebackup.v1.Backup.ClusterMetadata.BackupCrdVersionsEntryB�A
gke_version (	B�AH 
anthos_version (	B�AH 8
BackupCrdVersionsEntry
key (	
value (	:8B
platform_version-
LabelsEntry
key (	
value (	:8"f
State
STATE_UNSPECIFIED 
CREATING
IN_PROGRESS
	SUCCEEDED

FAILED
DELETING:x�Au
gkebackup.googleapis.com/BackupRprojects/{project}/locations/{location}/backupPlans/{backup_plan}/backups/{backup}B
backup_scopeB�
com.google.cloud.gkebackup.v1BBackupProtoPZ;cloud.google.com/go/gkebackup/apiv1/gkebackuppb;gkebackuppb�Google.Cloud.GkeBackup.V1�Google\\Cloud\\GkeBackup\\V1�Google::Cloud::GkeBackup::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

