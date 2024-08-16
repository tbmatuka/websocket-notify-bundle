<?php

namespace Tbmatuka\WebsocketNotifyBundle\Service;

interface WebsocketNotifyInterface
{
    public function __construct(string $serverUrl = '', string $secret = '');

    public function setServerUrl(string $serverUrl): void;

    public function getServerUrl(): string;

    public function setSecret(string $secret): void;

    public function getSecret(): string;

    /**
     * @param string[] $tags
     */
    public function sendEvent(string $name, array $tags, string $data): void;

    public function status(): array;
}
