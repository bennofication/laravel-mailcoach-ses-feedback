<?php

namespace Spatie\MailcoachSesFeedback\SesEvents;

use Spatie\Mailcoach\Models\CampaignSend;

class Click extends SesEvent
{
    public function canHandlePayload()
    {
        return $this->payload['notificationType'] === 'Click';
    }

    public function handle(CampaignSend $campaignSend)
    {
        $campaignSend->registerClick($this->payload['click']['link']);
    }
}