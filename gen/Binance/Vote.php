<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dex.proto

namespace Binance;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * please note the field name is the JSON name.
 * msg
 *
 * Generated from protobuf message <code>Binance.Vote</code>
 */
class Vote extends \Google\Protobuf\Internal\Message
{
    /**
     *    0xA1CADD36	    // hardcoded, object type prefix in 4 bytes
     *
     * Generated from protobuf field <code>int64 proposal_id = 1;</code>
     */
    protected $proposal_id = 0;
    /**
     * address of the voter
     *
     * Generated from protobuf field <code>bytes voter = 2;</code>
     */
    protected $voter = '';
    /**
     * option from OptionSet chosen by the voter,
     *
     * Generated from protobuf field <code>int64 option = 3;</code>
     */
    protected $option = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $proposal_id
     *              0xA1CADD36	    // hardcoded, object type prefix in 4 bytes
     *     @type string $voter
     *           address of the voter
     *     @type int|string $option
     *           option from OptionSet chosen by the voter,
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Dex::initOnce();
        parent::__construct($data);
    }

    /**
     *    0xA1CADD36	    // hardcoded, object type prefix in 4 bytes
     *
     * Generated from protobuf field <code>int64 proposal_id = 1;</code>
     * @return int|string
     */
    public function getProposalId()
    {
        return $this->proposal_id;
    }

    /**
     *    0xA1CADD36	    // hardcoded, object type prefix in 4 bytes
     *
     * Generated from protobuf field <code>int64 proposal_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setProposalId($var)
    {
        GPBUtil::checkInt64($var);
        $this->proposal_id = $var;

        return $this;
    }

    /**
     * address of the voter
     *
     * Generated from protobuf field <code>bytes voter = 2;</code>
     * @return string
     */
    public function getVoter()
    {
        return $this->voter;
    }

    /**
     * address of the voter
     *
     * Generated from protobuf field <code>bytes voter = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setVoter($var)
    {
        GPBUtil::checkString($var, False);
        $this->voter = $var;

        return $this;
    }

    /**
     * option from OptionSet chosen by the voter,
     *
     * Generated from protobuf field <code>int64 option = 3;</code>
     * @return int|string
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * option from OptionSet chosen by the voter,
     *
     * Generated from protobuf field <code>int64 option = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOption($var)
    {
        GPBUtil::checkInt64($var);
        $this->option = $var;

        return $this;
    }

}
