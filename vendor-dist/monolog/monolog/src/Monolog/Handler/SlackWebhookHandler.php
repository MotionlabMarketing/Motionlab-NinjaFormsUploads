<?php

declare (strict_types=1);
/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace NF_FU_VENDOR\Monolog\Handler;

use NF_FU_VENDOR\Monolog\Formatter\FormatterInterface;
use NF_FU_VENDOR\Monolog\Logger;
use NF_FU_VENDOR\Monolog\Utils;
use NF_FU_VENDOR\Monolog\Handler\Slack\SlackRecord;
/**
 * Sends notifications through Slack Webhooks
 *
 * @author Haralan Dobrev <hkdobrev@gmail.com>
 * @see    https://api.slack.com/incoming-webhooks
 */
class SlackWebhookHandler extends \NF_FU_VENDOR\Monolog\Handler\AbstractProcessingHandler
{
    /**
     * Slack Webhook token
     * @var string
     */
    private $webhookUrl;
    /**
     * Instance of the SlackRecord util class preparing data for Slack API.
     * @var SlackRecord
     */
    private $slackRecord;
    /**
     * @param string      $webhookUrl             Slack Webhook URL
     * @param string|null $channel                Slack channel (encoded ID or name)
     * @param string|null $username               Name of a bot
     * @param bool        $useAttachment          Whether the message should be added to Slack as attachment (plain text otherwise)
     * @param string|null $iconEmoji              The emoji name to use (or null)
     * @param bool        $useShortAttachment     Whether the the context/extra messages added to Slack as attachments are in a short style
     * @param bool        $includeContextAndExtra Whether the attachment should include context and extra data
     * @param string|int  $level                  The minimum logging level at which this handler will be triggered
     * @param bool        $bubble                 Whether the messages that are handled can bubble up the stack or not
     * @param array       $excludeFields          Dot separated list of fields to exclude from slack message. E.g. ['context.field1', 'extra.field2']
     */
    public function __construct(string $webhookUrl, ?string $channel = null, ?string $username = null, bool $useAttachment = \true, ?string $iconEmoji = null, bool $useShortAttachment = \false, bool $includeContextAndExtra = \false, $level = \NF_FU_VENDOR\Monolog\Logger::CRITICAL, bool $bubble = \true, array $excludeFields = array())
    {
        parent::__construct($level, $bubble);
        $this->webhookUrl = $webhookUrl;
        $this->slackRecord = new \NF_FU_VENDOR\Monolog\Handler\Slack\SlackRecord($channel, $username, $useAttachment, $iconEmoji, $useShortAttachment, $includeContextAndExtra, $excludeFields);
    }
    public function getSlackRecord() : \NF_FU_VENDOR\Monolog\Handler\Slack\SlackRecord
    {
        return $this->slackRecord;
    }
    public function getWebhookUrl() : string
    {
        return $this->webhookUrl;
    }
    /**
     * {@inheritdoc}
     *
     * @param array $record
     */
    protected function write(array $record) : void
    {
        $postData = $this->slackRecord->getSlackData($record);
        $postString = \NF_FU_VENDOR\Monolog\Utils::jsonEncode($postData);
        $ch = \curl_init();
        $options = array(\CURLOPT_URL => $this->webhookUrl, \CURLOPT_POST => \true, \CURLOPT_RETURNTRANSFER => \true, \CURLOPT_HTTPHEADER => array('Content-type: application/json'), \CURLOPT_POSTFIELDS => $postString);
        if (\defined('CURLOPT_SAFE_UPLOAD')) {
            $options[\CURLOPT_SAFE_UPLOAD] = \true;
        }
        \curl_setopt_array($ch, $options);
        \NF_FU_VENDOR\Monolog\Handler\Curl\Util::execute($ch);
    }
    public function setFormatter(\NF_FU_VENDOR\Monolog\Formatter\FormatterInterface $formatter) : \NF_FU_VENDOR\Monolog\Handler\HandlerInterface
    {
        parent::setFormatter($formatter);
        $this->slackRecord->setFormatter($formatter);
        return $this;
    }
    public function getFormatter() : \NF_FU_VENDOR\Monolog\Formatter\FormatterInterface
    {
        $formatter = parent::getFormatter();
        $this->slackRecord->setFormatter($formatter);
        return $formatter;
    }
}
