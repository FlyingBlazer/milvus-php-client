<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: feder.proto

namespace GPBMetadata;

class Feder
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Common::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
feder.protomilvus.proto.feder"9
SegmentIndexData
	segmentID (

index_data (	"A
FederSegmentSearchResult
	segmentID (

visit_info (	"t
ListIndexedSegmentRequest*
base (2.milvus.proto.common.MsgBase
collection_name (	

index_name (	"]
ListIndexedSegmentResponse+
status (2.milvus.proto.common.Status

segmentIDs ("�
DescribeSegmentIndexDataRequest*
base (2.milvus.proto.common.MsgBase
collection_name (	

index_name (	
segmentsIDs ("�
 DescribeSegmentIndexDataResponse+
status (2.milvus.proto.common.StatusW

index_data (2C.milvus.proto.feder.DescribeSegmentIndexDataResponse.IndexDataEntry7
index_params (2!.milvus.proto.common.KeyValuePairV
IndexDataEntry
key (3
value (2$.milvus.proto.feder.SegmentIndexData:8B2Z0github.com/milvus-io/milvus-proto/go-api/federpbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

