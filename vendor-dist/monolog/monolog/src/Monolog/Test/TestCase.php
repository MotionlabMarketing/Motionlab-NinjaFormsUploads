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
namespace NF_FU_VENDOR\Monolog\Test;

use NF_FU_VENDOR\Monolog\Logger;
use NF_FU_VENDOR\Monolog\DateTimeImmutable;
use NF_FU_VENDOR\Monolog\Formatter\FormatterInterface;
/**
 * Lets you easily generate log records and a dummy formatter for testing purposes
 * *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
class TestCase extends \NF_FU_VENDOR\PHPUnit\Framework\TestCase
{
    /**
     * @return array Record
     */
    protected function getRecord($level = \NF_FU_VENDOR\Monolog\Logger::WARNING, $message = 'test', array $context = []) : array
    {
        return ['message' => (string) $message, 'context' => $context, 'level' => $level, 'level_name' => \NF_FU_VENDOR\Monolog\Logger::getLevelName($level), 'channel' => 'test', 'datetime' => new \NF_FU_VENDOR\Monolog\DateTimeImmutable(\true), 'extra' => []];
    }
    protected function getMultipleRecords() : array
    {
        return [$this->getRecord(\NF_FU_VENDOR\Monolog\Logger::DEBUG, 'debug message 1'), $this->getRecord(\NF_FU_VENDOR\Monolog\Logger::DEBUG, 'debug message 2'), $this->getRecord(\NF_FU_VENDOR\Monolog\Logger::INFO, 'information'), $this->getRecord(\NF_FU_VENDOR\Monolog\Logger::WARNING, 'warning'), $this->getRecord(\NF_FU_VENDOR\Monolog\Logger::ERROR, 'error')];
    }
    /**
     * @suppress PhanTypeMismatchReturn
     */
    protected function getIdentityFormatter() : \NF_FU_VENDOR\Monolog\Formatter\FormatterInterface
    {
        $formatter = $this->createMock(\NF_FU_VENDOR\Monolog\Formatter\FormatterInterface::class);
        $formatter->expects($this->any())->method('format')->will($this->returnCallback(function ($record) {
            return $record['message'];
        }));
        return $formatter;
    }
}
