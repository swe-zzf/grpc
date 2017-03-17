<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: src/proto/grpc/testing/messages.proto

namespace Grpc\Testing;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * For reconnect interop test only.
 * Server tells client whether its reconnects are following the spec and the
 * reconnect backoffs it saw.
 * </pre>
 *
 * Protobuf type <code>grpc.testing.ReconnectInfo</code>
 */
class ReconnectInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>bool passed = 1;</code>
     */
    private $passed = false;
    /**
     * <code>repeated int32 backoff_ms = 2;</code>
     */
    private $backoff_ms;

    public function __construct() {
        \GPBMetadata\Src\Proto\Grpc\Testing\Messages::initOnce();
        parent::__construct();
    }

    /**
     * <code>bool passed = 1;</code>
     */
    public function getPassed()
    {
        return $this->passed;
    }

    /**
     * <code>bool passed = 1;</code>
     */
    public function setPassed($var)
    {
        GPBUtil::checkBool($var);
        $this->passed = $var;
    }

    /**
     * <code>repeated int32 backoff_ms = 2;</code>
     */
    public function getBackoffMs()
    {
        return $this->backoff_ms;
    }

    /**
     * <code>repeated int32 backoff_ms = 2;</code>
     */
    public function setBackoffMs(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->backoff_ms = $var;
    }

}
