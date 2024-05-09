<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/database/v1/backup.proto

namespace Google\Cloud\Spanner\Admin\Database\V1\CopyBackupEncryptionConfig;

use UnexpectedValueException;

/**
 * Encryption types for the backup.
 *
 * Protobuf type <code>google.spanner.admin.database.v1.CopyBackupEncryptionConfig.EncryptionType</code>
 */
class EncryptionType
{
    /**
     * Unspecified. Do not use.
     *
     * Generated from protobuf enum <code>ENCRYPTION_TYPE_UNSPECIFIED = 0;</code>
     */
    const ENCRYPTION_TYPE_UNSPECIFIED = 0;
    /**
     * This is the default option for
     * [CopyBackup][google.spanner.admin.database.v1.DatabaseAdmin.CopyBackup]
     * when
     * [encryption_config][google.spanner.admin.database.v1.CopyBackupEncryptionConfig]
     * is not specified. For example, if the source backup is using
     * `Customer_Managed_Encryption`, the backup will be using the same Cloud
     * KMS key as the source backup.
     *
     * Generated from protobuf enum <code>USE_CONFIG_DEFAULT_OR_BACKUP_ENCRYPTION = 1;</code>
     */
    const USE_CONFIG_DEFAULT_OR_BACKUP_ENCRYPTION = 1;
    /**
     * Use Google default encryption.
     *
     * Generated from protobuf enum <code>GOOGLE_DEFAULT_ENCRYPTION = 2;</code>
     */
    const GOOGLE_DEFAULT_ENCRYPTION = 2;
    /**
     * Use customer managed encryption. If specified, either `kms_key_name` or
     * `kms_key_names` must contain valid Cloud KMS key(s).
     *
     * Generated from protobuf enum <code>CUSTOMER_MANAGED_ENCRYPTION = 3;</code>
     */
    const CUSTOMER_MANAGED_ENCRYPTION = 3;

    private static $valueToName = [
        self::ENCRYPTION_TYPE_UNSPECIFIED => 'ENCRYPTION_TYPE_UNSPECIFIED',
        self::USE_CONFIG_DEFAULT_OR_BACKUP_ENCRYPTION => 'USE_CONFIG_DEFAULT_OR_BACKUP_ENCRYPTION',
        self::GOOGLE_DEFAULT_ENCRYPTION => 'GOOGLE_DEFAULT_ENCRYPTION',
        self::CUSTOMER_MANAGED_ENCRYPTION => 'CUSTOMER_MANAGED_ENCRYPTION',
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
class_alias(EncryptionType::class, \Google\Cloud\Spanner\Admin\Database\V1\CopyBackupEncryptionConfig_EncryptionType::class);

