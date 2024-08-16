<?php

namespace Tbmatuka\WebsocketNotifyBundle\Service;

class WebsocketNotifyService implements WebsocketNotifyInterface
{
    public function __construct(
        private string $serverUrl = '',
        private string $secret = '')
    {
    }

    public function setServerUrl(string $serverUrl): void
    {
        $this->serverUrl = $serverUrl;
    }

    public function getServerUrl(): string
    {
        return $this->serverUrl;
    }

    public function setSecret(string $secret): void
    {
        $this->secret = $secret;
    }

    public function getSecret(): string
    {
        return $this->secret;
    }

    public function sendEvent(string $name, array $tags, string $data): void
    {
        $filteredTags = [];

        foreach ($tags as $tag) {
            $trimmedTag = trim((string) $tag);
            if ($trimmedTag !== '') {
                $filteredTags[] = $trimmedTag;
            }
        }

        $path = '/event';
        $method = 'POST';
        $body = json_encode([
            'name' => $name,
            'tags' => $filteredTags,
            'data' => $data,
        ], JSON_THROW_ON_ERROR);
    }

    public function status(): array
    {
        $path = '/status';
        $method = 'GET';
    }

    private function apiRequest(): ?string
    {
        // set server URL

        // set secret header

        // make http request

        // log for profiler

        return null;
    }
}
