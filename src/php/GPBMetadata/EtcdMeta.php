<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: etcd_meta.proto

namespace GPBMetadata;

class EtcdMeta
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Common::initOnce();
        \GPBMetadata\Schema::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
etcd_meta.protomilvus.proto.etcdschema.proto"�
	IndexInfo

index_name (	
indexID (7
index_params (2!.milvus.proto.common.KeyValuePair
deleted (
create_time ("2
FieldIndexInfo
filedID (
indexID ("�
CollectionInfo

ID (5
schema (2%.milvus.proto.schema.CollectionSchema
create_time (
partitionIDs (
partitionNames (	8
field_indexes (2!.milvus.proto.etcd.FieldIndexInfo
virtual_channel_names (	
physical_channel_names (	$
partition_created_timestamps	 (

shards_num
 (9
start_positions (2 .milvus.proto.common.KeyDataPair@
consistency_level (2%.milvus.proto.common.ConsistencyLevel1
state (2".milvus.proto.etcd.CollectionState5

properties (2!.milvus.proto.common.KeyValuePair"�
PartitionInfo
partitionID (
partitionName (	#
partition_created_timestamp (
collection_id (0
state (2!.milvus.proto.etcd.PartitionState"z
	AliasInfo

alias_name (	
collection_id (
created_time (,
state (2.milvus.proto.etcd.AliasState"�
SegmentIndexInfo
collectionID (
partitionID (
	segmentID (
fieldID (
indexID (
buildID (
enable_index (
create_time ("�
CollectionMeta

ID (5
schema (2%.milvus.proto.schema.CollectionSchema
create_time (

segmentIDs (
partition_tags (	
partitionIDs ("y
CredentialInfo
username (	
encrypted_password (	
tenant (	
is_super (
sha256_password (	*o
CollectionState
CollectionCreated 
CollectionCreating
CollectionDropping
CollectionDropped*j
PartitionState
PartitionCreated 
PartitionCreating
PartitionDropping
PartitionDropped*V

AliasState
AliasCreated 
AliasCreating
AliasDropping
AliasDroppedB3Z1github.com/milvus-io/milvus/internal/proto/etcdpbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

