<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/conversation_profile.proto

namespace GPBMetadata\Google\Cloud\Dialogflow\V2;

class ConversationProfile
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Dialogflow\V2\AudioConfig::initOnce();
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Participant::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�V
5google/cloud/dialogflow/v2/conversation_profile.protogoogle.cloud.dialogflow.v2google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto-google/cloud/dialogflow/v2/audio_config.proto,google/cloud/dialogflow/v2/participant.proto#google/longrunning/operations.protogoogle/protobuf/duration.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�
ConversationProfile
name (	
display_name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AP
automated_agent_config (20.google.cloud.dialogflow.v2.AutomatedAgentConfig[
human_agent_assistant_config (25.google.cloud.dialogflow.v2.HumanAgentAssistantConfigW
human_agent_handoff_config (23.google.cloud.dialogflow.v2.HumanAgentHandoffConfigK
notification_config (2..google.cloud.dialogflow.v2.NotificationConfigA
logging_config (2).google.cloud.dialogflow.v2.LoggingConfig]
%new_message_event_notification_config (2..google.cloud.dialogflow.v2.NotificationConfigB

stt_config	 (2..google.cloud.dialogflow.v2.SpeechToTextConfig
language_code
 (	
	time_zone (	L
security_settings (	B1�A.
,dialogflow.googleapis.com/CXSecuritySettingsF

tts_config (22.google.cloud.dialogflow.v2.SynthesizeSpeechConfig:��A�
-dialogflow.googleapis.com/ConversationProfile>projects/{project}/conversationProfiles/{conversation_profile}Sprojects/{project}/locations/{location}/conversationProfiles/{conversation_profile}"�
ListConversationProfilesRequestE
parent (	B5�A�A/-dialogflow.googleapis.com/ConversationProfile
	page_size (

page_token (	"�
 ListConversationProfilesResponseN
conversation_profiles (2/.google.cloud.dialogflow.v2.ConversationProfile
next_page_token (	"d
GetConversationProfileRequestC
name (	B5�A�A/
-dialogflow.googleapis.com/ConversationProfile"�
 CreateConversationProfileRequestE
parent (	B5�A�A/-dialogflow.googleapis.com/ConversationProfileR
conversation_profile (2/.google.cloud.dialogflow.v2.ConversationProfileB�A"�
 UpdateConversationProfileRequestR
conversation_profile (2/.google.cloud.dialogflow.v2.ConversationProfileB�A4
update_mask (2.google.protobuf.FieldMaskB�A"g
 DeleteConversationProfileRequestC
name (	B5�A�A/
-dialogflow.googleapis.com/ConversationProfile"�
AutomatedAgentConfig6
agent (	B\'�A�A!
dialogflow.googleapis.com/Agent3
session_ttl (2.google.protobuf.DurationB�A"�
HumanAgentAssistantConfigK
notification_config (2..google.cloud.dialogflow.v2.NotificationConfigm
human_agent_suggestion_config (2F.google.cloud.dialogflow.v2.HumanAgentAssistantConfig.SuggestionConfigj
end_user_suggestion_config (2F.google.cloud.dialogflow.v2.HumanAgentAssistantConfig.SuggestionConfigl
message_analysis_config (2K.google.cloud.dialogflow.v2.HumanAgentAssistantConfig.MessageAnalysisConfigH
SuggestionTriggerSettings
no_smalltalk (
only_end_user (�
SuggestionFeatureConfigI
suggestion_feature (2-.google.cloud.dialogflow.v2.SuggestionFeature%
enable_event_based_suggestion ((
disable_agent_query_logging (B�A3
&enable_query_suggestion_when_no_answer (B�A0
#enable_conversation_augmented_query (B�A)
enable_query_suggestion_only (B�At
suggestion_trigger_settings
 (2O.google.cloud.dialogflow.v2.HumanAgentAssistantConfig.SuggestionTriggerSettingsa
query_config (2K.google.cloud.dialogflow.v2.HumanAgentAssistantConfig.SuggestionQueryConfigp
conversation_model_config (2M.google.cloud.dialogflow.v2.HumanAgentAssistantConfig.ConversationModelConfigt
conversation_process_config (2O.google.cloud.dialogflow.v2.HumanAgentAssistantConfig.ConversationProcessConfig�
SuggestionConfigf
feature_configs (2M.google.cloud.dialogflow.v2.HumanAgentAssistantConfig.SuggestionFeatureConfig"
group_suggestion_responses (?

generators (	B+�A�A%
#dialogflow.googleapis.com/Generator8
+disable_high_latency_features_sync_delivery (B�A�
SuggestionQueryConfig�
knowledge_base_query_source (2d.google.cloud.dialogflow.v2.HumanAgentAssistantConfig.SuggestionQueryConfig.KnowledgeBaseQuerySourceH �
document_query_source (2_.google.cloud.dialogflow.v2.HumanAgentAssistantConfig.SuggestionQueryConfig.DocumentQuerySourceH �
dialogflow_query_source (2a.google.cloud.dialogflow.v2.HumanAgentAssistantConfig.SuggestionQueryConfig.DialogflowQuerySourceH 
max_results (
confidence_threshold (�
context_filter_settings (2a.google.cloud.dialogflow.v2.HumanAgentAssistantConfig.SuggestionQueryConfig.ContextFilterSettingsk
sections (2T.google.cloud.dialogflow.v2.HumanAgentAssistantConfig.SuggestionQueryConfig.SectionsB�A
context_size	 (B�Ad
KnowledgeBaseQuerySourceH
knowledge_bases (	B/�A�A)
\'dialogflow.googleapis.com/KnowledgeBaseT
DocumentQuerySource=
	documents (	B*�A�A$
"dialogflow.googleapis.com/Document�
DialogflowQuerySource6
agent (	B\'�A�A!
dialogflow.googleapis.com/Agent�
human_agent_side_config (2v.google.cloud.dialogflow.v2.HumanAgentAssistantConfig.SuggestionQueryConfig.DialogflowQuerySource.HumanAgentSideConfigB�AN
HumanAgentSideConfig6
agent (	B\'�A�A!
dialogflow.googleapis.com/Agentv
ContextFilterSettings
drop_handoff_messages (#
drop_virtual_agent_messages (
drop_ivr_messages (�
Sectionsw
section_types (2`.google.cloud.dialogflow.v2.HumanAgentAssistantConfig.SuggestionQueryConfig.Sections.SectionType"�
SectionType
SECTION_TYPE_UNSPECIFIED 
	SITUATION

ACTION

RESOLUTION
REASON_FOR_CANCELLATION
CUSTOMER_SATISFACTION
ENTITIESB
query_sourcez
ConversationModelConfig?
model (	B0�A-
+dialogflow.googleapis.com/ConversationModel
baseline_model_version (	;
ConversationProcessConfig
recent_sentences_count (\\
MessageAnalysisConfig 
enable_entity_extraction (!
enable_sentiment_analysis ("�
HumanAgentHandoffConfigb
live_person_config (2D.google.cloud.dialogflow.v2.HumanAgentHandoffConfig.LivePersonConfigH u
salesforce_live_agent_config (2M.google.cloud.dialogflow.v2.HumanAgentHandoffConfig.SalesforceLiveAgentConfigH /
LivePersonConfig
account_number (	B�A�
SalesforceLiveAgentConfig
organization_id (	B�A
deployment_id (	B�A
	button_id (	B�A
endpoint_domain (	B�AB
agent_service"�
NotificationConfig
topic (	T
message_format (2<.google.cloud.dialogflow.v2.NotificationConfig.MessageFormat"D
MessageFormat
MESSAGE_FORMAT_UNSPECIFIED 	
PROTO
JSON"3
LoggingConfig"
enable_stackdriver_logging ("�
SuggestionFeature@
type (22.google.cloud.dialogflow.v2.SuggestionFeature.Type"z
Type
TYPE_UNSPECIFIED 
ARTICLE_SUGGESTION
FAQ
SMART_REPLY
KNOWLEDGE_SEARCH
KNOWLEDGE_ASSIST"�
!SetSuggestionFeatureConfigRequest!
conversation_profile (	B�AK
participant_role (2,.google.cloud.dialogflow.v2.Participant.RoleB�Au
suggestion_feature_config (2M.google.cloud.dialogflow.v2.HumanAgentAssistantConfig.SuggestionFeatureConfigB�A"�
#ClearSuggestionFeatureConfigRequest!
conversation_profile (	B�AK
participant_role (2,.google.cloud.dialogflow.v2.Participant.RoleB�AX
suggestion_feature_type (22.google.cloud.dialogflow.v2.SuggestionFeature.TypeB�A"�
+SetSuggestionFeatureConfigOperationMetadata
conversation_profile (	K
participant_role (2,.google.cloud.dialogflow.v2.Participant.RoleB�AX
suggestion_feature_type (22.google.cloud.dialogflow.v2.SuggestionFeature.TypeB�A/
create_time (2.google.protobuf.Timestamp"�
-ClearSuggestionFeatureConfigOperationMetadata
conversation_profile (	K
participant_role (2,.google.cloud.dialogflow.v2.Participant.RoleB�AX
suggestion_feature_type (22.google.cloud.dialogflow.v2.SuggestionFeature.TypeB�A/
create_time (2.google.protobuf.Timestamp2�
ConversationProfiles�
ListConversationProfiles;.google.cloud.dialogflow.v2.ListConversationProfilesRequest<.google.cloud.dialogflow.v2.ListConversationProfilesResponse"y�Aparent���j,/v2/{parent=projects/*}/conversationProfilesZ:8/v2/{parent=projects/*/locations/*}/conversationProfiles�
GetConversationProfile9.google.cloud.dialogflow.v2.GetConversationProfileRequest/.google.cloud.dialogflow.v2.ConversationProfile"w�Aname���j,/v2/{name=projects/*/conversationProfiles/*}Z:8/v2/{name=projects/*/locations/*/conversationProfiles/*}�
CreateConversationProfile<.google.cloud.dialogflow.v2.CreateConversationProfileRequest/.google.cloud.dialogflow.v2.ConversationProfile"��Aparent,conversation_profile����",/v2/{parent=projects/*}/conversationProfiles:conversation_profileZP"8/v2/{parent=projects/*/locations/*}/conversationProfiles:conversation_profile�
UpdateConversationProfile<.google.cloud.dialogflow.v2.UpdateConversationProfileRequest/.google.cloud.dialogflow.v2.ConversationProfile"��A conversation_profile,update_mask����2A/v2/{conversation_profile.name=projects/*/conversationProfiles/*}:conversation_profileZe2M/v2/{conversation_profile.name=projects/*/locations/*/conversationProfiles/*}:conversation_profile�
DeleteConversationProfile<.google.cloud.dialogflow.v2.DeleteConversationProfileRequest.google.protobuf.Empty"w�Aname���j*,/v2/{name=projects/*/conversationProfiles/*}Z:*8/v2/{name=projects/*/locations/*/conversationProfiles/*}�
SetSuggestionFeatureConfig=.google.cloud.dialogflow.v2.SetSuggestionFeatureConfigRequest.google.longrunning.Operation"��AB
ConversationProfile+SetSuggestionFeatureConfigOperationMetadata�Aconversation_profile�A?conversation_profile,participant_role,suggestion_feature_config����"W/v2/{conversation_profile=projects/*/conversationProfiles/*}:setSuggestionFeatureConfig:*Zh"c/v2/{conversation_profile=projects/*/locations/*/conversationProfiles/*}:setSuggestionFeatureConfig:*�
ClearSuggestionFeatureConfig?.google.cloud.dialogflow.v2.ClearSuggestionFeatureConfigRequest.google.longrunning.Operation"��AD
ConversationProfile-ClearSuggestionFeatureConfigOperationMetadata�Aconversation_profile�A=conversation_profile,participant_role,suggestion_feature_type����"Y/v2/{conversation_profile=projects/*/conversationProfiles/*}:clearSuggestionFeatureConfig:*Zj"e/v2/{conversation_profile=projects/*/locations/*/conversationProfiles/*}:clearSuggestionFeatureConfig:*x�Adialogflow.googleapis.com�AYhttps://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/dialogflowB�
com.google.cloud.dialogflow.v2BConversationProfileProtoPZ>cloud.google.com/go/dialogflow/apiv2/dialogflowpb;dialogflowpb�DF�Google.Cloud.Dialogflow.V2�A|
,dialogflow.googleapis.com/CXSecuritySettingsLprojects/{project}/locations/{location}/securitySettings/{security_settings}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

