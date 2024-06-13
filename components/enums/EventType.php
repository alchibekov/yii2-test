<?php

namespace Components\Enums;

use MyCLabs\Enum\Enum;

class EventType extends Enum
{
    private const EVENT_CREATED_TASK = 'created_task';
    private const EVENT_UPDATED_TASK = 'updated_task';
    private const EVENT_COMPLETED_TASK = 'completed_task';

    private const EVENT_INCOMING_SMS = 'incoming_sms';
    private const EVENT_OUTGOING_SMS = 'outgoing_sms';

    private const EVENT_INCOMING_CALL = 'incoming_call';
    private const EVENT_OUTGOING_CALL = 'outgoing_call';

    private const EVENT_INCOMING_FAX = 'incoming_fax';
    private const EVENT_OUTGOING_FAX = 'outgoing_fax';

    private const EVENT_CUSTOMER_CHANGE_TYPE = 'customer_change_type';
    private const EVENT_CUSTOMER_CHANGE_QUALITY = 'customer_change_quality';

    private $eventText = [
      self::EVENT_CREATED_TASK => 'Task created',
      self::EVENT_UPDATED_TASK => 'Task updated',
      self::EVENT_COMPLETED_TASK => 'Task completed',
      self::EVENT_INCOMING_SMS => 'Incoming message',
      self::EVENT_OUTGOING_SMS => 'Outgoing message',
      self::EVENT_CUSTOMER_CHANGE_TYPE => 'Type changed',
      self::EVENT_CUSTOMER_CHANGE_QUALITY => 'Property changed',
      self::EVENT_OUTGOING_CALL => 'Outgoing call',
      self::EVENT_INCOMING_CALL => 'Incoming call',
      self::EVENT_INCOMING_FAX => 'Incoming fax',
      self::EVENT_OUTGOING_FAX => 'Outgoing fax',
    ];
    public function     getEventText()
    {

    }
}