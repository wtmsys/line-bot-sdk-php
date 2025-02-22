<?php

/**
 * Copyright 2016 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

namespace LINE\LINEBot\EchoBot;

class Setting
{
    public static function getSetting()
    {
        return [
            'settings' => [
                'displayErrorDetails' => true, // set to false in production

                'logger' => [
                    'name' => 'slim-app',
                    'path' => __DIR__ . '/../../../logs/app.log',
                ],

                'bot' => [
                    'channelToken' => getenv('LINEBOT_CHANNEL_TOKEN') ?: '04AsId89UonpiLUK6XE7OTcyoF/xBPzSW5XX6hcwQQ5Y2sQsi4aqkAmipZQsqo57Nz1+1SsKIwJ7gFba7lolrzHHS+HxnTouYZ2C3PIIbrEe+6kDIoWUlEmwoHCpUO+RLb+MIayeIXyiwB6pyO37QlGUYhWQfeY8sLGRXgo3xvw=',
                    'channelSecret' => getenv('LINEBOT_CHANNEL_SECRET') ?: '7deca787c36b8829c1ddbf966a24697e',
                ],

                'apiEndpointBase' => getenv('LINEBOT_API_ENDPOINT_BASE'),
            ],
        ];
    }
}
