<?php

namespace Fakell\BotMessenger\Types;

interface ActionType {

    /**
     * Mark last message as read
     */
    const MARK_SEEN = 'mark_seen';

    /**
     * Turn typing indicators on
     */
    const TYPING_ON = 'typing_on';

    /**
     * Turn typing indicators off
     */
    const TYPING_OFF = 'typing_off';

}
