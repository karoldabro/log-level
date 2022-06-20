<?php

namespace Kdabrow\LogLevel;

/**
 * Values and description taken from https://datatracker.ietf.org/doc/html/rfc5424
 */
enum Level: int
{
    /**
     * System is unusable
     */
    CASE EMERGENCY = 0;
    /**
     * action must be taken immediately
     */
    CASE ALERT = 1;
    /**
     * critical conditions
     */
    CASE CRITICAL = 2;
    /**
     * error conditions
     */
    CASE ERROR = 3;
    /**
     * warning conditions
     */
    CASE WARNING = 4;
    /**
     * normal but significant condition
     */
    CASE NOTICE = 5;
    /**
     * informational messages
     */
    CASE INFORMATIONAL = 6;
    /**
     * debug-level messages
     */
    CASE DEBUG = 7;
}